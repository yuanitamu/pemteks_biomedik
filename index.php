<!DOCTYPE html>
<html>
  <head>
  
    <title>Text Mining - Using Naive Bayes Classifier</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
	<link rel="stylesheet" type="text/css" href="css/stylee.css" />
	<script type='text/javascript' src='js/select.js'></script>
      </head>
  <body>
	<div class="menu-area">
			<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#intro">Home</a>
							</li>
							<li><a href="#about">Anggota</a></li>
							<li><a href="#services">Data Training</a></li>
							<li><a href="#works">Data Testing</a></li>
						</ul>
					</div><!-- /dl-menuwrapper -->
	</div>	

	  <!-- intro area -->	  
	  <div id="intro">
	  
			<div class="intro-text">
				<div class="container">
					<div class="row">
					
						
					<div class="col-md-12">
			
						<div class="brand">
							<h1><a href="index.php">TEXT MINING</a></h1>
							<div class="line-spacer"></div>
							<p><span>Menggunakan Metode</span></p>
							<p><span>Multinomial Naive Bayes Classifier</span></p>
						</div>
					</div>
					</div>
				</div>
		 	</div>
			
	 </div>
	  

	  
	  
	  <!-- About -->
	  <section id="about" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Kelompok 9</h2>
					 <p>Pemrosesan Teks Kelas C</p>
					</div>
				  </div>
			  </div>
			  <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
					<div class="box-team wow bounceInDown" data-wow-delay="0.1s">
                    <img src="img/team/1.jpg" alt="" class="img-responsive" />
                    <h4>Rizky Salsabella</h4>
                    <p><br>125150201111016</br></p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
					<div class="box-team wow bounceInDown">
                    <img src="img/team/2.jpg" alt="" class="img-responsive" />
                    <h4>Yuanita Muharyani U.</h4>
                    <p>125150201111017</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
					<div class="box-team wow bounceInDown">
                    <img src="img/team/3.jpg" alt="" class="img-responsive" />
                    <h4>Zahra Swastika Putri</h4>
                    <p>125150201111026</p>
					</div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="box-team wow bounceInDown">
                    <img src="img/team/4.jpg" alt="" class="img-responsive" />
                    <h4>Sri Retno Mia Wardani</h4>
                    <p>125150201111028</p>
					</div>
                </div>
				 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
					<div class="box-team wow bounceInDown">
                    <img src="img/team/5.jpg" alt="" class="img-responsive" />
                    <h4>Uswatun Hasanah</h4>
                    <p>125150201111030</p>
					</div>
                </div>
			  </div>			  
		  </div>	  
	  </section>
	  
		<!-- spacer -->	  
		<section id="spacer1" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="1s">Multinomial Naive Bayes Classifiers for Biomedical</h2>
						<p class="lead wow bounceInUp" data-wow-delay="2s">Kelompok 9 - Pemrosesan Teks TIF C</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	  
	  
	  <!-- Services -->
	 <section id="services" class="home-section bg-white">
		<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Data Training</h2>
					 <p>Terdiri dari 13 dokumen</p>
					</div>
				  </div>

		  <table class="table">
		  <thead >
		  <tr>
        	<td style="width:10%;">Document</th>
	        <td style="width:65%;">Kalimat</th>
    	    <td style="width:10%;">Kelas</th>
      	</tr>
    	</thead>
    <tbody>
			<?php
			for($i=0;$i<13;$i++){
				$file = "doc".($i+1).".txt";
				$fh = fopen($file, 'r');
				$data=fgets($fh);
				fclose($fh);
				$kelas="";
				switch($i){
					case 0 : 
					case 1 : 
					case 2 : 
					case 3 : 
					case 4 : 
					case 5 : 
					case 6 : $hasil="Diabetes";break;
                    case 7 : 
					case 8 : 
					case 9 : 
					case 10 : 
					case 11 : 
                    case 12 : $hasil="Asma";break;
				}?>
				<?php 
				if ($hasil == "Diabetes"){?>
				<tr class="danger">
				<?php } 
				else{ ?>
				<tr class="info">
				<?php } ?>
				<?php echo "
		        <td>".($i+1)."</td>
        		<td>".$data."</td>
		        <td>".$hasil."</td>
      			</tr>";
			}
		?>
     
    </tbody>
  </table>
