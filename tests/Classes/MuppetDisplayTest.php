<?php

use PHPUnit\Framework\TestCase;

require_once '../../vendor/autoload.php';

use Muppets\Classes\MuppetDisplay;
use Muppets\Classes\MuppetEntity;


class MuppetDisplayTest extends TestCase
{
    public function testSuccessDisplayMuppets()
    {
        $muppetMock = $this->createMock(MuppetEntity::class);
        $muppetMock->method('getName')->willReturn('Miss Piggy');
        $muppetMock->method('getImgUrl')->willReturn('MissPiggy.jpg');
        $muppetMock->method('getDebutYear')->willReturn(1976);

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
    public function testFailureDisplayMuppets()
    {
        $muppetDisplay = MuppetDisplay::displayMuppets([]);
        $expectedOutput = '<h1>:( All the muppets have gone out</h1>';

        $this->assertEquals($expectedOutput, $muppetDisplay);
    }
    public function testMalformedDisplayMuppets()
    {
        $this->expectException(TypeError::class);
        $muppetDisplay = MuppetDisplay::displayMuppets('Hello');
    }

    public function testSuccessDisplayMuppetDetails()
    {
        $muppetMock = $this->createMock(MuppetEntity::class);
        $muppetMock->method('getName')->willReturn('Miss Piggy');
        $muppetMock->method('getImgUrl')->willReturn('MissPiggy.jpg');
        $muppetMock->method('getDebutYear')->willReturn(1976);
        $muppetMock->method('getHumour')->willReturn(2);
        $muppetMock->method('getGlamour')->willReturn(20);
        $muppetMock->method('getHallOfFame')->willReturn(10);
        $muppetMock->method('getMayhem')->willReturn(45);

        $muppetDisplayDetails = MuppetDisplay::displayMuppetDetails([$muppetMock]);
        $expectedOutput = "<section class='muppetDetails'>"
            . "<img src='MissPiggy.jpg' alt='Miss Piggy'/>"
            . "<div><h1>Miss Piggy</h1>"
            . "<ul><li>Debut Year: 1976</li>"
            . "<li>Mayhem: 45/50</li>"
            . "<li>Glamour: 20/20</li>"
            . "<li>Hall of Fame: 10/10</li>"
            . "<li>Humour: 2/5</li></ul></div></section>"
            . "<form method='get' action='/index.php'>"
            . "<button type='submit'>Home</button>"
            . "</form>";
        $this->assertEquals($expectedOutput, $muppetDisplayDetails);
    }

    public function testFailureOneDisplayMuppetDetails()
    {
        $muppetDisplayDetails = MuppetDisplay::displayMuppetDetails([]);
        $expectedOutput = '<h1>:( This muppet seems to have gone out!</h1>';

        $this->assertEquals($expectedOutput, $muppetDisplayDetails);
    }
    public function testFailureTwoDisplayMuppetDetails()
    {
        $muppetDisplayDetails = MuppetDisplay::displayMuppetDetails([1,2]);
        $expectedOutput = '<h1>:( Too many muppets are trying to have a party!</h1>';

        $this->assertEquals($expectedOutput, $muppetDisplayDetails);
    }

    public function testMalformedDisplayMuppetDetails()
    {
        $this->expectException(TypeError::class);
        $muppetDisplayDetails = MuppetDisplay::displayMuppetDetails('Hello');
    }
}