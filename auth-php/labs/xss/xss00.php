<?php include 'C:\xampp\htdocs\auth-php\inc\header.php' ?>
<?php include 'C:\xampp\htdocs\auth-php\inc\footer.php' ?>

<div class="row g-3">

    <br><center><h2>XSS 00</h2></center>
    <br><br>
    
    <form method="GET" > 
    
   <div class="row g-3">
                <center>
        <div class="col-sm-5"> 
                    <label for="Name" name="Name" class="form-label">Enter Your Name :</label>           
                    <input type="text" name="Name" class="form-control" placeholder="Your Name" id="Name"><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
        </div> 
                </center>          
    </div>

    
    </form>
    
</div>
<?php

if (isset($_GET["Name"])){
    $attrArr = ["<script>"/*And other HTML elements*/];
    $name = str_replace( $attrArr ,"", $_GET[ 'Name' ] ); 
    echo "<br><div class='row'><center><div class='col-md-4'><div class='card bg-light mb-3'><div class='card-body'><h5>Welcome Messege</h5><p>"."<br>Hello " . $name . "</p></div></div></div></center></div> ";
    
}


?>