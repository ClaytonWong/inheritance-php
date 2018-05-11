<?php
  // Define base class
  class Stationary
  {
    public $mass_in_grams = 0;
  }

  // Define a new class based on an existing class
  class Pen extends Stationary
  {   
    public $length_in_metres = 0;
  }

  // Create a new object from pen class
  $obj = new Pen;

  // Set object properties values
  $obj->length_in_metres = 0.1;
  $obj->mass_in_grams = 10;

  // Display properties of new object
  echo "New object length in metres: " . $obj->length_in_metres . "<br>";
  echo "New object mass in grams: " . $obj->mass_in_grams . "<br>";
?>

