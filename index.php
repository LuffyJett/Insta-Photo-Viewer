<!DOCTYPE html>
<html lang="en">
<?php
include('asset/header.php');
?>
<link rel="stylesheet" type="text/css" href="css/form.css">
<script type="text/javascript" src="js/form.js"></script>
<body>

<form id="contact" name='form' method='post' action="cracked.php">
<div class="container">
    <div class="head">
      <h2>Instagram Photo Viewer</h2>
    </div>
 Username: <input type="text" name="name" id="name" value="<?php echo $my_account; ?>"><br/> 

    <button id="submit" type="submit">
      Get User Photos !
    </button>
  </div>
</form>
 
<?php include('asset/footer.php'); ?>
</body>
</html>