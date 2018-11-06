<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HelpersTest extends TestCase
{
    /** @test */

    public function page_title_chould_return_the_base_title_if_title_is_empty()
    {
        $this->assertEquals('Laracarte - list of artisans', pages_title(''));
    }

    public function set_active_route_test_is_correct()
    {
        $this->assertEquals(route('about_path'), set_active_route('root_path'));
    }

}
