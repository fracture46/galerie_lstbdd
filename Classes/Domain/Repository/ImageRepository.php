<?php
namespace Galerielstbdd\GalerieLstbdd\Domain\Repository;

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
 * The repository for Images
 */
class ImageRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    protected $defaultOrderings = [
        'datePublication' => QueryInterface::ORDER_DESCENDING
    ];


    public function fiveLastImages(){
        $query = $this->createQuery();
        $query->setOrderings('datePublication', 'TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING');
        $query->setLimit(5);
        return $query->execute();
    }
}
