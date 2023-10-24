<?php
require_once("util-db.php");
require_once("model-fighter.php");

$pageTitle = "fighter";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
        case "Add" :
         if (insertFighter($_POST['fNumber'], $_POST['fDesc'])) {
           echo '<div class="alert alert-success" role="alert"> Fighter added</div>';
         } else {
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
    case "Edit" :
         if (updateFighter($_POST['fNumber'], $_POST['fDesc'], $_POST['fid'])) {
           echo '<div class="alert alert-success" role="alert"> Fighter edited</div>';
         } else {
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
    case "Delete" :
         if (deleteFighter($_POST['fid'])) {
           echo '<div class="alert alert-success" role="alert"> Fighter deleted</div>';
         } else{
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
  }
}

$fighters = selectfighters();
include "view-fighter.php";
      include "view-footer.php";
?>
