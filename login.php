<?php
session_start();
if (isset($_SESSION['error'])) {
	$err="username password wrong";
}else{
	$err="";
}
if (isset($_SESSION["msg"])) {
	$msg=$_SESSION['msg'];
}else{
	$msg="";
}
?>
<html>
<head>
	  <meta charset="utf-8">
	  <title>Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style type="text/css">
	
	#country-list{
		/*z-index: 10;*/
		float:left;
		list-style:none;
		margin-top:-3px;
		padding:0;
		width:270px;
		position: absolute;
	}
	#country-list li{
		z-index: 10;
		padding: 10px; 
		background: #f0f0f0; 
		color: black;
		border-bottom: #bbb9b9 1px solid;
	}
	#country-list li:hover{
		background:#ece3d2;
		cursor: pointer;
	}
	.modal-open{
		padding-right: 0px !important;
	}
	
	</style>
</head>
<body>

<div class="container col-lg-12">
	<div class="row">
	
	</div>
	<div class="row">
	<div class="col-lg-3"></div>
	<div class="loginform col-lg-6">

	<form class="form-horizontal" action="php/log.php" method='post' >

			<h3>Login</h3>

			<div class="form-group">

				<label class="col-md-2" for="username">Username: </label>
				<div class="col-md-4">
				<input type="text" class="form-control" name="username" placeholder="Enter Username" required autocomplete="off" autofocus="on">
				<div class="error" id="errorname"><?php echo $err;?></div>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-md-2">Password: </label>
				<div class="col-md-4">
				<input type="password" class="form-control" name="password" placeholder="Enter Password" required autocomplete="off">
				<div class="error" id="errorpassword"></div>
				</div>
			</div>
			<div class="form-group text-right ">
				<div class="col-md-6 ">
					<a class="text-danger" data-toggle="modal" data-target="#myModal1" data-backdrop="static">Forget Password/username?</a>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6">
				<input type="submit" class="btn btn-success btn-block " value="Login">
	</form>
	<button type="button" class="btn btn-primary btn-block" id="registers" data-toggle="modal" data-target="#myModal" data-backdrop="static">Register</button>
		<span class="text-info bg-success "><?php echo $msg."<br>";?></span>
			</div>
			</div>

	
		<span class='col-md-6'>
		
		</span>
	</div>

<div class="col-lg-3"></div>
</div>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLabel">Forget Password/Username</h5>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" action="php/forgetpassword.php" name="forget" method="post">
        	<div class="form-group">
				<label for="femail" class="col-md-4 text-right">Email*: </label>
				<div class="col-md-6">
				<input type="text" class="form-control" name="femail" id="femail" placeholder="Enter your registered Email id" required autofocus>
				<div class="error text-danger bg-danger" id="errfemail"></div>
				</div>
			</div>
			<div class="form-group">
				
				<div class="col-md-10 text-right">
				<input class="btn btn-success" type="submit" id="forget" value="Forget">
				</div>
			</div>
        </form>	
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>





<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Register</h4>
      </div>
      <div class="modal-body text-center">
        <form class="form-horizontal" action="php/register.php" name="register" method="post">
        	<div class="form-group">
				<label for="name" class="col-md-4 text-right">Name*: </label>
				<div class="col-md-6">
				<input type="text" class="form-control" name="name" id="name" placeholder="Enter Name" required autofocus>
				<div class="error text-danger bg-danger" id="errname"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="email" class="col-md-4 text-right">Email*: </label>
				<div class="col-md-6">
				<input type="email" class="form-control" name="email" id="email" placeholder="Enter email*" required>
				<div class="error text-danger bg-danger" id="erremail"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="mobile" class="col-md-4 text-right">Mobile*: </label>
				<div class="col-md-6">
				<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile*" required>
				<div class="error text-danger bg-danger" id="errmobile"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="address" class="col-md-4 text-right">Address*: </label>
				<div class="col-md-6">
				<textarea class="form-control" name="address" row='2' id="address" placeholder="Please Enter Full Address" required></textarea>
				<div class="error text-danger bg-danger" id="erraddress"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="country" class="col-md-4 text-right">Country*: </label>
				<div class="col-md-6">
				<input type="text" class="form-control" name="country" autocomplete="off" id="country" placeholder="Enter your Country*" required>
				<div class="error text-danger bg-danger" id="errcountry"></div>
				</div>		
			</div>
			<div class="form-group">
				<label for="username" class="col-md-4 text-right">Username*: </label>
				<div class="col-md-6">
				<input type="text" class="form-control" name="uname" id="username" placeholder="Enter Username*" required min="5">
				<div class="error text-danger bg-danger" id="erruname"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="password" class="col-md-4 text-right">Password*: </label>
				<div class="col-md-6">
				<input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password" required min="5">
				<div class="error text-danger bg-danger" id="errpass"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="cpassword" class="col-md-4 text-right">Re-type Password*: </label>
				<div class="col-md-6">
				<input type="password" class="form-control" name="cpass" id="cpass" placeholder="Enter Retype password" required>
				<div class="error text-danger bg-danger" id="errcpass"></div>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-4"></div>
				<div class="col-md-6">
				<input type="submit" class="btn btn-success btn-block " value="Submit" id="submit">

			</div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript">
