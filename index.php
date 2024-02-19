<?php 
require 'function.php';
$dare = mysqli_query($conn,"SELECT dare from jawaban");
// tampiltruth();
// tampildare();

?>

<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TOD</title>
</head>

<body>
    <div class="box">
        
    </div>
<div class="hasil">
  <h2>Hasil Pencarian</h2>
  <?php 
  if(isset($_GET["dare"])){
    echo "DARE <br>";
 tampildare();
};
if(isset($_GET["truth"])){
    echo "DARE <br>";
    tampiltruth();
   };
  ?>
  <div class="truth">
    <form action="" method="get">
    <button type="submit" name="truth">TRUTH</button>
    </form>
  </div>
  <div class="dare">
  <form action="" method="get">
  <button type="submit1" name="dare">DARE</button>
    </form>

  </div>
</div>
     
</body>
</html>