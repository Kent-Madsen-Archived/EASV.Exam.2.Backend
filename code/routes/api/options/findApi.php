<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    use Illuminate\Support\Facades\Route;

    use App\Http\Controllers\httpControllers\options\FindController;

    const findRoute = '/' . CURRENT_VERSION . '/find';


    Route::controller( FindController::class )->group
    (
        function()
        {
            Route::post(findRoute, 'publicFind' );
        }
    );
?>