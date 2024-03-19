<!DOCTYPE <html>
<html>
<head>
 <title>Indovina il numero</title>
</head>
<body>
 <h1>Indovina il numero</h1>
 <?php
  $numero_da_indovinare = rand(1, 100);
  if (isset($_GET['tentativo'])) {
  $tentativo = $_GET['tentativo'];
   if ($tentativo != $numero_da_indovinare) {
    echo '<p> Hai sbagliato numero, prova di nuovo</br></p>';
   } else {
      echo '<p> Complimenti, hai indovinato il numero! <p/>';
   }
  }
 ?>
 <p>Indovina un numero tra 1 e 100:</p>
 <form method="get">
  <input type="number" name="tentativo">
  <input type="submit" value="Indovina">
 </form>
 
</body>
</html>