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
 * Filter
 */
class Filter extends \TYPO3\CMS\Extbase\DomainObject\AbstractValueObject
{
    /**
     * types
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Type>
     */
    protected $types = null;

    /**
     * locations
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Location>
     */
    protected $locations = null;

    /**
     * regions
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Region>
     */
    protected $regions = null;

    /**
     * employments
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Employment>
     */
    protected $employments = null;

    /**
     * extras
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Extra>
     */
    protected $extras = null;

    /**
     * locs
     *
     * @var string
     */
    protected $locs = '';

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
        $this->types = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->locations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->regions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->employments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->extras = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Adds a Location
     *
     * @param \Joekolade\Nursing\Domain\Model\Location $location
     * @return void
     */
    public function addLocation(\Joekolade\Nursing\Domain\Model\Location $location)
    {
        $this->locations->attach($location);
    }

    /**
     * Removes a Location
     *
     * @param \Joekolade\Nursing\Domain\Model\Location $locationToRemove The Location to be removed
     * @return void
     */
    public function removeLocation(\Joekolade\Nursing\Domain\Model\Location $locationToRemove)
    {
        $this->locations->detach($locationToRemove);
    }

    /**
     * Returns the locations
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Location> $locations
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Sets the locations
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Location> $locations
     * @return void
     */
    public function setLocations(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $locations)
    {
        $this->locations = $locations;
    }

    /**
     * Adds a Region
     *
     * @param \Joekolade\Nursing\Domain\Model\Region $region
     * @return void
     */
    public function addRegion(\Joekolade\Nursing\Domain\Model\Region $region)
    {
        $this->regions->attach($region);
    }

    /**
     * Removes a Region
     *
     * @param \Joekolade\Nursing\Domain\Model\Region $regionToRemove The Region to be removed
     * @return void
     */
    public function removeRegion(\Joekolade\Nursing\Domain\Model\Region $regionToRemove)
    {
        $this->regions->detach($regionToRemove);
    }

    /**
     * Returns the regions
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Region> $regions
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * Sets the regions
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Region> $regions
     * @return void
     */
    public function setRegions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $regions)
    {
        $this->regions = $regions;
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
     * Returns the locs
     *
     * @return string $locs
     */
    public function getLocs()
    {
        return $this->locs;
    }

    /**
     * Sets the locs
     *
     * @param string $locs
     * @return void
     */
    public function setLocs($locs)
    {
        $this->locs = $locs;
    }
}
