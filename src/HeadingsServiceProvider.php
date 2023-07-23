<?php

namespace Awcodes\Headings;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HeadingsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'headings';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('headings', __DIR__ . '/../resources/dist/headings.css')->loadedOnRequest(),
        ], 'awcodes/headings');
    }
}
