<?php

namespace Tests\Unit;

use App\Package;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PackageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

    /**
     * Relationship with Item
     * @test
     */
    public function package_has_a_sales_order(){
     $package = new Package()   
    }
}
