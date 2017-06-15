<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["street_address_1"])) {
    echo $street_address_1Err = "street_address is required";
  } else {
   echo $street_address_1 = $_POST["street_address_1"];
    // check if name only contains letters and whitespace
  }
}
