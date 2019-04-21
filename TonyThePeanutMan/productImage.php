<?php
function product_image($id) {
  $url = "images/noimage.jpg";
  if(file_exists("images/p$id.jpg")) $url = "images/p$id.jpg";
  if(file_exists("images/p$id.png")) $url = "images/p$id.png";
  if(file_exists("images/p$id.gif")) $url = "images/p$id.gif";
  print "<img src='$url' alt='Product Image'>";
?>