<?php
			include('db.inc');
			db_connect();

     		mysql_query("SET NAMES UTF8") or die(mysql_error()); 
			mysql_set_charset('windows-1252',$connection);
			
			$noviid=mysql_insert_id();
			
			if (isset($_COOKIE['idkupca']))
				echo "" ;
			else
				setcookie("idkupca", $noviid, time()+500);
			
			$idkupca=$_COOKIE['idkupca'];
			
			
		    $id_proizvoda=$_GET['id_proizvoda'];

			// ovaj php treba da brise proizvode iz korpe kada se klikne na x
			
			$query = "SELECT id_kupovine,id_kupca,kolicina,proizvodi.cena, proizvodi.naziv, kupovina.id_proizvoda "
																	."FROM proizvodi, kupovina "."WHERE proizvodi.id_proizvoda = kupovina.id_proizvoda
																	AND proizvodi.id_proizvoda = kupovina.id_proizvoda ";
            $result = mysql_query($query) or die(mysql_error());
			
			mysql_query("DELETE FROM kupovina WHERE id_kupca='".$_COOKIE['idkupca']."' AND id_proizvoda='".$id_proizvoda."'") or die(mysql_error());
			
			// redirekcija na stranicu korpa.php
			header( 'Location: http://www.krondesign.com/mi09036/korpa.php' );
 
			db_disconnect();
 
?>