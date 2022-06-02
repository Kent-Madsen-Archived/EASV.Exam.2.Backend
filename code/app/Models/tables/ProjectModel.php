<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace App\Models\tables;

    use App\Models\templates\BaseModel;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    use OpenApi\Attributes
        as OA;


    /**
     *
     */
    #[OA\Schema()]
    class ProjectModel 
        extends BaseModel
    {
        #[OA\Property()]
        public const table_name = 'projects';

        // Variables
            // Table
        protected $table = self::table_name;

            // Constants
        #[OA\Property()]
        public const field_account_owner_id  = 'account_owner_id';

        #[OA\Property()]
        public const field_project_title_id  = 'project_title_id';

        #[OA\Property()]
        public const field_description = 'description';

        #[OA\Property()]
        public const field_tags = 'tags';


        //
        protected $fillable = 
        [
            self::field_account_owner_id,
            self::field_project_title_id,
            self::field_description,
            self::field_tags
        ];

        
        protected $hidden = 
        [
            self::field_account_owner_id,
            self::field_project_title_id
        ];

        
        protected $casts = 
        [
            self::field_account_owner_id  => 'integer',
            self::field_project_title_id  => 'integer',
            self::field_description       => 'string',
            self::field_tags              => 'string'
        ];
    }
?>