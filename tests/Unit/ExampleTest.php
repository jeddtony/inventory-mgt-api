<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\User;
class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       $user = new User();
       $user->name ='abc';
       $user->email = 'abc@email.com';
       $user->password = 'qwerty';
      
        $this->assertTrue( $user->save());

    }
}
