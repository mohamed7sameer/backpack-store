<?php

namespace mohamed7sameer\Product\Commands;

use Illuminate\Console\Command;

class ProductCommand extends Command
{
    public $signature = 'products-for-backpack';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
