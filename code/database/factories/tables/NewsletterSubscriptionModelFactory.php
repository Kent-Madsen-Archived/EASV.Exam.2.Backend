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
    use App\Models\tables\NewsletterSubscriptionModel;
    use Database\Factories\tables\testing\TestingNewsletterSubscriptionModelFactory;
    use Database\Factories\templates\FactoryTemplate;


    /**
     *
     */
    class NewsletterSubscriptionModelFactory
        extends FactoryTemplate
    {

        // Variables
        protected $model        = NewsletterSubscriptionModel::class;
        private static $debug   = false;

        private static ?TestingNewsletterSubscriptionModelFactory $testingFactory = null;


        // Accessor
        /**
         * @return TestingNewsletterSubscriptionModelFactory
         */
        public static final function getTestingFactory(): TestingNewsletterSubscriptionModelFactory
        {
            if( is_null( self::$testingFactory ) )
            {
                self::setTestingFactory( new TestingNewsletterSubscriptionModelFactory() );
            }

            return self::$testingFactory;
        }

        /**
         * @param TestingNewsletterSubscriptionModelFactory $fakeFactory
         * @return void
         */
        public static final function setTestingFactory( TestingNewsletterSubscriptionModelFactory $fakeFactory ): void
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
         * @return array
         */
        protected final function DefaultDefinition(): array
        {
            return
            [
                NewsletterSubscriptionModel::field_email_id => 0,
                NewsletterSubscriptionModel::field_options => null
            ];
        }
    }
?>
