<?php

use PHPUnit\Framework\TestCase;

require_once '../../vendor/autoload.php';

use Muppets\Classes\MuppetDisplay;
use Muppets\Classes\MuppetEntity;


class MuppetDisplayTest extends TestCase
{
    public function testSuccess()
    {
        $muppetMock = $this->createMock(MuppetEntity::class);
        $muppetMock->method('getName')->willReturn('Miss Piggy');
        $muppetMock->method('getImg_Url')->willReturn('MissPiggy.jpg');
        $muppetMock->method('getDebut_Year')->willReturn(1976);

        $muppetDisplay = MuppetDisplay::displayMuppets([$muppetMock]);
        $expectedOutput = '<article>' .
                "<img src='MissPiggy.jpg' alt='Miss Piggy'/>" .
                 '<div>' .
                    '<h4>Miss Piggy</h4>' .
                    '<p>1976</p>' .
                '</div>' .
            '</article>';
        $this->assertEquals($expectedOutput, $muppetDisplay);
    }
    public function testFailure()
    {
        $muppetDisplay = MuppetDisplay::displayMuppets([]);
        $expectedOutput = '<h1>:( All the muppets have gone out</h1>';

        $this->assertEquals($expectedOutput, $muppetDisplay);
    }
    public function testMalformed()
    {
        $this->expectException(TypeError::class);
        $muppetDisplay = MuppetDisplay::displayMuppets('Hello');
    }
}