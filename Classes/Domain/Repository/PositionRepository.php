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
 * The repository for Positions
 */
class PositionRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * @var array
     */
    protected $defaultOrderings = [
        'sorting' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING
    ];

    /**
     * @param \Joekolade\Nursing\Domain\Model\Filter $filter
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    public function findByFilter($filter)
    {
        $query = $this->createQuery();
        // Constraints initialisieren
        $constraints = [];
        if ($filter) {
            // $query->in('uid', $filteredArticles);
            // Types
            if (count($filter->getTypes())) {
                $optMatch = [];
                foreach ($filter->getTypes() as $option) {
                    $optMatch[] = $query->contains('types', $option);
                }
                $constraints[] = $query->logicalOr($optMatch);
            }
            // todo: Places
            // Employments
            if (count($filter->getEmployments())) {
                $optMatch = [];
                foreach ($filter->getEmployments() as $option) {
                    $optMatch[] = $query->contains('employments', $option);
                }
                $constraints[] = $query->logicalOr($optMatch);
            }
            // Extras
            if (count($filter->getExtras())) {
                $optMatch = [];
                foreach ($filter->getExtras() as $option) {
                    $optMatch[] = $query->contains('extras', $option);
                }
                // Extras match with AND
                $constraints[] = $query->logicalAnd($optMatch);
            }
        }
        if (count($constraints)) {
            $query->matching($query->logicalAnd($constraints));
        }
        //        if($offset) $query->setOffset($offset);
        //        if($limit) $query->setLimit($limit);
        return $query->execute();
    }
}
