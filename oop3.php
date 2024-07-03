<?php 


class enc { 

	private $name; 
	private $pass; 
	
	
	public function updatePass($name, $pass) { 
		
		
		echo("Function to update password '"
				. $pass . "' for user " . $name); 
		
		echo "<br>"; 
	} 

	
	public function courseName($name) { 
		
		
		echo("Function to check course name of user "
				. $name); 
		
		echo "<br>"; 
	} 
} 

$obj = new enc(); 
$obj -> updatePass('1', 'eqw124'); 
$obj -> courseName('abc'); 

?> 
