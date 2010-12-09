<?php



/**
 * Skeleton subclass for performing query and update operations on the 'blog' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.5.3 on:
 *
 * Wed Dec  8 10:03:45 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class BlogQuery extends BaseBlogQuery
{

    /*
     * @author Moisés Rangel
     * @return int
     *
     * Devuelve el nombre ranking por blog
     * Ejemplo: 
     *
    */
    static public function getRanking(int $blog_id)
    {
        return 0;
    }


    /*
     * @author Moisés Rangel
     * @return array
     *
     * Devuelve un array con estadísticas del blog, el orden.
     * Ejemplo:
     *
    */
    static public function getEstadisticas($blog_id)
    {
        $query  =   new BlogQuery();
        $blog   =   $query->findPK($blog_id);
        
        $POSTS  =   $blog->getPosts();

        return  array(
                        "posts" => $POSTS->count(),
                        "visitas" => $POSTS->count()
                     );

    }

} // BlogQuery