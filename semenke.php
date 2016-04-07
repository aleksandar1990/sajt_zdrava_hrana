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
        <p>Novi veb sajt Zdrave hrane GAUS pokrenut je 15.6.2011. i hostuje se na studentskom serveru Alas.<br />
        <a href="novisajt.html">Procitajte više...</a></p>
        <h4>Letnja ishrana</h4>
        <h5>12. Jun 2011</h5>
        <p>Leto je godi&scaron;nje doba koje nam donosi najvi&scaron;e opu&scaron;tanja, odmora pregr&scaron;t   sezonskih plodova. Najrazli&#269;itije vrste vo&#263;a i povr&#263;a u kojima mo&#382;emo da   u&#382;ivamo, osiguravaju nam obilje vitamina i minerala koja podsti&#269;u razli&#269;ita   korisna delovanja u na&scaron;em organizmu.
        <br /><a href="letnja_ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>KAKO JESTI VO&#262;E</h4>
        <h5>11. Jun 2011</h5>
        <p>Svi mi   mislimo da jesti vo&#263;e zna&#269;i samo kupovinu vo&#263;a, se&#269;enje na kri&scaron;ke i stavljanje u   usta. To nije tako jednostavno. Va&#382;no je da znate i kako i kada se jede   vo&#263;e.
        <br />
        <a href="jesti_voce.html">Pro&#269;itajte više...</a></p>
        <h4>Pravilnom ishranom do du&#382;eg i kvalitetnijeg &#382;ivota</h4>
        <h5>10. Jun 2011</h5>
        <p>Jedno od najintigrantnijih pitanja koje mu&#269;e &#269;ove&#269;anstvo je kako   zaustaviti proces starenja, odnosno kako produ&#382;iti &#382;ivotni vek; ose&#263;ati se bolje   i izgledati bolje. Koliko je u svemu tome, zna&#269;aj genetskog nasledja i da li   &#269;ovek mo&#382;e, na&#269;inom &#382;ivota u koji spada i ishrana, sam da bitnije uti&#269;e na   sopstveni &#382;ivot?<br />
        <a href="ishrana.html">Pro&#269;itajte više...</a></p>
        <h4>Voda</h4>
        <h5>9. Jun 2011</h5>
        <p>Voda daje zivot svemu zivom, nalazi se unutar nas, ulazi sa svakim nasim   gutljajem, sa svakim udahom, okruzuje nas neznim dodirom pare, kapljicama kise,   sneznim pokrivacem, i kao takva povezuje nas sa celim svetom, sa celom   Prirodom.<br />
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
      
        <h1>Semenke</h1>
        <h1>Lan</h1>
        <DIV>
        <p><img src="style/semenke/lan.jpg" alt="" class="left" width="218" height="172"></p>
        <p>Sadr&#382;i omega-3 i omega-6 masne kiseline, koje &scaron;tite srce. Obiluje u kalijumu, magnezijumu, kalcijumu, gvo&#382;&#273;u, fosforu, vitaminu E. Ubla&#382;ava zatvor i   nadimanje, poma&#382;e u odstranjivanju otrovnih ostataka u organima za varenje. Ja&#269;a   imuni sistem i poma&#382;e za&scaron;titu od sr&#269;anih oboljenja i raka.</p> </DIV>
    <div class="right"><strong> Cena: 165.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="7" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
      <h1>Susam</h1>
        <DIV>
        <p><img src="style/semenke/susam.jpg" alt="" class="left" width="218" height="172">Susam se koristi na mnogobrojne na&#269;ine. Mnoga tradicionalna jela, kola&#269;i, slatki&scaron;i, namazi, uklju&#269;uju u svom sastavu i susam kao jedan od najva&#382;nijih   sastojaka, dodaje se raznim jelima, &#382;itaricama, hlebu i pecivu. Ulje sadrzi   omega-6 kiseline. Susam takodje sadrzi lignin koji sni&#382;ava holesterol u krvi   time &scaron;to smanjuje njegovu apsorpciju iz creva, ubrzavajuci na taj nacin varenje. Bogat je magnezijumom, cinkom, kalcijumom i gvozdjem. Suzam se od davnina   smatrao lekovitom hranom, i namirnicom koja usporava starenje.</p>
</DIV>
    <div class="right"><strong> Cena: 330.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="8" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
       <br/>    
        <h1>Suncokret - u ljusci - Sirov</h1>
        <DIV>
          <p><img src="style/semenke/semenke-neocoscene.jpg" alt="" class="left" width="218" height="172">Suncokret sadr&#382;i sve esencijalne aminokiseline u znatnoj koli&#269;ini, kao sto su   linoleinska masna kiselina - omega 6, za koje je poznato da sni&#382;avaju nivo   holesterola u krvi, i oleinska kiselina. . Suncokretove semenke sadr&#382;e ve&#263;u   koli&#269;inu vitamina E (50 mg/100gr), veoma su dobar izvor i raznih minerala, Ca,   P, Mg, Na, K i Fe, kao i vitamina B kompleksa i vitamina A. Propr&#382;en i samljeven   mo&#382;e se dodavati razli&#269;itim jelima: &#382;itaricama, varivima, sosovima, mo&#382;ete ga   koristiti i za doru&#269;ak kao sastavni deo ka&scaron;a. Usitnjen, uz dodatak vode i   za&#269;ina, mo&#382;e poslu&#382;iti kao preljiv za pizzu i razna pe&#269;ena jela, a mo&#382;e dodavati   testu prilikom spremanja hleba i raznovrsnih kola&#269;a.</p>
