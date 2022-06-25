<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace App\Models\tables;

    // Internal
    use App\Models\security\AccountState;
    use App\Models\tables\templates\AccountModel;

    // External
    use Illuminate\Database\Eloquent\Relations\HasOne;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema( title: 'Account Model',
                 description: '',
                 type: AccountModel::model_type,
                 readOnly: false,
                 writeOnly: false,
                 deprecated: false )]
    class User 
        extends AccountModel
    {
        // Variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property( title:'account table name',
                       type: self::typeString,
                       readOnly: true,
                       writeOnly: false,
                       deprecated: false )]
        protected const table_name = 'accounts';

        #[OA\Property( title: 'username column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_username = 'username';


        #[OA\Property( title: 'email column',
                       type: self::typeInteger,
                       deprecated: false )]
        protected const field_email_id = 'account_email_identity';

        public static function getFieldEmailIdentity(): string
        {
            return self::field_email_id;
        }

        #[OA\Property( title: 'is email verified column',
                       type: self::typeDatetime,
                       deprecated: false )]
        protected const field_verified_at = 'email_verified_at';


        #[OA\Property( title: 'password column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_password = 'password';

        #[OA\Property( title: 'creation date column',
                       type: self::typeDatetime,
                       deprecated: false )]
        protected const field_created_at = 'created_at';

        #[OA\Property( title: 'last updated at column',
                       type: self::typeDatetime,
                       deprecated: false )]
        protected const field_updated_at = 'updated_at';

        #[OA\Property( title: 'settings column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_settings = 'settings';

        #[OA\Property( title: 'remember token column',
                       type: self::typeString,
                       deprecated: false )]
        protected const field_remember_token = 'remember_token';


        /**
         * @var string[]
         */
        protected $fillable = 
        [
            self::identity,

            self::field_username,
            self::field_password,

            self::field_email_id,
            self::field_verified_at,

            self::field_created_at,
            self::field_updated_at,

            self::field_settings,
            self::field_remember_token
        ];


        /**
         * @var string[]
         */
        protected $hidden = 
        [
            self::identity,

            self::field_password,
            self::field_remember_token,
            self::field_email_id,
            self::field_verified_at
        ];


        /**
         * @var array
         */
        protected $casts = 
        [
            self::identity                => self::typeInteger,
            self::field_username          => self::typeString,

            self::field_email_id          => self::typeInteger,
            self::field_password          => self::typeString,

            self::field_verified_at       => self::typeDatetime,
            self::field_created_at        => self::typeDatetime,
            self::field_updated_at        => self::typeDatetime,

            self::field_settings          => self::typeArray
        ];


        // Model relationships
        /**
         * @return HasOne
         */
        public final function newsletterSubscription(): HasOne
        {
            return $this->hasOne( NewsletterSubscriptionModel::class,
                                  NewsletterSubscriptionModel::getFieldAccountIdentity(),
                                  'identity' );
        }


        /**
         * @return BelongsTo
         */
        public final function accountEmail(): BelongsTo
        {
            return $this->belongsTo( AccountEmailModel::class,
                                     self::field_email_id,
                                     'identity');
        }


        /**
         * @return HasOne
         */
        public final function accountInformation(): HasOne
        {
            return $this->hasOne( AccountInformationModel::class,
                                  'account_identity',
                                  'identity' );
        }


        /**
         * @return HasOne
         */
        public final function accountStates(): HasOne
        {
            return $this->hasOne( AccountState::class,
                                  'account_identity',
                                  'identity');
        }
    }
?>
