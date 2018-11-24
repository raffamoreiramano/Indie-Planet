<?php
$caminhoHead=$info['dirname'];
$matrizInfo=explode('/',$caminhoHead);
$headTitle=$matrizInfo[(count($matrizInfo))-1];
if (array_key_exists($headTitle,$nav)) {
    $headTitle=$nav[$headTitle]['primario'][$lang];
}
elseif (array_key_exists($headTitle,$navGeral)) {
    $headTitle=$navGeral[$headTitle][$lang];
}
elseif (!isset($nome)) {
    $headTitleArea=$matrizInfo[(count($matrizInfo))-2];
    if (array_key_exists($headTitleArea,$nav)) {
        if (array_key_exists($headTitle,$nav[$headTitleArea]['secundario'])) {
            $headTitle=$nav[$headTitleArea]['secundario'][$headTitle][$lang];            
        }
    }
    else {
        $headTitle="Indie Planet";
    }
}
else {
    $headTitle=$nome;
}
?>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/ico" href="<?php echo "$corredor"; ?>img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo "$corredor"; ?>css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo "$corredor"; ?>css/all.min.css"> 
    <!-- CSS dos autores -->
    <link rel="stylesheet" href="<?php echo "$corredor"; ?>css/style.css">
    <title><?php echo $headTitle; ?></title>
</head>
