<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http;

    use App\Http\Controllers\factories\AccountEmailFactoryController;
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Models\tables\AccountEmailModel;
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use OpenApi\Attributes as OA;


    // Code
    /**
     * Account Email controller. That are used when getting "ask" by a computer for data.
     *
     */
    final class AccountEmailController
        extends ControllerPipeline
    {
        /**
         * 
         */
        public final function __construct()
        {
            parent::__construct();

        }

        // Code
        /**
         * Pipeline function:
         * @param Request $request
         * @return AccountEmailModel|null
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function read( Request $request ): ?AccountEmailModel
        {
            abort( 300 );
        }






        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public function delete( Request $request ): bool
        {

            return false;
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request ): ?AccountEmailModel
        {

            // Not found
            abort( 300 );
        }



        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $request ): ?AccountEmailModel
        {
            // Not found
            abort( 300 );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/find/email' )]
        #[OA\Response( response: '200', description: 'retrieves an requested email object as a json response. if it exist else nothing' )]
        public final function find( Request $request ): JsonResponse
        {

            return Response()->json();
        }


        /**
         * @param Request $request
         * @return \Illuminate\Http\JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/exist/email' )]
        #[OA\Response( response: '200', description: 'validates if the requested email is existing in the database as a json response.' ) ]
        public final function exist( Request $request ): JsonResponse
        {


            return response()->json();
        }
    }


?>