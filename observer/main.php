<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 6/12/18
 * Time: 21:28
 */
require_once "./IObserver.php";
require_once "./IObservable.php";
require_once "./DeliveryMail.php";
require_once "./User.php";

use Observer\DeliveryMail;
use Observer\User;

new User();
new User();
new User();
new User();

$var = DeliveryMail::getInstance()->notifyObservers();

var_dump($var);