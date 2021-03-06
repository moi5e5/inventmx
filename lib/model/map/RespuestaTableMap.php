<?php



/**
 * This class defines the structure of the 'respuesta' table.
 *
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Wed Dec  8 10:38:17 2010
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator.lib.model.map
 */
class RespuestaTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RespuestaTableMap';

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
		$this->setName('respuesta');
		$this->setPhpName('Respuesta');
		$this->setClassname('Respuesta');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('RESPUESTA_ID', 'RespuestaId', 'INTEGER', true, null, null);
		$this->addForeignKey('POST_ID', 'PostId', 'INTEGER', 'post', 'POST_ID', true, null, null);
		$this->addColumn('OPCION', 'Opcion', 'VARCHAR', true, 250, null);
		$this->addColumn('CANTIDAD', 'Cantidad', 'VARCHAR', true, 250, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Post', 'Post', RelationMap::MANY_TO_ONE, array('post_id' => 'post_id', ), 'RESTRICT', 'RESTRICT');
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
			'symfony_timestampable' => array('create_column' => 'created_at', ),
		);
	} // getBehaviors()

} // RespuestaTableMap
