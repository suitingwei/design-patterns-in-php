<?php
/**
 * The null object design patterns can be used to eliminate the conditional check of the "null" in the client code.
 * For example, a user can be null or a true user, and the client code should check the null presence.
 * See the code below.
 * @author sui
 * @date   2017-06-21
 */
require_once '../../vendor/autoload.php';

use Behavioral\NullObjectPattern\Src\UserFactoryWillReturnNUll;
use Behavioral\NullObjectPattern\Src\UserFactoryWillReturnNullObject;

$realUser = UserFactoryWillReturnNUll::getUser();
$null     = UserFactoryWillReturnNUll::getUser();

//This piece of code show the disadvantages of the null conditoional check.
//Every time we call the factory which gives us the user object, we must consider the
//"null" conditional, and handle the exception. Can we eliminate the conditional check?
if (null == $realUser) {
    echo "get the null user,and handle it by mannelly code." . PHP_EOL;
//    throw new \Exception('User is null!');
}
else {
    $realUser->saySelf();
}

if (null == $null) {
    echo "Null user captured,and handle it by mannelly code." . PHP_EOL;
}
else {
    $null->saySelf();
}

//This time whether we get the user object or the nullUser object,
//we can use the same method to call,and no thing to handle or check.
$realUser2 = UserFactoryWillReturnNullObject::getUser();
$null2     = UserFactoryWillReturnNullObject::getUser();

$realUser2->saySelf();
$null2->saySelf();













