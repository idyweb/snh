<?php  include_once("lib/header.php");

if(!isset($_SESSION["loggedIn"])){
    //redirect to dashboard
    header("Location: login.php");
}
?>
<h3>Dashboard</h3>

    LoggedIn User ID: <?php //echo $_SESSION['loggedIn'] ?>
    welcome, <?php echo $_SESSION['fullname']?>, You are logged in as (<?php echo
    $_SESSION['role'] ?>), and your ID is <?php echo $_SESSION['loggedIn'] ?>

<?php include_once("lib/footer.php"); ?>