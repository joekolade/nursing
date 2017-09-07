<?php
namespace Joekolade\Nursing\Controller;

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
 * AbstractController
 */
class AbstractController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * positionRepository
     *
     * @var \Joekolade\Nursing\Domain\Repository\PositionRepository
     * @inject
     */
    protected $positionRepository = null;

    /**
     * typeRepository
     *
     * @var \Joekolade\Nursing\Domain\Repository\TypeRepository
     * @inject
     */
    protected $typeRepository = null;

    /**
     * locationRepository
     *
     * @var \Joekolade\Nursing\Domain\Repository\LocationRepository
     * @inject
     */
    protected $locationRepository = null;

    /**
     * regionRepository
     *
     * @var \Joekolade\Nursing\Domain\Repository\RegionRepository
     * @inject
     */
    protected $regionRepository = null;

    /**
     * employmentRepository
     *
     * @var \Joekolade\Nursing\Domain\Repository\EmploymentRepository
     * @inject
     */
    protected $employmentRepository = null;

    /**
     * extraRepository
     *
     * @var \Joekolade\Nursing\Domain\Repository\ExtraRepository
     * @inject
     */
    protected $extraRepository = null;

    public function buildLocs()
    {
        $locations = $this->locationRepository->findAll();
        $regions = $this->regionRepository->findAll();

        // First return only locations
        return $locations;
    }

//    public function parseLocs(&$locations, &$regions)
//    {
//        $locations = $this->locationRepository->findAll();
//        $regions = $this->regionRepository->findAll();
//
//        // First return only locations
//        return true;
//    }
}
