<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Telescope\Contracts\ClearableRepository;
use Laravel\Telescope\Contracts\EntriesRepository;

class ClearTelescopeData extends Command
{
    protected $signature = 'telescope:clear';
    protected $description = 'Clear all Telescope data';

    public function handle(EntriesRepository $entriesRepository)
    {
        if ($entriesRepository instanceof ClearableRepository) {
            $entriesRepository->clear();
            $this->info('Telescope data cleared successfully.');
        } else {
            $this->error('The Telescope entries repository does not support clearing.');
        }
    }
}