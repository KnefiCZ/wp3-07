
    <?php
      function prepareCoffiee($coins) {

        $machineWater = file_get_contents("machineWater.txt");
        $latteCoins = 25;
        $latteWater = 0.2;
        $CappuccinoCoins = 30;
        $EsspressoCoins = 35;

        if (($latteCoins <= $coins) && ($machineWater >= $latteWater)) {
          $machineCoins = file_get_contents("machineCoins.txt");
          $machineCoins += $coins;
          file_put_contents("machineCoins.txt", $machineCoins);

          $machineWater -= $latteWater;
          file_put_contents("machineWater.txt", $machineWater);
          return true;
        }
        return false;
      }
