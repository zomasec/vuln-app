<?php include 'C:\xampp\htdocs\auth-php\inc\header.php' ?>
<?php include 'C:\xampp\htdocs\auth-php\inc\footer.php' ?>
<div class="row g-3">

    <br><center><h2>File Upload 00</h2></center>
    <br><br>
    
    <form method="POST" enctype="multipart/form-data" > 
    
   <div class="row g-3">
                <center>
        <div class="col-sm-5"> 
                    <label for="Name" name="Name" class="form-label">Upload Your File :</label>           
                    <input type="file" name="upload" class="form-control"  id="Name"><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
        </div> 
                </center>          
    </div>

    </form>
    
</div>
<?php

if( isset( $_POST[ 'upload' ] ) ) {
    // Where are we going to be writing to?
    $target_path  =  "uploads";
    $target_path .= basename( $_FILES[ 'uploaded' ][ 'name' ] );

    // Can we move the file to the upload folder?
    if( !move_uploaded_file( $_FILES[ 'uploaded' ][ 'tmp_name' ], $target_path ) ) {
        // No
        echo '<pre>Your image was not uploaded.</pre>';
    }
    else {
        // Yes!
        echo "<pre>{$target_path} succesfully uploaded!</pre>";
    }
}

?>