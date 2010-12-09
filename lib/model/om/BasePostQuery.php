<?php


/**
 * Base class that represents a query for the 'post' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Wed Dec  8 10:38:16 2010
 *
 * @method     PostQuery orderByPostId($order = Criteria::ASC) Order by the post_id column
 * @method     PostQuery orderByTipoPostId($order = Criteria::ASC) Order by the tipo_post_id column
 * @method     PostQuery orderByUserId($order = Criteria::ASC) Order by the user_id column
 * @method     PostQuery orderByBlogId($order = Criteria::ASC) Order by the blog_id column
 * @method     PostQuery orderByNombre($order = Criteria::ASC) Order by the nombre column
 * @method     PostQuery orderByNota($order = Criteria::ASC) Order by the nota column
 * @method     PostQuery orderByTags($order = Criteria::ASC) Order by the tags column
 * @method     PostQuery orderByVisitas($order = Criteria::ASC) Order by the visitas column
 * @method     PostQuery orderByPublishedAt($order = Criteria::ASC) Order by the published_at column
 * @method     PostQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     PostQuery groupByPostId() Group by the post_id column
 * @method     PostQuery groupByTipoPostId() Group by the tipo_post_id column
 * @method     PostQuery groupByUserId() Group by the user_id column
 * @method     PostQuery groupByBlogId() Group by the blog_id column
 * @method     PostQuery groupByNombre() Group by the nombre column
 * @method     PostQuery groupByNota() Group by the nota column
 * @method     PostQuery groupByTags() Group by the tags column
 * @method     PostQuery groupByVisitas() Group by the visitas column
 * @method     PostQuery groupByPublishedAt() Group by the published_at column
 * @method     PostQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     PostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     PostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     PostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     PostQuery leftJoinTipoPost($relationAlias = null) Adds a LEFT JOIN clause to the query using the TipoPost relation
 * @method     PostQuery rightJoinTipoPost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the TipoPost relation
 * @method     PostQuery innerJoinTipoPost($relationAlias = null) Adds a INNER JOIN clause to the query using the TipoPost relation
 *
 * @method     PostQuery leftJoinsfGuardUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the sfGuardUser relation
 * @method     PostQuery rightJoinsfGuardUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the sfGuardUser relation
 * @method     PostQuery innerJoinsfGuardUser($relationAlias = null) Adds a INNER JOIN clause to the query using the sfGuardUser relation
 *
 * @method     PostQuery leftJoinBlog($relationAlias = null) Adds a LEFT JOIN clause to the query using the Blog relation
 * @method     PostQuery rightJoinBlog($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Blog relation
 * @method     PostQuery innerJoinBlog($relationAlias = null) Adds a INNER JOIN clause to the query using the Blog relation
 *
 * @method     PostQuery leftJoinComentario($relationAlias = null) Adds a LEFT JOIN clause to the query using the Comentario relation
 * @method     PostQuery rightJoinComentario($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Comentario relation
 * @method     PostQuery innerJoinComentario($relationAlias = null) Adds a INNER JOIN clause to the query using the Comentario relation
 *
 * @method     PostQuery leftJoinRespuesta($relationAlias = null) Adds a LEFT JOIN clause to the query using the Respuesta relation
 * @method     PostQuery rightJoinRespuesta($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Respuesta relation
 * @method     PostQuery innerJoinRespuesta($relationAlias = null) Adds a INNER JOIN clause to the query using the Respuesta relation
 *
 * @method     PostQuery leftJoinNotasBoletin($relationAlias = null) Adds a LEFT JOIN clause to the query using the NotasBoletin relation
 * @method     PostQuery rightJoinNotasBoletin($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NotasBoletin relation
 * @method     PostQuery innerJoinNotasBoletin($relationAlias = null) Adds a INNER JOIN clause to the query using the NotasBoletin relation
 *
 * @method     Post findOne(PropelPDO $con = null) Return the first Post matching the query
 * @method     Post findOneOrCreate(PropelPDO $con = null) Return the first Post matching the query, or a new Post object populated from the query conditions when no match is found
 *
 * @method     Post findOneByPostId(int $post_id) Return the first Post filtered by the post_id column
 * @method     Post findOneByTipoPostId(int $tipo_post_id) Return the first Post filtered by the tipo_post_id column
 * @method     Post findOneByUserId(int $user_id) Return the first Post filtered by the user_id column
 * @method     Post findOneByBlogId(int $blog_id) Return the first Post filtered by the blog_id column
 * @method     Post findOneByNombre(string $nombre) Return the first Post filtered by the nombre column
 * @method     Post findOneByNota(string $nota) Return the first Post filtered by the nota column
 * @method     Post findOneByTags(string $tags) Return the first Post filtered by the tags column
 * @method     Post findOneByVisitas(int $visitas) Return the first Post filtered by the visitas column
 * @method     Post findOneByPublishedAt(string $published_at) Return the first Post filtered by the published_at column
 * @method     Post findOneByCreatedAt(string $created_at) Return the first Post filtered by the created_at column
 *
 * @method     array findByPostId(int $post_id) Return Post objects filtered by the post_id column
 * @method     array findByTipoPostId(int $tipo_post_id) Return Post objects filtered by the tipo_post_id column
 * @method     array findByUserId(int $user_id) Return Post objects filtered by the user_id column
 * @method     array findByBlogId(int $blog_id) Return Post objects filtered by the blog_id column
 * @method     array findByNombre(string $nombre) Return Post objects filtered by the nombre column
 * @method     array findByNota(string $nota) Return Post objects filtered by the nota column
 * @method     array findByTags(string $tags) Return Post objects filtered by the tags column
 * @method     array findByVisitas(int $visitas) Return Post objects filtered by the visitas column
 * @method     array findByPublishedAt(string $published_at) Return Post objects filtered by the published_at column
 * @method     array findByCreatedAt(string $created_at) Return Post objects filtered by the created_at column
 *
 * @package    propel.generator.lib.model.om
 */
