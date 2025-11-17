<?php

namespace Rishabh\ModuleMaker\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class InstallCommand extends Command
{
    protected $signature = 'install:rishabh';

    protected $description = 'Create module folder structure automatically';

    public function handle()
    {
        $modulePath = base_path('packages/Webkul/User');

        $folders = [
            'src',
            'src/Models',
            'src/Controllers',
            'database',
            'database/migrations',
            'routes',
            'config'
        ];

        foreach ($folders as $folder) {
            File::ensureDirectoryExists($modulePath . '/' . $folder);
        }

        $this->info('Rishabh Module structure created successfully!');
    }
}
