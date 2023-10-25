<?php
require_once("util-db.php");
require_once("model-brand.php");

$pageTitle = "brand";
include "view-header.php";

if (isset($_POST['actionType'])) {
  switch ($_POST['actionType']) {
        case "Add" :
         if (insertBrand($_POST['bName'])) {
           echo '<div class="alert alert-success" role="alert"> Brand added</div>';
         } else {
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
    case "Edit" :
         if (updateBrand($_POST['bName'], $_POST['bid'])) {
           echo '<div class="alert alert-success" role="alert"> Brand edited</div>';
         } else {
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
    case "Delete" :
         if (deleteBrand($_POST['bid'])) {
           echo '<div class="alert alert-success" role="alert"> Brand deleted</div>';
         } else{
           echo '<div class="alert alert-danger" role="alert"> Error</div>';
         }
        break;
  }
}

$Brands = selectBrands();
include "view-Brand.php";
      include "view-footer.php";
?>
