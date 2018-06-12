<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/12/18
 * Time: 22:22
 */

namespace Observer;


class User implements IObserver
{

    public function __construct()
    {
        DeliveryMail::getInstance()->addObserver($this);
    }

    public function notify(IObservable $obj)
    {
        // TODO: Implement notify() method.
        if ($obj instanceof IObservable)
        {
            echo "Письмо отправлено";
        }
    }
}