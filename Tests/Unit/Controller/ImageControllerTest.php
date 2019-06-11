<?php
namespace Galerielstbdd\GalerieLstbdd\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Loïc BITTER <loic.bitter@etu.u-bordeaux.fr>
 * @author Tony DUONG <tony.duong@etu.u-bordeaux.fr>
 * @author Sylvain DUPUY <sylvain.dupuy@etu.u-bordeaux.fr>
 */
class ImageControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Galerielstbdd\GalerieLstbdd\Controller\ImageController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Galerielstbdd\GalerieLstbdd\Controller\ImageController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

}
