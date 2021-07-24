<?php

/**
 * The file that defines the upload function
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://simone.vannucci.ch
 * @since      1.0.0
 *
 * @package    Qr_Code_Redirect
 * @subpackage Qr_Code_Redirect/includes
 */
 if ($_FILES['file']['error'] == 0) {
   if ( $_FILES['file']['type'] == 'application/vnd.ms-excel' && $_FILES['file']['name'] == 'list.csv') {
     $uploadDir = __DIR__.'\upload';
     $fileName = basename($_FILES['file']['name']);
     move_uploaded_file($_FILES["file"]["tmp_name"], $uploadDir.DIRECTORY_SEPARATOR.$fileName);
   } else {
     $_FILES['file']['error'] = 100;
   }
 }
?>