</div>
</div>
                
	</section>
	
	 <!-- Works -->
	<section id="works" class="home-section bg-gray">
			<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Data Testing</h2>
					 <p>Berikut daftar data testing yang dapat dipilih.</p>
					</div>
				  </div>
			  </div>
				
	<table class="table">
    <thead>
      <tr>
        <td style="width:15%;">Document</th>
        <td style="width:65%;">Kalimat</th>
      </tr>
    </thead>
	
    <tbody>
			<?php
			$select="";
			for($i=0;$i<7;$i++){
				$file = "doc".($i+14).".txt";
				$fh = fopen($file, 'r');
				$data=fgets($fh);
				fclose($fh);
				?>
				<tr class="success">
				<?php
				echo "	<td>".($i+14)."</td>
					<td>".$data."</td>	
				</tr>";
				$select.="<option value='doc".($i+14)."'>Dokumen Testing ".($i+14)."</option>";
			}
		?>   
    </tbody>
  </table>
   
<form method="post" action="#works2">

  <div class="form-group">
    <p><br>
        <label class="section-heading" style="margin-bottom:20px; margin-top:50px;">Pilih Dokumen Testing :</label>
		<div align="center">
        <select class="turnintodropdown" name="doc">
            <?php echo $select; ?>
        </select>
    </p>
  	
	<div class="col-md-offset-2 col-md-8">
	 <button type="submit" class="btn btn-theme btn-lg btn-block" name="proses">Go</button>
	</div>
	</div>
</form>
	</div>
</section>	  
	
		<!-- spacer 2 -->	  
		<section id="spacer2" class="home-section spacer">	
           <div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="color-light">
						<h2 class="wow bounceInDown" data-wow-delay="1s">Multinomial Naive Bayes Classifiers for Biomedical</h2>
						<p class="lead wow bounceInUp" data-wow-delay="2s">Kelompok 9 - Pemrosesan Teks TIF C</p>	
						</div>
					</div>				
				</div>
            </div>
		</section>	
	<!--work 2  -->
	<section id="works2" class="home-section bg-gray">
			<div class="container">
			  <div class="row">
				  <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>Hasil Testing</h2>
					 <p>Berikut hasilnya</p>
					</div>
				  </div>
			  </div>
			  <?php
	include("cekTrain.php");
	
	echo "<b> Conditional Probabilities : </b><br /><br />";
	echo "
		<table style='width:100%'>
		<tr>
			<td><b> Class Diabetes </b></td>
			<td><b> Class Asma </b></td>
		</tr>";
	$kataTest = explode(" ", $Test);
	
	$nilai1 = array();
	$nilai2 = array();
	
	$total1 = 1;
	$total2 = 1;
	
	for($i=0;$i<count($kataTest);$i++){
		
		$jumlahKata1[$i] = cek_Kata($kata1,$kataTest[$i]);
		$jumlahKata2[$i] = cek_Kata($kata2,$kataTest[$i]);
		
		$nilai1[$i] = ($jumlahKata1[$i]+1)/((count($Diabetes))+($count+1)); 
		$nilai2[$i] = ($jumlahKata2[$i]+1)/((count($Asma))+($count+1)); 
		
		$total1*=$nilai1[$i];
		$total2*=$nilai2[$i];
		
		$nilai1[$i] = bulatkan($nilai1[$i]);
		$nilai2[$i] = bulatkan($nilai2[$i]);
		
		echo 
		"<tr>"
			.cetak_kondisi("Diabetes", $kataTest[$i], $jumlahKata1[$i], $kata1, $count, $nilai1[$i])
			.cetak_kondisi("Asma", $kataTest[$i], $jumlahKata2[$i], $kata2, $count, $nilai2[$i])
			."</tr>";
	}
	echo "</table><br/><br/>";
	echo count($jumlahKata1)." of ".count($kataTest)."<br/><br/>";
	
	echo "<b>Choosing a class : </b><br/><br/>";
	echo "P (Diabetes | ".$_POST['doc'].") = ".$P1 ." * ";
	for($i=0;$i<count($kataTest);$i++){
		if($i==count($kataTest)-1)
			echo $nilai1[$i]." = ".($P1*$total1);
		else
			echo $nilai1[$i]." * ";
	}
	echo "<br/><br/>P (Asma | ".$_POST['doc'].") = ".$P2 ." * ";
	for($i=0;$i<count($kataTest);$i++){
		if($i==count($kataTest)-1)
			echo $nilai2[$i]." = ".($P2*$total2);
		else
			echo $nilai2[$i]." * ";
	}
	$kelas = "";
	if($total1>$total2){
			$kelas = "Diabetes";
		}
	else{
			$kelas = "Asma";
		}
	
	echo "<br /><br />Jadi <b>".$_POST['doc']."</b> Masuk ke <b>Kelas ".$kelas."</b>";
?>
</div>

	 <!-- Contact -->
	  <section id="contact" class="home-section bg-white">
	  	
	  </section>  

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Multinomial Naive Bayes Classifier for Biomedical Text. By <b> Kelompok 9</b></p>
				</div>
			</div>		
		</div>	
	</footer>
	 
	 <!-- js -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
</html>