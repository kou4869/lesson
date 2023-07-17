<?php
  $fruits = [
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
  ];
?>


<!-- foreachという構文は()の中で配列を指定して「as」で繋げ、「$english」(名前は何でもいい)でkeyのほうを取り出し、
      「=>」 で「$japanese」(名前は何でもいい)で値の『方を取り出している。
      「as」の前で指定した配列の中に値があるかぎり、取り出す作業を続けるシステム。
 -->
<?php foreach ($fruits as $english => $japanese): ?>
  <dt><?php echo $english; ?></dt>
  <dd><?php echo $japanese; ?></dd>
<?php endforeach; ?>


<!-- <dl>
  <dt>apple</dt>
  <dd>りんご</dd>
</dl> -->

