<?php
    namespace Database\Factories\tables;

    // External libraries
    use Illuminate\Database\Eloquent\Factories\Factory;

    // Internal libraries
    use App\Models\tables\AddressRoadNameModel;


    /**
     *
     */
    final class AddressRoadNameModelFactory
        extends Factory
    {
        // Variables
        protected $model        = AddressRoadNameModel::class;
        private static $debug   = false;


        // Accessor
        /**
         * @return bool
         */
        public final function getDebugState(): bool
        {
            return self::$debug;
        }

        /**
         * @param bool $value
         * @return void
         */
        public final function setDebugState( bool $value ): void
        {
            self::$debug = $value;
        }


        /**
         * @return array
         */
        public final function definition(): array
        {
            if( $this->getDebugState() )
            {
                return
                [
                        //
                    'content' => $this->faker
                                      ->unique()
                                      ->streetName
                ];
            }
            else
            {
                return
                [
                    'content' => null
                ];
            }
        }
    }
?>
