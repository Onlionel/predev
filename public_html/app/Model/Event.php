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
	public $foreignFields = array(
		'display' => "CONCAT(Activity.name, ' with ', Audience.name, ' on ', Date.date, ' starting ', `Time`.`time`, ' at ', Location.name, ' for ', Purpose.name)"
	);
/*
	public $displayField = 'display';
	public $recursive = 2;
*/
	public $joins = array(
		array(
			'table' => 'audiences',
			'alias' => 'Audience',
			'type' => 'LEFT',
			'conditions' => array(
				'Audience.id = Event.audience_id',
			)
		),
		array(
			'table' => 'activities',
			'alias' => 'Activity',
			'type' => 'LEFT',
			'conditions' => array(
				'Activity.id = Event.activity_id',
			)
		),
		array(
			'table' => 'dates',
			'alias' => 'Date',
			'type' => 'LEFT',
			'conditions' => array(
				'Date.id = Event.date_id',
			)
		),
		array(
			'table' => 'times',
			'alias' => 'Time',
			'type' => 'LEFT',
			'conditions' => array(
				'Time.id = Event.time_id',
			)
		),
		array(
			'table' => 'locations',
			'alias' => 'Location',
			'type' => 'LEFT',
			'conditions' => array(
				'Location.id = Event.location_id',
			)
		),
		array(
			'table' => 'purposes',
			'alias' => 'Purpose',
			'type' => 'LEFT',
			'conditions' => array(
				'Purpose.id = Event.purpose_id',
			)
		),
	);

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
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'update', // Limit validation to 'create' or 'update' operations
			),
		),
		'audience_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'update', // Limit validation to 'create' or 'update' operations
			),
		),
		'date_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'update', // Limit validation to 'create' or 'update' operations
			),
		),
		'time_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'update', // Limit validation to 'create' or 'update' operations
			),
		),
		'location_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'update', // Limit validation to 'create' or 'update' operations
			),
		),
		'purpose_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				'allowEmpty' => true,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'update', // Limit validation to 'create' or 'update' operations
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
		'Time' => array(
			'className' => 'Time',
			'foreignKey' => 'time_id',
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Log' => array(
			'className' => 'Log',
			'foreignKey' => 'model_id',
			'dependent' => false,
			'conditions' => array('model' => 'Event'),
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
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
		),
		'MediaKey' => array(
			'className' => 'MediaKey',
			'joinTable' => 'events_media_keys',
			'foreignKey' => 'event_id',
			'associationForeignKey' => 'media_key_id',
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