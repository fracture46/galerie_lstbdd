<?php
namespace Galerielstbdd\GalerieLstbdd\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Loïc BITTER <loic.bitter@etu.u-bordeaux.fr>
 * @author Tony DUONG <tony.duong@etu.u-bordeaux.fr>
 * @author Sylvain DUPUY <sylvain.dupuy@etu.u-bordeaux.fr>
 */
class AuteurControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Galerielstbdd\GalerieLstbdd\Controller\AuteurController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Galerielstbdd\GalerieLstbdd\Controller\AuteurController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllAuteursFromRepositoryAndAssignsThemToView()
    {

        $allAuteurs = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $auteurRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $auteurRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAuteurs));
        $this->inject($this->subject, 'auteurRepository', $auteurRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('auteurs', $allAuteurs);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAuteurToView()
    {
        $auteur = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Auteur();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('auteur', $auteur);

        $this->subject->showAction($auteur);
    }
}
