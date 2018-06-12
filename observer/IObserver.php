<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/12/18
 * Time: 21:28
 */

namespace Observer;


interface IObserver
{
    public function notify(IObservable $obj);
}