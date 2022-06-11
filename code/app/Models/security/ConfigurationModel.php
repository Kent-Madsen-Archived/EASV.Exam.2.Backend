<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    // Internal libraries
    use App\Models\tables\templates\BaseModel;
    use App\Models\tables\templates\ExtensionNoTimestampModel;

    // External libraries
    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Configuration Model',
                 description: '',
                 type: BaseModel::model_type,
                 deprecated: false )]
    class ConfigurationModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Table
        protected $table = self::table_name;
        protected $primaryKey = self::identity;

            // Constants
        #[OA\Property( type: 'string' )]
        protected const table_name = 'security_configuration';

        #[OA\Property( type: 'string' )]
        protected const field_key   = 'key';

        #[OA\Property( type: 'string' )]
        protected const field_value = 'value';


        /**
         * @var string[]
         */
        protected $fillable =
        [
            self::field_key,
            self::field_value
        ];


        /**
         * @var string[]
         */
        protected $hidden =
        [
            self::field_value
        ];


        /**
         * @var string[]
         */
        protected $casts =
        [
            self::field_key   => 'string',
            self::field_value => 'array'
        ];
    }
?>
