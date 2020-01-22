<?php
namespace carlonicora\test\models;

use carlonicora\minimalism\abstracts\abstractWebModel;
use carlonicora\minimalism\exceptions\dbRecordNotFoundException;
use carlonicora\test\databases\testdb\testDb;

class index extends abstractWebModel {
    protected $viewName = 'index';

    /**
     * @return bool
     */
    public function generateData(): bool {
        try {
            $users = testDb::users()->loadAll();

            $this->response['users'] = [];

            foreach ($users as $user){
                $this->response['users'][] = [
                    'userId'=>$user['userId'],
                    'firstName'=>$user['firstName'],
                    'lastName'=>$user['last'],
                    'email'=>$user['email']
                ];
            }
        } catch (dbRecordNotFoundException $e) {
        }

        return true;
    }
}