<?php
namespace Galerielstbdd\GalerieLstbdd\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Loïc BITTER <loic.bitter@etu.u-bordeaux.fr>
 * @author Tony DUONG <tony.duong@etu.u-bordeaux.fr>
 * @author Sylvain DUPUY <sylvain.dupuy@etu.u-bordeaux.fr>
 */
class AlbumControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Galerielstbdd\GalerieLstbdd\Controller\AlbumController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Galerielstbdd\GalerieLstbdd\Controller\AlbumController::class)
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
    public function listActionFetchesAllAlbumsFromRepositoryAndAssignsThemToView()
    {

        $allAlbums = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $albumRepository = $this->getMockBuilder(\Galerielstbdd\GalerieLstbdd\Domain\Repository\AlbumRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $albumRepository->expects(self::once())->method('findAll')->will(self::returnValue($allAlbums));
        $this->inject($this->subject, 'albumRepository', $albumRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('albums', $allAlbums);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenAlbumToView()
    {
        $album = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Album();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('album', $album);

        $this->subject->showAction($album);
    }
}
