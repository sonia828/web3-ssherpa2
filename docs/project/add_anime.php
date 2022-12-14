<?php
require_once('db.php');

$Anime_answer = $_GET["Anime_answer"];

echo "<h2> Adding a new anime to the list of the ones you have watched: $Anime_answer </h2>";

$data = [
    'Anime_answer' => $Anime_answer,
];
$sql = "INSERT INTO List_Table (Anime_answer) VALUES (:Anime_answer)";
$stmt= $pdo->prepare($sql);

$id = NULL;

try {
    $pdo->beginTransaction();
    $stmt->execute( $data );
    $id = $pdo->lastInsertId();
    $pdo->commit();
} catch(PDOExecption $e) {
    $pdo->rollback();
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>
<a href="index.php"> Return to the main page </a>