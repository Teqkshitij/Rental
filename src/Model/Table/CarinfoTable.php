<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carinfo Model
 *
 * @property \App\Model\Table\BookTable&\Cake\ORM\Association\HasMany $Book
 *
 * @method \App\Model\Entity\Carinfo newEmptyEntity()
 * @method \App\Model\Entity\Carinfo newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Carinfo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carinfo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carinfo findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Carinfo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carinfo[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carinfo|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carinfo saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carinfo[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carinfo[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carinfo[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Carinfo[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CarinfoTable extends Table
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

        $this->setTable('carinfo');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

       $this->hasMany('Users');
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
            ->scalar('car_image')
            ->maxLength('car_image', 255)
            ->requirePresence('car_image', 'create')
            ->notEmptyFile('car_image');

        $validator
            ->scalar('car_name')
            ->maxLength('car_name', 255)
            ->requirePresence('car_name', 'create')
            ->notEmptyString('car_name');

        $validator
            ->integer('four')
            ->requirePresence('four', 'create')
            ->notEmptyString('four');

        $validator
            ->integer('eight')
            ->requirePresence('eight', 'create')
            ->notEmptyString('eight');

        $validator
            ->integer('twentyfour')
            ->requirePresence('twentyfour', 'create')
            ->notEmptyString('twentyfour');

        $validator
            ->scalar('model')
            ->maxLength('model', 100)
            ->requirePresence('model', 'create')
            ->notEmptyString('model');

        $validator
            ->scalar('engine')
            ->maxLength('engine', 150)
            ->requirePresence('engine', 'create')
            ->notEmptyString('engine');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        return $validator;
    }
}
