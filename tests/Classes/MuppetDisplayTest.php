<?php
use PHPUnit\Framework\TestCase;
use Muppets\Classes\MuppetDisplay;
use Muppets\Classes\MuppetEntity;


class MuppetDisplayTest extends TestCase
{
    public function testSuccess()
    {
        $muppetMock = $this->createMock(MuppetEntity::class);
        $muppetMock->expects($this->once())
            ->method('getName')->willReturn('Miss Piggy')
            ->method('getImg_Url')->willReturn('MissPiggy.jpg')
            ->method('getDebut_Year')->willReturn('1976');
        $muppetDisplay = MuppetDisplay::displayMuppets([$muppetMock]);
        $expectedOutput = '<article>' .
                "<img src='MissPiggy.jpg' alt='Miss Piggy'/>" .
                 '<div>' .
                    '<h4>Miss Piggy</h4>' .
                    '<p>1976</p>' .
                '</div>' .
            '</article>';
        $actualOutput = $muppetDisplay->muppetDisplay($muppetMock);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
}



/*class CowTest extends TestCase { 
    public function testSuccessEat()
    { 
        $cow = new Cow(); 
        $grassMock = $this->createMock(Grass::class); 
        $grassMock->expects($this->once()) 
            ->method('getFoodType') 
            ->willReturn('grass'); 
        $expectedOutput = 'mmm grass'; 
        $actualOutput = $cow->eat($grassMock); 
        $this->assertEquals($expectedOutput, $actualOutput); 
    } 
}*/