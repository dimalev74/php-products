<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$array =[
[
  'item' => 'Товар 1',
  'description' => 'Описание товара 1',
  'prise' => 200,
  'currency' => 'RUB',
  'discount' => false,
  'currency_with_discount' => 100
],
[
  'item' => 'Товар 2',
  'description' => 'Описание товара 2',
  'prise' => 400,
  'currency' => 'RUB',
  'discount' => false,
  'currency_with_discount' => 200
],
[
  'item' => 'Товар 3',
  'description' => 'Описание товара 1',
  'prise' => 600,
  'currency' => 'RUB',
  'discount' => false,
  'currency_with_discount' => 300
],
]
?>
      <?php foreach($array as $item): ?>
        <table>
          <tr>
            <?php foreach(array_shift($array) as $key => $value): ?>
              <th>
                <?= $key ?>
              <th>
            <?php endforeach; ?>
          </tr>

        <?php foreach($item as $key => $value): ?>
              <th>
                <?= $value?>               
              <th>
            <?php endforeach; ?>
            </tr>
        </table>
        <?php endforeach; ?>       
</body>
</html>



