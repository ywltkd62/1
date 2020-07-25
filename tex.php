<?php
$conn = mysqli_connect("hlocalhost","root","126514ra","ywltkd")
$sql = mysqli_query($conn,"
  insert into myguests
  (firstname,lastname)
  values(
    'my','sql')
")
 ?>
