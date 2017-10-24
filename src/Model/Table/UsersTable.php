<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    var $user_name;
    var $user_sex;
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('user');
        $this->setPrimaryKey('user_id');
    }
    public function read_all_users()
    {
        $uers = $this->find('all');
        return $uers;
    }
    public function read_detail_user($user_id)
    {
//        $user = $this->find()->where(array('id'=>$id))->first();
        $user = $this->find()->where(['user_id'=>$user_id])->first();
        return $user;
    }

    public function delete_user_by_id($user_id)
    {

    }
}