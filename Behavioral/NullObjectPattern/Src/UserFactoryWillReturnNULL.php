<?php

namespace Behavioral\NullObjectPattern\Src;

/**
 * Class UserFactory
 */
class UserFactoryWillReturnNUll
{
    public static $users = [];

    public static function getUser()
    {
        if (empty(self::$users)) {
            $user = new User('Real User');
            array_push(self::$users, $user);
            return $user;
        }
        return null;
    }
}
