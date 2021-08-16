<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table.center{
			margin-left: auto;
			margin-right: auto; 
		}
	</style>
</head>
<body>
<h2><b><center>Customer Details:</center></b></h2>
<br>
<hr>
<br>
<form style="text-align: center;">
 <label for="fname">First name:</label>
   <input type="text" id="fname" name="fname"style="width: 145px;" >
   <label for="lname">Last name:</label>
   <input type="text" id="lname" name="lname" style="width: 145px;"><br>
<br>
   <label for="fname">Address Street:</label>
   <input type="maxlength" id="fname" name="fname" style="width: 350px;"><br>
   <br>
   <label for="fname">Address Street:</label>
   <input type="max" id="fname" name="fname" style="width: 350px;"><br>

<br>
    <label for="city">City:</label>
   <input type="text" id="city" name="fname"style="width: 182px;">
   <label for="state">State:</label>
   <input type="text" id="state" name="lname" style="width: 182px;"><br>

   <br>
   <label for="number">Number:</label>
   <input type="number" id="number" name="nname" style="width: 390px;"><br>
   <br>
   <label for="email">Email:</label>
   <input type="email" id="email" name="ename" style="width: 405px;"><br>

   <p>How did you hear about us?</p>
   
<select name="select" id="">
	 <option value="Select">Select</option>
  <option value="Newspaper">Newspaper</option>
  <option value="Magazine">Magazine</option>
  <option value="Social Media">Social Media</option>
  <option value="Other">Other</option>
</select>

<p>Feedback about us:</p>
<textarea style="width: 450px;" rows="5"></textarea>
<br>
<p>Suggestions if any for further improvement:</p>
<textarea style="width: 450px;" rows="5"></textarea>
<br>
<p>Will you be willing to recommend us?</p>
<input type="checkbox" >
<label for="value1"> Yes</label><br>
<input type="checkbox" >
<label for="value2">Maybe</label><br>
<input type="checkbox">
<label for="value3">No</label><br>

</form>
<br>
<table  style="width:40%; " border="1" class="center" >
  <tr >

  	<th>Sr.No.</th>
    <th>Firstname</th>
    <th>Address</th>
    <th>Contact </th>
  </tr>
  <tr>
    <td>1.</td>
    <td><input type="text" ></td>
    <td><input type="text" ></td>
    <td><input type="text" ></td>
  </tr>
  <tr>
    <td>2.</td>
    <td><input type="text" ></td>
    <td><input type="text" ></td>
    <td><input type="text" ></td>
  </tr>
</table>
<br>
<center><button>Submit</button></center>
</body>
</html>