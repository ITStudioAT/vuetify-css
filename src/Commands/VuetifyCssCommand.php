<?php

namespace Itstudioat\VuetifyCss\Commands;

use Illuminate\Console\Command;

class VuetifyCssCommand extends Command
{
    public $signature = 'vuetify-css';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
