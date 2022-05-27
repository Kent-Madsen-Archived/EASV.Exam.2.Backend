<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace App\Http\Controllers\http;

    use App\Http\Controllers\templates\ControllerPipeline;
    use Illuminate\Http\Request;
    use OpenApi\Attributes as OA;


    /**
     * 
     */
    final class ProjectController
        extends ControllerPipeline
    {
        /**
         * 
         */
        public final function __construct()
        {
            parent::__construct();

        }

        private $projectMemberController = null;
        private $projectTitleModel = null;
        
        
        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function create( Request $request )
        {
            
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function read( Request $request )
        {
            
        }

        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function update( Request $request )
        {
            
        }


        /**
         * 
         */
        #[OA\Get(path: '/api/data.json')]
        #[OA\Response(response: '200', description: 'The data')]
        public final function delete( Request $request )
        {
            
        }
    }
?>