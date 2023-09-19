<?php

declare(strict_types=1);

namespace test\NixCommunity\ComposerLocalRepoPlugin\Util;

final class Directory
{
    /**
     * @var bool
     */
    private $exists;

    /**
     * @var string
     */
    private $path;

    private function __construct(string $path = '')
    {
        $this->path = $path;
        $this->exists = file_exists($path) && is_dir($path);
    }

    public function exists(): bool
    {
        return $this->exists;
    }

    public static function fromPath(string $path): self
    {
        return new self($path);
    }

    public function path(): string
    {
        return $this->path;
    }
}
