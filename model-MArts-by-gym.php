<?php
function selectMArtsbygym($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.gym_ID, gym_name, gym_description,style, origin  FROM `gym` g join MArt m on g.gym_ID = m.gym_id where m.gym_id=?");
      $stmt->bind_param("i", $gid);
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
