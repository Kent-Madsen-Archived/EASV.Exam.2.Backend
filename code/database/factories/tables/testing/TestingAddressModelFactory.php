<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\tables\testing;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\AddressModel;
    use Illuminate\Support\Str;


    /**
     *
     */
    class TestingAddressModelFactory
        extends Factory
    {
        // Variables
        protected $model        = AddressModel::class;



        //
        /**
         * @return array|mixed[]
         */
        public final function definition(): array
        {
            return
            [
                //
                AddressModel::field_account_information_id => 0,
                AddressModel::field_road_name_id           => 0,
                AddressModel::field_road_number => $this->faker->randomDigit(),
                AddressModel::field_levels => Str::random(3),
                AddressModel::field_country_id  => 0,
                AddressModel::field_zip_code_id => 0
            ];
        }
    }
?>
