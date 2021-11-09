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

namespace Muppets\Classes;

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
            $this->muppetString .= "<article><img src='" . $muppet->getImg_Url() . "' alt='" . $muppet->getName() ."'/>"
                . "<div><h4>" . $muppet->getName() . "</h4>"
                . "<p>" . $muppet->getDebut_Year() . "</p>"
                . "</div></article>";
        }
        return $this->muppetString;
    }

    /**
     * Gives access to the muppet string
     * @return $this->>displayMuppets
     */
    public function getMuppetString()
    {
        return $this->displayMuppets();
//        return $this->muppets;
    }
}