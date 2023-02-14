<?php

namespace Deinte\LaravelFactuurSturenApi;

use Illuminate\Support\Facades\Http;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Deinte\LaravelFactuurSturenApi\Commands\LaravelFactuurSturenApiCommand;
use Deinte\LaravelFactuurSturenApi\Facades\FactuurSturenApi as FactuurSturenApiFacade;

class LaravelFactuurSturenApiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-factuursturen-api')
            ->hasConfigFile('factuursturen');
    }

    public function packageRegistered()
    {
        $this->app->singleton(FactuurSturenApi::class, function ($app) {
            $token = base64_encode(config('factuursturen.username') . ":" . config('factuursturen.api_token'));

            $httpClient = Http::withToken($token, 'Basic')
                ->baseUrl(rtrim(config('factuursturen.base_url'), '/'))
                ->acceptJson();

            return new FactuurSturenApi($httpClient);
        });

        $this->app->bind(FactuurSturenApiFacade::class, FactuurSturenApi::class);
    }
}
