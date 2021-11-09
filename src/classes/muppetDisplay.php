<?php
// name spaceing
// create class called MuppetDisplay
// create a constructor method - $muppets
// create a displayMuppets method (access $muppets using $this)
// make empty string property - $muppetString
// foreach over muppets concatinate onto muppetString. Each in a seperate div
// return string
// create getter


//	<div>
//		<h4></h4>
//		<p></p>
//		<button></button>
//  </div>
//</article>

namespace App\Classes;

/**
 *Displays all the muppets as a html string
 */
class MuppetDisplay {
    protected array $muppets;
    protected string $muppetString = '';
    public function __construct(array $muppets)
    {
        $this->muppets = $muppets;
    }

    /**
     * Creates protected HTML string
     * @return string
     */
    protected function displayMuppets(): string
    {
        foreach ($this->muppets as $muppet){
            $this->muppetString .= "<article><img href='" . $muppet['img_url'] . "' alt='" . $muppet['name'] ."'/>"
                . "<div><h4>" . $muppet['name'] . "</h4>"
                . "<p>" . $muppet['debut_year'] . "</p>"
                . "<button value='". $muppet['id'] . "' type='submit' action='details.php'>See More</button>"
                . "</div></article>";
        }
        return $this->muppetString;
    }

    /**
     * Gives access to the muppet string
     * @return $this->>muppetString
     */
    public function getMuppetString(): string
    {
        return $this->muppetString;
    }
}