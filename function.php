<?php
	function bulatkan($in){
		$in *=1000;
		$coba = explode(".",$in);
		$in = $coba[0]/1000;
		return $in;
	}
	
	function dokumen($class){
		$doc = "";
		for($i=0;$i<count($class);$i++){
			$file = $class[$i].".txt";
			$fh = fopen($file, 'r');
			if($i>0){
				$doc.=" ";
			}
			$doc.=fgets($fh);
			fclose($fh);
		}
		
		return $doc;
	}
	
	function cek_Kata($kata_class, $kataTest){
		$jumlahKata = 0;
		for($j=0;$j<count($kata_class);$j++){
			if($kataTest==$kata_class[$j]){
				$jumlahKata++;
			}
		}
		return $jumlahKata;
		
	}
	
	function cetak_kondisi($class, $kataTest, $jumlahKata, $kata, $count, $nilai){
		if($jumlahKata>0){
			$jumlahKata="<b>".$jumlahKata."</b>";
		}
		$nilai = ($jumlahKata+1) / (count($kata) +($count+1)) ;
		$cetak ="<td> P (".$kataTest." | ".$class.") = (".$jumlahKata."+1) 
					/ (".count($kata)."+".($count+1).") = " .$nilai.
				"</td>";
		return $cetak;
	}
?>