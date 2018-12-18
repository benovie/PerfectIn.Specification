# PerfectIn.Specification
Specification pattern classes for typo3/flow package

```php
use \PerfectIn\Specification\Query\QuerySpecificationInterface;

public function query(QuerySpecificationInterface $querySpecification) {
	$query = $this->createQuery();
	$querySpecification->selectSatisfying($query);
	return $query->execute();
}
```
