<?php


/**
 * Base class that represents a query for the 'sf_guard_user_profile' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Wed Dec  8 10:38:14 2010
 *
 * @method     sfGuardUserProfileQuery orderBySfGuardUserProfileId($order = Criteria::ASC) Order by the sf_guard_user_profile_id column
 * @method     sfGuardUserProfileQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     sfGuardUserProfileQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     sfGuardUserProfileQuery orderByLastname($order = Criteria::ASC) Order by the lastname column
 * @method     sfGuardUserProfileQuery orderByLastname2($order = Criteria::ASC) Order by the lastname2 column
 * @method     sfGuardUserProfileQuery orderByEmail($order = Criteria::ASC) Order by the email column
 *
 * @method     sfGuardUserProfileQuery groupBySfGuardUserProfileId() Group by the sf_guard_user_profile_id column
 * @method     sfGuardUserProfileQuery groupByUserId() Group by the user_id column
 * @method     sfGuardUserProfileQuery groupByName() Group by the name column
 * @method     sfGuardUserProfileQuery groupByLastname() Group by the lastname column
 * @method     sfGuardUserProfileQuery groupByLastname2() Group by the lastname2 column
 * @method     sfGuardUserProfileQuery groupByEmail() Group by the email column
 *
 * @method     sfGuardUserProfileQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     sfGuardUserProfileQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     sfGuardUserProfileQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     sfGuardUserProfileQuery leftJoinsfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUser relation
 * @method     sfGuardUserProfileQuery rightJoinsfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUser relation
 * @method     sfGuardUserProfileQuery innerJoinsfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUser relation
 *
 * @method     sfGuardUserProfile findOne(PropelPDO $con = null) Return the first sfGuardUserProfile matching the query
 * @method     sfGuardUserProfile findOneOrCreate(PropelPDO $con = null) Return the first sfGuardUserProfile matching the query, or a new sfGuardUserProfile object populated from the query conditions when no match is found
 *
 * @method     sfGuardUserProfile findOneBySfGuardUserProfileId(int $sf_guard_user_profile_id) Return the first sfGuardUserProfile filtered by the sf_guard_user_profile_id column
 * @method     sfGuardUserProfile findOneByUserId(int $user_id) Return the first sfGuardUserProfile filtered by the user_id column
 * @method     sfGuardUserProfile findOneByName(string $name) Return the first sfGuardUserProfile filtered by the name column
 * @method     sfGuardUserProfile findOneByLastname(string $lastname) Return the first sfGuardUserProfile filtered by the lastname column
 * @method     sfGuardUserProfile findOneByLastname2(string $lastname2) Return the first sfGuardUserProfile filtered by the lastname2 column
 * @method     sfGuardUserProfile findOneByEmail(string $email) Return the first sfGuardUserProfile filtered by the email column
 *
 * @method     array findBySfGuardUserProfileId(int $sf_guard_user_profile_id) Return sfGuardUserProfile objects filtered by the sf_guard_user_profile_id column
 * @method     array findByUserId(int $user_id) Return sfGuardUserProfile objects filtered by the user_id column
 * @method     array findByName(string $name) Return sfGuardUserProfile objects filtered by the name column
 * @method     array findByLastname(string $lastname) Return sfGuardUserProfile objects filtered by the lastname column
 * @method     array findByLastname2(string $lastname2) Return sfGuardUserProfile objects filtered by the lastname2 column
 * @method     array findByEmail(string $email) Return sfGuardUserProfile objects filtered by the email column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasesfGuardUserProfileQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasesfGuardUserProfileQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'sfGuardUserProfile', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new sfGuardUserProfileQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    sfGuardUserProfileQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof sfGuardUserProfileQuery) {
			return $criteria;
		}
		$query = new sfGuardUserProfileQuery();
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
	 * @return    sfGuardUserProfile|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = sfGuardUserProfilePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(sfGuardUserProfilePeer::SF_GUARD_USER_PROFILE_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(sfGuardUserProfilePeer::SF_GUARD_USER_PROFILE_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the sf_guard_user_profile_id column
	 * 
	 * @param     int|array $sfGuardUserProfileId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterBySfGuardUserProfileId($sfGuardUserProfileId = null, $comparison = null)
	{
		if (is_array($sfGuardUserProfileId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(sfGuardUserProfilePeer::SF_GUARD_USER_PROFILE_ID, $sfGuardUserProfileId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(sfGuardUserProfilePeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(sfGuardUserProfilePeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(sfGuardUserProfilePeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * @param     string $name The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserProfilePeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the lastname column
	 * 
	 * @param     string $lastname The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterByLastname($lastname = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lastname)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lastname)) {
				$lastname = str_replace('*', '%', $lastname);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserProfilePeer::LASTNAME, $lastname, $comparison);
	}

	/**
	 * Filter the query on the lastname2 column
	 * 
	 * @param     string $lastname2 The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterByLastname2($lastname2 = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lastname2)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lastname2)) {
				$lastname2 = str_replace('*', '%', $lastname2);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserProfilePeer::LASTNAME2, $lastname2, $comparison);
	}

	/**
	 * Filter the query on the email column
	 * 
	 * @param     string $email The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterByEmail($email = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($email)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $email)) {
				$email = str_replace('*', '%', $email);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(sfGuardUserProfilePeer::EMAIL, $email, $comparison);
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser $sfGuardUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUser($sfGuardUser, $comparison = null)
	{
		return $this
			->addUsingAlias(sfGuardUserProfilePeer::USER_ID, $sfGuardUser->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function joinsfGuardUser($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('sfGuardUser');
		
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
			$this->addJoinObject($join, 'sfGuardUser');
		}
		
		return $this;
	}

	/**
	 * Use the sfGuardUser relation sfGuardUser object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    sfGuardUserQuery A secondary query class using the current class as primary query
	 */
	public function usesfGuardUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinsfGuardUser($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'sfGuardUser', 'sfGuardUserQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     sfGuardUserProfile $sfGuardUserProfile Object to remove from the list of results
	 *
	 * @return    sfGuardUserProfileQuery The current query, for fluid interface
	 */
	public function prune($sfGuardUserProfile = null)
	{
		if ($sfGuardUserProfile) {
			$this->addUsingAlias(sfGuardUserProfilePeer::SF_GUARD_USER_PROFILE_ID, $sfGuardUserProfile->getSfGuardUserProfileId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasesfGuardUserProfileQuery
