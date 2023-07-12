<?php
  //date_default_timezone_set('Asia/Tokyo');
  
  $hello = 'こんにちは';
  echo $hello. '<br>';
  echo '$hello<br>';
  echo "$hello<br>";
  echo "1+1<br>";
  echo 1+1 . '<br>';

  //ダブルクォーテーションの方が少し制限が緩く、
  //" "で囲った中身の変数は展開して出力してくれる。
  //シングルクォーテーションは囲われたものを「そのまま」表示させる。展開とかしてくれない。



  for($i=0; $i<366; $i++):
    //strtotime 引数で指定した日付(strtotime('+1 day'))のタイムスタンプを取得する (String to Timeの領略)
    $time = strtotime("+$i day");  //('+' . $i . 'dey')でも一応OK
    
    $day = date('n/j(D)', $time);
    echo $day. '<br>';

  endfor;

?>

