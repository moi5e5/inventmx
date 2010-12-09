<?php



/**
 * Skeleton subclass for representing a row from the 'sf_guard_user' table.
 *
 *
 *
 * This class was generated by Moisés Rangel:
 *
 * Wed Dec  8 10:03:45 2010
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.lib.model
 */
class Perfil extends PluginsfGuardUser
{

    /*
     * @author Moisés Rangel
     * @return String
     * 
     * Devuelve el nombre completo del usuario.
     * Ejemplo: Moisés Rangel Narváez
     * 
    */
    public function  __toString()
    {

        $profile    =   $this->getProfile();
        return sprintf('%s %s %s', $profile->getName(), $profile->getLastname(), $profile->getLastname2());
    }

} // Anonimo