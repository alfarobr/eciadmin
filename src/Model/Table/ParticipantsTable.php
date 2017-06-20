<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Participants Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Countries
 *
 * @method \App\Model\Entity\Participant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Participant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Participant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Participant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Participant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Participant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Participant findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ParticipantsTable extends Table
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

        $this->table('participants');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Countries', [
            'foreignKey' => ' country_id',
            'joinType' => 'INNER'
        ]);

        $this->addBehavior('Proffer.Proffer', [
            'file' => [    // The name of your upload field
                'root' => WWW_ROOT . 'files', // Customise the root upload folder here, or omit to use the default
                'dir' => 'file_dir',   // The name of the field to store the folder
            ]
        ]);
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name', 'Ingrese un nombre.');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name', 'Ingrese sus apellidos.');

        $validator
            ->add('email', 'valid', [
                'rule' => 'email',
                'message' => 'Ingrese un correo electrónico válido.'
            ])
            ->add('email', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'El correo electrónico ingresado ya se registró previamente.'
            ])
            ->requirePresence('email', 'create')
            ->notEmpty('email', 'Ingrese un correo electrónico.');
        
        $validator
            ->requirePresence('phone', 'create')
            ->notEmpty('phone', 'Ingrese un teléfono.');

        $validator
            ->requirePresence('study_center', 'create')
            ->notEmpty('study_center', 'Ingrese un centro de estudios o laboral.');

        $validator
            ->requirePresence('grade', 'create')
            ->notEmpty('grade', 'Seleccione un grado académico.');

        $validator
            ->requirePresence('country_id', 'create')
            ->notEmpty('country_id', 'Seleccione un país de procedencia.');
        
        $validator
            ->requirePresence('title_article', 'create')
            ->notEmpty('title_article', 'Ingrese un título de artículo.');

        $validator
            ->requirePresence('author', 'create')
            ->notEmpty('author', 'Ingrese un nombre de autor principal.');

        $validator
            ->requirePresence('area', 'create')
            ->notEmpty('area', 'Seleccione una área de investigación.');
    
        $validator
            ->provider('proffer', 'Proffer\Model\Validation\ProfferRules')
            ->add('file', 'fileSize', [
                'rule' => ['fileSize', '<=', '5MB'],
                'message' => 'El archivo no debe exceder los 5MB.'
            ])
            ->requirePresence('file', 'create')
            ->notEmpty('file', null, 'create');
        
        /*
        $validator
            ->requirePresence('file_dir', 'create')
            ->notEmpty('file_dir'); */

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));

        return $rules;
    }
}
