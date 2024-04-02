
<?php 
  include 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Truth or Dare</title>
  <link rel="stylesheet" href="styles.css">
</head>


<body>  
  <div class="container">
    <h1>Truth or Dare</h1>
    <?php 

if(isset($_GET["dare"])){
  echo "DARE <br>";
  tampildare2();
} elseif(isset($_GET["truth"])){
  echo "TRUTH <br>";
  tampiltruth2();
}
?>

    
    <div class="pilihan">
    <form action="" method="get">
        <button type="submit" name="truth">TRUTH</button>
        <button type="submit" name="dare">DARE</button>
    </form>
  </div>

    <div class="info">
     <h4>Tekan Truth atau Dare untuk memulai </h4>
    </div>
  </div>
  
  <div class="level">
    <h2>   Pilih Level</h2>
    <div class="levels">
    <a href="index.php"><h3>level 1  &#128515; </h3></a>
    <a href="level2.php"><h3>level 2  &#128516; </h3></a>
    <a href="level3.php"><h3>level 3  &#128517; </h3></a>
    </div>
  </div>
</body>
</html>
