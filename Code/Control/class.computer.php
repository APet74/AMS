<?php
class computer {
	public $computerID;
	public $computerName;
	public $operatingSys;

	/**
	 * Class Constructor
	 * @param 	 $computerID
	 * @param 	 $computerName
	 * @param    $operatingSys
	 */
	 public function __construct($item) {

	    $this->computerID = $item['computerID'];
	    $this->computerName = $item['computerName'];
	    $this->operatingSys = $item['operatingSys'];

	}

	public function get($name) {
    	return $this->$name;
	}

}
?>