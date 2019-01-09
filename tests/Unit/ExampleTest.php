<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    public function testTitlesModelCOunt()
    {
        $titles = new TItle;
        $this->assertTrue( count( $titles->all() ) === 6, 'It Should have 6 titles' );
    }

    public function testLastTitlesShouldeBeProfessor()
    {
        $titles = new Title;
        $titles_array = $titles->all();
        $this->assertEquals('Professor' , array_pop( $titles_array ), 'Titles last element should be professor')

    }
}
