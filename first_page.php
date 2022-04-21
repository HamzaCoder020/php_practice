<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>page one</title>

</head>

<body>
<?php
$link_name = "Second Page";
$id = 2;
$company = "Jhonson & Ghabana"; ?>

<a href="second_page.php?id=<?php  echo $id; ?>&company=<?php  echo urlencode($company) ; ?>"><?php  echo $link_name; ?></a>

</body>
</html>


