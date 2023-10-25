<?php
require_once("util-db.php");
require_once("model-promotion.php");

$pageTitle = "promotion";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
        case "Add" :
         if (insertPromotion($_POST['pName'])) {
           echo '<div class="alert alert-success" role="alert"> Promotion added</div>';
         } else {
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
    case "Edit" :
         if (updatePromotion($_POST['pName'], $_POST['pid'])) {
           echo '<div class="alert alert-success" role="alert"> Promotion edited</div>';
         } else {
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
    case "Delete" :
         if (deletePromotion($_POST['pid'])) {
           echo '<div class="alert alert-success" role="alert"> Promotion deleted</div>';
         } else{
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
  }
}

$Promotion = selectPromotion();
include "view-promotion.php";
      include "view-footer.php";
?>
