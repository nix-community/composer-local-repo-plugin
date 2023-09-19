<?php

declare(strict_types=1);

namespace test\NixCommunity\ComposerLocalRepoPlugin\Util;

final class CommandInvocation
{

    /**
     * @var string
     */
    private $style;

    private function __construct(string $style = '') {
        $this->style = $style;
    }

    public static function inCurrentWorkingDirectory(): self
    {
        return new self('in-current-working-directory');
    }

    public function is(self $other): bool
    {
        return $this->style === $other->style;
    }

    public function style(): string
    {
        return $this->style;
    }

    public static function usingFileArgument(): self
    {
        return new self('using-file-argument');
    }

    public static function usingWorkingDirectoryOption(): self
    {
        return new self('using-working-directory-option');
    }
}
