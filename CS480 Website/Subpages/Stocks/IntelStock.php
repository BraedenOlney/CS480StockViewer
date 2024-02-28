<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">

        <!--CSS and JS file-->
		<link href="../../CSS/styles.css" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
		<script src="../../JavaScript/jScript.js" defer></script>
        

        <!--Webpage name-->
		<title>Intel Stock</title>

        <!--Favicon-->
        <link id="favicon" rel="icon" href="../../Images/penrose.png">
        
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
			
			// Select all relevant company information to fill out page
			$sql = "SELECT * FROM company WHERE company_ID = 4;";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
		?>
		<header class="pageTop">
			<a href="../HomePage.html"><img src="../../Images/penrose.png" alt="SAB Logo" id="Logo"></a>
			<h1>SAB Financial</h1>
        </header>
        <div class="stockGrid">

            <div class="stockGraph">
                <p>Graph</p>
            </div>
            <div class="generalStockInfo">
                <div class="companyLogo">
                    <img src="../../Images/Intel.png" alt="Intel Logo">
                </div>
                <div class="companyName">
                    <?php
						echo "<p>" . $row['company_name'] . "</p>";
						echo "<p>" . $row['symbol'] . "</p>";
					?>
                </div>
                <div class="stockPrice">
                    <p>Price</p>
                </div>
            </div>
            <div class="Description">
                <?php 
					echo "<p>Location: " . $row['location'] . "</p>";
					echo "<p>Industry: " . $row['industry'] . "</p>";
					echo "<p>Employees: " . $row['employees'] . "</p>";
					echo "<p>Description: " . $row['description'] . "</p>";
				?>
            </div>
            <div class="Dividend">
                <?php 
					if(is_null($row['dividend_yield']) || is_null($row['dividend_amount'])) {
						echo "<p>Company does not offer a dividend currently.</p>";
					} else {
						echo "<p>Dividend: " . $row['dividend_amount'] . "</p>";
						echo "<p>Dividend Yield: " . $row['dividend_yield'] . "</p>";
					}
				?>
            </div>
            <div class="moreInfo">
                <?php
					echo "<p>Market Cap: " . $row['market_cap'] . "</p>";
					echo "<p>Earning Per Share: " . $row['eps'] . "</p>";
					echo "<p>P/E Ratio: " . $row['pe_ratio'] . "</p>";
					echo "<p>Revenue: " . $row['revenue'] . "</p>";
					echo "<p>Profit Margin: " . $row['profit_margin'] . "</p>";
					echo "<p>Total Debit: " . $row['total_debit'] . "</p>";
				?>
            </div>

        </div>

        <iframe src="" title="Intel News"></iframe>
        
	</body>
	<footer>
		<p id="footerText">Copyright All rights reserved.</p>
	</footer>
</html>