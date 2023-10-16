<?php 
if (!empty($_POST)) {
  echo '<p>Nama: '.$_POST['nama'].'</p>';
  echo '<p>Email: '.$_POST['email'].'</p>';
  echo '<p>Gender: '.$_POST['gender'].'</p>';
  echo '<p>Umur: '.$_POST['umur'].'</p>';
  echo '<p>Alamat: '.$_POST['alamat'].'</p>';
}
?>