<?php include 'C:\xampp\htdocs\auth-php\inc\header.php' ?>
<?php include 'C:\xampp\htdocs\auth-php\inc\footer.php' ?>

<div class="row g-3">

    <br><center><h2>SQLI 00</h2></center>
    <br><br>
    
    <form method="GET" > 
        <div class="row g-3">
            <center>
                <div class="col-sm-5"> 
                    <label for="Name" name="Name" class="form-label">Enter Your ID :</label>           
                    <input type="text" name="id" class="form-control" placeholder="Your ID" id="id"><br>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div> 
            </center>          
        </div>
    </form>
    
</div>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "web-labs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if 'id' parameter exists in $_GET
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT id, name, email FROM users WHERE id = $id";

    // Execute the query
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<br><br><div class='container'>";
            echo "<table class='table table-bordered'>";
            echo "<thead class='thead-dark'>";
            echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
            echo "</thead>";
            echo "<tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "</tr>";
            }
            echo "</tbody>";
            echo "</table>";
            echo "</div>";
        } else {
            echo "<div class='container'>No results found.</div>";
        }
    } else {
        echo "<div class='container'>Error in executing the query: " . $conn->error . "</div>";
    }
    } else {
        echo "<div class='container'>No 'id' parameter provided.</div>";
    }
    
    
    

// Close connection
$conn->close();
?>
