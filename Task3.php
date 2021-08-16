<!DOCTYPE html>
<html>
<head>
	<title></title>
		<meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  
</head>
<body>
<div class="container">
	<div>
		<h2><b>Address Info:</b></h2>
		<br>
	</div>
	<div>
		<h4><b>Current Address:</b></h4>
		<div class="row">
			<div class="col-md-6">
				<label>State:</label>
				<div class="form-group">
					  
					  <select class="form-control" id="homeadd" name="homeadd">
					  	<option>Select</option>
					    <option>Uttar Pradesh</option>
					    <option>Maharashtra</option>
					    <option>Karnataka</option>
					    <option>Kerala</option>
					    <option>Delhi</option>
					    <option>Tamil Nadu</option>
					    <option>Rajasthan</option>
					    <option>Gujarat</option>
					    <option>Madhya Pradesh</option>
					    <option>Punjab</option>
					    <option>Haryana</option>
					    <option>Bihar</option>
					    <option>Andhra Pradesh</option>
					    <option>West Bengal</option>
					    <option>Assam</option>
					  </select>
				</div>
			</div>
			<div class="col-md-6">
				<label>District:</label>
				<div class="form-group">
					  
					  <select class="form-control" id="disc" name="disc">
					  	<option>Select</option>
					    <option>Amravati</option>
					    <option>Jalgaon</option>
					    <option>Mumbai</option>
					    <option>Nashik</option>
					  </select>
				</div>
			</div>
		</div>
	</div>
	

	<div class="row">
		<div class="col-md-6">
			<label>City:</label>
			<div class="form-group">
				  
				  <select class="form-control" id="cityc" name="cityc">
				  	<option>Select</option>
				    <option>Amravati</option>
				    <option>Jalgaon</option>
				    <option>Mumbai</option>
				    <option>Nashik</option>
				  </select>
			</div>
		</div>
		<div class="col-md-6">
			<label>Village:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="vilc" name="vilc" placeholder="Please Enter Village Name">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<label>PinCode:</label>
			<div class="form-group">
				  
				  <select class="form-control" id="pinc" name="pinc">
				  	<option>Select</option>
				    <option>444601</option>
				    <option>444602</option>
				    <option>444603</option>
				    <option>444604</option>
				  </select>
			</div>
		</div>
		<div class="col-md-6">
			<label>House No:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="hoc" name="hoc" placeholder="Please Enter House No.">  
			</div>
		</div>
	</div>

	
	<div class="row">
		<div class="col-md-6">
			<label>LandMark1:</label>
			<div class="form-group">
				 <input type="text" class="form-control" id="l1c" name="l1c" placeholder="Please Enter LandMark1">  
			</div>
		</div>
		<div class="col-md-6">
			<label>LandMark2:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="l2c" name="l2c" placeholder="Please Enter LandMark2">  
			</div>
		</div>
	</div>

	
	<div class="row">
		<div class="col-md-6">
			<label>LandMark3:</label>
			<div class="form-group">
				 <input type="text" class="form-control" id="l3c" name="l3c" placeholder="Please Enter LandMark3">  
			</div>
		</div>
		<div class="col-md-6">
			<label>LandMark4:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="l4c" name="l4c" placeholder="Please Enter LandMark4">  
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-6">
			<label>House Type:</label>
			<div class="form-group">
				 <select class="form-control"  id="hotc" name="hotc">
					  	<option>Select</option>
					    <option>Owned</option>
					    <option>Rent</option>
					    <option>Other</option>
					  </select>
			</div>
		</div>
		<div class="col-md-6">
			<label>Map Link:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="mapc" name="mapc" placeholder="Please Enter MapLink">  
			</div>
		</div>
	</div>


<br>
<br>


  <select class="form-control"   onchange="toggle()" id="sel1">
  	  <!-- <option>Select</option> -->
    <option  value="Hide">Hide</option>
    <option value="Show">Show</option>
  </select>

<br>

	<div style="text-align: center;" >
		<label>Set Current As Permant: <input type="checkbox" id="check" name="check"></label>
	</div>


