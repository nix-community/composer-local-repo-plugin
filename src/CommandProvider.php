<?php

declare(strict_types=1);

namespace loophp\ComposerLocalRepoPlugin;

use Composer\Plugin\Capability\CommandProvider as CapabilityCommandProvider;
use loophp\ComposerLocalRepoPlugin\Command\BuildLocalRepo;

final class CommandProvider implements CapabilityCommandProvider
{
    public function getCommands(): array
    {
        return [
            new BuildLocalRepo(),
        ];
    }
}
