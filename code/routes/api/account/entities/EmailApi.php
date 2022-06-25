<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
          Serves the routes for the email api. so the client can interact with their associated
          email models though the email controller. It's a boundried api so the user can only
          interact with his / her own data and view it 'specifically'. 
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
    */
    // External libraries
	use Illuminate\Support\Facades\Route;
	
	// Internal libraries
	use App\Http\Controllers\schemas\account\entities\email\PersonEmailController;
	use App\Routes\Controllers\RouteController;


/**
     *
     */
    class EmailApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
            $this->setSecurityMiddleware( SanctumMiddleware );
        }

        private const route  = 'email';

        private const route_read   = ACTION_READ;
        private const route_create = ACTION_CREATE;
        private const route_update = ACTION_UPDATE;
        private const route_delete = ACTION_DELETE;


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( PersonEmailController::class )->group
            (
                function(): void
                {
                    Route::get( self::route_read, 'public_read' );
                    Route::post( self::route_create, 'public_create' );
                    Route::patch( self::route_update, 'public_update' );
                    Route::delete( self::route_delete, 'public_delete' );
                }
            );
        }
    }

    /**
     * @return void
     */
    function MakeEmailApi(): void
    {
        $router = new EmailApi();
        $router->run();
    }
?>
