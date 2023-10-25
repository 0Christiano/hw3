<?php
function selectBrand() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT brand_ID, brand_name FROM Brand");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function insertBrand($bName) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `Brand` (`brand_name`) VALUES (?)");
        $stmt->bind_param("s", $bName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}

function updateBrand($bName, $bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `brand` set `brand_name` = ?, where brand_ID = ?");
        $stmt->bind_param("si", $bName, $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteBrand($bid) {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from Brand where brand_ID = ?");
        $stmt->bind_param("i", $bid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}?>
