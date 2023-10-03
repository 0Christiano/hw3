<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'christi9_hw3user', '1&coiMM_fFKu', 'christi9_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
