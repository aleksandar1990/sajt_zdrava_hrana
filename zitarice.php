<?php
			include('db.inc');
			db_connect();

			//ubacuje prazan red da bi ostavio prostor za kupca koji ubacuje u korpu
			mysql_query("INSERT INTO kupci (ime, prezime, email) VALUES ('', '', '')") or die(mysql_error()); 

			$noviid=mysql_insert_id();
			
			if (isset($_COOKIE['idkupca']))
				echo "" ;
			else
				setcookie("idkupca", $noviid, time()+500);
				
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
        <p>Novi veb sajt Zdrave hrane GAUS pokrenut je 15.6.2011. i hostuje se na studentskom serveru Alas.
        <br /><a href="novisajt.html">Procitajte više...</a></p>
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
        <p>Jedno od najintigrantnijih pitanja koje mu&#269;e &#269;ove&#269;anstvo je kako   zaustaviti proces starenja, odnosno kako produ&#382;iti &#382;ivotni vek; ose&#263;ati se bolje   i izgledati bolje. Koliko je u svemu tome, zna&#269;aj genetskog nasledja i da li   &#269;ovek mo&#382;e, na&#269;inom &#382;ivota u koji spada i ishrana, sam da bitnije uti&#269;e na   sopstveni &#382;ivot?
        <br /><a href="ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>Voda</h4>
        <h5>9. Jun 2011</h5>
        <p>Voda daje zivot svemu zivom, nalazi se unutar nas, ulazi sa svakim nasim   gutljajem, sa svakim udahom, okruzuje nas neznim dodirom pare, kapljicama kise,   sneznim pokrivacem, i kao takva povezuje nas sa celim svetom, sa celom Prirodom.<br />
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
      
        <h1>&#381;itarice</h1>
        <h1>Crvena p&scaron;enica</h1>
        <DIV>
          <p><img src="style/zitarice/crvena_psenica.JPG" alt="" class="left" width="218" height="172"></p>
          <p>Integralno zrno p&scaron;enice je jedan od najboljih izvora primarnih belan&#269;evina, a   tako&#273;e sadr&#382;i i esencijalne minerale (P, Mg, Ca, Fe) i vitamine (provitamin A,   vitamine B kompleksa, E, D i K) u zna&#269;ajnim koli&#269;inama. P&scaron;eni&#269;ne klice su bogate   masno&#263;ama (12%), vitaminima E, i &scaron;e&#263;erima: saharoza i maltoza.</p>
           <br/>
           <br/>
          </DIV>
    <div class="right"><strong> Cena: 60.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="1" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
      <h1>Je&#269;am</h1>
        <DIV>
        <p><img src="style/zitarice/jecam.JPG" alt="" class="left" width="218" height="172"></p>
        <p>Je&#269;am se lako vari i bogat je vitaminima B kompleksa. Posebno se isti&#269;e vitamin   B5 koji je neophodan za metabolizam. Sadr&#382;i veliki procenat nezasi&#263;enih masnih   kiselina, i time doprinosi sni&#382;avanju holesterola u krvi.</p>
        <br/>
        <br/></DIV>
     <div class="right"><strong> Cena: 70.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="2" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
       <br/>    
        <h1>Ra&#382; - zrno</h1>
        <DIV>
         <p><img src="style/zitarice/raz.JPG" alt="" class="left" width="218" height="172"></p>
         <p>Ra&#382; je &#382;itarica bogata mineralima, naro&#269;ito kalijumom, fosforom i magnezijom, sadr&#382;i vitamine B kompleksa i vitamin E; pogodan je zato sto ima malu koli&#269;inu   glutena , tako da je hleb koji se radi isklju&#269;ivo od ra&#382;enog bra&scaron;na veoma gust i   tvrd, i treba ga kombinovati sa p&scaron;eni&#269;nim bra&scaron;nom ili sa nekim drugim bra&scaron;nom.   Razani hleb ima manje skroba, pa ga i dijabeti&#269;ari mogu koristiti.</p>
        </DIV>
     <div class="right"><strong> Cena: 60.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="3" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
        <h1>Ovas - neolju&scaron;teno zrno</h1>
        <DIV>
         <p><img src="style/zitarice/ovas_%20neolju%9ateno_zrno.JPG" alt="" class="left" width="218" height="172"></p>
         <p>U narodnoj medicini neolju&scaron;teni ovas se koristi kao &#269;aj koji se smatra dobrim   tonikom za nerve,
          lekom protiv zatvora i gr&#269;eva. Poma&#382;e kod detoksikacije   organizma, kod odvikavanje od pu&scaron;enja 
          i drugih bolestizavisnosti.</p>
         <br/>
         <br/>
        </DIV>
     <div class="right"><strong> Cena: 60.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="4" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>  
        <h1>Pirina&#269; - integralni</h1>
        <DIV>
         <p><img src="style/zitarice/integralni-pir.jpg" alt="" class="left" width="218" height="172"></p>
         <p>Pirinac je bogat mineralima, naro&#269;ito fosforom i kalijumom, a sadr&#382;i i Mg, Ca,   Mn, Fe, Cu, Zn i druge minerale. Od vitamina najvi&scaron;e ima vitamina E, kao i sve   vitamine B kompleksa. Sa integralnog pirin&#269;a se odstranjuje samo spoljna ljuska   tako da zadr&#382;ava sve hranljive i za&scaron;titne sastojke celog zrna. Zahteva du&#382;e   kuvanje i osnovna je namirnica u makrobiotskoj ishrani.</p>
        </DIV>
     <div class="right"><strong> Cena: 170.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="5" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
      <br/>   
        <h1>Pirina&#269; - vitaminizirani</h1>
        <DIV>
         <p><img src="style/zitarice/vitaminizirani.jpg" alt="" class="left" width="218" height="172"></p>
         <p>Pirinac je bogat mineralima, naro&#269;ito fosforom i kalijumom, a sadr&#382;i i Mg, Ca,   Mn, Fe, Cu, Zn i druge minerale. Od vitamina najvi&scaron;e ima vitamina E, kao i sve   vitamine B kompleksa.</p>
         <br/>
         <br/>
        </DIV>
     <div class="right"><strong> Cena: 190.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="6" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
    <br/>
    <br/>
  </div>    
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Sale | <a href="http://validator.w3.org/check?uri=referer">HTML Validacija</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</html>
