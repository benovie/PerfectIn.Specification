<?php

namespace PerfectIn\Specification\Query;

interface QuerySpecificationInterface {

	public function selectSatisfying(\TYPO3\Flow\Persistence\QueryInterface $query);
	
}
