<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Jobs Model
 *
 * @method \App\Model\Entity\Job get($primaryKey, $options = [])
 * @method \App\Model\Entity\Job newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Job[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Job|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Job patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Job[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Job findOrCreate($search, callable $callback = null, $options = [])
 */
class JobsTable extends Table
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

        $this->setTable('jobs');
        $this->setDisplayField('ID');
        $this->setPrimaryKey('ID');
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
            ->integer('ID')
            ->allowEmptyString('ID', 'create');

        $validator
            ->scalar('Jobtitel')
            ->maxLength('Jobtitel', 255)
            ->requirePresence('Jobtitel', 'create')
            ->allowEmptyString('Jobtitel', false);

        $validator
            ->scalar('Vollzeit')
            ->maxLength('Vollzeit', 255)
            ->requirePresence('Vollzeit', 'create')
            ->allowEmptyString('Vollzeit', false);

        $validator
            ->date('Startdatum')
            ->requirePresence('Startdatum', 'create')
            ->allowEmptyDate('Startdatum', false);

        $validator
            ->scalar('Firma')
            ->maxLength('Firma', 255)
            ->allowEmptyString('Firma');

        $validator
            ->scalar('Firmenadresse')
            ->maxLength('Firmenadresse', 16777215)
            ->allowEmptyString('Firmenadresse');

        $validator
            ->scalar('Firmenbeschreibung')
            ->maxLength('Firmenbeschreibung', 16777215)
            ->requirePresence('Firmenbeschreibung', 'create')
            ->allowEmptyString('Firmenbeschreibung', false);

        $validator
            ->scalar('Aufgaben')
            ->maxLength('Aufgaben', 16777215)
            ->allowEmptyString('Aufgaben');

        $validator
            ->scalar('Profil')
            ->maxLength('Profil', 16777215)
            ->requirePresence('Profil', 'create')
            ->allowEmptyString('Profil', false);

        $validator
            ->scalar('Angebot')
            ->maxLength('Angebot', 16777215)
            ->requirePresence('Angebot', 'create')
            ->allowEmptyString('Angebot', false);

        $validator
            ->date('Frist')
            ->allowEmptyDate('Frist');

        $validator
            ->scalar('Stadt')
            ->maxLength('Stadt', 255)
            ->allowEmptyString('Stadt');

        $validator
            ->scalar('Region')
            ->maxLength('Region', 255)
            ->allowEmptyString('Region');

        $validator
            ->scalar('Ansprechpartner')
            ->maxLength('Ansprechpartner', 255)
            ->allowEmptyString('Ansprechpartner');

        return $validator;
    }
}
