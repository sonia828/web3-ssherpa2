<?php

require_once('db.php');

$keywordfromform = $_GET["keyword"];

$sql = "SELECT AnimeID, Anime_answer FROM List_Table WHERE Anime_answer LIKE '%". $keywordfromform . "%'";

$stmt = $pdo->query($sql);
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