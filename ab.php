<?php  
  	$job = "developer";  
 
  	function findJob($title) {
  		return ($title == "developer" ? "dev" : "nondev");
  	}  
 
  	echo findJob("Ninja");  
?>  