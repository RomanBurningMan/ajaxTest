<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/8/18
 * Time: 19:17
 */

namespace Factory;

class FilterFactory
{
    public static function filter($file) {
        $data = pathinfo($file);

        if (empty($data['extension'])) {
            return false;
        }

        $className = 'Factory\\'.ucfirst($data['extension']).'Filter';

        if (class_exists($className) && is_subclass_of($className, 'Factory\\ABaseScandir')) {
            return new $className($file);
        }

        return false;

    }
}