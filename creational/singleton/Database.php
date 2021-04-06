<?php

/**
 * A Database class that only needs to be instantiated once.
 */
class Database
{
    /**
     * Instance of the database
     */
    private static ?Database $instance = null;

    /**
     * Instance getter.
     * Needs to be static, as it should be accessible without creating a new object.
     */
    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Example database operation.
     */
    public function query()
    {
        echo "Queried data from the database.\n";
    }


    /**
     * Private constructor.
     * Disallow creation outside of getInstance() method.
     */
    private function __construct()
    {
        
    }

    /**
     * Disallow cloning of the instance (would create a new instance).
     */
    private function __clone()
    {
        
    }
}