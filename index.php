<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="#" method="post">
      <input type="number" name="Tinggi" value="" placeholder="Tinggi Badan">Cm<br>
      <input type="number" name="Berat" value="" placeholder="Berat Badan">Kg<br>
      <input type="radio" name="gender" value="male"> Male<br>
      <input type="radio" name="gender" value="female"> Female<br>

      <input type="submit" name="submit">
    </form>

  </body>
</html>
<?php
if (isset($_POST['submit'])) {
  include 'kalkulator.php';
  $tinggi = $_POST['Tinggi'];
  $berat = $_POST['Berat'];
  $gender = $_POST['gender'];

  $objek = new kalkulator();
  $objek->hitung($tinggi,$berat,$gender);
}

 ?>
