<?php

declare(strict_types=1);

namespace loophp\ComposerLocalRepoPlugin\Service;

use Composer\Composer;
use Composer\Downloader\DownloadManager;
use Composer\Package\Loader\ArrayLoader;
use Composer\Package\Locker;
use Composer\Package\PackageInterface;
use Composer\Util\Loop;
use Exception;
use Generator;
use React\Promise\PromiseInterface;

final class RepoBuilder
{
    public function build(Composer $composer, string $destination, bool $includeDevDeps = true): void
    {
        $loop = $composer->getLoop();
        $locker = $composer->getLocker();
        $loader = new ArrayLoader(null, true);
        $downloadManager = $composer->getDownloadManager();

        foreach ($this->iterLockedPackages($locker, $includeDevDeps) as $packageInfo) {
            $this->downloadAndInstallPackageSync(
                $loop,
                $downloadManager,
                sprintf('%s/%s/%s', $destination, $packageInfo['name'], $packageInfo['version']),
                $loader->load($packageInfo)
            );
        }
    }

    private function await(Loop $loop, ?PromiseInterface $promise = null): void
    {
        if (null !== $promise) {
            $loop->wait([$promise]);
        }
    }

    /**
     * Shamelessly copied from https://github.com/composer/composer/blob/52f6f74b7c342f7b90be9c1a87e183092e8ab452/src/Composer/Util/SyncHelper.php.
     *
     * Uses the `DownloaderManager` instead of a `Downloader` to download and install a package.
     */
    private function downloadAndInstallPackageSync(Loop $loop, DownloadManager $downloadManager, string $path, PackageInterface $package, ?PackageInterface $prevPackage = null): void
    {
        $type = null !== $prevPackage ? 'update' : 'install';

        try {
            $this->await($loop, $downloadManager->download($package, $path, $prevPackage));

            $this->await($loop, $downloadManager->prepare($type, $package, $path, $prevPackage));

            if ('update' === $type && null !== $prevPackage) {
                $this->await($loop, $downloadManager->update($package, $prevPackage, $path));
            } else {
                $this->await($loop, $downloadManager->install($package, $path));
            }
        } catch (Exception $e) {
            $this->await($loop, $downloadManager->cleanup($type, $package, $path, $prevPackage));

            throw $e;
        }

        $this->await($loop, $downloadManager->cleanup($type, $package, $path, $prevPackage));
    }

    /**
     * @return Generator<int, array<string, mixed>>
     */
    private function iterLockedPackages(Locker $locker, bool $includeDevDeps = true): Generator
    {
        $data = $locker->getLockData();

        $packages = $data['packages'] ?? [];
        ksort($packages);

        foreach ($packages as $packageInfo) {
            ksort($packageInfo);

            yield $packageInfo;
        }

        $devPackages = $data['packages-dev'] ?? [];
        ksort($devPackages);

        if (true === $includeDevDeps) {
            foreach ($devPackages as $packageInfo) {
                ksort($packageInfo);

                yield $packageInfo;
            }
        }
    }
}
