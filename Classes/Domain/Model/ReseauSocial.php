<?php
namespace Galerielstbdd\GalerieLstbdd\Domain\Model;

/***
 *
 * This file is part of the "Galerie_lstbdd" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019 Loïc BITTER <loic.bitter@etu.u-bordeaux.fr>, IUT Bordeaux
 *           Tony DUONG <tony.duong@etu.u-bordeaux.fr>, IUT Bordeaux
 *           Sylvain DUPUY <sylvain.dupuy.1@etu.u-bordeaux.fr>, IUT Bordeaux
 *
 ***/

/**
 * Réseau social
 */
class ReseauSocial extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Identifieur
     * 
     * @var int
     * @validate NotEmpty
     */
    protected $identifier = 0;

    /**
     * Type (FB, Twitter, Insta, etc)
     * 
     * @var int
     */
    protected $type = '';

    /**
     * Returns the identifier
     * 
     * @return int $identifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Sets the identifier
     * 
     * @param int $identifier
     * @return void
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * Returns the type
     * 
     * @return int type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     * 
     * @param string $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}