<br>
<div class="container" id="Permanent" style="display: none;">

	<div>
		<h4><b>Permanent Address:</b></h4>
		<div class="row">
			<div class="col-md-6">
				<label>State:</label>
				<div class="form-group">
					  
					  <select class="form-control" id="billadd" name="billadd">
					  	<option >Select</option>
					    <option value="Uttar Pradesh">Uttar Pradesh</option>
					    <option value="Maharashtra">Maharashtra</option>
					    <option value="Karnataka">Karnataka</option>
					    <option value="Kerala">Kerala</option>
					    <option value="Delhi">Delhi</option>
					    <option value="Tamil Nadu">Tamil Nadu</option>
					    <option value="Rajasthan">Rajasthan</option>
					    <option value="Gujarat">Gujarat</option>
					    <option value="Madhya Pradesh">Madhya Pradesh</option>
					    <option value="Punjab">Punjab</option>
					    <option value="Haryana">Haryana</option>
					    <option value="Bihar">Bihar</option>
					    <option value="Andhra Pradesh">Andhra Pradesh</option>
					    <option value="West Bengal">West Bengal</option>
					    <option value="Assam">Assam</option>
					  </select>
				</div>
				
			</div>
			<div class="col-md-6">
				<label>District:</label>
				<div class="form-group">
					  
					  <select class="form-control" id="disp" name="disp">
					  	<option>Select</option>
					    <option value="Amravati">Amravati</option>
					    <option value="Jalgaon">Jalgaon</option>
					    <option value="Mumbai">Mumbai</option>
					    <option value="Nashik">Nashik</option>
					  </select>
				</div>
			</div>
		</div>
	</div>
	

	<div class="row">
		<div class="col-md-6">
			<label>City:</label>
			<div class="form-group">
				  
				  <select class="form-control"  id="cityp" name="cityp">
				  	<option>Select</option>
				    <option value="Amravati">Amravati</option>
				    <option value="Jalgaon">Jalgaon</option>
				    <option value="Mumbai">Mumbai</option>
				    <option value="Nashik">Nashik</option>
				  </select>
			</div>
		</div>
		<div class="col-md-6">
			<label>Village:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="vilp" name="vilp" placeholder="Please Enter Village Name">
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<label>PinCode:</label>
			<div class="form-group">
				  
				  <select class="form-control" id="pinp" name="pinp">
				  	<option>Select</option>
				    <option value="444601">444601</option>
				    <option value="444602">444602</option>
				    <option value="444603">444603</option>
				    <option value="444604">444604</option>
				  </select>
			</div>
		</div>
		<div class="col-md-6">
			<label>House No:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="hop" name="hop" placeholder="Please Enter House No.">  
			</div>
		</div>
	</div>

	
	<div class="row">
		<div class="col-md-6">
			<label>LandMark1:</label>
			<div class="form-group">
				 <input type="text" class="form-control" id="l1p" name="l1p" placeholder="Please Enter LandMark1">  
			</div>
		</div>
		<div class="col-md-6">
			<label>LandMark2:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="l2p" name="l2p" placeholder="Please Enter LandMark2">  
			</div>
		</div>
	</div>

	
	<div class="row">
		<div class="col-md-6">
			<label>LandMark3:</label>
			<div class="form-group">
				 <input type="text" class="form-control" id="l3p" name="l3p" placeholder="Please Enter LandMark3">  
			</div>
		</div>
		<div class="col-md-6">
			<label>LandMark4:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="l4p" name="l4p" placeholder="Please Enter LandMark4">  
			</div>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-md-6">
			<label>House Type:</label>
			<div class="form-group">
				 <select class="form-control" id="hotp" name="hotp">
					  	<option>Select</option>
					    <option value="Owned">Owned</option>
					    <option value="Rent">Rent</option>
					    <option value="Other">Other</option>
					  </select>
			</div>
		</div>
		<div class="col-md-6">
			<label>Map Link:</label>
			<div class="form-group">
				<input type="text" class="form-control" id="mapp" name="mapp"  placeholder="Please Enter MapLink">  
			</div>
		</div>
	</div>



	
</div>

<script type="text/javascript">
	function setBillingAddress(){
  if ($("#check").is(":checked")) {
    $('#billadd').val($('#homeadd').val());
    $('#disp').val($('#disc').val());
    $('#cityp').val($('#cityc').val());
    $('#vilp').val($('#vilc').val());
    $('#pinp').val($('#pinc').val());
    $('#hop').val($('#hoc').val());
    $('#l1p').val($('#l1c').val());
    $('#l2p').val($('#l2c').val());
    $('#l3p').val($('#l3c').val());
    $('#l4p').val($('#l4c').val());
    $('#hotp').val($('#hotc').val());
    $('#mapp').val($('#mapc').val());
    
  } else {
   $('#billadd').val("Select");
   $('#disp').val("Select");
   $('#cityp').val("Select");
   $('#vilp').val("Select");
   $('#pinp').val("Select");
   $('#hop').val("Select");
   $('l1p').val("Select");
   $('l2p').val("Select");
   $('l3p').val("Select");
   $('l4p').val("Select");
   $('#hotp').val("Select");
   $('#mapp').val("Select");
  }
}

$('#check').click(function(){
  setBillingAddress();
})
</script>

<script>
    function toggle() {
        var Permanent = document.getElementById('Permanent');
        if (Permanent.style.display == 'none') {
            Permanent.style.display = 'block';
        }
        else {
            Permanent.style.display = 'none';
        }
    }
</script>


</body>

</html>