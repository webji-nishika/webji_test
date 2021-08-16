<!DOCTYPE html>
<html>
<head>
	
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
		.A{
			border-style: hidden;
		}
	</style>
</head>
<body>
<div class="container">
	<h2><b>Customer Details:</b></h2>
	<br>
</div>
<hr>
<div class="container">
	<p><b>Full Name:</b></p>
		<div class="row">
			<div class="col-md-6">
	      		<div class="form-group">
				  <!-- <label for="usr"></label> -->
				  <input type="text" class="form-control" id="usr">
				  <small class="form-text text-muted">First Name</small>
	    	</div>
			</div>
			<div class="col-md-6">
			  	<div class="form-group">
				  <input type="text" class="form-control" id="usr">
				   <small class="form-text text-muted">Last Name</small>
				</div>
			</div>
		</div>






<div>
	<p><b>Address:</b></p>
		<div class="form-group">
		  <input type="text" class="form-control" id="usr">
		   <small class="form-text text-muted">street Address</small>
		</div>
		<div class="form-group">
		  <input type="text" class="form-control" id="usr">
		   <small class="form-text text-muted">street Address Line 2</small>
		</div>
	  
		<div class="row">
			<div class="col-md-6">
		      	<div class="form-group">
				  <!-- <label for="usr"></label> -->
				  <input type="text" class="form-control" id="usr">
				  <small class="form-text text-muted">City</small>
		    	</div>
			</div>
			<div class="col-md-6">
			  	<div class="form-group">
				  <input type="text" class="form-control" id="usr">
				   <small class="form-text text-muted">State/Province</small>
				</div>
			</div>
		</div>
		<div class="form-group">
		  <input type="text" class="form-control" id="usr">
		   <small class="form-text text-muted">Postal / Zip Code</small>
		</div>
</div>
	
<div>
	
	<div class="form-group">
		  <p><b>Phone no:</b></p>
		 <input type="tel" class="form-control" id="phone" name="phone"
       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
       required placeholder="(000) 000-0000">
		  
	</div>
</div>

<div>
	<div class="form-group">
		 <p><b>Email:</b></p>
		 <input type="email" class="form-control" id="usr" placeholder="ex:email@yahoo.com">
		 <small class="form-text text-muted">example@example.com</small>
	</div>
</div>


<div>
	<div class="form-group">
		 <p><b>How did you hear about us?</b></p>
		 <div class="form-group">
		  <select class="form-control" id="sel1">
		    <option>Please Select</option>
		    
		    <option>Magzine</option>
		    <option>Internet</option>
		    <option>Others(Please Specify)</option>
		       <option>social media</option>
		          <option>Mobile</option>
		  </select>
		</div>
		<!--  <input type="email" class="form-control" id="usr" placeholder="ex:email@yahoo.com">
		 <small class="form-text text-muted">example@example.com</small> -->
	</div>
</div>
		
	<div class="form-group">
		 <p><b>Feedback about us?</b></p>
		 <textarea class="form-control" rows="8"></textarea>
	</div>	
<br>
	<div class="form-group">
		 <p><b>Suggestions if any for further improvement:</b></p>
		 <textarea class="form-control" rows="8"></textarea>
	</div>

<br>
<div class="form-group">
		 <p><b>Will you be willing to recommed us?</b></p>
		 <div class="checkbox">
			  <label><input type="checkbox" value="">Yes</label>
			</div>
			<div class="checkbox">
			  <label><input type="checkbox" value="">Maybe</label>
			</div>
			<div class="checkbox disabled">
			  <label><input type="checkbox" value="" disabled>No</label>
		</div>
	</div>
		
<br>
<table class="table table-bordered" style="width: 100%">
    <thead>
      <tr>
      	<th style="border-style: hidden;"></th>
        <th class="active">Fullname</th>
        <th class="active">Address</th>
        <th class="active">Contact Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="active">1</td>
        <td><input type="text" class="form-control A"></td>
        <td><input type="text" class="form-control A"></td>
        <td><input type="text" class="form-control A"></td>
      </tr>
      <tr>
        <td class="active">2</td>
        <td><input type="text" class="form-control A"></td>
        <td><input type="text" class="form-control A"></td>
        <td><input type="text" class="form-control A"></td>
      </tr>
     
    </tbody>
  </table>
  <br>
  <div>
  	<button type="button" class="btn btn-success" style="width: 100%">Submit</button>
  </div>

		
</div>

</body>
</html>