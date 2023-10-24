<?php
function selectPromotion() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT promotion_ID, promotion_name FROM `promotion`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertPromotion($pName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Promotion` (`promotion_name`) VALUES (?)");
        $stmt->bind_param("s", $pName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updatePromotion($pName, $pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `promotion` set `promotion_name` = ?, where promotion_ID = ?");
        $stmt->bind_param("si", $pName, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deletePromotion($pid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Promotion where promotion_ID = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}?>
