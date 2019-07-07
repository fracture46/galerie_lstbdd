<?php
namespace Galerielstbdd\GalerieLstbdd\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Loïc BITTER <loic.bitter@etu.u-bordeaux.fr>
 * @author Tony DUONG <tony.duong@etu.u-bordeaux.fr>
 * @author Sylvain DUPUY <sylvain.dupuy.1@etu.u-bordeaux.fr>
 */
class AuteurTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Galerielstbdd\GalerieLstbdd\Domain\Model\Auteur
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Auteur();
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
    public function getPrenomReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPrenom()
        );
    }

    /**
     * @test
     */
    public function setPrenomForStringSetsPrenom()
    {
        $this->subject->setPrenom('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'prenom',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getProfessionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getProfession()
        );
    }

    /**
     * @test
     */
    public function setProfessionForStringSetsProfession()
    {
        $this->subject->setProfession('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'profession',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAdressReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAdress()
        );
    }

    /**
     * @test
     */
    public function setAdressForStringSetsAdress()
    {
        $this->subject->setAdress('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'adress',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTelephoneReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTelephone()
        );
    }

    /**
     * @test
     */
    public function setTelephoneForIntSetsTelephone()
    {
        $this->subject->setTelephone(12);

        self::assertAttributeEquals(
            12,
            'telephone',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getSiteInternetReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getSiteInternet()
        );
    }

    /**
     * @test
     */
    public function setSiteInternetForStringSetsSiteInternet()
    {
        $this->subject->setSiteInternet('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'siteInternet',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBioReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBio()
        );
    }

    /**
     * @test
     */
    public function setBioForStringSetsBio()
    {
        $this->subject->setBio('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'bio',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAlbumsReturnsInitialValueForAlbum()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getAlbums()
        );
    }

    /**
     * @test
     */
    public function setAlbumsForObjectStorageContainingAlbumSetsAlbums()
    {
        $album = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Album();
        $objectStorageHoldingExactlyOneAlbums = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneAlbums->attach($album);
        $this->subject->setAlbums($objectStorageHoldingExactlyOneAlbums);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneAlbums,
            'albums',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addAlbumToObjectStorageHoldingAlbums()
    {
        $album = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Album();
        $albumsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $albumsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($album));
        $this->inject($this->subject, 'albums', $albumsObjectStorageMock);

        $this->subject->addAlbum($album);
    }

    /**
     * @test
     */
    public function removeAlbumFromObjectStorageHoldingAlbums()
    {
        $album = new \Galerielstbdd\GalerieLstbdd\Domain\Model\Album();
        $albumsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $albumsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($album));
        $this->inject($this->subject, 'albums', $albumsObjectStorageMock);

        $this->subject->removeAlbum($album);
    }

    /**
     * @test
     */
    public function getReseauSocialReturnsInitialValueForReseauSocial()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getReseauSocial()
        );
    }

    /**
     * @test
     */
    public function setReseauSocialForObjectStorageContainingReseauSocialSetsReseauSocial()
    {
        $reseauSocial = new \Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial();
        $objectStorageHoldingExactlyOneReseauSocial = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneReseauSocial->attach($reseauSocial);
        $this->subject->setReseauSocial($objectStorageHoldingExactlyOneReseauSocial);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneReseauSocial,
            'reseauSocial',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addReseauSocialToObjectStorageHoldingReseauSocial()
    {
        $reseauSocial = new \Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial();
        $reseauSocialObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reseauSocialObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($reseauSocial));
        $this->inject($this->subject, 'reseauSocial', $reseauSocialObjectStorageMock);

        $this->subject->addReseauSocial($reseauSocial);
    }

    /**
     * @test
     */
    public function removeReseauSocialFromObjectStorageHoldingReseauSocial()
    {
        $reseauSocial = new \Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial();
        $reseauSocialObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $reseauSocialObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($reseauSocial));
        $this->inject($this->subject, 'reseauSocial', $reseauSocialObjectStorageMock);

        $this->subject->removeReseauSocial($reseauSocial);
    }
}