</DIV>
     <div class="right"><strong> Cena: 140.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="9" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>   
        <h1>Suncokret - u ljusci - Pe&#269;en slan</h1>
        <DIV>
          <p><img src="style/semenke/suncokret-pecen-slan.jpg" alt="" class="left" width="218" height="172">Suncokretove semenke imaju visok procenat ulja od cak 50 posto, a prevladavaju   vi&scaron;estruko nezasicene masne kiseline, posebno linolna. Nije zanemarljiv ni   sadr&#382;aj proteina. Semenke suncokreta su odlican izvor vitamina E i B1 i dobar   izvor mangana, magnezijuma, bakra, selena, vitamina B5, folne kiseline i   prehrambenih vlakana. &Scaron;aka suncokretovih semenki odlicno uta&#382;uje glad, ali i   nudi pregr&scaron;t korisnih sastojaka. Na popisu supernamirnica, na&scaron;le su se i semenke   suncokreta. Semenke suncokreta sadr&#382;e sna&#382;ne antioksidanse - vitamin E i selen.   Antioksidansi imaju sposobnost neutralizacije &scaron;tetnih slobodnih radikala i na   taj nacin &scaron;tite organizam od brojnih degenerativnih bolesti dana&scaron;njice, poput   kardiovaskularnih i malignih oboljenja. Zbog povoljnog sadr&#382;aja esencijalne   linolne masne kiseline, vitamina E i proteina, redovni unos suncokretovih   semenki vla&#382;i suvu i dehidriranu ko&#382;u, a mo&#382;e biti od koristi i kod ekcema.   Semenke suncokreta dele sudbinu ostalih semenki - popularne su grickalice i   ucestali dodatak hlebu. Ali i one mogu biti odlican dodatak omiljenim   &#382;itaricama, jogurtu ili salati od tune ili piletine. Obicna pecena jaja ce   dobiti poseban ukus ako im se dodaju semenke suncokreta. Takode, propr&#382;ene i   samlevene semenke upotpunice i razna variva i umake.</p>
</DIV>
     <div class="right"><strong> Cena: 230.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="10" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
     <br/>  
        <h1>Suncokret - O&#269;i&scaron;&#263;en - Sirovi</h1>
        <DIV>
          <p><img src="style/semenke/semenke-sirove.jpg" alt="" class="left" width="218" height="172">Suncokret sadr&#382;i sve esencijalne aminokiseline u znatnoj koli&#269;ini, kao sto su   linoleinska masna kiselina - omega 6, za koje je poznato da sni&#382;avaju nivo   holesterola u krvi, i oleinska kiselina. . Suncokretove semenke sadr&#382;e ve&#263;u   koli&#269;inu vitamina E (50 mg/100gr), veoma su dobar izvor i raznih minerala, Ca,   P, Mg, Na, K i Fe, kao i vitamina B kompleksa i vitamina A. Propr&#382;en i samljeven   mo&#382;e se dodavati razli&#269;itim jelima: &#382;itaricama, varivima, sosovima, mo&#382;ete ga   koristiti i za doru&#269;ak kao sastavni deo ka&scaron;a. Usitnjen, uz dodatak vode i   za&#269;ina, mo&#382;e poslu&#382;iti kao preljiv za pizzu i razna pe&#269;ena jela, a mo&#382;e dodavati   testu prilikom spremanja hleba i raznovrsnih kola&#269;a.</DIV>
    <div class="right"><strong> Cena: 220.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="11" />
      Koli&#269;ina
      <input name="amount" value="1" size="4" maxlength="4" style="text-align:right" />Kg. 
      <input type="image" src="style/shop.JPG"  alt="Submit Form" border="0" class="right" />
    </form>       
  </div> 
      <br/>   
        <h1>Bundeva - Sa ljuskom - Sirova</h1>
        <DIV>
          <p><img src="style/semenke/bundeva-neociscena.jpg" alt="" class="left" width="218" height="172">Semenke bundeve su odli&#269;an izvor belan&#269;evina a bogate su i mnogim vitaminima i   mineralima. Sadr&#382;e visok procenat belan&#269;evina. &Scaron;aka semenki od bundeve   zadovoljava pola dnevnih potreba prose&#269;ne osobe za aminokiselinama; one su   odli&#269;an izvor mnogih vitamina i minerala, naro&#269;ito cinka i gvozdja. Bundevine   semenke su u biljnom svijetu, uz laneno seme, najbolji izvori esencijalne masne   kiseline omega 3. kiselina, vitamina i minerala</p>
</DIV>
    <div class="right"><strong> Cena: 490.00</strong> RSD </div><br/>
    <div class="right">
      <form name="ord1" id="ord1" action="kupovina.php" method="post">  
      <input type="hidden" name="id" value="12" />
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
