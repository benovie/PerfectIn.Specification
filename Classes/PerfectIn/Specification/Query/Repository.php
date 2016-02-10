<?php

namespace PerfectIn\Specification\Query;

class Repository extends \TYPO3\Flow\Persistence\Repository {

	public function query(QuerySpecificationInterface $querySpecification) {
		$query = $this->createQuery();
		$querySpecification->selectSatisfying($query);
		return $query->execute();
	}
}