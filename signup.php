<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/action_page.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

<h2>HTML Forms</h2>
<form method="GET">
<fieldset>
<legend>Order Informantion</legend>
    <table>
    <label for="products">Product:</label>
<select id="products" name="products">
  <option value="Product">Apple</option>
  <option value="Product">Mango</option>
  <option value="Product">Orange</option>
  <option value="Product">Cherry</option>
</select>
        <tr><td>Quantity: </td> <td><input type="text" name="quantity"></td>
        <tr><td>Full Name: </td> <td> <input type="text" name="username"></td>
        <tr><td>E-mail Address: </td> <td> <input type="type" name="mail"></td>
        <tr><td>Password: </td> <td> <input type="type" name="pasword"></td>
        <tr><td>Phone Number: </td> <td> <input type="type" name="phone"></td>
        <tr><td>Address: </td> <td> <textarea type="address" name="address" rows="4" cols="50"></textarea></td>
        <tr><td>Billing/Address: </td> <td> <textarea type="type" name="bill" rows="4" cols="50"></textarea></td>
        <tr><td>Shipping Option: </td><td><input type="radio" id="Shipping" name="fav_language" value="Shipping">
        <label for="html">Standard Shipping</label>
        <input type="radio" id="Shipping" name="fav_language" value="Shipping">
        <label for="html">Express Shipping(additional charge may apply)</label></tr></td>
        <legend>Delivery Informantion</legend>
</table>

    <label for="Delivery">Preffered Delivery Time:</label>
<select id="Delivery" name="Delivery">
  <option value="Delivery">Morning</option>
  <option value="Delivery">Afternoon</option>
  <option value="Delivery">Evening</option>
</select>

<table>
  <tr><td>Special Instructions: </td> <td> <textarea type="address" name="address" rows="4" cols="50"></textarea></td><br>
</table>


        <input type="checkbox" id="Packing1" name="Packing1" value="Product">
        <label for="Packing1"> Request Express Shipping (additional charges may apply)</label>
        <input type="checkbox" id="Packing2" name="Packing2" value="Product">
        <label for="Packing2"> Gift Wrapping(additional charges may apply)</label><br>


        <label for="terms">I agree to the terms and conditions</label>
        <input type="checkbox" id="terms" name="terms" value="Product">

<table>
<form action="/action_page.php">
<tr><td>Upload file</td> <td><input type="file" id="myFile" name="filename"><br></td>
</form>
</table>

      <input type="submit" value="Submit">
      <input type="reset" value="Reset">
        </fieldset>

</form>

</body>
</html>
