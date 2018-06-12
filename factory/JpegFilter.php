<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/8/18
 * Time: 19:00
 */

namespace Factory;


class JpegFilter extends ABaseScandir
{
    public function filterFile()
    {
        if (!file_exists(__DIR__.'/../i/jpeg/')) {
            mkdir(__DIR__.'/../i/jpeg/');
        }
        // TODO: Implement filterFile() method.
        copy(__DIR__.'/../i/'.$this->fileName, __DIR__.'/../i/jpeg/'.$this->fileName);
    }
}