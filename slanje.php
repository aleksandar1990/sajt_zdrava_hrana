<?php

			include('db.inc');
			db_connect();

     		mysql_query("SET NAMES UTF8") or die(mysql_error()); 
			mysql_set_charset('windows-1252',$connection);

	/* tekstualne kontrole */

	$ime=$_GET['ime'];
	$prezime=$_GET['prezime'];
	$adresa=$_GET['adresa'];
	$grad=$_GET['grad'];
	$zip=$_GET['zip'];
	$tel=$_GET['tel'];
	$email=$_GET['email'];
	$poruka=$_GET['poruka'];
	$mojmejl="mi09036@alas.matf.bg.ac.rs";
	
	$noviid=mysql_insert_id();
			
			if (isset($_COOKIE['idkupca']))
				echo "" ;
			else
				setcookie("idkupca", $noviid, time()+500);
            
           // $idkupca = $_COOKIE['idkupca'];
			global $idkupca;
	
	// za trenutni id_kupca koji citamo iz kukija koji se nalazi u tabeli kupci ubacujemo (updejtujemo) ime, prezime i email kupca
	mysql_query("UPDATE kupci SET ime='".$ime."', prezime='".$prezime."', email='".$email."' WHERE id_kupca='".$_COOKIE['idkupca']."'") or die ("Smrdljiva greska"); 			 
	
	/* radio kontrole */
	$radio=$_GET['radio'];
	
	/* ispitivanje nacina dostave */
			if($radio=="licno")
				$nacin_slanja="licno"; 
			else
				$nacin_slanja="kurir";
		
      	$sve="Ime kupca: $ime <br/>
			Prezime kupca: $prezime <br/>
			Adresa: $adresa <br/>
			Grad: $grad <br/>
			Broj poste: $zip <br/>
			Telefon kupca: $tel <br/>
			E-mail kupca: $email <br/>
			Poruka: $poruka <br/> 
			Nacin slanja: $nacin_slanja";	

		$query = "SELECT kolicina,proizvodi.cena, proizvodi.naziv, kupovina.id_proizvoda "."FROM proizvodi, kupovina "."WHERE proizvodi.id_proizvoda = kupovina.id_proizvoda AND proizvodi.id_proizvoda = kupovina.id_proizvoda AND id_kupca='$idkupca'";
        $result = mysql_query($query) or die(mysql_error());
		
			
		mail($mojmejl, "poruka sa sajta zdrave hrane", $sve, $email);
	
		// redirekcija na stranicu sa narucenim proizvodima
		header( 'Location: http://www.krondesign.com/mi09036/korpa.php' );
	
		db_disconnect();
?>