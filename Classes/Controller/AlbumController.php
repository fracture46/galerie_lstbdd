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
 *           Sylvain DUPUY <sylvain.dupuy@etu.u-bordeaux.fr>, IUT Bordeaux
 *
 ***/

/**
 * AlbumController
 */
class AlbumController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * albumRepository
     * 
     * @var \Galerielstbdd\GalerieLstbdd\Domain\Repository\AlbumRepository
     * @inject
     */
    protected $albumRepository = null;

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $albums = $this->albumRepository->findAll();
        $this->view->assign('albums', $albums);
    }

    /**
     * action show
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Album $album
     * @return void
     */
    public function showAction(\Galerielstbdd\GalerieLstbdd\Domain\Model\Album $album)
    {
        $this->view->assign('album', $album);
        $images = $album->fiveLastImages();
        $this->view->assign('images', $images);
    }

    /**
     * action latest
     * 
     * @return void
     */
    public function latestAction()
    {

    }

    /**
     * action search
     * 
     * @return void
     */
    public function searchAction()
    {

    }
}
