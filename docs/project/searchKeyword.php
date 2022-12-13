<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
<h1>Anime List Tracker</h1>

<?php

include "dbconnect.php";
//include "searchAllAnime.php";
?>


<form class="form-horizontal" action="searchKeyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search for a keyword </legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ketword">Search Input</label>
  <div class="col-md-5">
    <input id="ketword" name="ketword" type="search" placeholder="e.g. love" class="form-control input-md" required="">
    <p class="help-block">Enter a word to search for in the list of animes</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-info">Search</button>
  </div>
</div>

</fieldset>
</form>



<hr>
<form class="form-horizontal" action="add_anime.php">
<fieldset>

<!-- Form Name -->
<legend>Add an Anime</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="new_Anime">Enter an anime to add to your list</label>  
  <div class="col-md-6">
  <input id="new_Anime" name="new_Anime" type="text" placeholder="e.g. kimi no nawa" class="form-control input-md">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-info">Add anime</button>
  </div>
</div>

</fieldset>
</form>

<?php
//include "searchKeyword.php";


$mysqli->close();


?>

</body>
</html>