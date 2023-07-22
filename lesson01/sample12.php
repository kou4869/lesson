<?php
date_default_timezone_set('Asia/Tokyo');
  $time = date('G');
?>

<?php if ($time < 17): ?>
  <p>※ 営業時間外です</p>
<?php else: ?>
  <p>ようこそ</p>
<?php endif; ?>

<?php
  $s = 'アイウエオ';
  if ($s):  //$s !==''と同じ意味
    echo '$sには文字が入っています';
  endif;

  $x = 0;
    if (!$x):  //$x === 0と同じ
      echo '$xは0です';
    endif;



?>