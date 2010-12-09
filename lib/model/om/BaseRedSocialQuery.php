<?php


/**
 * Base class that represents a query for the 'red_social' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Wed Dec  8 10:38:14 2010
 *
 * @method     RedSocialQuery orderByRedSocialId($order = Criteria::ASC) Order by the red_social_id column
 * @method     RedSocialQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 *
 * @method     RedSocialQuery groupByRedSocialId() Group by the red_social_id column
 * @method     RedSocialQuery groupByNombre() Group by the nombre column
 *
 * @method     RedSocialQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     RedSocialQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     RedSocialQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     RedSocialQuery leftJoinRedSocialXPerfil($relationAlias = null) Adds a LEFT JOIN clause to the query using the RedSocialXPerfil relation
 * @method     RedSocialQuery rightJoinRedSocialXPerfil($relationAlias = null) Adds a RIGHT JOIN clause to the query using the RedSocialXPerfil relation
 * @method     RedSocialQuery innerJoinRedSocialXPerfil($relationAlias = null) Adds a INNER JOIN clause to the query using the RedSocialXPerfil relation
 *
 * @method     RedSocial findOne(PropelPDO $con = null) Return the first RedSocial matching the query
 * @method     RedSocial findOneOrCreate(PropelPDO $con = null) Return the first RedSocial matching the query, or a new RedSocial object populated from the query conditions when no match is found
 *
 * @method     RedSocial findOneByRedSocialId(int $red_social_id) Return the first RedSocial filtered by the red_social_id column
 * @method     RedSocial findOneByNombre(string $nombre) Return the first RedSocial filtered by the nombre column
 *
 * @method     array findByRedSocialId(int $red_social_id) Return RedSocial objects filtered by the red_social_id column
 * @method     array findByNombre(string $nombre) Return RedSocial objects filtered by the nombre column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseRedSocialQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseRedSocialQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'RedSocial', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new RedSocialQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    RedSocialQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof RedSocialQuery) {
			return $criteria;
		}
		$query = new RedSocialQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    RedSocial|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = RedSocialPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{	
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    RedSocialQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(RedSocialPeer::RED_SOCIAL_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    RedSocialQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(RedSocialPeer::RED_SOCIAL_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the red_social_id column
	 * 
	 * @param     int|array $redSocialId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RedSocialQuery The current query, for fluid interface
	 */
	public function filterByRedSocialId($redSocialId = null, $comparison = null)
	{
		if (is_array($redSocialId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(RedSocialPeer::RED_SOCIAL_ID, $redSocialId, $comparison);
	}

	/**
	 * Filter the query on the nombre column
	 * 
	 * @param     string $nombre The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RedSocialQuery The current query, for fluid interface
	 */
	public function filterByNombre($nombre = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nombre)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nombre)) {
				$nombre = str_replace('*', '%', $nombre);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(RedSocialPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query by a related RedSocialXPerfil object
	 *
	 * @param     RedSocialXPerfil $redSocialXPerfil  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    RedSocialQuery The current query, for fluid interface
	 */
	public function filterByRedSocialXPerfil($redSocialXPerfil, $comparison = null)
	{
		return $this
			->addUsingAlias(RedSocialPeer::RED_SOCIAL_ID, $redSocialXPerfil->getRedSocialId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the RedSocialXPerfil relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RedSocialQuery The current query, for fluid interface
	 */
	public function joinRedSocialXPerfil($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('RedSocialXPerfil');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'RedSocialXPerfil');
		}
		
		return $this;
	}

	/**
	 * Use the RedSocialXPerfil relation RedSocialXPerfil object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RedSocialXPerfilQuery A secondary query class using the current class as primary query
	 */
	public function useRedSocialXPerfilQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRedSocialXPerfil($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'RedSocialXPerfil', 'RedSocialXPerfilQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     RedSocial $redSocial Object to remove from the list of results
	 *
	 * @return    RedSocialQuery The current query, for fluid interface
	 */
	public function prune($redSocial = null)
	{
		if ($redSocial) {
			$this->addUsingAlias(RedSocialPeer::RED_SOCIAL_ID, $redSocial->getRedSocialId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseRedSocialQuery
