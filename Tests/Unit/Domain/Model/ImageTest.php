<?php
namespace Galerielstbdd\GalerieLstbdd\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Loïc BITTER <loic.bitter@etu.u-bordeaux.fr>
 * @author Tony DUONG <tony.duong@etu.u-bordeaux.fr>
 * @author Sylvain DUPUY <sylvain.dupuy.1@etu.u-bordeaux.fr>
 */
class ImageTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Galerielstbdd\GalerieLstbdd\Domain\Model\Image
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Image();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getNom()
        );
    }

    /**
     * @test
     */
    public function setNomForStringSetsNom()
    {
        $this->subject->setNom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'nom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getHauteurReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getHauteur()
        );
    }

    /**
     * @test
     */
    public function setHauteurForIntSetsHauteur()
    {
        $this->subject->setHauteur(12);

        self::assertAttributeEquals(
            12,
            'hauteur',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLargeurReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLargeur()
        );
    }

    /**
     * @test
     */
    public function setLargeurForStringSetsLargeur()
    {
        $this->subject->setLargeur('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'largeur',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDatePublicationReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatePublication()
        );
    }

    /**
     * @test
     */
    public function setDatePublicationForDateTimeSetsDatePublication()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatePublication($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datePublication',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDatePriseReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getDatePrise()
        );
    }

    /**
     * @test
     */
    public function setDatePriseForDateTimeSetsDatePrise()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDatePrise($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'datePrise',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getLieuReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLieu()
        );
    }

    /**
     * @test
     */
    public function setLieuForStringSetsLieu()
    {
        $this->subject->setLieu('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'lieu',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getFichierReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getFichier()
        );
    }

    /**
     * @test
     */
    public function setFichierForFileReferenceSetsFichier()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setFichier($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'fichier',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTagsReturnsInitialValueForTag()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTags()
        );
    }

    /**
     * @test
     */
    public function setTagsForObjectStorageContainingTagSetsTags()
    {
        $tag = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Tag();
        $objectStorageHoldingExactlyOneTags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTags->attach($tag);
        $this->subject->setTags($objectStorageHoldingExactlyOneTags);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTags,
            'tags',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTagToObjectStorageHoldingTags()
    {
        $tag = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->addTag($tag);
    }

    /**
     * @test
     */
    public function removeTagFromObjectStorageHoldingTags()
    {
        $tag = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Tag();
        $tagsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $tagsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($tag));
        $this->inject($this->subject, 'tags', $tagsObjectStorageMock);

        $this->subject->removeTag($tag);
    }
}
