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
    use App\Models\tables\AddressRoadNameModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingAddressRoadNameModelFactory;


    /**
     *
     */
    class AddressRoadNameModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model        = AddressRoadNameModel::class;
        private static $debug   = false;

        private static ?TestingAddressRoadNameModelFactory $testingFactory = null;


        private static ?TestingAddressRoadNameModelFactory $testingFactory = null;

        public static final function getTestingFactory(): TestingAddressRoadNameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory(new TestingAddressRoadNameModelFactory());
            }

            return self::$testingFactory;
        }

        public static final function setTestingFactory( TestingAddressRoadNameModelFactory $fakeFactory )
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessor
        /**
         * @return TestingAddressRoadNameModelFactory
         */
        public static final function getTestingFactory(): TestingAddressRoadNameModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingAddressRoadNameModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingAddressRoadNameModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingAddressRoadNameModelFactory $fakeFactory ): void
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


        // Definition
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
                AddressRoadNameModel::field_content => null
            ];
        }
    }
?>
