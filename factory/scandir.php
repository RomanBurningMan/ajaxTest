<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/8/18
 * Time: 18:54
 */

use Factory\FilterFactory;

require_once "./ABaseScandir.php";
require_once "./JpegFilter.php";
require_once "./PngFilter.php";
require_once "./FilterFactory.php";

$imgPath = __DIR__.'/../i/';

$allIFiles = scandir($imgPath);

foreach ($allIFiles as $file) {
    $filter = FilterFactory::filter($file);

    if ($filter == true) {
        $filter->filterFile();
    }
}


