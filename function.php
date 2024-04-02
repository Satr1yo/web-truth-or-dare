<?php 

$conn = mysqli_connect("localhost","root","","tod");

function tampiltruth(){
global $conn;

$query = mysqli_query($conn, "SELECT truth FROM jawaban");
$truth = mysqli_fetch_all($query, MYSQLI_ASSOC); //mysqli_fetch_all untuk mengambil semua baris hasil query menjadi sebuah array asosiatif.


$allTruth = [];
foreach ($truth as $row) {
    $allTruth[] = $row["truth"];
}

$randomIndex = array_rand($allTruth, 1);
$randomTruth = $allTruth[$randomIndex];

echo "<b>";
echo $randomTruth;  // Tampilkan truth yang terpilih

echo "</b>";
}

function tampildare(){
    global $conn;
    
    $query = mysqli_query($conn, "SELECT dare FROM jawaban");
    $dares = mysqli_fetch_all($query, MYSQLI_ASSOC); //mysqli_fetch_all untuk mengambil semua baris hasil query menjadi sebuah array asosiatif.

    $allDares = [];
    foreach ($dares as $row) {
        $allDares[] = $row["dare"];
    }

    $randomIndex = array_rand($allDares, 1);
    $randomDare = $allDares[$randomIndex];

    echo "<b>";
    echo $randomDare;  // Tampilkan dare yang terpilih
    echo "</b>";
}
?>

<?php 
function tampiltruth2(){
    global $conn;
    
    
    $query = mysqli_query($conn, "SELECT truth_level2 FROM jawaban");
    $truth = mysqli_fetch_all($query, MYSQLI_ASSOC); //mysqli_fetch_all untuk mengambil semua baris hasil query menjadi sebuah array asosiatif.
    
    
    $allTruth = [];
    foreach ($truth as $row) {
        $allTruth[] = $row["truth_level2"];
    }
    
    $randomIndex = array_rand($allTruth, 1);
    $randomTruth = $allTruth[$randomIndex];
    
    echo "<b>";
    echo $randomTruth;  // Tampilkan truth yang terpilih
    
    echo "</b>";
    }
    
    function tampildare2(){
        global $conn;
        
        $query = mysqli_query($conn, "SELECT dare_level2 FROM jawaban");
        $dares = mysqli_fetch_all($query, MYSQLI_ASSOC); //mysqli_fetch_all untuk mengambil semua baris hasil query menjadi sebuah array asosiatif.
    
        $allDares = [];
        foreach ($dares as $row) {
            $allDares[] = $row["dare_level2"];
        }
    
        $randomIndex = array_rand($allDares, 1);
        $randomDare = $allDares[$randomIndex];
    
        echo "<b>";
        echo $randomDare;  // Tampilkan dare yang terpilih
        echo "</b>";
    }
    ?>

    <?php
function tampiltruth3(){
    global $conn;
    
    $query = mysqli_query($conn, "SELECT truth_level3 FROM jawaban");
    $truth = mysqli_fetch_all($query, MYSQLI_ASSOC); //mysqli_fetch_all untuk mengambil semua baris hasil query menjadi sebuah array asosiatif.
    
    
    $allTruth = [];
    foreach ($truth as $row) {
        $allTruth[] = $row["truth_level3"];
    }
    
    $randomIndex = array_rand($allTruth, 1);
    $randomTruth = $allTruth[$randomIndex];
    
    echo "<b>";
    echo $randomTruth;  // Tampilkan truth yang terpilih
    
    echo "</b>";
    }
    
    function tampildare3(){
        global $conn;
        
        $query = mysqli_query($conn, "SELECT dare_level3 FROM jawaban");
        $dares = mysqli_fetch_all($query, MYSQLI_ASSOC); //mysqli_fetch_all untuk mengambil semua baris hasil query menjadi sebuah array asosiatif.
    
        $allDares = [];
        foreach ($dares as $row) {
            $allDares[] = $row["dare_level3"];
        }
    
        $randomIndex = array_rand($allDares, 1);
        $randomDare = $allDares[$randomIndex];
    
        echo "<b>";
        echo $randomDare;  // Tampilkan dare yang terpilih
        echo "</b>";
    }


    

?>
<!-- mysqli_fetch_all mengambil semua baris hasil query dan menyimpannya ke dalam array $dares.
foreach loop menggabungkan semua dare dari array $dares ke dalam array tunggal $allDares.
array_rand memilih satu indeks acak dari array $allDares dan menyimpannya ke dalam $randomIndex.
$randomDare mengambil nilai dare yang sesuai dengan indeks acak yang terpilih.
echo $randomDare menampilkan dare yang terpilih -->