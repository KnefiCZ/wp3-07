<?php

  require_once("functions.php");

  $submit = filter_input(INPUT_POST, 'submit');

  if (isset($submit)) {
    //Formulář byl odeslán
    $coins = filter_input(INPUT_POST, 'coins');

    if (prepareCoffiee($coins)) {
      echo "Káva připravena.";
    } else {
      echo "Kávu nelze připravit.";
    }

}
 ?>
<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>_-_</title>
  </head>
  <body>

    <p>V automatu je peněz: <?php echo file_get_contents("machineCoins.txt"); ?></p>
    <p>V automatu je vody: <?php echo file_get_contents("machineWater.txt"); ?></p>

    <h1>Coffie Machine</h1>
    <table>
      <ul>
        <li>Latte 25Kč</li>
        <li>Cappuccino 30Kč</li>
        <li>Esspresso 35Kč</li>
      </ul>
    </table>
    <form action="index.php" method="post">
      <label for="coins"> Coins </label>
      <input type="number" name='coins' value="" />
      <input type="submit" name="submit" value="Odeslat" />
    </form>


  </body>
</html>
