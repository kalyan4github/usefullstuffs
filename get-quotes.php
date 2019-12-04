<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <title>Quick Quote!</title>
  </head>
  <body>
    <div class="container">
    <!-- Content here -->
        <h1 class="text-success text-center">Quick Quote</h1>
        <form id="getquoteform" data-toggle="validator" role="form">
        <div class="form-group">
            <label for="inputName">NAME</label>
            <input type="text" class="form-control" id="inputName" placeholder="Enter First Name" required >
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="inputEmailid">EMAIL</label>
            <input type="email" class="form-control" id="inputEmailid" aria-describedby="emailHelp" placeholder="Enter email"  required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <div class="help-block with-errors"></div>
        </div>
        <div class="form-group">
            <label for="inputSquarefeet">SQUARE FEET</label>
            <input type="text" class="form-control" id="inputSquarefeet" placeholder="Enter  Square Feet" required>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoriesKitchenRadios" id="inputRadiosDoubleSquare" value="12" checked>
            <label class="form-check-label" for="inputRadiosDoubleSquare">Double Square</label>
            
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoriesKitchenRadios" id="inputRadiosSingleSquare" value="14">
            <label class="form-check-label" for="inputRadiosSingleSquare">Single Square</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoriesKitchenRadios" id="inputRadiosDoubleSquare" value="16">
            <label class="form-check-label" for="inputRadiosDoubleSquare">Double Round</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="categoriesKitchenRadios" id="inputRadiosSingleRound" value="18">
            <label class="form-check-label" for="inputRadiosSingleRound">Single Round</label>
        </div>
        <div class="text-center">
            <button type="button" class="btn btn-lg btn-success" id="btnGetQuote">Get Quote</button>
        </div>
        </form>

        <!-- displaying calculation-->
        <br/>
        <div class="alert alert-success text-center" id="calculation">
            <strong>Success!</strong> Indicates a successful or positive action.
        </div>
        
        
        <!-- displaying External Links-->
        <div class="row">
            <div class="well" id="links">Home</div>
        </div>
    </div>

    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js" crossorigin="anonymous" ></script> -->
    <script> 
          $(document).ready(function () {
            $('#calculation').hide();
              $('#btnGetQuote').click(function () {
                var name = $('#inputName').val();
                var emailid=$('#inputEmailid').val();
                var squarefeet=$(inputSquarefeet).val();                
                var kitchenRadio= $("input[name='categoriesKitchenRadios']:checked").val();

                
                var calculatedValue= kitchenRadio*squarefeet*1.13;
                //alert(name+emailid+squarefeet+kitchenRadio+" "+calculatedValue);
                
                if(calculatedValue!=0){
                    $('#calculation').show();
                }
                $('#calculation').html("Total Calculated value is "+calculatedValue);
              })
              
               
        });
        
    </script>
 </body>
</html>