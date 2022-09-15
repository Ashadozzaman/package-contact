<?php
namespace Ashadozzaman\Contact;
use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends ServiceProvider{

    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/route/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/contact.php','contact');

        //publisher use for public something in main project
        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/views' => resource_path('views/vendor/contact')
        ]);
    }

    public function register()
    {
        
    }

}
?>