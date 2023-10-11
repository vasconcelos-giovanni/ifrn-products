<?php

namespace App;

use App\Exceptions\DatabaseException;
use mysqli;

/**
 * Database class for handling database connections and queries.
 *
 * @mixin mysqli
 */
class Database
{
    /**
     * @var mysqli The database connection.
     */
    private $connection;

    /**
     * Database constructor.
     *
     * @param array $config The database configuration.
     */
    public function __construct($config)
    {
        try {
            $this->connection = new mysqli(
                $config['host'],
                $config['username'],
                $config['password'],
                $config['database']
            );

            // $this->connection->report_mode = MYSQLI_REPORT_ALL;
            // $this->connection->autocommit(FALSE);

            if ($this->connection->connect_error) {
                throw DatabaseException::connectionNotEstablished();
            }
        } catch (DatabaseException $exception) {
            throw DatabaseException::connectionNotEstablished();
        }
    }

    /**
     * Magic method to forward method calls to the database connection.
     *
     * @param string $name The method name.
     * @param array $arguments The method arguments.
     *
     * @return callable The result of the forwarded method call.
     */
    public function __call($name, $arguments)
    {
        return call_user_func_array([$this->connection, $name], $arguments);
    }
}
