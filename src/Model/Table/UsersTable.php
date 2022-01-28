<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Event\EventInterface;

/**
 * Users Model
 *
 * @property \App\Model\Table\BookTable&\Cake\ORM\Association\HasMany $Book
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
        

        $this->belongsTo('Carinfo');
        $this->belongsTo('Carusers');
        $this->hasOne('Payment');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('full_name')
            ->maxLength('full_name', 255)
            ->requirePresence('full_name', 'create')
            ->notEmptyString('full_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('contact')
            ->maxLength('contact', 10)
            ->requirePresence('contact', 'create')
            ->notEmptyString('contact')
            ->add('contact', 'custom', [
                 'rule' => function ($value, $context) {

                if (!$value) {
                    return false;
                }
                 if ($value <= 10) {
                    return 'Your Contact Has More Than 10 Values ';
                }
                if(strtolower($value) == 0000000000 || strtolower($value) == 1234567890){
                    return "Pls Enter Valid Value";
                }

                return true;
                },
                ]);


        $validator
            ->scalar('license')
            ->maxLength('license', 255)
            ->requirePresence('license', 'create')
            ->notEmptyString('license');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        $validator
            ->scalar('insurance')
            ->maxLength('insurance', 255)
            ->requirePresence('insurance', 'create')
            ->notEmptyString('insurance');

        $validator
            ->scalar('gas')
            ->maxLength('gas', 255)
            ->requirePresence('gas', 'create')
            ->notEmptyString('gas');

        $validator
            ->scalar('destination')
            ->maxLength('destination', 255)
            ->requirePresence('destination', 'create')
            ->notEmptyString('destination');

        $validator
            ->scalar('question')
            ->requirePresence('question', 'create')
            ->notEmptyString('question');

        return $validator;
    }
    
}
