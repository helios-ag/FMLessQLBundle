<?php

namespace FM\LessqlBundle\ORM;

use LessQL\Database;
use PDO;

/**
 * Class Manager.
 */
class Manager
{
    /**
     * @var array
     */
    protected $options;

    /**
     * @var Database
     */
    protected $db;

    /**
     * @param $options
     */
    public function __construct($options)
    {
        $this->options = $options;
    }

    /**
     * @param string $instance
     *
     * @return Database
     */
    public function getDB($instance = 'default')
    {
        $options = $this->options;

        $pdo = new PDO(
            $options[$instance]['dsn'],
            $options[$instance]['username'],
            $options[$instance]['password'],
            $options[$instance]['options']
        );
        $this->db = new Database($pdo);

        return $this->db;
    }
}
