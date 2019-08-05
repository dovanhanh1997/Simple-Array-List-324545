<?php
include_once 'ArrayList.php';

$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->getArray(1);
//echo $listInteger->getArray(-1);
