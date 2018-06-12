<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/8/18
 * Time: 18:57
 */

namespace Factory;


abstract class ABaseScandir
{
    protected $fileName;

    public function __construct($fileName) {
        $this->fileName = $fileName;
    }

    abstract function filterFile();
}