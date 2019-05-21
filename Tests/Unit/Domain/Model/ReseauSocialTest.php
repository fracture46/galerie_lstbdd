<?php
namespace Galerielstbdd\GalerieLstbdd\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Loïc BITTER <loic.bitter@etu.u-bordeaux.fr>
 * @author Tony DUONG <tony.duong@etu.u-bordeaux.fr>
 * @author Sylvain DUPUY <sylvain.dupuy@etu.u-bordeaux.fr>
 */
class ReseauSocialTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIdentifierReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getIdentifier()
        );
    }

    /**
     * @test
     */
    public function setIdentifierForIntSetsIdentifier()
    {
        $this->subject->setIdentifier(12);

        self::assertAttributeEquals(
            12,
            'identifier',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForIntSetsType()
    {
        $this->subject->setType(12);

        self::assertAttributeEquals(
            12,
            'type',
            $this->subject
        );
    }
}
