<?php
    /**
     * Author: Kent vejrup Madsen
     * Contact: Kent.vejrup.madsen@protonmail.com
     * Description:
     * TODO: Make description
     */
    namespace Database\Factories\tables;

    // External libraries

    // Internal libraries
    use App\Models\tables\ProjectTitleModel;
    use Database\Factories\templates\FactoryTemplate;
    use Database\Factories\tables\testing\TestingProjectTitleModelFactory;


    /**
     *
     */
    class ProjectTitleModelFactory
        extends FactoryTemplate
    {
        // Variables
        protected $model      = ProjectTitleModel::class;
        private static $debug = false;


        private static ?TestingProjectTitleModelFactory $testingFactory = null;

        // Accessors
        /**
         * @return TestingProjectTitleModelFactory
         */
        public static final function getTestingFactory(): TestingProjectTitleModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingProjectTitleModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingProjectTitleModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingProjectTitleModelFactory $fakeFactory ): void
        {
            self::$testingFactory = $fakeFactory;
        }

        // Accessors
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
         * @return null[]
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                ProjectTitleModel::field_content => null
            ];
        }

        /**
         * @return array
         */
        protected final function TestDefinition(): array
        {

            return self::getTestingFactory()->definition();
        }
    }
?>
