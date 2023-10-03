</php
function selectfighter() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT fighter_ID,fighter_name,weight FROM `fighter` ");
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
