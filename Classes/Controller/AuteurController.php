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
 * AuteurController
 */
class AuteurController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $auteurs = $this->auteurRepository->findAll();
        $this->view->assign('auteurs', $auteurs);
    }

    /**
     * action show
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Auteur $auteur
     * @return void
     */
    public function showAction(\Galerielstbdd\GalerieLstbdd\Domain\Model\Auteur $auteur)
    {
        $this->view->assign('auteur', $auteur);
    }
}
