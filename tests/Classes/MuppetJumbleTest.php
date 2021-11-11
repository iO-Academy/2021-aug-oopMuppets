<?php
use PHPUnit\Framework\TestCase;

require_once '../../vendor/autoload.php';

use Muppets\Classes\MuppetEntity;
use Muppets\Classes\MuppetJumble;

class MuppetJumbleTest extends TestCase
{
    public function testSuccessGetRandomId()
    {
        $muppetMock = $this->createMock(MuppetEntity::class);
        $muppetMock->method('getId')->willReturn(1);
        $muppetMock2 = $this->createMock(MuppetEntity::class);
        $muppetMock2->method('getId')->willReturn(3);

        $input = [$muppetMock, $muppetMock2];
        $this->assertIsInt(MuppetJumble::getRandomId($input));
    }

    public function testFailureGetRandomId()
    {
        $muppetMock = $this->createMock(MuppetEntity::class);
        $muppetMock->method('getId')->willReturn(0);
        $muppetMock2 = $this->createMock(MuppetEntity::class);
        $muppetMock2->method('getId')->willReturn(0);

        $expectedOutput = '404 Muppet not found - you\'s a muppet!';
        $input = [$muppetMock, $muppetMock2];

        $this->assertEquals($expectedOutput, MuppetJumble::getRandomId($input));
    }

    public function testMalformedGetRandomId()
    {
        $this->expectException(TypeError::class);
        $getRandomId = MuppetJumble::getRandomId('');
    }
}
