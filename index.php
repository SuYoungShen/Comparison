<?php
  $LessDir=opendir('./less/');//較少的檔案資料夾
  $ManyDir = opendir('./many/');//較多的檔案資料夾

  $i=0;
  echo "較多的檔案:<br/>";
  while ($files = readdir($ManyDir)) {
    $Many[] = array($i => $files);
    echo $files."<br>";
    $i++;
  }
  echo "<br/>";

  $j=0;
  echo "較少的檔案:<br/>";
  while ($file = readdir($LessDir)) {
    $less[] = array($j => $file);
    echo $file."<br>";
    $j++;
  }
  echo "<br/>";

  foreach ($Many as $key => $value) {
    $Manys[$key] = $value[$key]."<br/>";
  }
  foreach ($less as $key => $value) {
    $lesss[$key] = $value[$key]."<br/>";
  }
  $an = implode(array_diff($Manys, $lesss));
  $ans = implode(array_diff($lesss, $Manys));

  echo "不同的檔案是：<br/>".$an;
  echo $ans;

  closedir($LessDir);
  closedir($ManyDir);
?>
