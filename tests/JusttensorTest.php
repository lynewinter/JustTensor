<?php
/**
 * Tests for JustTensor
 */

use PHPUnit\Framework\TestCase;
use Justtensor\Justtensor;

class JusttensorTest extends TestCase {
    private Justtensor $instance;

    protected function setUp(): void {
        $this->instance = new Justtensor(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Justtensor::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
