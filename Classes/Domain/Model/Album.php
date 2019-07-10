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
 *           Sylvain DUPUY <sylvain.dupuy.1@etu.u-bordeaux.fr>, IUT Bordeaux
 *
 ***/

/**
 * Album
 */
class Album extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * nom
     * 
     * @var string
     * @validate NotEmpty
     */
    protected $nom = '';

    /**
     * date
     * 
     * @var \DateTime
     */
    protected $date = null;

    /**
     * description (wysiwyg)
     * 
     * @var string
     */
    protected $description = '';

    /**
     * Un album comporte une ou plusieurs images
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Image>
     * @cascade remove
     * @lazy
     */
    protected $images = null;

    /**
     * Un album peut avoir une ou plusieurs catégories
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Category>
     * @cascade remove
     * @lazy
     */
    protected $categories = null;

    /**
     * Un album peut avoir plusieurs tags
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Tag>
     * @cascade remove
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
     * Returns the date
     * 
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     * 
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the description
     * 
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     * 
     * @param string $description
     * @return void
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
        $this->images = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->categories = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Image
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Image $image
     * @return void
     */
    public function addImage(\Galerielstbdd\GalerieLstbdd\Domain\Model\Image $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a Image
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Image $imageToRemove The Image to be removed
     * @return void
     */
    public function removeImage(\Galerielstbdd\GalerieLstbdd\Domain\Model\Image $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Image> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Image> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Adds a Category
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Category $category
     * @return void
     */
    public function addCategory(\Galerielstbdd\GalerieLstbdd\Domain\Model\Category $category)
    {
        $this->categories->attach($category);
    }

    /**
     * Removes a Category
     * 
     * @param \Galerielstbdd\GalerieLstbdd\Domain\Model\Category $categoryToRemove The Category to be removed
     * @return void
     */
    public function removeCategory(\Galerielstbdd\GalerieLstbdd\Domain\Model\Category $categoryToRemove)
    {
        $this->categories->detach($categoryToRemove);
    }

    /**
     * Returns the categories
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Category> $categories
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Sets the categories
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Galerielstbdd\GalerieLstbdd\Domain\Model\Category> $categories
     * @return void
     */
    public function setCategories(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $categories)
    {
        $this->categories = $categories;
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

    /**
     * Get 5 last images
     * 
     */
    public function fiveLastImages(){
        $fiveLast = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $count = 1;
        foreach($this->images as $image) {
            $fiveLast->attach($image);
            $count++;
            if($count == 6){
                break;
            }
        }
        return $fiveLast;
    }
}
