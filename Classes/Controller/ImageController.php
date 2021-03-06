<?php
namespace Galerielstbdd\GalerieLstbdd\Controller;

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
 * ImageController
 */
class ImageController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * imageRepository
     * 
     * @var \Galerielstbdd\GalerieLstbdd\Domain\Repository\ImageRepository
     * @inject
     */
    protected $imageRepository = null;

    /**
     * action latest
     * 
     * @return void
     */
    public function latestAction()
    {
        $images = $this->imageRepository->fiveLastImages();
        $this->view->assign('images', $images);
    }
}
