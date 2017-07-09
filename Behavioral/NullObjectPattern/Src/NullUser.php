<?php

namespace Behavioral\NullObjectPattern\Src;

//Create a new NullUser class which represents the null of the user.
//And add the same method in the NullUser class,but this method will do thing.
class NullUser extends User
{
    public function saySelf()
    {
        echo "I have no name,but i don't bother anyone" . PHP_EOL;
//        throw new \Exception("Null user found!");
    }
}
