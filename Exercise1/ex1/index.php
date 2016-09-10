<?php
  include './_includes/header.inc.php';
?>
<p>Barebones</b>
<?php
  $listofthings = array("Luis","blue","no favorite movie","no favorite book","youtube");

  echo "<h1> ", $listofthings[0], " </h1>";

  function printer($lists){
	for($i = 1; $i < 5; $i++){
		echo "<ul><li> ", $lists, " </li></ul>";
	}  
  };
?>

<?php
  include './_includes/footer.inc.php';
?>