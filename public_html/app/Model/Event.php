<?php
App::uses('AppModel', 'Model');
/**
 * Event Model
 *
 * @property Activity $Activity
 * @property Audience $Audience
 * @property Date $Date
 * @property Location $Location
 * @property Purpose $Purpose
 * @property Project $Project
 */
class Event extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'activity_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'audience_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'location_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'purpose_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Activity' => array(
			'className' => 'Activity',
			'foreignKey' => 'activity_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true
		),
		'Audience' => array(
			'className' => 'Audience',
			'foreignKey' => 'audience_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true
		),
		'Date' => array(
			'className' => 'Date',
			'foreignKey' => 'date_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true
		),
		'Location' => array(
			'className' => 'Location',
			'foreignKey' => 'location_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true
		),
		'Purpose' => array(
			'className' => 'Purpose',
			'foreignKey' => 'purpose_id',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'counterCache' => true
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Project' => array(
			'className' => 'Project',
			'joinTable' => 'projects_events',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'project_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
