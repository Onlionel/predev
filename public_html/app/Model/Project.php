<?php
App::uses('AppModel', 'Model');
/**
 * Project Model
 *
 * @property Event $Event
 */
class Project extends AppModel {
	public $joins = array(
		array(
			'table' => 'projects_events',
			'alias' => 'ProjectsEvent',
			'type' => 'LEFT',
			'conditions' => array(
				'Project.id = ProjectsEvent.project_id',
			)
		),
		array(
			'table' => 'events',
			'alias' => 'Event',
			'type' => 'LEFT',
			'conditions' => array(
				'Event.id = ProjectsEvent.event_id',
			)
		)
	);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Event' => array(
			'className' => 'Event',
			'joinTable' => 'projects_events',
			'foreignKey' => 'project_id',
			'associationForeignKey' => 'event_id',
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
