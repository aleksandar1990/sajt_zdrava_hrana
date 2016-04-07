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
        <p>Leto je godi&scaron;nje doba koje nam donosi najvi&scaron;e opu&scaron;tanja, odmora pregr&scaron;t   sezonskih plodova. Najrazli&#269;itije vrste vo&#263;a i povr&#263;a u kojima mo&#382;emo da   u&#382;ivamo, osiguravaju nam obilje vitamina i minerala koja podsti&#269;u razli&#269;ita   korisna delovanja u na&scaron;em organizmu.<br />
        <a href="letnja_ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>KAKO JESTI VO&#262;E</h4>
        <h5>11. Jun 2011</h5>
        <p>Svi mi   mislimo da jesti vo&#263;e zna&#269;i samo kupovinu vo&#263;a, se&#269;enje na kri&scaron;ke i stavljanje u   usta. To nije tako jednostavno. Va&#382;no je da znate i kako i kada se jede   vo&#263;e.
        <br />
        <a href="jesti_voce.html">Pro&#269;itajte više...</a></p>
        <h4>Pravilnom ishranom do du&#382;eg i kvalitetnijeg &#382;ivota</h4>
        <h5>10. Jun 2011</h5>
        <p><SPAN lang="SR">Jedno od najintigrantnijih pitanja koje mu&#269;e &#269;ove&#269;anstvo je kako   zaustaviti proces starenja, odnosno kako produ&#382;iti &#382;ivotni vek; ose&#263;ati se bolje   i izgledati bolje. Koliko je u svemu tome, zna&#269;aj genetskog nasledja i da li &#269;ovek mo&#382;e, na&#269;inom &#382;ivota u koji spada i ishrana, sam da bitnije uti&#269;e na   sopstveni &#382;ivot?</SPAN><br /><a href="ishrana.html">Pro&#269;itajte više...</a></p>
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
      
        <h1>Makrobiotika</h1>
        <h1>Morske alge - Kombu - 25g</h1>
        <DIV>Kombu je alga iz dubokog mora koja najbolje raste u sve&#382;oj vodi na severu.   Japanski kombu visokog kvaliteta ubira se u hladnom severnom moru ostrva   Hokaido. Kombu alga sadr&#382;i algini&#269;ku kiselinu koja joj i daje tako po&#382;eljan   ukus. Algini&#269;ka kiselina poma&#382;e da se ukloni holesterol iz tela, reguli&scaron;e krvni   pritisak i ubrzava rad creva. Ona tako&#273;e poma&#382;e da se spre&#269;i apsorpcija   stroncijuma i kadmijuma u telo.</DIV>
    
    <div class="right"><strong> Cena: 450.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="25" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />x 25g. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
      <h1>Morske alge - Hidziki - 25g</h1>
        <DIV>Od svih algi koje se koriste u makrobiotici, ona je najvi&scaron;e jang. Vrlo je bogata   mineralima, sadr&#382;i do 34% minerala, a ima 14 puta vi&scaron;e kalcijuma od mleka. Ovo   je neprevazi&#273;ena alga za regeneraciju, jer pospe&scaron;uje pad holesterola u   organizmu. Preporu&#269;uje se trudnicama. Spre&#269;ava pojavu zubnog karijesa i sedu   kosu. u kuhinji se koristi u kombinaciji sa svim &#382;itaricama ili u salati</DIV>
     <div class="right"><strong> Cena: 330.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="26" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />x 25g. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
       <br/>    
        <h1>Morske alge - Nori - 25g (5 listova)</h1>
        <DIV>Nori je su&scaron;ena jestiva alga koja se presuje u tanke listove. Zahvaljulju&#263;i   izuzutnoj popularnosti japanskog jela su&scaron;i, Nori je postala jedna od   najpopularnijih algi na svetu. Hranljiva vrednost norija je izuzetna. Nori je   riznica E.P.A., vitamina, proteina, taurina, minerala i hlorofila. (E.P.A. je   jedna vrsta ulja za koje se smatra da je efikasna u spre&#269;avanju arterioskleroze.   Taurin je vrsta aminokiseline koja efikasno sni&#382;ava krvni pritisak.) Dva lista   norija imaju vitamina A jednako kao 45g spana&#263;a, vitamina B2, kao 56-60g mesa,   kalcijuma kao jedno jaje ili dva decilitra kravljeg mleka i gvo&#382;&#273;a kao jedno   jaje ili 1/5 L mleka.</DIV>
     <div class="right"><strong> Cena: 410.00</strong> RSD </div><br/>
     <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="27" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />x 25g. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
        <h1>Umeboshi &scaron;ljive 100g</h1>
        <DIV>- Normalizuju i stimulisu apetit, varenje, - smanjuju kiselost u zelucu i   ublazavaju crevna oboljenja. - Doprinose odrzavanju krvi blago alkalnom. -   Preporucuje se u slucajevima trovanja hranom, - dijareje, zatvora, zeludacnih   tegoba, glavobolja. Umebosi sljive su jako bogate mineralima i belancevinama.   Sadrze mnogo gvozdja, kalcijuma, fosfora, vise nego bilo koje drugo voce. Imaju   antisepticko i antibioticko dejstvo. - Pikrinska kiselina iz umebosija stimulise   funkciju jetre i pomaze ciscenju organizma od vestackih hemijskih materija, a   katenin ubrzava rad creva i ima antisepticko dejstvo. Opsti fizioloski efekti   umebosi sljive su sledeci: - sprecava i otklanja umor. - Usporava starenje, jer   ima antioksidaciono dejstvo. - Stimulise izbacivanje stetnih materija i otrova   iz organizma. - Obezbedjuje snabdevanje energijom celije bubrega i jetre. -   Kombinovanim uticajem spomenuta tri fizioloska efekta, umebosi podmladjuje   organizam i povecava opstu vitalnost. - Obnavlja energiju.</DIV>
    <div class="right"><strong> Cena: 600.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="28" />
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
