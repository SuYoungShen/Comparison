<?php
  $LessDir = opendir('./less/');//較少的檔案資料夾
  $ManyDir = opendir('./many/');//較多的檔案資料夾

  $i=0;
  echo "較多的檔案(many):<br/>";
  while ($files = readdir($ManyDir)) {//讀取資料夾裡面有什麼檔案
    $Many[] = array($i => $files);
    echo $files."<br>";
    $i++;
  }
  echo "<br/>";

  $j=0;
  echo "較少的檔案(less):<br/>";
  while ($file = readdir($LessDir)) {//讀取資料夾裡面有什麼檔案
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

  $an = implode(array_diff($Manys, $lesss));//較少的檔案與較多的檔案比較
  $ans = implode(array_diff($lesss, $Manys));//較多的檔案與較少的檔案比較

  echo "不同的檔案是：<br/>".$an;
  echo $ans;

  closedir($LessDir);
  closedir($ManyDir);
?>
