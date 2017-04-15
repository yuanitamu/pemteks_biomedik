<?php
	include("prior.php");
	
	$kata = array();
	$kataTrain = explode(" ", $Train);
	
	$count = 0;
	for($j=0;$j<count($kataTrain);$j++){
		$beda=true;
		if($j>0){
			for($k=0;$k<$j;$k++){
				if(strtolower($kataTrain[$k])==strtolower($kataTrain[$j])){
					$kata[$j]="---------------";
					$beda=false;
					break;
				}
			}
			if($beda){
				$count++;
				$kata[$j]=$kataTrain[$j];			
			}
		}else{
			$kata[$j]=$kataTrain[$j];
		}
		
	}
	
	echo "Diketahui<br /><br />";
	echo "V(jumlah kosakata) = ".($count+1)."<br /><br />";
	echo "<b>Priors : </b><br /><br />";
	echo "P(Diabetes) = ".count($class1)." / ".$sum1rain." = ".$P1."<br />";
	echo "P(Asma) = ".count($class2)." / ".$sum1rain." = ".$P2."<br />";
	echo "<br /><br />";
	
	$file = $_POST['doc'].".txt";
	$fh = fopen($file, 'r');
	$Test = fgets($fh);
	fclose($fh);

?>