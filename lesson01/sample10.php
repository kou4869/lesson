<?php

  $week_name = ['日', '月', '火', '水', '木', '金', '土'];


  date_default_timezone_set('Asia/Tokyo');
  $week = date('w');
  //date('w')← 『w』は曜日を「数値」で取得する。0が日曜日、6が土曜日。
  //sample09で「$day = date('n/j(D)', $time);」としたが、(D)で英単語で曜日を取得している。

  echo "今日は、$week_name[$week]曜日です";
?>