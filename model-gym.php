<?php
function selectgyms() {
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

function insertgym($gName, $gDesc) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `gym` (`gym_name`, `gym_description`) VALUES (?, ?)");
        $stmt->bind_param("ss", $gName, $gDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updategym($gName, $gDesc, $gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `gym` set `gym_name` = ?, `gym_description` = ? where gym_ID = ?");
        $stmt->bind_param("ssi", $gName, $gDesc, $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deletegym($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from gym where gym_ID = ?");
        $stmt->bind_param("i", $gid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}?>
