<?php 
  require_once('src/init.php');
  

?>
<h1> 2tuki </h1>
<?php 
 
if (isset($_GET['msg'])){
  echo ($_GET['msg']);
}

?>

<form action="src/user.php">
  Username: <input type="text" name="url"><br>
  <input type="submit" value="Submit">
</form>

