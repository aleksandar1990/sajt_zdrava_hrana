<?php 
			include('db.inc');
			db_connect();

     		mysql_query("SET NAMES UTF8") or die(mysql_error()); 
			mysql_set_charset('windows-1252',$connection);
					
			//ubacuje prazan red da bi ostavio prostor za kupca koji ubacuje u korpu
			mysql_query("INSERT INTO kupci (ime, prezime, email) VALUES ('', '', '')") or die(mysql_error()); 
			
			$noviid=mysql_insert_id();
			
			if (isset($_COOKIE['idkupca']))
				echo "" ;
			else
				setcookie("idkupca", $noviid, time()+1000);

			db_disconnect();
 ?>

<!DOCTYPE HTML>

<html>

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
          <li><a href="proizvodi.php">Proizvodi</a></li>
          <li><a href="onama.html">O nama</a></li>
          <li class="selected"><a href="eprodavnica.php">E-Prodavnica</a></li>
          <li><a href="korpa.php">Vaša korpa</a></li>
          <li><a href="kontakt.html">Kontakt</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div class="sidebar">
	    <h4><a href="pretraga.php">PRETRAGA PROIZVODA</a></h4>
        <h3>Poslednje vesti</h3>
        <h4>Novi web sajt je pokrenut</h4>
        <h5>15. Jun 2011</h5>
        <p>Novi veb sajt Zdrave hrane GAUS pokrenut je 15.6.2011. i hostuje se na studentskom serveru Alas.<br />
        <a href="novisajt.html">Procitajte više...</a></p>
        <h4>Letnja ishrana</h4>
        <h5>12. Jun 2011</h5>
        <p>Leto je godi&scaron;nje doba koje nam donosi najvi&scaron;e opu&scaron;tanja, odmora pregr&scaron;t  sezonskih plodova. Najrazli&#269;itije vrste vo&#263;a i povr&#263;a u kojima mo&#382;emo da   u&#382;ivamo, osiguravaju nam obilje vitamina i minerala koja podsti&#269;u razli&#269;ita korisna delovanja u na&scaron;em organizmu.<br />
        <a href="letnja_ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>KAKO JESTI VO&#262;E</h4>
        <h5>11. Jun 2011</h5>
        <p>Svi mi   mislimo da jesti vo&#263;e zna&#269;i samo kupovinu vo&#263;a, se&#269;enje na kri&scaron;ke i stavljanje u   usta. To nije tako jednostavno. Va&#382;no je da znate i kako i kada se jede   vo&#263;e.
        <br />
        <a href="jesti_voce.html">Pro&#269;itajte više...</a></p>
        <h4>Pravilnom ishranom do du&#382;eg i kvalitetnijeg &#382;ivota</h4>
        <h5>10. Jun 2011</h5>
        <p>Jedno od najintigrantnijih pitanja koje mu&#269;e &#269;ove&#269;anstvo je kako   zaustaviti proces starenja, odnosno kako produ&#382;iti &#382;ivotni vek; ose&#263;ati se bolje   i izgledati bolje. Koliko je u svemu tome, zna&#269;aj genetskog nasledja i da li   &#269;ovek mo&#382;e, na&#269;inom &#382;ivota u koji spada i ishrana, sam da bitnije uti&#269;e na   sopstveni &#382;ivot?
        <br />
        <a href="ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>Voda</h4>
        <h5>9. Jun 2011</h5>
        <p>Voda daje zivot svemu zivom, nalazi se unutar nas, ulazi sa svakim nasim   gutljajem, sa svakim udahom, okruzuje nas neznim dodirom pare, kapljicama&nbsp; kise,   sneznim pokrivacem, i kao takva povezuje nas sa celim svetom, sa celom&nbsp;   Prirodom.<br />
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
        <h1>E-PRODAVNICA</h1>
        <p>Zahvaljujemo se na interesu koji ste pokazali prilikom posete našoj internet prodavnici, cija ponuda još nije dovršena. Izvinjavamo Vam se ako trenutno niste u mogucnosti da dodete do željenih proizvoda. Nadamo se da cete nas ponovo posetiti kada budemo kompletirali našu ponudu.</p>
               <h1>Proizvodi</h1>
        <ol>
          <li><a href="zitarice.php">Žitarice</a> <a href="zitarice.php"><img src="style/zitarice.jpg" alt="zitarice" width="250" height="187"></a></li>
          
          <li><a href="semenke.php">Semenke</a> <a href="semenke.php"> <img src="style/semenke.jpg" alt="semenke" width="245" height="158"></a></li>
          
          <li><a href="suvovoce.php">Suvo voce</a> <a href="suvovoce.php"> <img src="style/suvo-voce.jpg" alt="suvo_voce" width="240" height="190" ></a></li>
         
          <li><a href="med.php">Proizvodi od meda</a> <a href="med.php"> <img src="style/med.jpg" alt="med" width="211" height="175" ></a></li>
         
		  <li><a href="kosvoce.php">Koštunjavo vo&#263;e</a> <a href="kosvoce.php"> <img src="style/kostunjavo.jpg" alt="kostunjavo_voce" width="318" height="162" ></a></li>
          
		  <li><a href="makrobiotika.php">Makrobiotika</a> <a href="makrobiotika.php"> <img src="style/makrobiotika.jpg" alt="makrobiotika" width="308" height="219" ></a></li>
          
          <li><a href="dijetski.php">Dijetetski proizvodi </a> <a href="dijetski.php"> <img src="style/dijet.jpg" alt="dijetski_proizvodi" width="243" height="157" ></a></li>
        </ol>
        
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Sale | <a href="http://validator.w3.org/check?uri=referer">HTML Validacija</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</html>
