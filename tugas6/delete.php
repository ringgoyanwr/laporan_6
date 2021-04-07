<?php
include 'koneksi1.php';
  if (isset($_GET['ID_BT'])) {
  $delete=mysqli_query($connect,"DELETE FROM bk_tamu WHERE ID_BT='".$_GET['ID_BT']."'");
  header('location:index.php');
  }
