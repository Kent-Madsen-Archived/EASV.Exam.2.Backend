<?php
    /*
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@designermadsen.com
     * Description:
     * Tags: 
     * License: MIT License (https://opensource.org/licenses/MIT)
     * Copyright: Kent vejrup Madsen, 2022
     */
    namespace Database\Factories\tables;

    // External libraries

    // Internal libraries
    use App\Models\tables\CountryModel;
    use Database\Factories\tables\testing\TestingCountryModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class CountryModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = CountryModel::class;
        private static $debug   = false;

        private static ?TestingCountryModelFactory $testingFactory = null;

        // Accessor
        /**
         * @return TestingCountryModelFactory
         */
        public static final function getTestingFactory(): TestingCountryModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingCountryModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingCountryModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingCountryModelFactory $fakeFactory ): void
        {
            self::$testingFactory = $fakeFactory;
        }

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

        // Definitions
        /**
         * @return array
         */
        protected final function TestDefinition(): array
        {
            return self::getTestingFactory()->definition();
        }

        /**
         * @return null[]
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                CountryModel::field_country_name    => null,
                CountryModel::field_country_acronym => null
            ];
        }
    }
?>
