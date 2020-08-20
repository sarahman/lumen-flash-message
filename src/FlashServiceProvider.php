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
        $this->app->bind('Illuminate\Session\Store', 'session.store');
        $this->app->bind('Laracasts\Flash\SessionStore', 'Laracasts\Flash\LaravelSessionStore');

        $this->app->singleton('Illuminate\Session\SessionManager', function () {
            if (method_exists($this->app, 'configure')) {
                call_user_func(array($this->app, 'configure'), 'session');
            }

            $this->app->register('Illuminate\Session\SessionServiceProvider');

            return $this->app->make('session');
        });

        $this->app->singleton('flash', function () {
            return $this->app->make('Laracasts\Flash\FlashNotifier', [
                $this->app->make('Laracasts\Flash\SessionStore', [$this->app->request->session()])
            ]);
        });
    }
}
