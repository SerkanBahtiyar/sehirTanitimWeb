<?php
include("baglanti.php");
 
$sorgu=$db->prepare('SELECT İsimSoyisim,siparisİsimi,tarih FROM siparisler');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.
 
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #660099;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Ad soyad</th>
    <th>Sipariş</th>
    <th>Tarih</th>
  </tr>
  <?php
			 foreach($personellist as $person){?>
			 
			 	<tr>
			 	<td><?= $person->	İsimSoyisim ?></td>
			 	<td><?= $person->siparisİsimi ?></td>
			 	<td><?= $person->tarih ?></td>
			 	
			    </tr>
				 
			 <?php } ?>
       <?php
$sorgu = $db->prepare("SELECT COUNT(*) FROM siparissikayet");
$sorgu->execute();
$say = $sorgu->fetchColumn();
echo 'Toplam : ' . $say . ' Sipariş Bulundu. ';
?>
