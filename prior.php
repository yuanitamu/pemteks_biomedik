<?php
	include("function.php");
	
    $class1=array("doc1","doc2","doc3","doc4","doc5","doc6","doc7");
	$class2=array("doc8","doc9","doc10","doc11","doc12","doc13");
	
	$sum1rain = count($class1)+count($class2);
	
	$P1 = count($class1)/$sum1rain;
	$P2 = count($class2)/$sum1rain;
	
	$P1 = bulatkan($P1);
	$P2 = bulatkan($P2);
	
	$Diabetes = dokumen($class1);
	$kata1 = explode(" ",$Diabetes);
	
	$Asma = dokumen($class2);
	$kata2 = explode(" ",$Asma);
	
	$Train = $Diabetes." ".$Asma
?>