<?php
namespace Galerielstbdd\GalerieLstbdd\Domain\Model;

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
 * Auteur
 */
class Auteur extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * Prénom
     * 
     * @var string
     */
    protected $prenom = '';

    /**
     * Profession
     * 
     * @var string
     */
    protected $profession = '';

    /**
     * adresse
     * 
     * @var string
     */
    protected $adress = '';

    /**
     * Email
     * 
     * @var string
     */
    protected $email = '';

    /**
     * Numéro de téléphone
     * 
     * @var int
     */
    protected $telephone = 0;

    /**
     * Site internet de l'auteur
     * 
     * @var string
     */
    protected $siteInternet = '';

    /**
     * Biographie (wysiwyg)
     * 
     * @var string
     */
    protected $bio = '';

    /**
     * Un auteur peut avoir un ou plusieurs albums
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Album>
     * @cascade remove
     * @lazy
     */
    protected $albums = null;

    /**
     * Un auteur peut avoir de aucun à plusieurs réseaux sociaux
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial>
     * @cascade remove
     * @lazy
     */
    protected $reseauSocial = null;

    /**
     * Returns the nom
     * 
     * @return string $nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets the nom
     * 
     * @param string $nom
     * @return void
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Returns the prenom
     * 
     * @return string $prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Sets the prenom
     * 
     * @param string $prenom
     * @return void
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Returns the profession
     * 
     * @return string $profession
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Sets the profession
     * 
     * @param string $profession
     * @return void
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * Returns the adress
     * 
     * @return string $adress
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Sets the adress
     * 
     * @param string $adress
     * @return void
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

    /**
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Returns the telephone
     * 
     * @return int $telephone
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets the telephone
     * 
     * @param int $telephone
     * @return void
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Returns the siteInternet
     * 
     * @return string $siteInternet
     */
    public function getSiteInternet()
    {
        return $this->siteInternet;
    }

    /**
     * Sets the siteInternet
     * 
     * @param string $siteInternet
     * @return void
     */
    public function setSiteInternet($siteInternet)
    {
        $this->siteInternet = $siteInternet;
    }

    /**
     * Returns the bio
     * 
     * @return string $bio
     */
    public function getBio()
    {
        return $this->bio;
    }

    /**
     * Sets the bio
     * 
     * @param string $bio
     * @return void
     */
    public function setBio($bio)
    {
        $this->bio = $bio;
    }

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->albums = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->reseauSocial = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Album $album
     * @return void
     */
    public function addAlbum($album)
    {
        $this->albums->attach($albums);
    }

    /**
     * Removes a
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Album $albumToRemove The Album to be removed
     * @return void
     */
    public function removeAlbum($albumToRemove)
    {
        $this->albums->detach($albumToRemove);
    }

    /**
     * Returns the albums
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Album> albums
     */
    public function getAlbums()
    {
        return $this->albums;
    }

    /**
     * Sets the albums
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Album> $albums
     * @return void
     */
    public function setAlbums(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $albums)
    {
        $this->albums = $albums;
    }

    /**
     * Adds a ReseauSocial
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial $reseauSocial
     * @return void
     */
    public function addReseauSocial(\Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial $reseauSocial)
    {
        $this->reseauSocial->attach($reseauSocial);
    }

    /**
     * Removes a ReseauSocial
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial $reseauSocialToRemove The ReseauSocial to be removed
     * @return void
     */
    public function removeReseauSocial(\Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial $reseauSocialToRemove)
    {
        $this->reseauSocial->detach($reseauSocialToRemove);
    }

    /**
     * Returns the reseauSocial
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial> $reseauSocial
     */
    public function getReseauSocial()
    {
        return $this->reseauSocial;
    }

    /**
     * Sets the reseauSocial
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\ReseauSocial> $reseauSocial
     * @return void
     */
    public function setReseauSocial(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $reseauSocial)
    {
        $this->reseauSocial = $reseauSocial;
    }
}
