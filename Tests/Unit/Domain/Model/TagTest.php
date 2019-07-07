<?php
namespace Galerielstbdd\GalerieLstbdd\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Loïc BITTER <loic.bitter@etu.u-bordeaux.fr>
 * @author Tony DUONG <tony.duong@etu.u-bordeaux.fr>
 * @author Sylvain DUPUY <sylvain.dupuy.1@etu.u-bordeaux.fr>
 */
class TagTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Galerielstbdd\GalerieLstbdd\Domain\Model\Tag
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Tag();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLibelleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLibelle()
        );
    }

    /**
     * @test
     */
    public function setLibelleForStringSetsLibelle()
    {
        $this->subject->setLibelle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'libelle',
            $this->subject
        );
    }
}
