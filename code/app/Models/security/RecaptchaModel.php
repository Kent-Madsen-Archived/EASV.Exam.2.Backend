<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\security;

    use App\Models\templates\ExtensionNoTimestampModel;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class RecaptchaModel
        extends ExtensionNoTimestampModel
    {
        // Variables
            // Table
        #[OA\Property( type: 'string' )]
        public const table_name = 'security_recaptcha';

        protected $table = self::table_name;

            // Const
        #[OA\Property( type: 'string' )]
        public const field_success   = 'success';

        #[OA\Property( type: 'string' )]
        public const field_score     = 'score';

        #[OA\Property( type: 'string' )]
        public const field_at_date   = 'at_date';

        #[OA\Property( type: 'string' )]
        public const field_hostname  = 'hostname';

        #[OA\Property( type: 'string' )]
        public const field_error     = 'error';


        //
        #[OA\Property(
            property: 'fillable',
            schema: AccountState::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $fillable =
        [
            self::field_success,
            self::field_score,
            self::field_at_date,
            self::field_hostname,
            self::field_error
        ];


        #[OA\Property(
            property: 'hidden',
            schema: AccountState::class,
            type: 'array',
            maximum: 3,
            minimum: 3,
            items: new OA\Items(type: 'string'))]
        protected $hidden =
        [
            self::field_hostname,
            self::field_error
        ];


        protected $casts =
        [
            self::field_success     => 'boolean',
            self::field_score       => 'double',
            self::field_at_date     => 'datetime',
            self::field_hostname    => 'string',
            self::field_error       => 'string'
        ];
    }
?>