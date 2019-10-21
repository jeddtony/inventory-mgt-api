<?php

namespace Tests\Unit;

use App\Salesorder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SalesorderTest extends TestCase
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
     * Relationship with Package
     * 
     * @test
     */
    public function salesorder_belongs_to_a_package(){
        $salesOrder = new Salesorder();
        $salesOrder->
    }
}
