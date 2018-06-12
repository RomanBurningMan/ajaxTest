<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/12/18
 * Time: 21:32
 */

namespace Observer;


interface IObservable
{
    public function addObserver(IObserver $obj);

    public function notifyObservers();
}