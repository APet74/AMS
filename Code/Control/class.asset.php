<?php
class asset {
	public $itemID;
	public $location;
	public $warrantyExp;
	public $manufacturer;
	public $computer;
	public $price;
	public $dateEntered;
	public $description;
	public $createdBy;
	public $retiredStatus;
	public $type;
	public $serialNum;
	public $currentUser;

	/**
	 * Class Constructor
	 * @param    $itemID
	 * @param 	 $location
	 * @param    $warrantyExp
	 * @param    $manufacturer  
	 * @param 	 $computer
	 * @param    $price   
	 * @param    $dateEntered   
	 * @param    $description   
	 * @param    $createdBy   
	 * @param    $retiredStatus   
	 * @param    $type   
	 * @param    $serialNum   
	 * @param    $currentUser
	 */
	 public function __construct($item, $pcObj) {

	    $this->itemID = $item['itemID'];
	    $this->location = $item['location'];
	    $this->warrantyExp = $item['warrantyExp'];
	    $this->manufacturer = $item['manufacturer'];
	    $this->computer = $pcObj;
		$this->price = $item['price'];
		$this->dateEntered = $item['dateEntered'];
		$this->description = $item['description'];
		$this->createdBy = $item['createdBy'];
		$this->retiredStatus = $item['retiredStatus'];
		$this->type = $item['type'];
		$this->serialNum = $item['serialNum'];
		$this->currentUser = $item['currentUser'];
	}

	public function get($name) {
    	return $this->$name;
	}

}
?>