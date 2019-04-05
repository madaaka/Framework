<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Adresse Model
 *
 * @method \App\Model\Entity\Adresse get($primaryKey, $options = [])
 * @method \App\Model\Entity\Adresse newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Adresse[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Adresse|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adresse|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Adresse patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Adresse[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Adresse findOrCreate($search, callable $callback = null, $options = [])
 */
class AdresseTable extends Table
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

        $this->setTable('adresse');
        $this->setDisplayField('adresseId');
        $this->setPrimaryKey('adresseId');
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
            ->scalar('stadt')
            ->maxLength('stadt', 100)
            ->requirePresence('stadt', 'create')
            ->allowEmptyString('stadt', false);

        $validator
            ->scalar('Hausnr')
            ->maxLength('Hausnr', 10)
            ->requirePresence('Hausnr', 'create')
            ->allowEmptyString('Hausnr', false);

        $validator
            ->scalar('strasse')
            ->maxLength('strasse', 100)
            ->requirePresence('strasse', 'create')
            ->allowEmptyString('strasse', false);

        $validator
            ->scalar('region')
            ->maxLength('region', 50)
            ->requirePresence('region', 'create')
            ->allowEmptyString('region', false);

        $validator
            ->integer('adresseId')
            ->allowEmptyString('adresseId', 'create');

        return $validator;
    }
}
