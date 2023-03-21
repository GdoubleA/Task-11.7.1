<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start PHP</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
          <!-- 1-st table -->  
  <div>
    <table style="width:100%">
      <caption><b>Таблица истинности PHP</b></caption>
      <tr>
        <th>A</th>
        <th>B</th>
        <th>!A</th>
        <th>A | | B</th>
        <th>A && B</th>
        <th>A xor B</th>
      </tr>
      <tr>
        <td><?php echo $a = 0; ?></td>
        <td><?php echo $b = 0; ?></td>
        <td><?php $a = 0; echo (!$a)? (!$a):var_dump(!$a) ?></td>
        <td><?php $a = 0; $b = 0; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></td>
        <td><?php $a = 0; $b = 0; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></td>
        <td><?php $a = 0; $b = 0; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></td>
      </tr>
      <tr>
        <td><?php echo $a = 0; ?></td>
        <td><?php echo $b = 1; ?></td>
        <td><?php $a = 0; echo (!$a)? (!$a):var_dump(!$a) ?></td>
        <td><?php $a = 0; $b = 1; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></td>
        <td><?php $a = 0; $b = 1; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></td>
        <td><?php $a = 0; $b = 1; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></td>
      </tr>
      <tr>
        <td><?php echo $a = 1; ?></td>
        <td><?php echo $b = 0; ?></td>
        <td><?php $a = 1; echo (!$a)? (!$a):var_dump(!$a) ?></td>
        <td><?php $a = 1; $b = 0; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></td>
        <td><?php $a = 1; $b = 0; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></td>
        <td><?php $a = 1; $b = 0; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></td>
      </tr>
      <tr>
        <td><?php echo $a = 1; ?></td>
        <td><?php echo $b = 1; ?></td>
        <td><?php $a = 1; echo (!$a)? (!$a):var_dump(!$a) ?></td>
        <td><?php $a = 1; $b = 1; echo ($a || $b)?($a || $b):var_dump($a || $b) ?></td>
        <td><?php $a = 1; $b = 1; echo ($a && $b)?($a && $b):var_dump($a && $b) ?></td>
        <td><?php $a = 1; $b = 1; echo ($a xor $b)?($a xor $b):var_dump($a xor $b) ?></td>
      </tr>
    </table>
  </div>        
          <!-- 2-nd table -->
  <div>
    <table style="width:100%">
      <caption><b>Таблица с гибким сравнением</b></caption>
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
      </tr>
      <tr>
        <th>true</th>
        <td><?php $a = true; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = true; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = true; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = true; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = true; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = true; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = true; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = true; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
      </tr>
      <tr>
        <th>false</th>
        <td><?php $a = false; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = false; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = false; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = false; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = false; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = false; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = false; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = false; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
      </tr>
      <tr>
        <th>1</th>
        <td><?php $a = 1; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 1; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 1; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 1; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 1; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 1; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 1; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 1; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
      </tr>
      <tr>
        <th>0</th>
        <td><?php $a = 0; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 0; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 0; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 0; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 0; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 0; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 0; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = 0; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
      </tr>
      <tr>
        <th>-1</th>
        <td><?php $a = -1; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = -1; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = -1; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = -1; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = -1; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = -1; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = -1; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = -1; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
      </tr>
      <tr>
        <th>"1"</th>
        <td><?php $a = "1"; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "1"; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "1"; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "1"; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "1"; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "1"; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "1"; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "1"; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
      </tr>
      <tr>
        <th>null</th>
        <td><?php $a = null; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = null; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = null; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = null; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = null; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = null; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = null; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = null; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
      </tr>
      <tr>
        <th>"php"</th>
        <td><?php $a = "php"; $b = true; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "php"; $b = false; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "php"; $b = 1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "php"; $b = 0; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "php"; $b = -1; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "php"; $b = "1"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "php"; $b = null; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
        <td><?php $a = "php"; $b = "php"; echo ($a == $b)?($a == $b):var_dump($a == $b) ?></td>
      </tr>
    </table>
  </div>
  
           <!-- 3-rd table -->
  <div>
    <table style="width: 100%;">
      <caption><b>Таблица с жёстким сравнением</b></caption>
      <tr>
        <th></th>
        <th>true</th>
        <th>false</th>
        <th>1</th>
        <th>0</th>
        <th>-1</th>
        <th>"1"</th>
        <th>null</th>
        <th>"php"</th>
      </tr>
      <tr>
        <th>true</th>
        <td><?php $a = true; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = true; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = true; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = true; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = true; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = true; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = true; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = true; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
      </tr>
      <tr>
        <th>false</th>
        <td><?php $a = false; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = false; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = false; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = false; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = false; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = false; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = false; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = false; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
      </tr>
      <tr>
        <th>1</th>
        <td><?php $a = 1; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 1; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 1; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 1; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 1; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 1; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 1; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 1; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
      </tr>
      <tr>
        <th>0</th>
        <td><?php $a = 0; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 0; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 0; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 0; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 0; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 0; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 0; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = 0; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
      </tr>
      <tr>
        <th>-1</th>
        <td><?php $a = -1; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = -1; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = -1; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = -1; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = -1; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = -1; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = -1; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = -1; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
      </tr>
      <tr>
        <th>"1"</th>
        <td><?php $a = "1"; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "1"; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "1"; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "1"; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "1"; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "1"; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "1"; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "1"; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
      </tr>
      <tr>
        <th>null</th>
        <td><?php $a = null; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = null; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = null; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = null; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = null; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = null; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = null; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = null; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
      </tr>
      <tr>
        <th>"php"</th>
        <td><?php $a = "php"; $b = true; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "php"; $b = false; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "php"; $b = 1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "php"; $b = 0; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "php"; $b = -1; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "php"; $b = "1"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "php"; $b = null; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
        <td><?php $a = "php"; $b = "php"; echo ($a === $b)?($a === $b):var_dump($a === $b) ?></td>
      </tr>
    </table>
  </div>
</body>

</html>