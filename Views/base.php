<!doctype html>
<html lang="en">
<?php include "header.php"; ?>

<body>
  <?php include "menu.php"; ?>
  <?php
  $url = __DIR__ . "/$page/$action.php";
  include $url;
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>