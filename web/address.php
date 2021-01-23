<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['Add_To_Cart']))
    {
        if(isset($_SESSION['cart']))
        {
            $myitems=array_column($_SESSION['cart'], 'Item_Name');
            if(in_array($_POST['Item_Name'],$myitems))
            {
                echo"<script>
                    alert('Item Already Added');
                    window.location.href='index.php';
                    </script>";
            }
            }
            }
            ?>