<?php

namespace Laraxot\PanelModules\Commands;

use Illuminate\Console\Command;

class PanelModulesCommand extends Command
{
    public $signature = 'panel-modules';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
