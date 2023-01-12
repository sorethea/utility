<?php

namespace Modules\Utility\Providers;

use Filament\PluginServiceProvider;
use Modules\Utility\Filament\Resources\UserResource;
use Spatie\LaravelPackageTools\Package;
use Modules\Utility\Filament\Pages\UtilityPage;

class ResourceServiceProvider extends PluginServiceProvider
{
    protected array $pages = [
        UtilityPage::class,

    ];
    protected array $resources =[
        UserResource::class,
    ];
    public function configurePackage(Package $package): void
    {
        $package->name("laravel-modules");
    }
}
