<?php

use PHPUnit\Framework\TestCase;

require_once '../../vendor/autoload.php';

use Muppets\Classes\MuppetSearch;

class MuppetSearchTest extends TestCase {

    public function testSuccessSanitizeSearchInput()
    {
        $expectedOutput = "&#60;h1&#62;kermit&#60;/h1&#62;";
        $input = "<h1>kermit</h1>" ;
        $this->assertEquals($expectedOutput, MuppetSearch::sanitizeSearchInput($input));
    }

    public function testFailureSanitizeSearchInput()
    {
        $expectedOutput = "Error - no input provided" ;
        $input = "";

        $this->assertEquals($expectedOutput, MuppetSearch::sanitizeSearchInput($input));
    }

    public function testMalformedSanitizeSearchInput()
    {
        $this->expectException(TypeError::class);
        $muppetSearch = MuppetSearch::sanitizeSearchInput([]);
    }

    public function testSuccessValidateSearchInput()
    {
        $expectedOutput = true;
        $input = "kermit" ;
        $this->assertEquals($expectedOutput, MuppetSearch::validateSearchInput($input));
    }

    public function testFailureOneValidateSearchInput()
    {
        $expectedOutput = false;
        $input = "";

        $this->assertEquals($expectedOutput, MuppetSearch::validateSearchInput($input));
    }

    public function testFailureTwoValidateSearchInput()
    {
        $expectedOutput = false;
        $input = "kerm1t";

        $this->assertEquals($expectedOutput, MuppetSearch::validateSearchInput($input));
    }

    public function testMalformedValidateSearchInput()
    {
        $this->expectException(TypeError::class);
        $muppetValidate = MuppetSearch::sanitizeSearchInput([]);
    }
}