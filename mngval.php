
<?php
// <form action="" method="post">
Your name is:
<?php
  echo
  $_POST["sname"];
  ?>



Your date of birth is:
<?php
  echo
  $_POST["birthday"];
  ?>


Your gender is:
<?php

 if (isset ($_POST["gender"]))

 {
  echo ["gender"];
 }
 ?>
Your email address is:
<?php
  echo
  $_POST["mail"];
  ?>
Your phone number is:
<?php
  echo
  $_POST["number"];
  ?>

Your address is:
<?php
  echo
  $_POST["address"];
  ?>
Your state is:
<?php
  echo
  $_POST["state"];
  ?>
Your city is:
<?php
  echo
  $_POST["city"];
  ?>
?>

