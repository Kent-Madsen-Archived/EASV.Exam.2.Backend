<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */

    // External libraries
    use Illuminate\Support\Facades\Route;

    // Internal libraries
    use App\Http\Controllers\httpControllers\tools\BoardController;
    use App\Http\Controllers\RouteController;


    /**
     *
     */
    class BoardApi
        extends RouteController
    {
        /**
         *
         */
        public function __construct()
        {
            $this->setRoute( self::route );
        }

        //
        private const route       = 'board';

        private const create_route = 'create';
        private const delete_route = 'delete';
        private const read_route   = 'read';
        private const update_route = 'update';


        /**
         * @return void
         */
        protected final function execute(): void
        {
            Route::controller( BoardController::class )->group
            (
                function(): void
                {
                    Route::post( self::create_route, 'create' );
                    Route::delete( self::delete_route, 'delete' );
                    Route::get( self::read_route, 'read' );
                    Route::patch( self::update_route, 'update' );
                }
            );
        }
    }


    /**
     * @return void
     */
    function MakeBoardApi(): void
    {
        $api = new BoardApi();
        $api->run();
    }
?>