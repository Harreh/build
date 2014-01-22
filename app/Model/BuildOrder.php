<?php

class BuildOrder extends AppModel {

	public $filterArgs = array(
		'title' => array('type' => 'like'),
		'race' => array('type' => 'value')
	);

	public $findMethods = array(
		'search' => true
	);

	public $actsAs = array('Search.Searchable');

	protected function _findSearch($state, $query, $results = array()) {
		if (!class_exists('SearchableBehavior')) {
			throw new MissingPluginException(array('plugin' => 'Utils'));
		}

		if ($state == 'before') {
			$this->Behaviors->load('Containable', array(
				'autoFields' => false)
			);
			$results = $query;

			if (empty($query['search'])) {
				$query['search'] = '';
			}

			if (isset($query['title'])) {
				$results['conditions'] = Set::merge(
                    $results['conditions'],
					array($this->alias . '.title LIKE' => '%'.$query['title'].'%')
				);
			}

			if (isset($query['race'])) {
				$results['conditions'] = Set::merge(
                    $results['conditions'],
					array($this->alias. '.race LIKE' => $query['race'])
				);
			}

			if (isset($query['operation']) && $query['operation'] == 'count') {
				$results['fields'] = array('COUNT(DISTINCT ' . $this->alias . '.id)');
			}

			return $results;
		} else if ($state == 'after') {
			if (isset($query['operation']) && $query['operation'] == 'count') {
				if (isset($query['group']) && is_array($query['group']) && !empty($query['group'])) {
					return count($results);
				}
				return $results[0][0]['COUNT(DISTINCT ' . $this->alias . '.id)'];
			}
			return $results;
		}
	}

	public function isOwnedBy($buildOrder, $user) {
	    return $this->field('id', array('id' => $buildOrder, 'user_id' => $user)) === $buildOrder;
	}
}
