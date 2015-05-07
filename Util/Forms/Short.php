<?php
/**
 * Creates short url form
 * # to do: add validation
 */

namespace Util\Forms;

class Short {

	// properties
	protected $method = '';
	protected $action = '';
	protected $name = '';


	function __construct($name){

		// set form attributes
		$this->name = 'form-'. $name;
		$this->method = 'POST';

	}

    /**
     * @return bool
     */
    public function render(){
		print '<form id="'. $this->name .'" name="'. $this->name .'" action="'. $this->action .'" method="'. $this->method .'" autocomplete="off">';
		print '<label for="url">URL to shorten (http://example.com):</label>
   <input type="text" name="url" id="url">
   <input type="submit" name="shorten" value="Shorten">';
   		print '</form>';

       // return true;
	}
}// END OF CLASS
?>