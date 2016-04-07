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
        <p>Novi veb sajt Zdrave hrane GAUS pokrenut je 15.6.2011. i hostuje se na studentskom serveru Alas.<br />
        <a href="novisajt.html">Procitajte više...</a></p>
        <h4>Letnja ishrana</h4>
        <h5>12. Jun 2011</h5>
        <p>Leto je godi&scaron;nje doba koje nam donosi najvi&scaron;e opu&scaron;tanja, odmora pregr&scaron;t   sezonskih plodova. Najrazli&#269;itije vrste vo&#263;a i povr&#263;a u kojima mo&#382;emo da   u&#382;ivamo, osiguravaju nam obilje vitamina i minerala koja podsti&#269;u razli&#269;ita   korisna delovanja u na&scaron;em organizmu.
        <br />
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
      
        <h1>Dijetetski proizvodi</h1>
        <h1>Fave - Natural Twist</h1>
        <DIV>PRIRODNI DIJETETSKI SAPLEMENT Sme&scaron;a za napitak od boba. Biolo&scaron;ki aktivne   komponente: Izoflavoni &#269;ija je koncentracija veoma velika u bobu, dobijeni   tehnolo&scaron;kom obradom ove biljke, pokazuju mnogobrojne povoljne efekte po zdravlje   ljudi. Oni su prirodni antioksidansi, deluju povoljno na simptome menopauze,   preventivno deluju na kancer, smanjuju&#263;i rizik nastanka kancera materice, dojke   i prostate. Prisutni izoflavoni iz boba pokazuju antiestrogeni efekat, u smislu   smanjenja rizika nastanka mioma materice (fibroida), kao i preventivnom   delovanju na nastanak endometrioze. Efekat ispoljavaju vezuju&#263;i se za estrogene   receptore. Pakovanje: 325g Svi povoljni navedeni efekti dokumentovani su   mnogobrojnim studijama. Proizvodi: Lenic Laboratories.</DIV>
    
    <div class="right"><strong> Cena: 520.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="29" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
      <h1>Homeo - Natural Twist</h1>
        <DIV>DIJETETSKI PROIZVOD Sastav: Surutka u prahu sa minimalnim procentom soli (NaCl),   tehnolo&scaron;ki i termi&#269;ki obra&#273;en integralnim pirin&#269;em u prahu, suvi pivski kvasac u   prahu. Sadr&#382;aj: Proizvod je visoke nutritivne vrednosti, sadr&#382;i lako svarljive i   visoko kvalitetne proteine, mineralne materije &ndash; makro, mikro i oligo elemente,   posebno Ca, P, Mg, vitamine, naro&#269;ito one iz B &ndash; grupe. Zbog visoke   koncentracije Ca (kalcijum) u obliku Ca &ndash; laktata i skoro idealnom odnosu   Ca:P:Mg-3:2:1 i visokog procenta resorpcije Ca, proizvod se preporu&#269;uje kod   obolelih od osteopenije i osteoporoze i to kako u cilju spre&#269;avanja nastanka   ovih oboljenja tako i u njihovom tretmanu. Osobe koje koriste ovaj proizvod   nemaju ne&#382;eljene posledice. Pakovanje: 325g Proizvodi: Lenic Laboratories</DIV>
    <div class="right"><strong> Cena: 580.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="30" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
       <br/>    
        <h1>Imuno - Natural Twist</h1>
        <DIV>DIJETETSKI PROIZVOD Sastav: Surutka u prahu sa minimalnim procentom soli (NaCl),   tehnolo&scaron;ki i termi&#269;ki obra&#273;en integralnim pirin&#269;em u prahu, bob u prahu. Ovaj   proizvod se preporu&#269;uje celija&#269;nim bolesnicima, obolelima od Crohnove bolesti,   kod svih stanja malnutricije (smanjena mogu&#263;nost iskori&scaron;&#263;enja hranljivih   materija), a naro&#269;ito onih uzrokovanih malignim oboljenjima. Zbog usporene   resorpcije &scaron;e&#263;era i prisustva dijetetskih vlakana mogu ga koristiti i   dijabeti&#269;ari a dobre rezultate posti&#382;e i kao pomo&#263;no sredstvo u osnovnoj   terapiji regulisanja metabolizma masti &ndash; holesterola i triglicerida. Pakovanje:   325g i 650g </DIV>
     <div class="right"><strong> Cena: 550.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="31" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
        <h1>Protein 80 - Natural Twist - 500g</h1>
        <DIV>DIJETETSKI PROIZVOD 100% IZOLOVANI PROTEINI SURUTKE &ndash; WHEY PROTEIN Proizvod   sadr&#382;i visoko vredne surutkine proteine u koli&#269;ini od 80g &#269;istih proteina u 100g   gotovog proizvoda. Iskoristljivost proteina je 96,3%. Iz tablice se vidi da   proizvod predstavlja idealan dodatak ishrani osobama koje &#382;ele da uve&#263;aju   mi&scaron;i&#263;nu masu i oblikuju svoje telo i figuru. Uz ovaj preparat obavezno unositi i   preparate kalcijuma. Pakovanje: 500g Lizin igra va&#382;nu ulogu u apsorpciji   kalcijuma, izgradnji ko&scaron;tane mase, rastu mi&scaron;i&#263;a i kolagene formacije. Leucin,   izoleucin i valin su bitni za stabilnost centralnog nervnog sistema. L-arginin,   amino kiselina kojom ovaj proizvod obiluje (vidi tablicu) va&#382;na je za op&scaron;ti   imunitet organizma. Tako&#273;e, ona je prekursor nitric-oxida, koji ima efekta u   pro&scaron;irenju krvnih sudova, pa samim tim i u boljoj prokrvljenosti. L-arginin je i   prekursor kreatina, koji je glavni u metabolizmu mi&scaron;i&#263;nih &#263;elija. Zahvaljuju&#263;i   l-argininu, osobe koje ga unose redovno i u dovoljnoj koli&#269;ini imaju mladala&#269;ki   izgled, jer on usporava proces starenja i stvaranja bora ko&#382;e. Glutamin se u   mi&scaron;i&#263;ima produkuje iz glutamic-acida (vidi tablicu), koji je neophodan za   &#263;elijsko umno&#382;avanje. Proizvodi: Lenic Laboratories </DIV>
     <div class="right"><strong> Cena: 1170.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="32" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />x 500g. 
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
