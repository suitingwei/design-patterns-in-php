<?php

/**
 * The template method deffer some behaviour into the subclass which will triger when the event happens.
 * And the subclass may differ from the parent by implements its own method.
 */
class Base
{
    public function connectDatabase()
    {
        echo "Connecting the database via {$this->connectString()} " . PHP_EOL;
    }

    protected function connectString()
    {
//        throw new \Exception('Cannot use the default connect string');
         return 'Cannot use the default connect string'.PHP_EOL;
    }
}

class MySqlConnector extends Base
{
    public function connectString()
    {
        return "MySql";
    }
}

class SqliteConnector extends Base
{
    public function connectString()
    {
        return "Sqlite";
    }
}

(new Base())->connectDatabase();
(new MySqlConnector())->connectDatabase();
(new SqliteConnector())->connectDatabase();



