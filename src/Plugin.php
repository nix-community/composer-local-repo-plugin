<?php

declare(strict_types=1);

namespace NixCommunity\ComposerLocalRepoPlugin;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;
use NixCommunity\ComposerLocalRepoPlugin\Command\BuildLocalRepo;

final class Plugin implements PluginInterface, Capable, CommandProvider
{
    public function activate(Composer $composer, IOInterface $io): void {}

    public function deactivate(Composer $composer, IOInterface $io): void {}

    public function getCapabilities(): array
    {
        return [
            'Composer\Plugin\Capability\CommandProvider' => self::class,
        ];
    }

    public function getCommands(): array
    {
        return [
            new BuildLocalRepo(),
        ];
    }

    public function uninstall(Composer $composer, IOInterface $io) {}
}
