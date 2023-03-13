<?php

namespace Andcarpi\NsacL5Models\Commands;

use Illuminate\Console\Command;

class NsacL5ModelsCommand extends Command
{
    public $signature = 'nsac-l5-models';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
