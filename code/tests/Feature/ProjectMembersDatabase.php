<?php
    /**
     * Author: Kent vejrup Madsen
     * Description:
     * TODO: Make description
     */
    namespace Tests\Feature;

    use Illuminate\Foundation\Testing\RefreshDatabase;
    use Tests\TestCase;


    /**
     *
     */
    class ProjectMembersDatabase
        extends TestCase
    {

        public function test_example()
        {
            $response = $this->get('/');

            $response->assertStatus(200);
        }
    }
?>