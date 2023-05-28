<?php

declare(strict_types=1);

namespace test\NixCommunity\ComposerLocalRepoPlugin\DataProvider\Command;

use Generator;
use test\NixCommunity\ComposerLocalRepoPlugin\Util\CommandInvocation;

final class BuildLocalRepoProvider
{
    /**
     * @return Generator<string, array{0: CommandInvocation}>
     */
    public function commandInvocation(): Generator
    {
        foreach (self::commandInvocations() as $commandInvocation) {
            yield $commandInvocation->style() => [
                $commandInvocation,
            ];
        }
    }

    /**
     * @return Generator<string, array{0: CommandInvocation}>
     */
    public static function simpleCommandInvocation(): Generator
    {
        foreach (self::commandInvocations() as $commandInvocation) {
            yield $commandInvocation->style() => [
                $commandInvocation,
            ];
        }
    }

    /**
     * @return array<int, CommandInvocation>
     */
    private static function commandInvocations(): array
    {
        return [
            CommandInvocation::usingWorkingDirectoryOption(),
        ];
    }
}
