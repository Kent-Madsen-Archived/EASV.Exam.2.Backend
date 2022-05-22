<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\security;

    use App\Http\Controllers\OA;
    use App\Http\Controllers\templates\CrudController;
    use Illuminate\Http\Request;


    /**
     *
     */
    class SecurityConfigurationController
        extends CrudController
    {
        //
        public function __construct()
        {

        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function read(Request $request)
        {
            // TODO: Implement read() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create(Request $request)
        {
            // TODO: Implement create() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update(Request $request)
        {
            // TODO: Implement update() method.
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete(Request $request)
        {
            // TODO: Implement delete() method.
        }
    }
?>