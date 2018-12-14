<?php
$age = 17;
?>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>php part2 exe1</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <p>
    <?php
    if ($age < 18)
    {
      echo 'Vous êtes mineur';
    }else{
      echo 'Vous êtes majeur';
    };
    ?>
  </p>
</body>
</html>
