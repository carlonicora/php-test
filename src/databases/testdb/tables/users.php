<?php
namespace carlonicora\test\databases\testdb\tables;

use carlonicora\minimalism\database\abstractDatabaseManager;
use carlonicora\minimalism\exceptions\dbRecordNotFoundException;

class users extends abstractDatabaseManager {
    protected $fields = [
        'userId'=>self::INTEGER+self::PRIMARY_KEY+self::AUTO_INCREMENT,
        'firstName'=>self::STRING,
        'lastName'=>self::STRING,
        'email'=>self::STRING
    ];

    /**
     * @param int $userId
     * @return array
     * @throws dbRecordNotFoundException
     */
    public function userId(int $userId): array {
        $sql = 'SELECT * FROM users WHERE userId=?;';
        $parameters = ['i', $userId];

        return $this->runReadSingle($sql, $parameters);
    }
}