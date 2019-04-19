<?php

namespace Sarahman\Flash;

class FlashServiceProvider extends \Laracasts\Flash\FlashServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Laracasts\Flash\SessionStore', 'Laracasts\Flash\LaravelSessionStore');

        $this->app->singleton('flash', function () {
            return $this->app->make('Laracasts\Flash\FlashNotifier', [
                $this->app->make('Laracasts\Flash\SessionStore', [$this->app['request']->session()])
            ]);
        });
    }
}
