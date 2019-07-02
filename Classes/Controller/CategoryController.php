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
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * categoryRepository
     * 
     * @var \Galerielstbdd\GalerieLstbdd\Domain\Repository\CategoryRepository
     * @inject
     */
    protected $categoryRepository = null;


    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $categories = $this->categoryRepository->findAll();
        $this->view->assign('categories', $categories);
    }

    /**
     * action show
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Category $category
     * @return void
     */
    public function showAction(\Galerielstbdd\GalerieLstbdd\Domain\Model\Category $category)
    {
        $this->view->assign('category', $category);
    }
}
