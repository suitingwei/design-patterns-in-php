<?php

namespace Behavioral\NullObjectPattern\Src;

//Create or change the UserFactory's getUser method, replace the null of the NullObject class.
class UserFactoryWillReturnNullObject
{
    public static $users = [];

    public static function getUser()
    {
        if (empty(self::$users)) {
            $user = new User('Real User');
            array_push(self::$users, $user);
            return $user;
        }
        return new NullUser();
    }
}

