<?php

namespace PerfectIn\Specification\Query;

class BetweenQuerySpecification implements QuerySpecificationInterface {

	/**
	 * @var string
	 */
	protected $property;

	/**
	 * @var mixed
	 */
	protected $start;

	/**
	 * @var mixed
	 */
	protected $end;

	public function __construct($property, $start, $end) {
		$this->property = $property;
		$this->start = $start;
		$this->end = $end;
	}

	public function selectSatisfying(\TYPO3\Flow\Persistence\QueryInterface $query) {
		$query->logicalAnd(
			$query->greaterThan($this->property, $this->start),
			$query->lowerThan($this->property, $this->end)
		);
	}
	
}
