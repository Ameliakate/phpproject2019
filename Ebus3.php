<!DOCTYPE html>
<html>
<body>
    <!-- //Starting the session to get the session variable from last page-->
    <?php
    
    session_start();
    $totalValue = $_POST['txtTotal'];
    $FullNameValue = $_POST['txtName'];
    echo "The name is : ".$FullNameValue.".";
    echo "<br></br>";
    echo "The total value is : ".$totalValue2.".";
      
    ?>
    
</body>
</html>
    
        
    


