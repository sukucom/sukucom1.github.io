<?php
session_start();
if (!isset($_SESSION['name'])) {
  header("location:login.php");
}
$user=$_SESSION['name'];
$pass=$_SESSION['pass'];
include "php/dbconnect.php";
$sql="SELECT * FROM users WHERE username='$user' AND password='$pass'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$_SESSION['uid']=$row['id'];
?>
<html lang="en">
<head>
  <title>Userprofile</title>
  <meta charset="utf-8">
<style type="text/css">
#country-list{
    float:left;
    list-style:none;
    margin-top:-3px;
    padding:0;
    left:140;
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
  body{
    padding-right: 0px !important;
  }
</style>
  <link rel="stylesheet" href="css/custome.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="http://suraikayurayyanar.org/">Suraikayur Ayyanar</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav ml-auto">
    	<li class="nav-item"><span class="navbar-brand">Welcome </span></li>
      <li class="nav-item"><a href="#" class="nav-link text-white"data-toggle="modal" data-target="#myModal" data-backdrop="static"><span class="glyphicon glyphicon-user"><i class="fa fa-diamond" aria-hidden="true"></i>
</span><?php echo $user;?></a></li>
      <li class="nav-item"><a href="login.php" class="text-white nav-link"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    </ul>
  </div>
</nav>
  
<div class="container align-middle ">
  <h3>Hi <?php echo $row['firstname'];?>, Welcome to suraikayurayyanar.org.</h3>
<div class="card" style="width:20rem;">
  <a data-toggle="modal" data-target="#fileModal" data-backdrop="static" class="text-center">
  
  <img class="card-img-top" src="<?php echo $row["profile_img"];?>" alt="profile Picture" width="120px" height="120px">
  </a>
  <div class="card-block">
    <h4 class="card-title">User Information</h4>
    <p class="card-text">Please Check your profile details,</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Name: <?php echo $row["firstname"];?></li>
    <li class="list-group-item">Email: <?php echo $row["email"];?></li>
    <li class="list-group-item">Mobile: <?php echo $row["mobile"];?></li>
    <li class="list-group-item">Address: <?php echo $row["address"];?></li>
    <li class="list-group-item">Country: <?php echo $row["country"];?></li>

  </ul>
  <div  class="card-block text-right">
    <a href="#" class="card-link" data-toggle="modal" data-target="#myModal" data-backdrop="static">Edit Profile</a>
  </div>
</div>  
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <div id="fileModal" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Upload Profile Picture</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <img class="img-thumbnail" src="" width="50px" height="50px" alt="Preview Image"id="imagepre">
          <form action="php/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload" id="profile">
            <input type="submit" value="Upload" name="upload" id="upload">
          </form>
        </div>
      </div>
    </div>

  </div>
  <div id="myModal" class="modal fade bd-example-modal-md" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <h4 class="modal-title mr-auto">User Profiles</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
        <form class="form-horizondal" action="" method="POST">
          <div class="form-group">
            <span id="updatestatus" class="text-center"></span>
          </div>
        <div class="form-group">
        <label for="name" class="form-control-label col-sm-3 float-left">Name: </label>
        <input type="text" class="form-control col-sm-8" name="name" id="name" value="<?php echo $row['firstname'];?>" required >
      </div>
      <div class="form-group">
        <label for="email" class="form-control-label col-sm-3 float-left">Email: </label>
        <input type="email" class="form-control col-sm-8" name="email" id="email" value="<?php echo $row['email'];?>" required >
      </div>
      <div class="form-group">
        <label for="username" class="form-control-label col-sm-3 float-left">Username: </label>
        <input type="text" class="form-control col-sm-8" name="uname" id="uname" disabled value="<?php echo $row['username'];?>" required >
      </div>
      <div class="form-group">
        <label for="mobile" class="form-control-label col-sm-3 float-left">Mobile: </label>
        <input type="text" class="form-control col-sm-8" name="mobile" id="mobile" value="<?php echo $row['mobile'];?>" required >
      </div>
      <div class="form-group">
        <label for="address" class="form-control-label col-sm-3 float-left">Address*: </label>
        <textarea class="form-control col-sm-8" name="address" row='2' id="address" required><?php echo $row['address'];?></textarea>
      </div>
      <div class="form-group">
        <label for="country" class="form-control-label col-sm-3 float-left">Country*: </label>
        <input type="text" class="form-control col-sm-8" name="country" id="country" value="<?php echo $row['country'];?>" required autocomplete="off">
        <div class="error text-danger bg-danger" id="errcountry"></div>
      </div>
      <div class="form-group text-center">
             <input type="submit" class="btn btn-success btn-block edit-profile " value="Edit" id="submit" >
       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){

 var readURL = function(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imagepre').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
$("#profile").change(function(){
    var file=this.files[0];
    var name = this.name;
    var size = this.size;
    var type = this.type;
    readURL(this);
  });




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

// update user profile details ajax
$(".edit-profile").on("click",function(){
  var name= $("#name").val();
  var email =$("#email").val();
  var mobile=$("#mobile").val();
  var address=$("#address").val();
  var country=$("#country").val();
  var userid= <?php echo json_encode($_SESSION['uid']); ?>;

  $.ajax({
      type:'POST',
      url:'php/updatepro.php',
      data:{name: name,
        email:email,
        mobile: mobile,
        address: address,
        country: country,
        userid: userid,
      },
      success:function(res){
        $("#updatestatus").html(res);
        console.log(res);
        
      }
  });

})



})
function selectCountry(val){
    $("#country").val(val);
    $("#errcountry").hide();
  }

</script>
</body>
</html>
