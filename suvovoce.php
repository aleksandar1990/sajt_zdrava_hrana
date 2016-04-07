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
        <p>Novi veb sajt Zdrave hrane GAUS pokrenut je 15.6.2011. i hostuje se na studentskom serveru Alas.<br /><a href="novisajt.html">Procitajte više...</a></p>
        <h4>Letnja ishrana</h4>
        <h5>12. Jun 2011</h5>
        <p>Leto je godi&scaron;nje doba koje nam donosi najvi&scaron;e opu&scaron;tanja, odmora pregr&scaron;t sezonskih plodova. Najrazli&#269;itije vrste vo&#263;a i povr&#263;a u kojima mo&#382;emo da u&#382;ivamo, osiguravaju nam obilje vitamina i minerala koja podsti&#269;u razli&#269;ita   korisna delovanja u na&scaron;em organizmu.<br />
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
        <p>Voda daje zivot svemu zivom, nalazi se unutar nas, ulazi sa svakim nasim   gutljajem, sa svakim udahom, okruzuje nas neznim dodirom pare, kapljicama&nbsp; kise,   sneznim pokrivacem, i kao takva povezuje nas sa celim svetom, sa celom&nbsp;   Prirodom.
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
      
        <h1>Suvo vo&#263;e</h1>
        <h1>Suva &scaron;ljiva - pakovana - bez ko&scaron;tica 200gr</h1>
        <DIV>
          <p><img src="style/suvovoce/suva-sljiva-sa-kosticom.jpg" alt="" class="left" width="218" height="172">Suve &scaron;ljive su posebno bogate vitaminom A, riboflavinom i vitaminom C,   kalcijumom i magnezijumom. Suve &scaron;ljive imaju i medicinsko zna&#269;enje zahvaljuju&#263;i   laksativnom u&#269;inku koji se mo&#382;e iskoristiti kod slu&#269;ajeva zatvora, naro&#269;ito kod   male djece i kod starijih ljudi. Osim toga, istra&#382;ivanja vezana za   antioksidativna i antikancerogena svojstva vo&#263;a, pokazala su da su suve &scaron;ljive   me&#273;u najbogatijim plodovima, ne samo vo&#263;a, ve&#263; i povr&#263;a sa tim svojstvima.</p>
</DIV>
    <div class="right"><strong> Cena: 110.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="13" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />x 200g. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
      <h1>Suva &scaron;ljiva - bez ko&scaron;tice</h1>
        <DIV>
          <p><img src="style/suvovoce/suva-sljiva-bez-kostice.jpg" alt="" class="left" width="218" height="172">
          Suve &scaron;ljive su posebno bogate vitaminom A, riboflavinom i vitaminom C,   kalcijumom i magnezijumom. Suve &scaron;ljive imaju i medicinsko zna&#269;enje zahvaljuju&#263;i   laksativnom u&#269;inku koji se mo&#382;e iskoristiti kod slu&#269;ajeva zatvora, naro&#269;ito kod   male djece i kod starijih ljudi. Osim toga, istra&#382;ivanja vezana za   antioksidativna i antikancerogena svojstva vo&#263;a, pokazala su da su suve &scaron;ljive   me&#273;u najbogatijim plodovima, ne samo vo&#263;a, ve&#263; i povr&#263;a sa tim svojstvima.</p>
          </DIV>
     <div class="right"><strong> Cena: 430.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="14" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
       <br/>    
        <h1>Suva kajsija</h1>
        <DIV>
           <p><img src="style/suvovoce/suva-kajsija.jpg" alt="" class="left" width="218" height="172">
           Plodovi sadr&#382;e znatne koli&#269;ine vitamina A koji je poznat kao sna&#382;an antioksidans   i za&scaron;titnik od degenerativnih poreme&#263;aja. Sadr&#382;e i mnoge vitamine B grupe,   vitamin C i minerale kao sto su kalcijum, fosfor i kalijum. Sve te hranjive   stvari su jo&scaron; koncentriranije u suvim kajsijama. Tako se, su&scaron;enjem 100 grama   kajsija koli&#269;ina vitamina A pove&#263;ava sa 2600 IJ na 7000 IJ vitamina; veoma su   korisne za anemi&#269;ne osobe i zahvaljuju&#263;i njihovoj izrazito visokoj koncentraciji gvozdja.</p>
           </DIV>
     <div class="right"><strong> Cena: 845.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="15" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
        <h1>Suvo gro&#382;&#273;e</h1>
        <DIV>
          <p><img src="style/suvovoce/suvo-grozdje.jpg" alt="" class="left" width="218" height="172">
          Gro&#382;&#273;e pripada rodu Vitis koji u sebi uklju&#269;uje brojne sorte crnog, bijelog,   stolnog i vinskog gro&#382;&#273;a. Crne sorte su uglavnom ja&#269;e kiselosti i manje koli&#269;ine   &scaron;e&#263;era, dok je bijelo gro&#382;&#273;e sla&#273;e i manje kiselo. Od svog svje&#382;eg vo&#263;a, gro&#382;&#273;e   je najbogatije ugljikohidratima, tako da kroz njega mo&#382;emo dobiti znatnu   koli&#269;inu energije. Bogato je mnogim hranjivim stvarima i veoma zdravo. Samo   odre&#273;ene sorte gro&#382;&#273;a se su&scaron;e &#269;ime se dobija suvo grozdje, koje su jo&scaron;   koncentriranije u svom bogatstvu razli&#269;itih hranjivih sastojaka; veoma je zdravo   i ukusan je izvor prirodnog &scaron;e&#263;era, povezanog sa biljnim vlaknima, tako da ga   mo&#382;emo uvijek koristiti u zamjenu za &scaron;e&#263;er.</p>
        </DIV>
     <div class="right"><strong> Cena: 320.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="16" />
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
