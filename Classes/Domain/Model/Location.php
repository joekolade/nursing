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
 * Location
 */
class Location extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * zip
     *
     * @var string
     */
    protected $zip = '';

    /**
     * regions
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Joekolade\Nursing\Domain\Model\Region>
     */
    protected $regions = null;

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
        $this->regions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
     * Returns the zip
     *
     * @return string $zip
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Sets the zip
     *
     * @param string $zip
     * @return void
     */
    public function setZip($zip)
    {
        $this->zip = $zip;
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
}
