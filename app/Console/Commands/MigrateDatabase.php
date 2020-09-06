<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MigrateDatabase extends Command
{
    protected $signature = 'load_db';

    public function handle()
    {
        $target = app_path('/../storage/northwind.sqlite');
        if (file_exists($target)) {
            return;
        }
        $sources = [
            app_path('/../modules/northwind/Northwind_large.sqlite'),
            app_path('/../modules/northwind/Northwind_small.sqlite')
        ];
        foreach ($sources as $source) {
            $this->migrateSource($target, $source);
        }
        if (!file_exists($target)) {
            throw new \Exception('Cannot find database source ' . $source);
        }
    }

    private function migrateSource($target, $source)
    {
        if (!file_exists($target)) {
            if (file_exists($source)) {
                \File::copy($source, $target);
            }
        }
    }
}