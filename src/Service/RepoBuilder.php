<?php

declare(strict_types=1);

namespace loophp\ComposerLocalRepoPlugin\Service;

use Composer\Composer;
use Composer\Package\Loader\ArrayLoader;
use Composer\Util\SyncHelper;

final class RepoBuilder extends LocalBuilder
{
    public function build(Composer $composer, string $destinationDir, bool $includeDevDeps = true): void
    {
        $loop = $composer->getLoop();
        $loader = new ArrayLoader(null, true);
        $downloadManager = $composer->getDownloadManager();

        foreach ($this->iterLockedPackages($composer->getLocker(), $includeDevDeps) as $packageInfo) {
            SyncHelper::downloadAndInstallPackageSync(
                $loop,
                $downloadManager,
                sprintf('%s/%s/%s', $destinationDir, $packageInfo['name'], $packageInfo['version']),
                $loader->load($packageInfo)
            );
        }
    }
}
