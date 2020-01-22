<?php
namespace carlonicora\test\databases\testdb;

use carlonicora\minimalism\database\databaseFactory;
use carlonicora\minimalism\exceptions\dbConnectionException;
use carlonicora\test\databases\testdb\tables\users;

class testDb {
    /** @var users */
    private static $users;

    /**
     * @return users
     */
    public static function users(): users {
        if (!isset(self::$users)){
            try {
                self::$users = databaseFactory::create(users::class);
            } catch (dbConnectionException $e) {
                self::$users = null;
            }
        }
        return self::$users;
    }
}