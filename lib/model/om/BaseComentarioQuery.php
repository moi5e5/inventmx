<?php


/**
 * Base class that represents a query for the 'comentario' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Wed Dec  8 10:38:17 2010
 *
 * @method     ComentarioQuery orderByComentarioId($order = Criteria::ASC) Order by the comentario_id column
 * @method     ComentarioQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     ComentarioQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     ComentarioQuery orderByComentario($order = Criteria::ASC) Order by the comentario column
 * @method     ComentarioQuery orderByRespuesta($order = Criteria::ASC) Order by the respuesta column
 * @method     ComentarioQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ComentarioQuery groupByComentarioId() Group by the comentario_id column
 * @method     ComentarioQuery groupByUserId() Group by the user_id column
 * @method     ComentarioQuery groupByPostId() Group by the post_id column
 * @method     ComentarioQuery groupByComentario() Group by the comentario column
 * @method     ComentarioQuery groupByRespuesta() Group by the respuesta column
 * @method     ComentarioQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ComentarioQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ComentarioQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ComentarioQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ComentarioQuery leftJoinsfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUser relation
 * @method     ComentarioQuery rightJoinsfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUser relation
 * @method     ComentarioQuery innerJoinsfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUser relation
 *
 * @method     ComentarioQuery leftJoinPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the Post relation
 * @method     ComentarioQuery rightJoinPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Post relation
 * @method     ComentarioQuery innerJoinPost($relationAlias = null) Adds a INNER JOIN clause to the query using the Post relation
 *
 * @method     Comentario findOne(PropelPDO $con = null) Return the first Comentario matching the query
 * @method     Comentario findOneOrCreate(PropelPDO $con = null) Return the first Comentario matching the query, or a new Comentario object populated from the query conditions when no match is found
 *
 * @method     Comentario findOneByComentarioId(int $comentario_id) Return the first Comentario filtered by the comentario_id column
 * @method     Comentario findOneByUserId(int $user_id) Return the first Comentario filtered by the user_id column
 * @method     Comentario findOneByPostId(int $post_id) Return the first Comentario filtered by the post_id column
 * @method     Comentario findOneByComentario(string $comentario) Return the first Comentario filtered by the comentario column
 * @method     Comentario findOneByRespuesta(string $respuesta) Return the first Comentario filtered by the respuesta column
 * @method     Comentario findOneByCreatedAt(string $created_at) Return the first Comentario filtered by the created_at column
 *
 * @method     array findByComentarioId(int $comentario_id) Return Comentario objects filtered by the comentario_id column
 * @method     array findByUserId(int $user_id) Return Comentario objects filtered by the user_id column
 * @method     array findByPostId(int $post_id) Return Comentario objects filtered by the post_id column
 * @method     array findByComentario(string $comentario) Return Comentario objects filtered by the comentario column
 * @method     array findByRespuesta(string $respuesta) Return Comentario objects filtered by the respuesta column
 * @method     array findByCreatedAt(string $created_at) Return Comentario objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BaseComentarioQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseComentarioQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Comentario', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new ComentarioQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    ComentarioQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof ComentarioQuery) {
			return $criteria;
		}
		$query = new ComentarioQuery();
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
	 * @return    Comentario|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = ComentarioPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(ComentarioPeer::COMENTARIO_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(ComentarioPeer::COMENTARIO_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the comentario_id column
	 * 
	 * @param     int|array $comentarioId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByComentarioId($comentarioId = null, $comparison = null)
	{
		if (is_array($comentarioId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(ComentarioPeer::COMENTARIO_ID, $comentarioId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(ComentarioPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(ComentarioPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the post_id column
	 * 
	 * @param     int|array $postId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByPostId($postId = null, $comparison = null)
	{
		if (is_array($postId)) {
			$useMinMax = false;
			if (isset($postId['min'])) {
				$this->addUsingAlias(ComentarioPeer::POST_ID, $postId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($postId['max'])) {
				$this->addUsingAlias(ComentarioPeer::POST_ID, $postId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::POST_ID, $postId, $comparison);
	}

	/**
	 * Filter the query on the comentario column
	 * 
	 * @param     string $comentario The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByComentario($comentario = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($comentario)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $comentario)) {
				$comentario = str_replace('*', '%', $comentario);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::COMENTARIO, $comentario, $comparison);
	}

	/**
	 * Filter the query on the respuesta column
	 * 
	 * @param     string $respuesta The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByRespuesta($respuesta = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($respuesta)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $respuesta)) {
				$respuesta = str_replace('*', '%', $respuesta);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::RESPUESTA, $respuesta, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(ComentarioPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(ComentarioPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(ComentarioPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser $sfGuardUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUser($sfGuardUser, $comparison = null)
	{
		return $this
			->addUsingAlias(ComentarioPeer::USER_ID, $sfGuardUser->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
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
	 * Filter the query by a related Post object
	 *
	 * @param     Post $post  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function filterByPost($post, $comparison = null)
	{
		return $this
			->addUsingAlias(ComentarioPeer::POST_ID, $post->getPostId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Post relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function joinPost($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Post');
		
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
			$this->addJoinObject($join, 'Post');
		}
		
		return $this;
	}

	/**
	 * Use the Post relation Post object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery A secondary query class using the current class as primary query
	 */
	public function usePostQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinPost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Post', 'PostQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Comentario $comentario Object to remove from the list of results
	 *
	 * @return    ComentarioQuery The current query, for fluid interface
	 */
	public function prune($comentario = null)
	{
		if ($comentario) {
			$this->addUsingAlias(ComentarioPeer::COMENTARIO_ID, $comentario->getComentarioId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseComentarioQuery