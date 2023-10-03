<?php
function gym() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT gym_ID, gym_name, gym_description FROM `gym`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
