<?php

namespace Tests\Unit\Enums;

use App\Enums\MindStatus;
use Tests\TestCase;

/**
 * Class TestMindStatus
 * @package Tests\Unit\Enums
 */
class TestMindStatus extends TestCase
{

    /**
     * @test
     * @testdox get all mind status
     * @return void
     */
    public function testGetAllMindStatus():void
    {
        $this->assertEquals('array', gettype(MindStatus::cases()));
        $this->assertCount(5, MindStatus::cases());
    }

    /**
     * @test
     * @testdox get all mind status
     * @return void
     */
    public function testGetHappMind():void
    {
        $happy = MindStatus::Happy;

        $this->assertEquals('object', gettype($happy));
        $this->assertEquals('Happy', $happy->name);
        $this->assertEquals('HAPPY', $happy->value);
    }
}
