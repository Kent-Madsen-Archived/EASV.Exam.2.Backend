<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\httpControllers\tools;

    // External
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal
    use App\Http\Controllers\templates\ControllerPipeline;


    class TaskController
        extends ControllerPipeline
    {
        /**
         * @param bool $makeSingleton
         */
        public final function __construct( bool $makeSingleton = false )
        {
            parent::__construct();

            if( $makeSingleton )
            {
                self::setSingleton( $this );
            }
        }

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

        public final function pipelineTowardJSON( Request $request ): ?array
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
         * 
         */
        #[OA\Post(path: '/api/1.0.0/tools/task/create')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }
        

        /**
         * 
         */
        #[OA\Get(path: '/api/1.0.0/tools/task/read')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function read( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }
        

        /**
         * 
         */
        #[OA\Patch( path: '/api/1.0.0/tools/task/update' )]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $request ): JsonResponse
        {


            return Response()->json(null, 200);
        }


        /**
         * @param Request $request
         * @return void
         */
        #[OA\Delete(path: '/api/1.0.0/tools/task/delete')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete( Request $request ): JsonResponse
        {
            return Response()->json(null, 200);
        }

        private static $controller = null;

        public static final function setSingleton( TaskController $controller )
        {
            self::$controller = $controller;
        }

        public static final function getSingleton(): TaskController
        {
            if(is_null(self::$controller))
            {
                self::setSingleton(new TaskController());
            }

            return self::$controller;
        }
    }
?>