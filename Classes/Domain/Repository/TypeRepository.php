<?php
namespace Joekolade\Nursing\Domain\Repository;

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
 * The repository for Types
 */
class TypeRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];
}
