<?php
declare(strict_types=1);
include_once "includes/header.php";
?>

<!--maybe also add a link to go back to the overview?-->
<a href="?page=<?php echo $_GET['page']; ?>"> BACK TO OVERVIEW </a>
<?php //var_dump($data);?>
<br>
<div><?php echo $data['firstName']; ?></div>
<div><?php echo $data['lastName']; ?></div>
<div><?php echo $data['email']; ?></div>

<?php require 'includes/footer.php'; ?>