abstract class BasePostQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BasePostQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'propel', $modelName = 'Post', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new PostQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    PostQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof PostQuery) {
			return $criteria;
		}
		$query = new PostQuery();
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
	 * @return    Post|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = PostPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(PostPeer::POST_ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(PostPeer::POST_ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the post_id column
	 * 
	 * @param     int|array $postId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPostId($postId = null, $comparison = null)
	{
		if (is_array($postId) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(PostPeer::POST_ID, $postId, $comparison);
	}

	/**
	 * Filter the query on the tipo_post_id column
	 * 
	 * @param     int|array $tipoPostId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByTipoPostId($tipoPostId = null, $comparison = null)
	{
		if (is_array($tipoPostId)) {
			$useMinMax = false;
			if (isset($tipoPostId['min'])) {
				$this->addUsingAlias(PostPeer::TIPO_POST_ID, $tipoPostId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($tipoPostId['max'])) {
				$this->addUsingAlias(PostPeer::TIPO_POST_ID, $tipoPostId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::TIPO_POST_ID, $tipoPostId, $comparison);
	}

	/**
	 * Filter the query on the user_id column
	 * 
	 * @param     int|array $userId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByUserId($userId = null, $comparison = null)
	{
		if (is_array($userId)) {
			$useMinMax = false;
			if (isset($userId['min'])) {
				$this->addUsingAlias(PostPeer::USER_ID, $userId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($userId['max'])) {
				$this->addUsingAlias(PostPeer::USER_ID, $userId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::USER_ID, $userId, $comparison);
	}

	/**
	 * Filter the query on the blog_id column
	 * 
	 * @param     int|array $blogId The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByBlogId($blogId = null, $comparison = null)
	{
		if (is_array($blogId)) {
			$useMinMax = false;
			if (isset($blogId['min'])) {
				$this->addUsingAlias(PostPeer::BLOG_ID, $blogId['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($blogId['max'])) {
				$this->addUsingAlias(PostPeer::BLOG_ID, $blogId['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::BLOG_ID, $blogId, $comparison);
	}

	/**
	 * Filter the query on the nombre column
	 * 
	 * @param     string $nombre The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
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
		return $this->addUsingAlias(PostPeer::NOMBRE, $nombre, $comparison);
	}

	/**
	 * Filter the query on the nota column
	 * 
	 * @param     string $nota The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByNota($nota = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nota)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nota)) {
				$nota = str_replace('*', '%', $nota);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PostPeer::NOTA, $nota, $comparison);
	}

	/**
	 * Filter the query on the tags column
	 * 
	 * @param     string $tags The value to use as filter.
	 *            Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByTags($tags = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tags)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tags)) {
				$tags = str_replace('*', '%', $tags);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(PostPeer::TAGS, $tags, $comparison);
	}

	/**
	 * Filter the query on the visitas column
	 * 
	 * @param     int|array $visitas The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByVisitas($visitas = null, $comparison = null)
	{
		if (is_array($visitas)) {
			$useMinMax = false;
			if (isset($visitas['min'])) {
				$this->addUsingAlias(PostPeer::VISITAS, $visitas['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($visitas['max'])) {
				$this->addUsingAlias(PostPeer::VISITAS, $visitas['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::VISITAS, $visitas, $comparison);
	}

	/**
	 * Filter the query on the published_at column
	 * 
	 * @param     string|array $publishedAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByPublishedAt($publishedAt = null, $comparison = null)
	{
		if (is_array($publishedAt)) {
			$useMinMax = false;
			if (isset($publishedAt['min'])) {
				$this->addUsingAlias(PostPeer::PUBLISHED_AT, $publishedAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($publishedAt['max'])) {
				$this->addUsingAlias(PostPeer::PUBLISHED_AT, $publishedAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::PUBLISHED_AT, $publishedAt, $comparison);
	}

	/**
	 * Filter the query on the created_at column
	 * 
	 * @param     string|array $createdAt The value to use as filter.
	 *            Accepts an associative array('min' => $minValue, 'max' => $maxValue)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByCreatedAt($createdAt = null, $comparison = null)
	{
		if (is_array($createdAt)) {
			$useMinMax = false;
			if (isset($createdAt['min'])) {
				$this->addUsingAlias(PostPeer::CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($createdAt['max'])) {
				$this->addUsingAlias(PostPeer::CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(PostPeer::CREATED_AT, $createdAt, $comparison);
	}

	/**
	 * Filter the query by a related TipoPost object
	 *
	 * @param     TipoPost $tipoPost  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByTipoPost($tipoPost, $comparison = null)
	{
		return $this
			->addUsingAlias(PostPeer::TIPO_POST_ID, $tipoPost->getTipoPostId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the TipoPost relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function joinTipoPost($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('TipoPost');
		
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
			$this->addJoinObject($join, 'TipoPost');
		}
		
		return $this;
	}

	/**
	 * Use the TipoPost relation TipoPost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    TipoPostQuery A secondary query class using the current class as primary query
	 */
	public function useTipoPostQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinTipoPost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'TipoPost', 'TipoPostQuery');
	}

	/**
	 * Filter the query by a related sfGuardUser object
	 *
	 * @param     sfGuardUser $sfGuardUser  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterBysfGuardUser($sfGuardUser, $comparison = null)
	{
		return $this
			->addUsingAlias(PostPeer::USER_ID, $sfGuardUser->getId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the sfGuardUser relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery The current query, for fluid interface
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
	 * Filter the query by a related Blog object
	 *
	 * @param     Blog $blog  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByBlog($blog, $comparison = null)
	{
		return $this
			->addUsingAlias(PostPeer::BLOG_ID, $blog->getBlogId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Blog relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function joinBlog($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Blog');
		
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
			$this->addJoinObject($join, 'Blog');
		}
		
		return $this;
	}

	/**
	 * Use the Blog relation Blog object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    BlogQuery A secondary query class using the current class as primary query
	 */
	public function useBlogQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinBlog($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Blog', 'BlogQuery');
	}

	/**
	 * Filter the query by a related Comentario object
	 *
	 * @param     Comentario $comentario  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByComentario($comentario, $comparison = null)
	{
		return $this
			->addUsingAlias(PostPeer::POST_ID, $comentario->getPostId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Comentario relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function joinComentario($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Comentario');
		
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
			$this->addJoinObject($join, 'Comentario');
		}
		
		return $this;
	}

	/**
	 * Use the Comentario relation Comentario object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    ComentarioQuery A secondary query class using the current class as primary query
	 */
	public function useComentarioQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinComentario($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Comentario', 'ComentarioQuery');
	}

	/**
	 * Filter the query by a related Respuesta object
	 *
	 * @param     Respuesta $respuesta  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByRespuesta($respuesta, $comparison = null)
	{
		return $this
			->addUsingAlias(PostPeer::POST_ID, $respuesta->getPostId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the Respuesta relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function joinRespuesta($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('Respuesta');
		
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
			$this->addJoinObject($join, 'Respuesta');
		}
		
		return $this;
	}

	/**
	 * Use the Respuesta relation Respuesta object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    RespuestaQuery A secondary query class using the current class as primary query
	 */
	public function useRespuestaQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinRespuesta($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'Respuesta', 'RespuestaQuery');
	}

	/**
	 * Filter the query by a related NotasBoletin object
	 *
	 * @param     NotasBoletin $notasBoletin  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function filterByNotasBoletin($notasBoletin, $comparison = null)
	{
		return $this
			->addUsingAlias(PostPeer::POST_ID, $notasBoletin->getPostId(), $comparison);
	}

	/**
	 * Adds a JOIN clause to the query using the NotasBoletin relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function joinNotasBoletin($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NotasBoletin');
		
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
			$this->addJoinObject($join, 'NotasBoletin');
		}
		
		return $this;
	}

	/**
	 * Use the NotasBoletin relation NotasBoletin object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NotasBoletinQuery A secondary query class using the current class as primary query
	 */
	public function useNotasBoletinQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
	{
		return $this
			->joinNotasBoletin($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NotasBoletin', 'NotasBoletinQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     Post $post Object to remove from the list of results
	 *
	 * @return    PostQuery The current query, for fluid interface
	 */
	public function prune($post = null)
	{
		if ($post) {
			$this->addUsingAlias(PostPeer::POST_ID, $post->getPostId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BasePostQuery
