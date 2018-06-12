<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/8/18
 * Time: 19:13
 */

namespace Factory;


class PngFilter extends ABaseScandir
{
    public function filterFile() {
        if (!file_exists(__DIR__.'/../i/png/')) {
            mkdir(__DIR__.'/../i/png/');
        }

        copy(__DIR__.'/../i/'.$this->fileName, __DIR__.'/../i/png/'.$this->fileName);
    }
}