<?php

namespace Crhg\LaravelSharding\Database;

use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;

class ShardingDatabaseManager extends DatabaseManager
{
    public function connection($name = null)
    {
        return parent::connection($name); // TODO: Change the autogenerated stub
    }

    protected function configure(Connection $connection, $type)
    {
        if ($connection instanceof ShardingConnection) {
            return $connection;
        }

        return parent::configure($connection, $type); // TODO: Change the autogenerated stub
    }


}
