<?php
  
  $riel = 2103942;
  $kyat = 19092;
  $krons = 109;
  $lek = 9094;

  echo "\nRiel: ".$riel;
  echo "\nKyat: ".$kyat;
  echo "\nKrons: ".$krons;
  echo "\nLek: ".$lek;

  $usd_riel = 4072.00;
  $usd_kyat = 2097.53;
  $usd_krons = 10.82;
  $usd_lek = 94.80;

  $usd = 0;
  $usd += $riel/$usd_riel;
  $usd += $kyat/$usd_kyat;
  $usd += $krons/$usd_krons;
  $usd += $lek/$usd_lek;
  $usd -= 1;
  echo "\nUSD: ". $usd;

