<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\account;

    // External Libraries
    use Carbon\Carbon;

    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Str;

    use OpenApi\Attributes
        as OA;

    // internal Libraries
    use App\Http\Controllers\templates\ControllerPipeline;
    use App\Http\Requests\account\NewsletterRequest;
    use App\Models\tables\NewsletterSubscriptionModel;


    #[OA\Schema()]
    class NewsletterController
        extends ControllerPipeline
    {
        /**
         * @param bool $makeSingleton
         */
        public function __construct( bool $makeSingleton = false )
        {
            parent::__construct();

            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }


        // Variables
        private const conflict = 409;

        // implement output
        public final function hasImplementedCSV(): bool
        {
            // TODO: Implement hasImplementedCSV() method.
            return true;
        }

        public final function hasImplementedJSON(): bool
        {
            // TODO: Implement hasImplementedJSON() method.
            return true;
        }

        public final function hasImplementedXML(): bool
        {
            // TODO: Implement hasImplementedXML() method.
            return true;
        }

        public final function pipelineTowardCSV( Request $request ): ?array
        {
            // TODO: Implement pipelineTowardCSV() method.
            return null;
        }

        public final function pipelineTowardJSON( Request $request ): ?JsonResponse
        {
            // TODO: Implement pipelineTowardJSON() method.
            return null;
        }

        public final function pipelineTowardXML( Request $request ): ?array
        {
            // TODO: Implement pipelineTowardXML() method.
            return null;
        }

        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Get( path: '/api/1.0.0/accounts/newsletter/read' )]
        #[OA\Response(response: '200', description: 'The data')]
        #[OA\Response(response: '404', description: 'content not found')]
        public final function read( Request $request ): JsonResponse
        {

            return Response()->json();
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/accounts/newsletter/create')]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function create( Request $request )
        {

            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/newsletter/update' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function update( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/newsletter/delete' )]
        #[OA\Response( response: '200',
                       description: 'The data' )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function delete( Request $request ): JsonResponse
        {

            return Response()->json(null, 200);
        }

        private static $controller = null;

        public static final function setSingleton( NewsletterController $controller )
        {
            self::$controller = $controller;
        }

        public static final function getSingleton(): NewsletterController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton( new NewsletterController() );
            }

            return self::$controller;
        }

    }
?>