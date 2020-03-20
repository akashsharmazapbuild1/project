<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
   
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('first name')
            ->maxLength('first name', 255)
            ->requirePresence('first name', 'create')
            ->notEmptyString('first name');

        $validator
            ->scalar('last name')
            ->maxLength('last name', 255)
            ->requirePresence('last name', 'create')
            ->notEmptyString('last name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('role')
            ->maxLength('role', 255)
            ->requirePresence('role', 'create')
            ->notEmptyString('role');

        $validator
            ->integer('mobile no')
            ->requirePresence('mobile no', 'create')
            ->notEmptyString('mobile no');

        $validator
            ->scalar('password')
            ->maxLength('password', 255)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        $validator
            ->scalar('profile img')
            ->maxLength('profile img', 255)
            ->requirePresence('profile img', 'create')
            ->notEmptyFile('profile img');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmptyString('status');

        $validator
            ->dateTime('created at')
            ->requirePresence('created at', 'create')
            ->notEmptyDateTime('created at');

        $validator
            ->dateTime('updated at')
            ->requirePresence('updated at', 'create')
            ->notEmptyDateTime('updated at');

        return $validator;
    }

    
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
