<?php
class Car{
	//public method and properties
	public $model;

	public function getmodel()
	{
		return "The car model is " .$this -> model;
	}
}
$Toyota = new Car();
//here we access a priperty  from outside the class 
$Toyota -> model ="Toyota";

//Here we access method outside the class
echo "<h3>This is Public Method properties</h3>";
echo $Toyota -> getmodel() .'<br>';

class Cars{
	//The private access modifier denies access to the method from outside the class
	private $model;

	 //The public access modifier allows the access to the method from outside the class
	public function setmodel ($model){
		$this->model= $model;

	}
	public function getmodel(){
		return "The Car model is " . $this ->model;
	}
}
$Civic =  new Cars();
$Civic->setmodel("Civic");
echo $Civic->getmodel();
?>


<?php 
class Add{
	public $figure=6;
	public $num=5;
    public $result=$figure + $num;

    public function Plus(){
    	return The Result is .this->result;
    }

}
$maths= new Add();
echo $maths->Plus();
echo $maths->result;
 ?>