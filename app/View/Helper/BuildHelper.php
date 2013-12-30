<?php
App::uses('AppHelper', 'View/Helper');

class BuildHelper extends AppHelper {

	public $race;

	public function event($title, $body) {
		return "
			<a class='list-group-item'>
				<span class='badge'>&nbsp;".htmlspecialchars($title)."</span>
				<span style='margin-left: 10px'>".htmlspecialchars($body)."</span>
			</a>
		";
	}

	public function item($supply, $name) {
		if (!is_int($supply) || !is_string($name)) {
			throw new CakeException('Incorrect input types for BuildHelper/item');
		}
		return "
			<a class='list-group-item'>
				<span class='badge'><img src='/build/img/protoss_supply.gif'>&nbsp;$supply</span>
				<span style='margin-left: 10px'>".htmlspecialchars($name)."</span>
			</a>
		";
	}

	public function note($note) {
		if (!is_string($note)) {
			throw new CakeException('Incorrect input type for BuildHelper/note');
		}
		return "<a class='list-group-item'>".htmlspecialchars($note)."</a>";
	}

	public function resource($resource, $amount, $name) {
		if (!is_int($amount) || !is_string($name) || !is_string($resource)) {
			throw new CakeException('Incorrect input types for BuildHelper/resource');
		}

		if ($resource == 'vespene') {
			$resource = 'vespene-'.$this->race;
		} else if ($resource != 'minerals') {
			throw new CakeException('Incorrect input values for BuildHelper/resource');
		}

		return "
			<a class='list-group-item'>
				<span class='badge'><img src='/build/img/$resource.gif'>&nbsp;$amount</span>
				<span style='margin-left: 10px'>".htmlspecialchars($name)."</span>
			</a>
		";
	}

	public function resources($minerals, $vespene, $body) {
		if (!is_int($minerals) || !is_int($vespene) || !is_string($body)) {
			throw new CakeException('Incorrect input type for BuildHelper/resources');
		}
		return "
			<a class='list-group-item'>
				<span class='badge'><img src='/build/img/minerals.gif'>&nbsp;$minerals&nbsp;<img src='/build/img/vespene-".$this->race.".gif'>&nbsp;$vespene</span>
				<span style='margin-left: 10px'>".htmlspecialchars($body)."</span>
			</a>
		";
	}
}
