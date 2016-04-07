<?php
			include('db.inc');
			db_connect();

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
        <h4><a href="pretraga.php">PRETRAGA PROIZVODA</a></h4>
        <h3>Poslednje vesti</h3>
        <h4>Novi web sajt je pokrenut</h4>
        <h5>15. Jun 2011</h5>
        <p>Novi veb sajt Zdrave hrane GAUS pokrenut je 15.6.2011. i hostuje se na studentskom serveru Alas.<br /><a href="novisajt.html">Procitajte više...</a></p>
        <h4>Letnja ishrana</h4>
        <h5>12. Jun 2011</h5>
        <p>Leto je godi&scaron;nje doba koje nam donosi najvi&scaron;e opu&scaron;tanja, odmora pregr&scaron;t   sezonskih plodova. Najrazli&#269;itije vrste vo&#263;a i povr&#263;a u kojima mo&#382;emo da   u&#382;ivamo, osiguravaju nam obilje vitamina i minerala koja podsti&#269;u razli&#269;ita   korisna delovanja u na&scaron;em organizmu.<br /><a href="letnja_ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>KAKO JESTI VO&#262;E</h4>
        <h5>11. Jun 2011</h5>
        <p>Svi mi   mislimo da jesti vo&#263;e zna&#269;i samo kupovinu vo&#263;a, se&#269;enje na kri&scaron;ke i stavljanje u   usta. To nije tako jednostavno. Va&#382;no je da znate i kako i kada se jede   vo&#263;e.
        <br />
        <a href="jesti_voce.html">Pro&#269;itajte više...</a></p>
        <h4>Pravilnom ishranom do du&#382;eg i kvalitetnijeg &#382;ivota</h4>
        <h5>10. Jun 2011</h5>
        <p><SPAN lang="SR">Jedno od najintigrantnijih pitanja koje mu&#269;e &#269;ove&#269;anstvo je kako   zaustaviti proces starenja, odnosno kako produ&#382;iti &#382;ivotni vek; ose&#263;ati se bolje   i izgledati bolje. Koliko je u svemu tome, zna&#269;aj genetskog nasledja i da li   &#269;ovek mo&#382;e, na&#269;inom &#382;ivota u koji spada i ishrana, sam da bitnije uti&#269;e na   sopstveni &#382;ivot?</SPAN><br /><a href="ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>Voda</h4>
        <h5>9. Jun 2011</h5>
        <p>Voda daje zivot svemu zivom, nalazi se unutar nas, ulazi sa svakim nasim   gutljajem, sa svakim udahom, okruzuje nas neznim dodirom pare, kapljicama kise,   sneznim pokrivacem, i kao takva povezuje nas sa celim svetom, sa celom&nbsp;   Prirodom.<br /><a href="voda.html">Pro&#269;itajte više...</a></p>
        <h3>Korisni linkovi</h3>
        <ul>
          <li><a href="http://www.zalogaj.com/" target="_blank">zalogaj.com</a></li>
          <li><a href="http://www.zdravahrana.org/" target="_blank">zdravahrana.org</a></li>
          <li><a href="http://www.zdravahrana.com/" target="_blank">zdravahrana.com</a></li>
          <li><a href="http://www.biospajz.rs/" target="_blank">biospajz.rs</a></li>
        </ul>
      </div>
      <div id="content">
      
        <h1>Ko&scaron;tunjavo vo&#263;e</h1>
        <h1>Orah</h1>
        <DIV>
           <p><img src="style/kosvoce/orah.jpg" alt="" class="left" width="218" height="172">Orah ima uljasti aromati&#269;an ukus i sadr&#382;i puno prijatnog ulja te se uglavnom   koristi u pravljenju torti i kola&#269;a, za filovanja i salate. Bogat je izvor   belan&#269;evina, ulja i vitamina E i folne kiseline. Obiluje mineralima, uklju&#269;uju&#263;i   gvo&#382;&#273;e, kalcijum, cink, magnezijum, kalijum. Sadr&#382;i va&#382;ne masne kiseline koje   ja&#269;aju imunitet i &scaron;tite srce i krvne sudove. Ja&#269;a funkcije bubrega i plu&#263;a i   poma&#382;e metabolizam. Reguli&scaron;e nivo holesterola u krvi i smanjuje &scaron;tetni LDL   holesterol. U kombinaciji sa medom va&#382;i za afrodizijak. Spre&#269;ava nesanicu.</p>
</DIV>
    <div class="right"><strong> Cena: 1500.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="21" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
      <h1>Le&scaron;nik</h1>
        <DIV>
          <p><img src="style/kosvoce/lesnik.jpg" alt="" class="left" width="218" height="172">
          <p>Veoma je bogat proteinima, nezasi&#263;enim mastima, tiaminom i vitaminom B6. Seme   preko sebe ima tanku, tamno braon ljusku koja je gorkog ukusa i koja se neretko   skida pre kuvanja.</p>
          <br/>
          <br/>
          <br/>
        </DIV>
     <div class="right"><strong> Cena: 830.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="22" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
       <br/>    
        <h1>Pista&#263;</h1>
        <DIV>
          <p><img src="style/kosvoce/pistaci.jpg" alt="" class="left" width="218" height="172"> </p>
          <p>Pista&#263; je veoma bogat kalijumom, kalcijumom, fosforom, magnezijumom, a i vitaminima A, C i E kao i folatima. Vrlo je efikasan kod regulicije nivoa   holesterola, a prema mi&scaron;ljenju brojnih stru&#269;njaka jedna &scaron;aka pista&#263;a dnevno   predstavlja dobru za&scaron;titu od kardiovaskularnih bolesti.</p>
        </DIV>
     <div class="right"><strong> Cena: 1450.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="23" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
        <h1>Indijski orah</h1>
        <DIV>
           <p><img src="style/kosvoce/indijski-orah.jpg" alt="" class="left" width="218" height="172"> U semenu je sva energija biljke i tu su koncentrisani svi hranljivi sastojci   koji su neophodni biljci za rast i razvoj, pa su semenke energetski veoma bogate   i posebno se preporu&#269;uju kod mentalnih naprezanja i kori&scaron;&#263;enja kompjutera,   u&#269;enicima i studentima i kod izuzetnih intelektualnih aktivnosti. Indijski orah   generalno sadr&#382;i visok procenat fosfora, &#269;ak 20 puta vi&scaron;e od ribljeg mesa, koje   je poznato po visokom sadr&#382;aju fosfora.</p></DIV>
    <div class="right"><strong> Cena: 1265.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="24" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Sale | <a href="http://validator.w3.org/check?uri=referer">HTML Validacija</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</html>
