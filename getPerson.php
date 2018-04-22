<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!empty($_POST["fname"])) {
    $sql = "INSERT INTO pkr.person (emailid, fname, lname, city, state, zip)
VALUES ('".$_POST['emailid']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['city']."','".$_POST['state']."','".$_POST['zip']."')";
    if ($conn->query($sql) === TRUE) {
       // echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
//echo "Connected successfully";
$sql = "SELECT * FROM pkr.person";
$result = $conn->query($sql);
?>
  
<?php include 'header.php';?>
<div id="main">
    <div id="header">
        <div id="logo">
            <div id="logo_text">
                <!-- class="logo_colour", allows you to change the colour of the text -->
                <h1>
                    <a href="index.php">KK
                        <span class="logo_colour">Fashions</span>
                    </a>
                </h1>
                <h2>Best sites when it comes to online shopping</h2>
            </div>
        </div>
        <div id="menubar">
            <ul id="menu">
                <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
                <li >
                    <a href="index.php">Home</a>
                </li>
                <li class="selected">
                    <a href="getPerson.php">User</a>
                </li>
                <li>
                    <a href="getRoom.php">Products</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
        <h3>Add New Person</h3>
        <form method="post" action="getPerson.php">
            <br>
            Email ID:<br>
            <input type="text" name="emailid" value="" required>
            <br>
			First name:<br>
            <input type="text" name="fname" value="" required>
            <br>
            Last name:<br>
            <input type="text" name="lname" value="" required>
            <br>
            City:<br>
            <input type="text" name="city" value="" required>
            <br>
            State:<br>
            <input type="text" name="state" value="" required>
            <br>
			ZIP:<br>
            <input type="text" name="zip" value="" required></textarea>
            <br>
            <br>
			<input type="submit" value="Submit">
            </form> 
        </div>
        <div id="content">
        <h3> Persons List</h3>
        <table>
        <tr>
            <th>Email ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>City</th>
			<th>State</th>
			<th>ZIP</th>
            <th>Delete</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo "<tr><td>" . $row["emailid"]."</td><td>" . $row["fname"]."</td><td>" . $row["lname"]."</td><td>" . $row["city"]."</td><td>". $row["state"]."</td><td>". $row["zip"]."</td><td> <img src='./style/delete.png' alt='del' onclick='deluser(\"". $row["emailid"]."\")'> </td></tr>";
            }
        } else {
            echo "0 results";
        }
        ?>
        </table>
        </div>
    </div>
    
</div>

<?php include 'footer.php';

$conn->close();
?>

<script>
function deluser(params) {
    alert(params)
    
}
</script>