<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/12/18
 * Time: 21:46
 */

namespace Observer;


class DeliveryMail implements IObservable
{
    private $_observers = [];
    private static $_instance;

    public static function getInstance()
    {
        if (empty(self::$_instance))
        {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function addObserver(IObserver $obj)
    {
        // TODO: Implement addObserver() method.
        $this->_observers[] = $obj;
    }

    public function notifyObservers(): void
    {
        // TODO: Implement notifyObservers() method.
        foreach ($this->_observers as $observer)
        {
            $observer->notify($this);
        }

    }

    private function __construct()
    {
    }

    private function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
}