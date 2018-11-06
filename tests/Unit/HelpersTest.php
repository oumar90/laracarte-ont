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

    /** @test */
     public function page_title_chould_return_the_base_title_if_title_is_provided()
    {
        $this->assertEquals('About | Laracarte - list of artisans', pages_title('About'));
        $this->assertEquals('Home | Laracarte - list of artisans', pages_title('Home'));
    }

     /** @test */
     public function set_active_route_is_a_correct()
    {
           $this->get(route('root_path'));
           $this->assertEquals('active', set_active_route('root_path'));
           $this->assertEquals('', set_active_route('about_path'));
    


           $this->get(route('contact_path'));
           $this->assertEquals('active', set_active_route('contact_path'));
           $this->assertEquals('', set_active_route('root_path'));
           $this->assertEquals('', set_active_route('about_path'));
    }


}
