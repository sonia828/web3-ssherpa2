<?php

//if there are any values in the table, display them one at a time
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}

echo $mysqli->host_info . "<br>";

//$mysqli = new mysqli("127.0.0.1", $username, $user_pass, $database_in_use, 3306);

//echo $mysqli->host_info . "\n";



$sql = "SELECT AnimeID, Anime_answer FROM List_Table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Anime number: " . $row["AnimeID"] . " - Anime: " . $row["Anime_answer"] . "<br>";
  } 

} else {
  echo "0 results";
}

?>