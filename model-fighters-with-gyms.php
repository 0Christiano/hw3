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
function insertMArt($gid, $fid, $style, $origin) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `MArt` (`gym_ID`, `fighter_ID`, 'style', origin') VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iiss", $gid, $fid, $style, $origin);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateMArt($gid, $fid, $style, $origin, $mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `MArt` set `gym_ID` = ?, `fighter_ID` = ?, 'origin' = ?, 'MArt_ID' =? where gym_ID = ?");
        $stmt->bind_param("ssi", $gName, $gDesc, $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteMArt($mid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from MArt where MArt_ID = ?");
        $stmt->bind_param("i", $mid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
    }
?>
