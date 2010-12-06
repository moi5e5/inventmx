<?php


/**
 * This class defines the structure of the 'blog_x_tematica' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * Sun Dec  5 22:27:09 2010
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class BlogXTematicaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.BlogXTematicaTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('blog_x_tematica');
		$this->setPhpName('BlogXTematica');
		$this->setClassname('BlogXTematica');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('BLOG_X_TEMATICA_ID', 'BlogXTematicaId', 'INTEGER', true, null, null);
		$this->addForeignKey('BLOG_ID', 'BlogId', 'INTEGER', 'blog', 'BLOG_ID', true, null, null);
		$this->addForeignKey('TEMATICA_ID', 'TematicaId', 'INTEGER', 'tematica', 'TEMATICA_ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Blog', 'Blog', RelationMap::MANY_TO_ONE, array('blog_id' => 'blog_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Tematica', 'Tematica', RelationMap::MANY_TO_ONE, array('tematica_id' => 'tematica_id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // BlogXTematicaTableMap
