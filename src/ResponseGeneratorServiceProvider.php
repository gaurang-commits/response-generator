<?php
    namespace Gaurang\ResponseGenerator;

    use Gaurang\ResponseGenerator\Service\ResponseService;
    use Illuminate\Support\ServiceProvider;

    class ResponseGeneratorServiceProvider extends ServiceProvider {
        
        public function boot()
        {
           
        }
        public function register()
        {
            $this->app->bind('ResponseService', function ($app) {
                return new ResponseService();
            });
        }
    }
    ?>