<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gameworld";


$conn = new mysqli($servername, $username, $password, $dbname)
or die($conn->error);

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/style1.css" />
    <title>Games</title>
</head>
<body>>
    <?php include ("inc/navigatie.php"); ?>
    
    <?php 
    {
    ?>
    <?php

    // echo $row['name'];
    // echo $row['price'];
    // echo $row['summary'];
   
    }
    ?>
	</div>
<?php
if(isset($_GET['gamecategoryid']))
{
    $categoryId = $_GET['gamecategoryid'];
}
else{
    $categoryId = "";
    //""is niet gelijk aan null
}
$sql = "SELECT * FROM `Console`, `games` WHERE `Console`.`Console_ID` = `games`.`Console_ID`";
if(isset($categoryId) && $categoryId != "")
{
    $sql.= " AND `Console`.`Console_ID` = ".$categoryId."";
}
$sql.= " ORDER BY `games`.`Game_ID` ASC";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result))
    {
    $games[] = $row;
    }
?>
 
    <div class="products-container">
        <?php
                foreach($games as $key=>$game)
                {
                    ?>
                    
                    
                    <div class="product-item">
                    
                        <img src="images/games/<?php echo $game['Image']?>">
                        <div class="product-price"><?php echo $game['Price']?></div>
                        <H4><?php echo $game['Title']?></h4>
                        <div><button type="button">Order</button></div>
                    </div>
                    
            <?php
                }
            ?>
            <div class="clearfix"></div>
    </div>
</body>
</html>