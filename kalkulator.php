<?php
/**
 *
 */
class kalkulator {
  private $bmi;
  function hitung($tinggi,$berat,$gender)  {
    $tinggi1 = $tinggi/100;
    $this->bmi=$berat/($tinggi1*$tinggi1);
    // echo $bmi;
    if ($gender == "female") {
      if ($this->bmi < 18) {
        echo "Kurus";
      }
      else if ($this->bmi < 25) {
        echo "Normal";
      }
      else if ($this->bmi < 27) {
        echo "Kegemukan";
      }
      else if ($this->bmi > 27) {
        echo "Obesitas";
      }
    }
    else if ($gender == "male") {
      if ($this->bmi < 17) {
        echo "Kurus";
      }
      else if ($this->bmi < 23) {
        echo "Normal";
      }
      else if ($this->bmi < 27) {
        echo "Kegemukan";
      }
      else if ($this->bmi > 27) {
        echo "Obesitas";
      }
    }
  }
}
// $objek = new kalkulator();
// $tinggi = $_POST['Tinggi'];
// $berat = $_POST['Berat'];
// $gender = $_POST['gender'];
// $objek->hitung($tinggi,$berat,$gender);


 ?>
