<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Http\Controllers\schemas\account\account;

    // External Libraries
    use Illuminate\Http\JsonResponse;
    use Illuminate\Http\Request;

    use OpenApi\Attributes
        as OA;

    // Internal Libraries
        // Request to the controller : http
    use App\Http\Requests\account\account\AccountRequest
        as ControllerRequest;

    //
    use App\Http\Controllers\schemas\account\account\packages\AccountBuilder
        as Builder;

    use App\Http\Controllers\schemas\account\account\packages\AccountStates
        as States;

    use App\Http\Controllers\schemas\account\account\packages\AccountGC
        as GC;


    //
    use App\Http\Controllers\schemas\account\account\packages\format\AccountResponseFormat
        as ControllerResponseFormat;

    use App\Http\Controllers\schemas\account\account\packages\format\AccountResponseJSON
        as ControllerJsonResponse;

    use App\Http\Controllers\schemas\account\account\packages\format\AccountResponseCSV
        as ControllerCSVResponse;

    use App\Http\Controllers\schemas\account\account\packages\format\AccountResponseXML
        as ControllerXMLResponse;

    //
    use App\Http\Controllers\templates\ControllerPipeline;

    // Account Model
    use App\Models\tables\User;


    /**
     *
     */
    #[OA\Schema( title: 'Account Controller',
                 description: '',
                 type: self::model_type )]
    class AccountController
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
        private static ?AccountController $controller       = null;
        private static ?Builder $builder                    = null;
        private static ?States $states                      = null;
        private static ?GC $gc                              = null;
        private static ?ControllerResponseFormat $formatter = null;



        // implement output
        /**
         * @return bool
         */
        public final function hasImplementedCSV(): bool
        {
            return false;
        }


        /**
         * @return bool
         */
        public final function hasImplementedJSON(): bool
        {
            return true;
        }


        /**
         * @return bool
         */
        public final function hasImplementedXML(): bool
        {

            return false;
        }


        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardCSV( Array $request ): ?array
        {
            if( !$this->hasImplementedCSV() )
            {
                // Not implemented
                abort( 501 );
            }

            return null;
        }


        /**
         * @param array $request
         * @return JsonResponse|null
         */
        public final function pipelineTowardJSON( Array $request ): ?JsonResponse
        {
            if( !$this->hasImplementedJSON() )
            {
                // Not implemented
                abort(501);
            }

            return Response()->json( $request );
        }


        /**
         * @param array $request
         * @return array|null
         */
        public final function pipelineTowardXML( Array $request ): ?array
        {
            if( !$this->hasImplementedXML() )
            {
                // Not implemented
                abort( 501 );
            }

            return null;
        }


        /**
         * @param ControllerRequest $request
         * @return mixed
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/me',
                  tags: ['1.0.0', 'account', 'authentication'] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(example: "<<<JSON"),
                           new OA\XmlContent(example: "")
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function me( ControllerRequest $request )
        {
            return null;
        }


        /**
         * @param ControllerRequest $request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/read',
                  tags: ['1.0.0', 'account'] )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(
                               examples: "<<<JSON " ),
                           new OA\XmlContent(
                               examples: "<<<XML " )
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        public final function public_read( ControllerRequest $request )
        {
            return null;
        }


        /**
         * @param Request $request
         * @return null
         */
        public final function read( Request $request )
        {
            return null;
        }


        /**
         * @param ControllerRequest $request
         * @return JsonResponse|null
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/login',
                   tags: [ '1.0.0', 'account', 'authentication' ]
        )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function login( ControllerRequest $request )
        {
            return null;
        }


        /**
         * @param ControllerRequest $request
         * @return null
         */
        #[OA\Get( path: '/api/1.0.0/accounts/account/logout',
                  tags:[ '1.0.0', 'account', 'authentication' ]
        )]
        #[OA\SecurityScheme( securityScheme: 'account_logout',
                             type: 'http',
                             name: 'authorization',
                             in: 'header',
                             bearerFormat: 'JWT',
                             scheme: 'Bearer' )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function logout( ControllerRequest $request )
        {
            return null;
        }


        /**
         * @param ControllerRequest $request
         * @return JsonResponse
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/create',
                   description: '',
                   tags: [ '1.0.0', 'account', 'authentication' ],
                   externalDocs: new OA\ExternalDocumentation( description: '',
                                                               url:'https://github.com/KentVejrupMadsen/Kanban-Project-Backend'),
                   deprecated: false
        )]
        #[OA\RequestBody( request: 'post',
                          description: '',
                          required: true,
                          content: [ new OA\JsonContent( readonly: false,
                              title:'create account',
                              description:'',
                              readonly: false,
                              writeonly: true,
                              format:'json',
                              example:
'{
	"account":
	{
		"username":"username",
		"security":
		{
			"password":"password",
			"confirm":"password"
		},
		"person":
		{
			"email":"email@gmail.com"
		}
	}
}' ),
                                     new OA\XmlContent()
            ],
        )]
        #[OA\Response( response: '201',
                       description: 'Account created',
                       content:
                       [
                           new OA\JsonContent(
                               example:
'{
	"username": "username",
	"bearer_token": "integer|bearer-token-string-herexxxxxx"
}'),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '400',
                       description: 'Bad Request - an account already exist with the given parameters' )]
        #[OA\Response( response: '540',
                       description: 'content not found' )]
        public final function public_create( ControllerRequest $request )
        {
            return $this->create( $request );
        }


        /**
         * @param ControllerRequest $request
         * @return JsonResponse|null
         */
        public final function create( Request $request )
        {
        	$builder = self::getBuilder();
        	
        	$res = $request->input('account.security');
        	
            return $res;
        }


        /**
         * @param ControllerRequest $request
         * @return JsonResponse
         */
        #[OA\Patch( path: '/api/1.0.0/accounts/account/update',
                    tags: ['1.0.0', 'account' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\SecurityScheme( securityScheme: 'account_update',
                             type: 'http',
                             name: 'authorization',
                             in: 'header',
                             bearerFormat: 'JWT',
                             scheme: 'Bearer' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_update( ControllerRequest $request )
        {
            return $this->update( $request );
        }


        /**
         * @param Request $request
         * @return JsonResponse
         */
        public final function update( Request $request )
        {
            return null;
        }


        /**
         * @param ControllerRequest $request
         * @return JsonResponse|null
         */
        #[OA\Delete( path: '/api/1.0.0/accounts/account/delete',
                     tags: ['1.0.0', 'account'] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\SecurityScheme( securityScheme: 'account_deletion',
                             type: 'http',
                             description: '',
                             name: 'authorization',
                             in: 'header',
                             bearerFormat: 'JWT',
                             scheme: 'Bearer' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function public_delete( ControllerRequest $request )
        {

            return null;
        }


        /**
         * @param Request $request
         * @return JsonResponse|null
         */
        public final function delete( Request $request )
        {
            return null;
        }


        /**
         * @param ControllerRequest $request
         * @return null
         */
        #[OA\Post( path: '/api/1.0.0/accounts/account/verify',
                   tags: [ '1.0.0', 'account', 'authentication' ] )]
        #[OA\Parameter( name:'Authorization',
                        description: 'has to be included in the header of the request',
                        in: 'header' )]
        #[OA\Response( response: '200',
                       description: 'The data',
                       content:
                       [
                           new OA\JsonContent(),
                           new OA\XmlContent()
                       ]
        )]
        #[OA\Response( response: '404',
                       description: 'content not found' )]
        public final function verify( ControllerRequest $request )
        {
            return null;
        }


        /**
         * @return array
         */
        public final function exposeApiStructure(): array
        {
            return [];
        }

        
        // Accessors
            // Setters
        /**
         * @param AccountController $controller
         * @return void
         */
        protected static final function setSingleton( AccountController $controller ): void
        {
            self::$controller = $controller;
        }


        /**
         * @param Builder $builder
         * @return void
         */
        protected static final function setBuilder( Builder $builder ): void
        {
            self::$builder = $builder;
        }


        /**
         * @param States $states
         * @return void
         */
        protected static final function setStates( States $states ): void
        {
            self::$states = $states;
        }


        /**
         * @param GC $gc
         * @return void
         */
        protected final static function setGc( GC $gc ): void
        {
            self::$gc = $gc;
        }


        /**
         * @param ControllerResponseFormat $formatter
         * @return void
         */
        protected static final function setFormatter( ControllerResponseFormat $formatter ): void
        {
            self::$formatter = $formatter;
        }


        // Getters
        /**
         * @return AccountController
         */
        public static final function getSingleton(): AccountController
        {
            if( is_null( self::$controller ) )
            {
                self::setSingleton(
                    new AccountController()
                );
            }

            return self::$controller;
        }


        /**
         * @return GC
         */
        protected static final function getGc(): GC
        {
            if( is_null( self::$gc ) )
            {
                self::setGc(
                    new GC()
                );
            }

            return self::$gc;
        }


        /**
         * @return Builder
         */
        protected static final function getBuilder(): Builder
        {
            if( is_null( self::$builder ) )
            {
                self::setBuilder(
                    new Builder()
                );
            }

            return self::$builder;
        }


        /**
         * @return States
         */
        protected static final function getStates(): States
        {
            if( is_null( self::$states ) )
            {
                self::setStates(
                    new States()
                );
            }

            return self::$states;
        }


        /**
         * @return ControllerResponseFormat|null
         */
        protected static final function getFormatter(): ?ControllerResponseFormat
        {
            return self::$formatter;
        }


        /**
         * @return bool
         */
        protected static final function isFormatterNull(): bool
        {
            return is_null( self::$formatter );
        }
    }
?>
