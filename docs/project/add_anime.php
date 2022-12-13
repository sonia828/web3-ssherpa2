<?php

include "dbconnect.php";
$newAnime = $_GET["new_Anime"];

$newAnime = addslashes($newAnime);

//search the database for the word name
//create another query

echo "<h2> Adding a new anime to the list of the ones you have watched: $newAnime </h2>";

$sql = "INSERT INTO List_Table (AnimeID, Anime_answer) VALUES (NULL, '$newAnime')";
$result = $mysqli->query($sql) or die(mysqli_error($mysqli));

include "searchAllAnime.php";

?>

<a href="index.php"> Return to the main page </a>