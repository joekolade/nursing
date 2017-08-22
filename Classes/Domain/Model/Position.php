<?php
namespace Joekolade\Nursing\Domain\Model;

/***
 *
 * This file is part of the "Pflegeberufe" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Joe Schäfer <mail@schaefer-webentwicklung.de>, Schäfer – Büro für Webentwicklung
 *
 ***/

/**
 * Position
 */
class Position extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * images
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference>
     * @cascade remove
     */
    protected $images = null;

    /**
     * topjob
     *
     * @var bool
     */
    protected $topjob = false;

    /**
     * employments
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Employment>
     */
    protected $employments = null;

    /**
     * types
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Type>
     */
    protected $types = null;

    /**
     * extras
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Extra>
     */
    protected $extras = null;

    /**
     * location
     *
     * @var \Joekolade\Nursing\Domain\Model\Location
     */
    protected $location = null;

    /**
     * employer
     *
     * @var \Joekolade\Nursing\Domain\Model\Employer
     */
    protected $employer = null;

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
        $this->employments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->types = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->extras = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Employment
     *
     * @param \Joekolade\Nursing\Domain\Model\Employment $employment
     * @return void
     */
    public function addEmployment(\Joekolade\Nursing\Domain\Model\Employment $employment)
    {
        $this->employments->attach($employment);
    }

    /**
     * Removes a Employment
     *
     * @param \Joekolade\Nursing\Domain\Model\Employment $employmentToRemove The Employment to be removed
     * @return void
     */
    public function removeEmployment(\Joekolade\Nursing\Domain\Model\Employment $employmentToRemove)
    {
        $this->employments->detach($employmentToRemove);
    }

    /**
     * Returns the employments
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Employment> $employments
     */
    public function getEmployments()
    {
        return $this->employments;
    }

    /**
     * Sets the employments
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Employment> $employments
     * @return void
     */
    public function setEmployments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $employments)
    {
        $this->employments = $employments;
    }

    /**
     * Adds a Type
     *
     * @param \Joekolade\Nursing\Domain\Model\Type $type
     * @return void
     */
    public function addType(\Joekolade\Nursing\Domain\Model\Type $type)
    {
        $this->types->attach($type);
    }

    /**
     * Removes a Type
     *
     * @param \Joekolade\Nursing\Domain\Model\Type $typeToRemove The Type to be removed
     * @return void
     */
    public function removeType(\Joekolade\Nursing\Domain\Model\Type $typeToRemove)
    {
        $this->types->detach($typeToRemove);
    }

    /**
     * Returns the types
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Type> $types
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Sets the types
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Type> $types
     * @return void
     */
    public function setTypes(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $types)
    {
        $this->types = $types;
    }

    /**
     * Adds a Extra
     *
     * @param \Joekolade\Nursing\Domain\Model\Extra $extra
     * @return void
     */
    public function addExtra(\Joekolade\Nursing\Domain\Model\Extra $extra)
    {
        $this->extras->attach($extra);
    }

    /**
     * Removes a Extra
     *
     * @param \Joekolade\Nursing\Domain\Model\Extra $extraToRemove The Extra to be removed
     * @return void
     */
    public function removeExtra(\Joekolade\Nursing\Domain\Model\Extra $extraToRemove)
    {
        $this->extras->detach($extraToRemove);
    }

    /**
     * Returns the extras
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Extra> $extras
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Sets the extras
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Extra> $extras
     * @return void
     */
    public function setExtras(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $extras)
    {
        $this->extras = $extras;
    }

    /**
     * Returns the location
     *
     * @return \Joekolade\Nursing\Domain\Model\Location $location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Sets the location
     *
     * @param \Joekolade\Nursing\Domain\Model\Location $location
     * @return void
     */
    public function setLocation(\Joekolade\Nursing\Domain\Model\Location $location)
    {
        $this->location = $location;
    }

    /**
     * Returns the employer
     *
     * @return \Joekolade\Nursing\Domain\Model\Employer $employer
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Sets the employer
     *
     * @param \Joekolade\Nursing\Domain\Model\Employer $employer
     * @return void
     */
    public function setEmployer(\Joekolade\Nursing\Domain\Model\Employer $employer)
    {
        $this->employer = $employer;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
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
     * Adds a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function addImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->images->attach($image);
    }

    /**
     * Removes a FileReference
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove The FileReference to be removed
     * @return void
     */
    public function removeImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $imageToRemove)
    {
        $this->images->detach($imageToRemove);
    }

    /**
     * Returns the images
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Sets the images
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\TYPO3\CMS\Extbase\Domain\Model\FileReference> $images
     * @return void
     */
    public function setImages(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $images)
    {
        $this->images = $images;
    }

    /**
     * Returns the topjob
     *
     * @return bool $topjob
     */
    public function getTopjob()
    {
        return $this->topjob;
    }

    /**
     * Sets the topjob
     *
     * @param bool $topjob
     * @return void
     */
    public function setTopjob($topjob)
    {
        $this->topjob = $topjob;
    }

    /**
     * Returns the boolean state of topjob
     *
     * @return bool
     */
    public function isTopjob()
    {
        return $this->topjob;
    }
}
