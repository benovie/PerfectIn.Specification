<?php

namespace PerfectIn\Specification\Query;

class QuerySpecificationComposite implements QuerySpecificationInterface {

	protected $specifications = array();

	public function add(QuerySpecificationInterface $querySpecification) {
		$this->specifications[] = $querySpecification;
	}

	public function selectSatisfying(\TYPO3\Flow\Persistence\QueryInterface $query) {
		foreach ($this->specifications AS $specification) {
			$specification->selectSatisfying($query);
		}
	}
	
}
