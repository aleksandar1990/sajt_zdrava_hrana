<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Zdrava hrana | GAUS </title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <link rel="shortcut icon" href="style/favicon.ico" type="image/x-icon" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><a href="pocetna.html">Zdrava hrana<span class="logo_colour"> Gaus</span></a></h1>
          <h2>online radnja i savetovalište zdravlja</h2>
          <h2>
             <script type="text/javascript">
			    var d=new Date(); 
	            var weekday=new Array("Nedelja","Ponedeljak","Utorak","Sreda","Cetvrtak","Petak", "Subota");
	            var monthname=new Array("Jan","Feb","Mar","Apr","Maj","Jun","Jul","Avg","Sep","Oct","Nov","Dec"); 
	 			document.write(weekday[d.getDay()] + " ");
				document.write(d.getDate() + ". "); 
				document.write(monthname[d.getMonth()] + " ");
				document.write(d.getFullYear());
			 </script>
  		  </h2>		  
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li><a href="pocetna.html">Po&#269;etna</a></li>
          <li class="selected"><a href="proizvodi.php">Proizvodi</a></li>
          <li><a href="onama.html">O nama</a></li>
          <li><a href="eprodavnica.php">E-Prodavnica</a></li>
          <li><a href="korpa.php">Vaša korpa</a></li>
          <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h3>Poslednje vesti</h3>
        <h4>Novi web sajt je pokrenut</h4>
        <h5>15. Jun 2011</h5>
        <p>Novi veb sajt Zdrave hrane GAUS pokrenut je 15.6.2011. i hostuje se na studentskom serveru Alas.
        <br />
        <a href="novisajt.html">Procitajte više...</a></p>
        <h4>Letnja ishrana</h4>
        <h5>12. Jun 2011</h5>
        <p>Leto je godi&scaron;nje doba koje nam donosi najvi&scaron;e opu&scaron;tanja, odmora pregr&scaron;t   sezonskih plodova. Najrazli&#269;itije vrste vo&#263;a i povr&#263;a u kojima mo&#382;emo da   u&#382;ivamo, osiguravaju nam obilje vitamina i minerala koja podsti&#269;u razli&#269;ita   korisna delovanja u na&scaron;em organizmu.<br />
        <a href="letnja_ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>KAKO JESTI VO&#262;E</h4>
        <h5>11. Jun 2011</h5>
        <p>Svi mi   mislimo da jesti vo&#263;e zna&#269;i samo kupovinu vo&#263;a, se&#269;enje na kri&scaron;ke i stavljanje u   usta. To nije tako jednostavno. Va&#382;no je da znate i kako i kada se jede   vo&#263;e.
        <br />
        <a href="jesti_voce.html">Pro&#269;itajte više...</a></p>
        <h4>Pravilnom ishranom do du&#382;eg i kvalitetnijeg &#382;ivota</h4>
        <h5>10. Jun 2011</h5>
        <p>Jedno od najintigrantnijih pitanja koje mu&#269;e &#269;ove&#269;anstvo je kako   zaustaviti proces starenja, odnosno kako produ&#382;iti &#382;ivotni vek; ose&#263;ati se bolje   i izgledati bolje. Koliko je u svemu tome, zna&#269;aj genetskog nasledja i da li &#269;ovek mo&#382;e, na&#269;inom &#382;ivota u koji spada i ishrana, sam da bitnije uti&#269;e na   sopstveni &#382;ivot?
        <br />
        <a href="ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>Voda</h4>
        <h5>9. Jun 2011</h5>
        <p>Voda daje zivot svemu zivom, nalazi se unutar nas, ulazi sa svakim nasim   gutljajem, sa svakim udahom, okruzuje nas neznim dodirom pare, kapljicama kise,   sneznim pokrivacem, i kao takva povezuje nas sa celim svetom, sa celom Prirodom.
        <br />
        <a href="voda.html">Pro&#269;itajte više...</a></p>
        <h3>Korisni linkovi</h3>
        <ul>
          <li><a href="http://www.zalogaj.com/" target="_blank">zalogaj.com</a></li>
          <li><a href="http://www.zdravahrana.org/" target="_blank">zdravahrana.org</a></li>
          <li><a href="http://www.zdravahrana.com/" target="_blank">zdravahrana.com</a></li>
          <li><a href="http://www.biospajz.rs/" target="_blank">biospajz.rs</a></li>
        </ul>
      </div>
      <div id="content">
        <h1 class="center">Pretraga proizvoda</h1>
        <form action="" method="get" class="center"> 
		<p style="margin:1px;"><label id="pretraga1">Pretraga prema nazivu proizvoda</label>
        </p>
		<p style="margin:1px;">
		  <input type="text" name="naziv" id="naziv" />
		</p>
		<p style="margin:1px;">
        <br/>
		  <label id="pretraga2">Pretraga prema ceni proizvoda</label>
		  </p>
		<p style="margin:1px;">od 
		  <input id="cena1" name="cena1" value="0" size="10" maxlength="4" style="text-align:right" />
		  do
		  <input id="cena2" name="cena2" value="0" size="10" maxlength="4" style="text-align:right" />
		  </p>
		<p style="margin:1px;"><br/>
		  <select name="poredak" >
		    <option value="ASC">Rastuci poredak</option> 
		    <option value="DESC">Opadajuci poredak</option> 
	      </select>
		  <input type="submit" value="pošalji" name="submit"/>
		  </p>
		</form>
        
			
			<?php
			
			include('db.inc');
			db_connect();
			
			$poredak = &$_GET['poredak'];
          
            $naziv = &$_GET['naziv'];
            $cena1 = &$_GET['cena1'];
            $cena2 = &$_GET['cena2'];
			
			$submit = &$_GET['submit'];

     		mysql_query("SET NAMES UTF8") or die(mysql_error()); 
			mysql_set_charset('windows-1252',$connection);
			
			
			if (isset($submit)){
			
			$get = mysql_query("SELECT naziv, cena FROM proizvodi WHERE naziv LIKE '%$naziv%' AND cena > $cena1 AND cena < $cena2 ORDER BY cena $poredak");
			
			if (mysql_num_rows($get)==0){
			  echo "Nema trazenih proizvoda <br />";
			  echo "<br />";
			}
			else{
				      echo "<p class='center'>Rezultat upita </p>";
					  echo "<br/>";	
		 
  				      echo "<table width = 100% border = '1'>";
					  echo "<tr>";
					  echo "<td> Naziv proizvoda </td> ";
					  echo "<td> Cena </td> ";
					  echo "</tr>";                 					 					
					   
					  $redBroj = mysql_num_rows($get);
					  while($row = mysql_fetch_array($get))
					  {
					        
					        echo "<tr>";
							
						    echo "<td>".$row['naziv']."</td> ";
							
						    echo "<td>".$row['cena']."</td> ";	
							
							echo "</tr>";	
					  }
					  echo "</table> ";		  
				}
				}
				else echo "<p class='center'>Pokrenite upit </p>";
				
			echo "<br/>";
            db_disconnect();
        ?>
        
        
</div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Sale | <a href="http://validator.w3.org/check?uri=referer">HTML Validacija</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</body>  
</html>
