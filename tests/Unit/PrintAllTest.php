<?php

namespace Tests\Unit;

use Tests\TestCase;

/**
 * Class CheckTest
 * @package Tests\Unit
 */
class PrintAllTest extends TestCase
{

    /**
     * @test
     * @return void
     */
    public function 테스트_첫번째():void
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     * @return void
     */
    public function 테스트_두번째():void
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     * @testdox 실패하는 테스트 케이스
     * @return void
     */
    public function 테스트_세번째_실패():void
    {
        $this->assertTrue(false);
    }
}

