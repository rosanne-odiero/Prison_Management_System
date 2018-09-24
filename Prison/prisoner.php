<!DOCTYPE html>
<html>
<head>
  <title>Prisoner Registration</title>
    <script type="text/javascript" src="jquery331.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>

  <link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>

<link rel="stylesheet" href="prisoner.css" type="text/css">
<script>
$(document).ready(function() {
    $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
      
            $('#eventForm').formValidation('revalidateField', 'date');
        });

    $('#eventForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'The date is required'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'The date is not a valid'
                    }
                }
            }
        }
    });
});

$(document).ready(function() {
  $("#home").click(function(){
    $("#page-content-wrapper").show();
});

$("#home").click(function(){
    $(".body-content ").hide();
    $("#viewP").hide();
});
});

$(document).ready(function() {
  $("#register").click(function(){
    $("#page-content-wrapper").hide();
     $("#viewP").hide();
});

$("#register").click(function(){
    $(".body-content").show();
   

});
    
    });

$(document).ready(function() {
  $("#view").click(function(){
    $("#viewP").show();
  
});
  $("#view").click(function(){
    $(".body-content").hide();
      $("#page-content-wrapper").hide();

});
});
</script>

</head>
<body>
 <div id="wrapper">
        <div class="overlay"></div>
    
        
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                
                </li>
                <li>
                    <a href="#" id="home">Home</a>
                </li>
                <li>
                    <a href="#" id="register">Register Prisoner</a>
                </li>
                <li>
                    <a href="#" id="view">View Prisoners</a>
                </li>
              </ul>
               
        </nav>
      
 <div id="page-content-wrapper">
  <div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
<h1>Registrar Details</h1>h
<table class="table">
  <thead class="grey lighten-2">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">ID Number</th>
      <th scope="col">Working Hours</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
     
    </tr>
  </tbody>
</table>
<button class="btn btn-block btn-primary" style="width: 20%">Edit Details</button>
                </div>
                  </div>
                  </div>
                </div>
<div class="body-content" style="display: none;">
  <div class="module">

  <h1 style="color: white" style="top: 40px;"> <b> REGISTER PRISONER</b></h1>
    <form class="form" action="prisoner.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <input type="text" placeholder="First Name" name="firstname" required />
      <input type="text" placeholder="Last Name" name="lastname" required />
      <input type="text" placeholder="National ID Number" name="idnumber" required />
      <input type="text" placeholder="Charges filed" name="crime" required />
  <div class="row" style="width: 258%">
      <div class="form-group">
        <div class="col-xs-5 date">
            <div class="input-group input-append date" id="datePicker">
                <input type="text" placeholder="Arrival Date" class="form-control" name="date" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>
 </div><br>
 <div class="row" style="width: 258%">
      <div class="form-group">
        <div class="col-xs-5 date">
            <div class="input-group input-append date" id="datePicker">
                <input type="text" placeholder="Departure Date" class="form-control" name="date" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>
 </div><br>
 <div class="row" style="width: 258%">
      <div class="form-group">
        <div class="col-xs-5 date">
            <div class="input-group input-append date" id="datePicker">
                <input type="text" placeholder="Court Date" class="form-control" name="date" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
        </div>
    </div>
 </div><br>
      <input type="email" placeholder="Email" name="email" required />
      <input type="text" placeholder="Phone Number" name="phonenumber" required />
      <textarea placeholder="Enter prisoner Items and tag numbers" name="items" required ></textarea>
      <div class="profile"><label>Upload prisoners image: </label><input type="file" name="profile" accept="image/*" required /></div>
      <input type="submit" value="Register Prisoner" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>


<div id="viewP" style="display: none;">
  <div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
<h1>Prisoners details</h1>
<table class="table">
  <thead class="grey lighten-2">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">ID Number</th>
      <th scope="col">Charges Pressed</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Items</th>
      <th scope="col">Arrival Date</th>
      <th scope="col">Departure Date</th>
      <th scope="col">Court Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
     
    </tr>
  </tbody>
</table>
<button class="btn btn-block btn-primary" style="width: 20%">Edit Details</button>
                </div>
                  </div>
                  </div>
                </div>
  

</body>
</html>

