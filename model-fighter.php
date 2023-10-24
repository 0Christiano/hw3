<?php
function selectfighters() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT fighter_ID, fighter_name, weight FROM `fighter`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertfighter($fName, $fWeight) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `fighter` (`fighter_name`, `weight`) VALUES (?, ?)");
        $stmt->bind_param("ss", $fName, $fWeight);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatefighter($fName, $fWeight, $fid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `fighter` set `fighter_name` = ?, `weight` = ? where fighter_ID = ?");
        $stmt->bind_param("ssi", $fName, $fWeight, $fid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deletefighter($gid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from fighter where fighter_ID = ?");
        $stmt->bind_param("i", $fid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}?>
