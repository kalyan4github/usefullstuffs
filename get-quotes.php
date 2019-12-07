<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


<title>Quick Quote!</title>
<style>
     body {
         background-color: #dbb407;
     }
     .card {
    /* Add shadows to create the "card" effect */
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width:250px;
    height:120px;
    margin:auto;
    background:#5cb85c;
    color: aliceblue;
    }

    /* On mouse-over, add a deeper shadow */
    .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    /* Add some padding inside the card container */
    .container4card {
    padding: 2px 16px;
    margin: auto;
    text-align: center;
    }
</style>
</head>
  <body>
    <nav class="navbar navbar-default navbar-static-top " style="background-image:url('201709251739083882503.jpg');">
        <div class="container">
            <img src="logo-miraki-e1574568264420.png">
            
        </ul>
        </div>

    </nav>
    <div class="container">
    <!-- Content here -->
        <h1 class="text-success text-center">Quick Quote</h1>
        <form id="getquoteform" data-toggle="validator" role="form">
        <div class="form-group">
            <label for="inputName">NAME</label>
            <input type="text" class="form-control" id="inputName" placeholder="Enter First Name"  >
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="inputEmailid">EMAIL</label>
            <input type="email" class="form-control" id="inputEmailid" aria-describedby="emailHelp" placeholder="Enter email"  >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="inputSquarefeet">SQUARE FEET</label>
            <input type="text" class="form-control" id="inputSquarefeet" placeholder="Enter  Square Feet" >
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoriesKitchenRadios" id="inputRadiosDoubleSquare" value="38" checked>
            <label class="form-check-label" for="inputRadiosDoubleSquare">Standard Series</label>
            
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoriesKitchenRadios" id="inputRadiosSingleSquare" value="43">
            <label class="form-check-label" for="inputRadiosSingleSquare">Premium Series</label>
        </div>
        
        <div class="text-center">
            <button type="button" class="btn btn-lg btn-success" id="btnGetQuote">Get Quote</button>
        </div>
        </form>

        <!-- displaying calculation-->
        <br/>        
        <div class="card">
            
            <div class="container4card">
                
              <h3><b>Total</b></h3>
              
              <h3 id="calculation">$542.00</h3>
            </div>
          </div>
        
        <nav class="navbar navbar-inverse navbar-fixed-bottom" id="botton_nav">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact us</a></li>
                </ul>
            </div>
        </nav>
        <!-- displaying External Links-->
        <!-- <div class="row">
            <div class="well" id="links">Home</div>
        </div> -->
    </div>

    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" crossorigin="anonymous" ></script> -->
    <script> 
          $(document).ready(function () {
            $('.card').hide();
              $('#btnGetQuote').click(function () {
                var name = $('#inputName').val();
                var emailid=$('#inputEmailid').val();
                var squarefeet=$('#inputSquarefeet').val();                
                var kitchenRadio= $("input[name='categoriesKitchenRadios']:checked").val();

                 
                
                //console.log();
                var calculatedValue= (kitchenRadio*squarefeet*1.13).toFixed(2);
                //alert(name+emailid+squarefeet+kitchenRadio+" "+calculatedValue);
                
                if(calculatedValue!=0){
                    $('.card').show();
                }
                
                $('#calculation').html("$"+calculatedValue);
                var bodytext="<div>Website Get Quotes Form Details</div><br><div>Name: " +name+"<br><br>Email: "+emailid+"<br><br>Squarefeet: "+squarefeet+"</div>";
                //if(isNotEmpty(name1) && isNotEmpty(emailid1)){
                   // console.log("inside email sending block"+name);
                    $.ajax({
                        url: 'm.php',
                        method: 'POST',
                        dataType: 'json',
                        data: {
                            name: name,
                            email: emailid,
                            subject: 'Quote Request from website',
                            body: bodytext
                        }, success: function (response) {
                            console.log(response);
                        }
                    });
                //}
                /* function isNotEmpty(caller) {
                    if(caller ==""){
                        console.log("inside caller");
                        $(caller).css('border','1px solid red');
                        return false;
                    }else
                        caller.css('border','');
                    return true;
                } */
            })
              
               
        });
        
    </script>
 </body>
</html>