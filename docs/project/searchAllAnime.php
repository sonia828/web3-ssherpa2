<?php
require_once('db.php');
$sql = "SELECT AnimeID, Anime_answer FROM List_Table";

$stmt = $pdo->query($sql);
$count = 0;
while ($row = $stmt->fetch()) {
    echo "   " . $row["AnimeID"] . " -: " . $row["Anime_answer"] . "<br>";
    $count++;
}

if ($count == 0){
	echo "0 results";
}
