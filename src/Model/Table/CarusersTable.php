<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carusers Model
 *
 * @method \App\Model\Entity\Caruser newEmptyEntity()
 * @method \App\Model\Entity\Caruser newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Caruser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Caruser get($primaryKey, $options = [])
 * @method \App\Model\Entity\Caruser findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Caruser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Caruser[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Caruser|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Caruser saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Caruser[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Caruser[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Caruser[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Caruser[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CarusersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('carusers');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        $this->hasOne('UserProfile', [
            'foreignKey' => 'caruser_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('password')
            ->maxLength('password', 150)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        // $validator
        //     ->scalar('user_type')
        //     ->requirePresence('user_type', 'create')
        //     ->notEmptyString('user_type');

        // $validator
        //     ->scalar('status')
        //     ->requirePresence('status', 'create')
        //     ->notEmptyString('status');

        $validator
            ->dateTime('created_date')
            ->notEmptyDateTime('created_date');

        $validator
            ->dateTime('modified_date')
            ->notEmptyDateTime('modified_date');
            $validator
            ->sameAs('confirm_password','password','Password do not match!');

        return $validator;
    }
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}
