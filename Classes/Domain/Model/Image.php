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
 * Image
 */
class Image extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * Hauteur
     * 
     * @var int
     */
    protected $hauteur = 0;

    /**
     * Largeur
     * 
     * @var string
     */
    protected $largeur = '';

    /**
     * Date de publication
     * 
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $datePublication = null;

    /**
     * Date de prise
     * 
     * @var \DateTime
     */
    protected $datePrise = null;

    /**
     * lieu de prise
     * 
     * @var string
     */
    protected $lieu = '';

    /**
     * fichier
     * 
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @validate NotEmpty
     * @cascade remove
     */
    protected $fichier = null;

    /**
     * tags
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Tag>
     * @lazy
     */
    protected $tags = null;

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
     * Returns the hauteur
     * 
     * @return int $hauteur
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Sets the hauteur
     * 
     * @param int $hauteur
     * @return void
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    /**
     * Returns the largeur
     * 
     * @return string $largeur
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Sets the largeur
     * 
     * @param string $largeur
     * @return void
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }

    /**
     * Returns the datePublication
     * 
     * @return \DateTime $datePublication
     */
    public function getDatePublication()
    {
        return $this->datePublication;
    }

    /**
     * Sets the datePublication
     * 
     * @param \DateTime $datePublication
     * @return void
     */
    public function setDatePublication(\DateTime $datePublication)
    {
        $this->datePublication = $datePublication;
    }

    /**
     * Returns the datePrise
     * 
     * @return \DateTime $datePrise
     */
    public function getDatePrise()
    {
        return $this->datePrise;
    }

    /**
     * Sets the datePrise
     * 
     * @param \DateTime $datePrise
     * @return void
     */
    public function setDatePrise(\DateTime $datePrise)
    {
        $this->datePrise = $datePrise;
    }

    /**
     * Returns the lieu
     * 
     * @return string $lieu
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Sets the lieu
     * 
     * @param string $lieu
     * @return void
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;
    }

    /**
     * Returns the fichier
     * 
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $fichier
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Sets the fichier
     * 
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $fichier
     * @return void
     */
    public function setFichier(\TYPO3\CMS\Extbase\Domain\Model\FileReference $fichier)
    {
        $this->fichier = $fichier;
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
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Tag
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Galerielstbdd\GalerieLstbdd\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Galerielstbdd\GalerieLstbdd\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }
}