$(document).ready(function(){
	$("#forget").click(function(){
		var femail = $("#femail").val();
		if (!validateEmail(femail)) {
			$("#errfemail").html("Please Enter Valid email...");
			return false;
		}else{
			$.ajax({
			type: "POST",
			url:"php/checkemail.php",
			data: 'keyword=' +$("#femail").val(),
			beforesend:function(){
				// $("#errfemail").html("Country Searching...");
				// $(this).css("bordercolor","#fff");
				// $(this).css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
			},
			success: function(data){
				//$("#errcountry").show();
				if (data=="Email id is not registered") {
					$("#errfemail").html(data);
					return false;
				}else{
					alert("Reset Link is sent to email")
					return true;
				}
				
			},

		});
			
		}
	})
	$("#name").focus();
	$("#submit").click(function(event){
		if ($("#name").val()!="" && $("#address").val()!="" && $("#mboile").val()!="" && $("#country").val()!="" && $("#email").val()!="" && $("#uname").val()!="" && $("#pass").val()!="" && $("#cpass").val()!="") {
			var pass1 = $("#pass").val();
			var cpass1 = $("#cpass").val();
			if (pass1==cpass1) {
				return true;
			}else{
				$("#errcpass").html("password does not match");
				$("#errpass").html("password does not match");
				return false;
			}
	
		};
		var name=$("#name").val();
		var email=$("#email").val();
		var username=$("#username").val();
		
		var pass=$("#pass").val();
		var cpass=$("#cpass").val();
		var errname=$("#errname");
		var erremail=$("#erremail");
		var erruname=$("#erruname");
		var errpass=$("#errpass");
		var errcpass=$("#errcpass");
		// name empty or not
		if (name=="") {
			errname.html("Please Enter Name");
			$("#name").focus();
			return false;
		}else{
			var username = $("#name").val();
			var ulength = username.length;
			if (ulength<5) {
				errname.html("Name required Minimum 5 letters");
				$("#name").focus();
				return false;
			}else{
				errname.html("");
			}

		}

		// email empty or not
		if (email=="") {
			erremail.html("Please Enter Email...");
			$("#email").focus();
			return false;
		}else if (!validateEmail($("#email").val())) {
		 		$("#erremail").html("Please Enter Valid Email");
		 		$("#email").focus();
		 		event.preventDefault();
		 		return false;
		 	}else{
		 		$("#erremail").html("");
		 		
		 	}

		 if ($("#address").val()=="") {
			$("#erraddress").html("please enter full address");
			$("#address").focus();
			return false;
		}else{
			$("#erraddress").html("");
		}
		// username empty or not
		if (username=="") {
			erruname.html("Please Enter Username");
			$("#username").focus();
			return false;
		}else{
			var username = $("#username").val();
			var ulength = username.length;
			if (ulength<5) {
				erruname.html("Username required Minimum 5 letters");
				$("#username").focus();
				return false;
			}else{
				erruname.html("");
			}
		}
		// password empty or not
		if (pass=="") {
			errpass.html("Please Enter Password");
			return false;
		}else{
			var username = $("#pass").val();
			var ulength = username.length;
			if (ulength<5) {
				errpass.html("Username required Minimum 5 letters");
				$("#pass").focus();
				return false;
			}else{
				errpass.html("");
			}
		}
		// Retype password are done or not
		if (cpass=="") {
			errcpass.html("Please Re type the Password");
			$("cpass").focus();
			return false;
		}else{
			
				errcpass.html("");
			
		}
	})

    function validateEmail($email) {
		  var emailReg =  /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		  return emailReg.test( $email );
	}
	$("#country").keyup(function(){
		$.ajax({
			type: "POST",
			url:"php/select_country.php",
			data: 'keyword=' +$(this).val(),
			beforesend:function(){
				$("#errcountry").html("Country Searching...");
				$(this).css("bordercolor","#fff");
				$(this).css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
			},
			success: function(data){
				$("#errcountry").show();
				$("#errcountry").html(data);
			},

		});
	});
	$("#mobile").blur(function(){

		var mobile =$("#mobile").val();
		var pattern = /^\d*(?:\.\d{1,2})?$/;
		if(pattern.test(mobile)){
			if (mobile.length!=10) {
				$("#errmobile").text("Please Enter 10 digit  Mobile Number..");
				$("#mobile").setCustomValidity("Please Enter 10 digit  Mobile Number..");
			}else{
				$("#errmobile").text("");
			}
			return false;
		}else{
				$("#errmobile").text("");
			}
	})
	

	});

function selectCountry(val){
		$("#country").val(val);
		$("#errcountry").hide();
	}

</script>
</body>
</html>
<?php
session_unset();
?>