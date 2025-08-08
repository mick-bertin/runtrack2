<!-- for ($i = 0; $i <= 1337; $i++) {
        $nombre = $i;
        if ($i == 42) {
          $nombre = " <u> <b>$nombre </b> </u> ";
        }
        echo "$nombre <br>";
      };
     -->

<?php
for ($i = 0; $i <= 1337; $i++) {

  if ($i === 42) {
    echo " <u> <b>$i </b> </u> ";
  } else {
    echo "$i ";
  }
  echo " <br>";
}
?>