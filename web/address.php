<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_POST['Email']))
{
echo"<script>
alert('Your purchase has been made');
window.location.href='mycart.php';
</script>";
}
} ?>
