<?php

namespace VendorName\Skeleton;

use Iamdadmin\Yaeslpt\Package;
use Iamdadmin\Yaeslpt\PackageServiceProvider;
use VendorName\Skeleton\Commands\SkeletonCommand;

class SkeletonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/iamdadmin/yaespsl
         */
        $package
            ->name('skeleton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_migration_table_name_table')
            ->hasCommand(SkeletonCommand::class);
    }
}
