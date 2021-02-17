<!DOCTYPE html>
<html lang = "en" dir="ltr">
<head>
    <meta charset = "utf-8">
    <title>Portfolio</title>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel = "stylesheet" href = "static/css/portfolio_style.css">
    <link rel="stylesheet" href = "static/css/styles.css">
</head>

<body>
<?php
    include 'header.php';
?>

<div class = "search">
<form action="phpsearchoption.php" method="post">
    Search: <input type="text" name="search"><br>

    Criteria: <select name="column">
        <option value="Address">Address</option>
        <option value="City">City</option>
        <option value="Postal_Code">Postal Code</option>
        <option value="Bedroom_Number">The Number of Bedroom</option>
    </select><br>
    <input type ="submit" value="Go">
</form>
</div>

<div class = "portfolio-table">
    <div class = "col">

        <div class = "table">
            <h2>Apartment</h2>
            <div class = "price">
                <?php
                ob_start();
                include("Apartment.php");
                ob_end_clean();
                echo $num_results;
                ?>
                <span><h4> Available Unit </h4></span>
            </div>

            <ul>
                <li><strong> Worry-Free </strong>Maintenance</li>
                <li><strong> 24/7 </strong>Surveillance</li>
                <li><strong> Easy </strong>Mobility</li>
                <li><strong> Convenient </strong>Location</li>
            </ul>
            <a href = "Apartment.php">Buy Now</a>
        </div>
    </div>
    <div class="col">
        <div class = "table">
            <h2>Condo</h2>
            <div class = "price">
                <?php
                ob_start();
                include("Condo.php");
                ob_end_clean();
                echo $num_results;
                ?>
                <span><h4> Available Unit </h4></span>
            </div>

            <ul>
                <li><strong>Proximity </strong>to City Life</li>
                <li><strong>Flexible </strong>Living</li>
                <li><strong>Top-Notch </strong>Security</li>
                <li><strong>Inclusive </strong>Appliances</li>
            </ul>
            <a href = "Condo.php">Buy Now</a>
        </div>
    </div>

    <div class="col">
        <div class = "table">
            <h2>House</h2>
            <div class = "price">
                <?php
                ob_start();
                include("House.php");
                ob_end_clean();
                echo $num_results;
                ?>
                <span><h4> Available Unit </h4></span>
            </div>

            <ul>
                <li><strong>Attractive </strong>Investment</li>
                <li><strong>Greater </strong>Privacy</li>
                <li><strong>Stability</strong></li>
                <li><strong>Tax </strong>Benefits</li>
            </ul>
            <a href = "House.php">Buy Now</a>
        </div>
    </div>

    <div class="col">
        <div class = "table">
            <h2>Townhouse</h2>
            <div class = "price">
                <?php
                ob_start();
                include("Townhouse.php");
                ob_end_clean();
                echo $num_results;
                ?>
                <span><h4> Available Unit</h4></span>
            </div>

            <ul>
                <li><strong>Lower </strong>Maintenance</li>
                <li><strong>Safe </strong>Neighborhood</li>
                <li><strong>Common </strong>Areas</li>
                <li><strong>Outdoor </strong>Fun</li>
            </ul>
            <a href = "Townhouse.php">Buy Now</a>
        </div>
    </div>

        </div>
    </div>
</div>
</body>


</html>
