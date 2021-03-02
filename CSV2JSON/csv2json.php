<?php

if (($handle = fopen("EURUSD1440.csv", "r")) !== FALSE) {

    $table = [];
    $headings = fgetcsv($handle);   // ignore headings
    while (($data = fgetcsv($handle)) !== FALSE) {
        $r['symbolid'] = $data[0];
        $r['pricedatetime'] = $data[1];
        $r['open'] = floatval($data[2]);
        $r['high'] = floatval($data[3]);
        $r['low'] = floatval($data[4]);
        $r['close'] = floatval($data[5]);
        $table[] = $r;
   }
   print(json_encode($table));
}
fclose($handle);

?>


