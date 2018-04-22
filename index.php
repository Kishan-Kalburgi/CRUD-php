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
                <li class="selected">
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="getperson.php">User</a>
                </li>
                <li>
                    <a href="getRoom.php">Products</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="site_content">
        <div class="sidebar">
            <h1>Directions to go Through</h1>
            <h4>KK Fashions</h4>
            <h5>--by Team</h5>
            <p>Indian fashion e-commerce company headquartered in Bengaluru, 
            Karnataka, India. The company was founded in 2007 to sell personalized 
            gift items. By 2010, Myntra shifted to selling clothing.
                <br />
                <a href="#">Read more</a>
            </p>
            <h1>Useful Links</h1>
            <ul>
                <li>
                    <a href="www.google.com">Google</a>
                </li>
                <li>
                    <a href="www.wikipedia.com">wikipedia</a>
                </li>
                <li>
                    <a href="www.youtube.com">Youtube</a>
                </li>
                <li>
                    <a href="www.yahoo.com">yahoo</a>
                </li>
            </ul>
            <h1>Search</h1>
            <form method="post" action="#" id="search_form">
                <p>
                    <input class="search" type="text" name="search_field" value="Enter keywords....." />
                    <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search"
                    />
                </p>
            </form>
        </div>
        <div id="content" >
            <img src="style/9.jpg" height="500" width="609" >
            <!-- php code goes here -->

        </div>
    </div>
    <div id="footer">
        <p>
            <a href="index.html">Home</a> |
            <a href="person.html">User</a> |
            <a href="room.html">Products</a> 
        </p>
    </div>
</div>
<?php include 'footer.php';?>