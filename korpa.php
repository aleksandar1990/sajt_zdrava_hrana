<?php
	    $noviid=mysql_insert_id();
			
		if (isset($_COOKIE['idkupca']))
			echo "" ;
		else
			setcookie("idkupca", $noviid, time()+1000);
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

  
  <script type="text/javascript">
  function provera()
  {

  var ime = document.getElementById("ime").value;
  var prezime = document.getElementById("prezime").value;
  var adresa = document.getElementById("adresa").value;
  var grad = document.getElementById("grad").value;
  var zip = document.getElementById("zip").value;
  var tel = document.getElementById("tel").value;
  var email = document.getElementById("email").value;
  var poruka = document.getElementById("poruka").value;
  var cek = document.getElementById("email").value.indexOf("@");

	if(ime == "")
	{
		window.alert("Niste uneli ime!");
		return false;
	}
	else
	if(prezime == "")
	{
		window.alert("Niste uneli prezime!");
		return false;
	}
	else
	if(adresa == "")
	{
	    window.alert("Niste uneli Adresu!");
		return false;
	}
	else
	if(grad == "")
	{
	    window.alert("Niste uneli naziv grada!");
		return false;
	}
	else
	if(zip == ""){
	    window.alert("Niste uneli broj pošte!");
		return false;
		}
	else
	if(tel == ""){
	    window.alert("Niste uneli broj telefona!");	
        return false;
	}		
	else
	if(email == ""){
		alert('Niste uneli e-mail!');
		return false;}
		else if(cek==-1)
		{
		 window.alert("Niste uneli dobar e-mail!");
		 document.getElementById('email').value="";
		 return false;
		}
	else
	    window.alert("Formular ispravno popunjen i poruka poslata");
  }
  function dugme()
  {
  if (confirm("Da li ste sigurni da želite da pazarite proizvode iz korpe?"))
   { 
    provera();
	if(provera() != false ){
	document.forms["myform"].submit();}
   }
  }
  </script>
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
          <li><a href="eprodavnica.php">E-Prodavnica</a></li>
          <li class="selected"><a href="korpa.php">Vaša korpa</a></li>
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
        <p>Jedno od najintigrantnijih pitanja koje mu&#269;e &#269;ove&#269;anstvo je kako   zaustaviti proces starenja, odnosno kako produ&#382;iti &#382;ivotni vek; ose&#263;ati se bolje   i izgledati bolje. Koliko je u svemu tome, zna&#269;aj genetskog nasledja i da li   &#269;ovek mo&#382;e, na&#269;inom &#382;ivota u koji spada i ishrana, sam da bitnije uti&#269;e na   sopstveni &#382;ivot?
        <br />
        <a href="ishrana.html">Pro&#269;itajte više...</a></p>
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
        <h1>Vaša korpa</h1>
        
        <?php
		    
			include('db.inc');
			db_connect();

     		mysql_query("SET NAMES UTF8") or die(mysql_error()); 
			mysql_set_charset('windows-1252',$connection);
			
            
            $idkupca = $_COOKIE['idkupca'];
			global $idkupca;
			
			$query = "SELECT kolicina,proizvodi.cena, proizvodi.naziv, kupovina.id_proizvoda "."FROM proizvodi, kupovina "."WHERE proizvodi.id_proizvoda = kupovina.id_proizvoda AND proizvodi.id_proizvoda = kupovina.id_proizvoda AND id_kupca='$idkupca'";
            $result = mysql_query($query) or die(mysql_error());
				
            echo "id_kupca :".$_COOKIE['idkupca']."<br />";
			
			$ukupno=0;
			
			$get = mysql_query('SELECT id_kupovine,id_kupca,id_proizvoda,kolicina FROM kupovina WHERE id_kupca='.$idkupca.'');
			if (mysql_num_rows($get)==0){
			  echo "Vaša korpa je prazna <br />";
			  echo "<br />";
			}
			else{
				      echo "Imate sledece proizvode u korpi";
					  echo "<br/>";	
		 
  				      echo "<table width = 80% border = '1'>";
					  echo "<tr>";
					  echo "<td> Naziv proizvoda </td> ";
					  echo "<td> Kolicina </td> ";
					  echo "<td> Cena </td> ";
					  echo "<tdcolspan='2'> </td> ";
					  echo "</tr>";                 					 					
					  
					  
					  $redBroj = mysql_num_rows($get);
					  while($row = mysql_fetch_array($result))
					  {
					        
					        echo "<tr>";
							
						    echo "<td>".$row['naziv']."</td> ";
							
					        echo "<td>".$row['kolicina']."</td> ";
			 
						    echo "<td>".$row['cena']*$row['kolicina']."</td> ";
							
							echo "<td><a href='delete.php?id_proizvoda=".$row['id_proizvoda'].">'><img alt='izbaci' src='style/out.png'/></a></td>";
							
							echo "</tr>";
							
							$ukupno+=$row['cena']*$row['kolicina'];
					
					  }
					  echo "</table> ";
					  
				}
				
			echo "Ukupna cena proizvoda u korpi je: $ukupno dinara <br/>";
			echo "<br/>";
            db_disconnect();
        ?>
        
        <form method="get" action="slanje.php" id="myform">
          <div class="form_settings">
            <p><span>Ime *</span><input class="contact" type="text" id="ime" name="ime" value="" /></p>
            <p><span>Prezime *</span><input class="contact" type="text" id="prezime" name="prezime" value="" /></p>
            <p><span>Adresa *</span><input id="adresa" name="adresa" class="contact" type="text" value=""/></p>
            <p><span>Grad *</span><input id="grad" name="grad" class="contact" type="text" value=""/></p>
            <p><span>Poštanski broj *</span><input class="contact" type="text" id="zip" name="zip" value=""/></p>
            <p><span>Telefon *</span><input class="contact" type="text" name="tel" id="tel" value=""/></p>
            <p><span>Email adresa *</span><input class="contact" type="text" id="email" name="email" value="" /></p>  
            
            <br/>
			<p>Neophodno je da popunite sva polja oznacena *</p>
			<br/>
			
            <p>Na&#269;in dostave</p>
            <p> 
              <input type="radio" name="radio" value="licno" id="radio1" checked="checked">
              Licno preuzimanje
            </p>
            <p>
              <input type="radio" name="radio" id="radio2" value="kurir">
              Kurirska služba (troškove snosi kupac)
            </p>
            
            <br/>
            
            <p><span>Poruka</span><textarea class="contact textarea" rows="8" cols="50" id="poruka" name="poruka"></textarea></p>
            <!-- <input class="submit" type="submit" name="submit" value="Pošalji" onclick="dugme()" /> -->
			<input class="submit" onclick=dugme() value="Pošalji" type="button">
            <input class="submit" type="reset" name="contact_reset" value="Resetuj" />
          </div>
        </form>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      Copyright &copy; Sale | <a href="http://validator.w3.org/check?uri=referer">HTML Validacija</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
    </div>
  </div>
</html>
