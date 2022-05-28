<?php

namespace Quarterloop\DNSTile;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Quarterloop\DNSTile\Commands\FetchDNSCommand;

class DNSTileServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FetchDNSCommand::class,
            ]);
        }

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/dashboard-dns-tile'),
        ], 'dashboard-dns-views');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'dashboard-dns-tile');

        Livewire::component('dns-tile', DNSTileComponent::class);
    }
}
