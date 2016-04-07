<?php
            include('db.inc');
			db_connect();

     		mysql_query("SET NAMES UTF8") or die(mysql_error()); 
 	
			$id_proizvoda=$_POST['id'];
			$kolicina=$_POST['amount'];
			
			$result1 = mysql_query("SELECT id_kupovine, id_kupca FROM kupovina");
			
			$idkupca=$_COOKIE['idkupca'];
			
			mysql_query("INSERT INTO kupovina (id_kupca, id_proizvoda, kolicina) VALUES ('$idkupca', '$id_proizvoda', '$kolicina')") or
        		die(mysql_error());
			
			header( 'Location: http://www.krondesign.com/mi09036/korpa.php' ) ;
			
			
			db_disconnect();
		
?>