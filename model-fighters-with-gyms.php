<?php
function selectfighters() {
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

function selectgymsbyfighter($fid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT g.gym_ID, gym_name, gym_description,style, origin  FROM `gym` g join MArt m on g.gym_ID = m.gym_id where m.fighter_id=?");
      $stmt->bind_param("i", $fid);
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
