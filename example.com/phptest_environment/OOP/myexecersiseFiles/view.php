<?php
require './post.php';
?>
<!DOCTYPE html>
<html>
<body>

    <form action="post.php" method="POST">
  street_address_1:<br>
  <input type="text" name="street_address_1" value="<?php echo $street_address_1; ?>">
  <span class="error">* <?php echo $street_address_1Err;?></span>
  <br>
  street_address_2:<br>
  <input type="text" name="street_address_2" >
  <br>
  city_name:<br>
  <input type="text" name="city_name" >
  <br>
  subdivision_name:<br>
  <input type="text" name="subdivision_name" >
  <br>
  _postal_code:<br>
  <input type="text" name="_postal_code" >
  <br>
  country_name:<br>
  <input type="text" name="country_name" >
  <br>
  postal_code:<br>
  <input type="text" name="postal_code" >
  <br><br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "action_page.php".</p>

</body>
</html>

<!--   'city_name' => 'Redwood City',
   'subdivision_name' => 'California',
   '_postal_code' => NULL,
   'country_name' => 'United States',
   '_address_id' => '1',
   '_address_type_id' => '1',
   '_time_created' => '762483360',
   '_time_updated' => '0',
   'postal_code' => '94065',
-->
