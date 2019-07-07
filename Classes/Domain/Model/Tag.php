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
 * Tag
 */
class Tag extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * libellé
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $libelle = '';

    /**
     * Returns the libelle
     * 
     * @return string $libelle
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Sets the libelle
     * 
     * @param string $libelle
     * @return void
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }
}
