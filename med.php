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
        <br />
        <a href="novisajt.html">Procitajte više...</a></p>
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
        <p>Jedno od najintigrantnijih pitanja koje mu&#269;e &#269;ove&#269;anstvo je kako   zaustaviti proces starenja, odnosno kako produ&#382;iti &#382;ivotni vek; ose&#263;ati se bolje   i izgledati bolje. Koliko je u svemu tome, zna&#269;aj genetskog nasledja i da li   &#269;ovek mo&#382;e, na&#269;inom &#382;ivota u koji spada i ishrana, sam da bitnije uti&#269;e na   sopstveni &#382;ivot?
        <br />
        <a href="ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>Voda</h4>
        <h5>9. Jun 2011</h5>
        <p>Voda daje zivot svemu zivom, nalazi se unutar nas, ulazi sa svakim nasim   gutljajem, sa svakim udahom, okruzuje nas neznim dodirom pare, kapljicama kise,sneznim pokrivacem, i kao takva povezuje nas sa celim svetom, sa celom Prirodom.
        <br /><a href="voda.html">Pro&#269;itajte više...</a></p>
        <h3>Korisni linkovi</h3>
        <ul>
          <li><a href="http://www.zalogaj.com/" target="_blank">zalogaj.com</a></li>
          <li><a href="http://www.zdravahrana.org/" target="_blank">zdravahrana.org</a></li>
          <li><a href="http://www.zdravahrana.com/" target="_blank">zdravahrana.com</a></li>
          <li><a href="http://www.biospajz.rs/" target="_blank">biospajz.rs</a></li>
        </ul>
      </div>
      <div id="content">
      
        <h1>Proizvodi od meda</h1>
        <h1>Med - lipov 1kg</h1>
        <DIV>
         <p><img src="style/med/med-lipov.jpg" alt="" class="left" width="218" height="172"></p>
         <p>Doma&#263;i lipov med sa planine Jastrebac.</p>
         <br/>
         <br/>
         <br/>
         <br/>
         <br/>
         <br/>
        </DIV>
    <div class="right"><strong> Cena: 490.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="17" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
      <h1>Med - bagrem 1kg</h1>
        <DIV>
          <p><img src="style/med/med-bagremov.jpg" alt="" class="left" width="218" height="172"></p>
          <p>Doma&#263;i bagremov med sa planine Jastrebac.</p> 
          <br/>
          <br/>
          <br/>
          <br/>
          <br/>
        </DIV>
     <div class="right"><strong> Cena: 500.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="18" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
       <br/>    
        <h1>Med PLUS</h1>
        <DIV>
           <p><img src="style/med/med-plus.jpg" alt="" class="left" width="218" height="172">Med plus je izra&#273;en od tri vrste meda, mati&#269;nog mle&#269;a, polena i propolisa   visokog kvaliteta, poreklom sa planine Jastrebac. Preporu&#269;uje se kao preventiva   protiv malokrvnosti, za imunitet, pravilan razvoj dece, ja&#269;anje organizma   (protiv zamora kod rekovalescenata, starih osoba, sportista i sl.) U dijeti kao   zamena ili dopuna za obrok, za izbacivanje otrovnih supstanci iz organizma,   vitalnost, regulisanje metabolizma, cirkulaciju, kod postoperativnih stanja itd.   Tako&#273;e poma&#382;e kod gripa, oboljenja ko&#382;e, vida, pam&#263;enja, disajnih puteva, organa   za varenje, smanjuje holesterol i reguli&scaron;e krvni pritisak. Bez ve&scaron;ta&#269;kih   dodataka. Sastav: vitamini (A, B kompleks, C, K, D, E, PP, H), minerali (Na, K,   Ca, Mg, Al, Fe, Mn, CI, Zn, S, Pb, Ba, Co, sn, Au, Bi, Li, Mo, Ag, Sr, P),   aminokiseline, fermenti, ugljeni hidrati, belan&#269;evine, masti, mineralne soli,   masne kiseline itd. Pre upotrebe masu dobro prome&scaron;ati, 3x1 ka&scaron;i&#269;ica (plasti&#269;na, drvena) dnevno. Masu polako otopiti u ustima.</p>
</DIV>
     <div class="right"><strong> Cena: 510.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="19" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
        <h1>Propolis za decu</h1>
        <DIV>
          <p><img src="style/med/propolis-za-decu.jpg" alt="" class="left" width="218" height="172">Propolis je najzna&#269;ajniji p&#269;elinji proizvod i prirodni antibiotik. Ispoljava   antibakterijsko, antimikoti&#269;no, antivirusno, antiparazitsko, antioksidativno i   imunostimuliraju&#263;e dejstvo. Povoljno deluje na ja&#269;anje otpornosti organizma, a   mo&#382;e se koristiti kod upale usta, grla, nosa i uha, kao i dermatokozetologiji,   kod povr&scaron;onskih rana i infekcija na ko&#382;i i sluzoko&#382;i, aktiviraju&#263;i enzime   &#263;elijskog metabolizma &#269;ime stimuli&scaron;e procesa regeneracije i epitelizacije   o&scaron;te&#263;enog tkiva.</p>
        </DIV>
    <div class="right"><strong> Cena: 160.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="20" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />x 100g. 
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
