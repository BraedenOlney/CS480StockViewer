<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

        <!--CSS and JS file-->
		<link href="../CSS/styles.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<script src="../JavaScript/jScript.js" defer></script>
        

        <!--Webpage name-->
		<title>Home Page</title>

        <!--Favicon-->
        <link id="favicon" rel="icon" href="../Images/penrose.png">
        
        
        
	</head>
	<body>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "sab";
					
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
		?>
        <!-- Account Sidebar -->
        <div id="sideBarNav" class="sidenav"> <!--<div id="mySidenav" class="sidenav"></div> -->
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Settings</a>
            <a href="#">Help</a>
        </div>

        <span onclick="openNav()" class="navIcons"><i class='bx bx-menu' id = "menuIcon"></i></span>

        <div id="main">
            <header class="pageTop">
                <a href="../Index.php"><img src="../Images/penrose.png" alt="SAB Logo" id="Logo"></a>
                <h1>SAB Financial</h1>
            </header>

            <!-- <nav class="navIcons">
                <a href="Account.html"><i class='bx bxs-user' id = "accountIcon"></i></a>
            </nav> -->

            <div class="homeGrid">
                <div class="homeGridDivs"><a href="../Subpages/Stocks/MicrosoftStock.php"><img src="../Images/Microsoft.png" alt="Microsoft Logo" id="CompanyLogo"></a></div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/AmazonStock.php"><img src="../Images/Amazon.png" alt="Amazon Logo" id="CompanyLogo"></a></div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/AppleStock.php"><img src="../Images/Apple.png" alt="Apple Logo" id="CompanyLogo"></a></div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/TeslaStock.php"><img src="../Images/Tesla.png" alt="Tesla Logo" id="CompanyLogo"></a></div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/GoogleStock.php"><img src="../Images/Google.png" alt="Google Logo" id="CompanyLogo"></a></div>
                <div class="gridPrice">Price</div>
                <div class="gridPrice">Price</div>
                <div class="gridPrice">Price</div>
                <div class="gridPrice">Price</div>
                <div class="gridPrice">Price</div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/MetaStock.php"><img src="../Images/Meta.png" alt="Meta Logo" id="CompanyLogo"></a></div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/IntelStock.php"><img src="../Images/Intel.png" alt="Intel Logo" id="CompanyLogo"></a></div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/AMDStock.php"><img src="../Images/AMD.png" alt="AMD Logo" id="CompanyLogo"></a></div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/OracleStock.php"><img src="../Images/Oracle.png" alt="Oracle Logo" id="CompanyLogo"></a></div>
                <div class="homeGridDivs"><a href="../Subpages/Stocks/NvidiaStock.php"><img src="../Images/Nvidia.png" alt="Nvidia Logo" id="CompanyLogo"></a></div>
                <div class="gridPrice">Price</div>
                <div class="gridPrice">Price</div>
                <div class="gridPrice">Price</div>
                <div class="gridPrice">Price</div>
                <div class="gridPrice">Price</div>
            </div>
        </div>
		


        
	</body>
	<footer>
		<p id="footerText">Copyright All rights reserved.</p>
	</footer>
</html>