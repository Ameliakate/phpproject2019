<?php
session_start();
$fullNameValue = "";
$totalValue2 = "";

//Create a session variable for the mobile number 
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $FullNameValue;
$_SESSION['txtTotal'] = $totalValue2;

//Allocate the mobile session variable to a text box 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
    </head>
    <body>
        <div class="form">
            <form name="Details" method="post" action="eBus3.php">
                <center>
                    <table cellspacing="10"
                           <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                        <td><td>Name</td>
                        <td><input type="text" id="txtName" name="txtName" value="" /></td>
                        </tr>
                        
            </form>  
        
        
    


