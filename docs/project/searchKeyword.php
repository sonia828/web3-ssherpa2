<?php

require_once('db.php');

$keywordfromform = $_GET['keyword'];

//$sql = "SELECT AnimeID, Anime_answer FROM List_Table WHERE Anime_answer LIKE '%". $keywordfromform . "%'";
// method above^ is vulnerable to sql injection attack!! 

$sql = "SELECT * FROM List_Table WHERE Anime_answer LIKE :keywordfromform";

$stmt = $pdo->prepare($sql);
$stmt->bindValue( ':keywordfromform', '%' . $keywordfromform . '%' );
$stmt->execute();

$count = 0;
while ($row = $stmt->fetch()) {
    echo "Anime number: " . $row["AnimeID"] . " - Anime: " . $row["Anime_answer"] . "<br>";
    $count++;
}

if ($count == 0){
	echo "0 results";
}

?>

<a href="index.php"> Return to the main page </a>