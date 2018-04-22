<?php
$servername = "localhost";
$username = "root";
$password = "";
$error= "";
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if (!empty($_POST["p_name"])) {
    $sql = "INSERT INTO pkr.product (p_name, p_description, pstatus, price, quantity)
VALUES ('".$_POST['p_name']."','".$_POST['p_description']."','".$_POST['pstatus']."','".intval($_POST['price'])."','".$_POST['quantity']."')";
    if ($conn->query($sql) === TRUE) {
        //echo "New product created successfully";
        $error = '';
    } else {
        $error =  "Error: " . $sql . "<br>" . $conn->error;
    }
}
//echo "Connected successfully";
$sql = "SELECT * FROM pkr.product";
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
                <li >
                    <a href="getPerson.php">User</a>
                </li>
                <li class="selected">
                    <a href="getRoom.php">Products</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
        <h3>Add New product</h3>
        <form method="post" action="getRoom.php">
            Product Name:<br>
            <input type="text" name="p_name" required>
            <br>
            Description:<br>
            <input type="text" name="p_description" required>
            <br>
            Status:<br>
            <select name="pstatus" required>
                <option value="instock">In Stock</option>
                <option value="outofstock">Out of Stock</option>
            </select>
            <br>
            Price:<br>
            <input type="text" name="price" required>
            <br>
            Quantity:<br>
            <input type="text" name="quantity" required>
            <br>
            <br><br>
            <input type="submit" value="Submit">
            </form> 
        </div>
        <div id="content">
        <h3> Products List</h3>
        <table>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Status</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Delete</th>
        </tr>
		
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
                echo "<tr><td>" . $row["p_name"]."</td><td>" . $row["p_description"]."</td><td>" . $row["pstatus"]."</td><td>" . $row["price"]."</td><td>" . $row["quantity"]."</td><td> <img src='./style/delete.png' alt='del' onclick='deluser(\"". $row["id"]."\")'> </td></tr>";
            }
        } else {
            echo "0 results";
        }

        echo $error;
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
    consol.log(this)
}
</script>