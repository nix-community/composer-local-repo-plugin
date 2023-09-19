<?php

declare(strict_types=1);

namespace test\NixCommunity\ComposerLocalRepoPlugin\Util;

final class State
{
    private $directory;
    private $composerJsonFile;
    private $composerLockFile;

    private function __construct(
        Directory $directory,
        File $composerJsonFile,
        File $composerLockFile
    ) {
        $this->directory = $directory;
        $this->composerJsonFile = $composerJsonFile;
        $this->composerLockFile = $composerLockFile;
    }

    public function composerJsonFile(): File
    {
        return $this->composerJsonFile;
    }

    public function composerLockFile(): File
    {
        return $this->composerLockFile;
    }

    public function directory(): Directory
    {
        return $this->directory;
    }

    public static function fromDirectory(Directory $directory): self
    {
        return new self(
            $directory,
            File::fromPath(sprintf(
                '%s/composer.json',
                $directory->path()
            )),
            File::fromPath(sprintf(
                '%s/composer.lock',
                $directory->path()
            ))
        );
    }
}
