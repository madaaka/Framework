<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Benutzer Model
 *
 * @method \App\Model\Entity\Benutzer get($primaryKey, $options = [])
 * @method \App\Model\Entity\Benutzer newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Benutzer[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Benutzer|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Benutzer|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Benutzer patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Benutzer[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Benutzer findOrCreate($search, callable $callback = null, $options = [])
 */
class BenutzerTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('benutzer');
        $this->setDisplayField('Id');
        $this->setPrimaryKey('Id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('Benutzername')
            ->maxLength('Benutzername', 255)
            ->requirePresence('Benutzername', 'create')
            ->allowEmptyString('Benutzername', false);

        $validator
            ->scalar('Name')
            ->maxLength('Name', 255)
            ->requirePresence('Name', 'create')
            ->allowEmptyString('Name', false);

        $validator
            ->scalar('Passwort')
            ->maxLength('Passwort', 255)
            ->requirePresence('Passwort', 'create')
            ->allowEmptyString('Passwort', false);

        $validator
            ->scalar('Email')
            ->maxLength('Email', 255)
            ->requirePresence('Email', 'create')
            ->allowEmptyString('Email', false)
            ->add('Email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->integer('Id')
            ->allowEmptyString('Id', 'create');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['Email']));

        return $rules;
    }
}
