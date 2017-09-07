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
 * PositionController
 */
class PositionController extends \Joekolade\Nursing\Controller\AbstractController
{

    /**
     * action list
     *
     * @param \Joekolade\Nursing\Domain\Model\Filter $filter
     *
     * @return void
     */
    public function listAction($filter = NULL)
    {
        if(empty($filter)) {
            $filter = new \Joekolade\Nursing\Domain\Model\Filter();
        }

        $types = $this->typeRepository->findAll();

        // Build
        $locs = $this->buildLocs();

        $employments = $this->employmentRepository->findAll();
        $extras = $this->extraRepository->findAll();

        $positions = $this->positionRepository->findByFilter($filter);

        $this->view->assignMultiple([
            'positions' => $positions,
            'filter' => $filter,
            'types' => $types,
            'locations' => $locs,
            'employments' => $employments,
            'extras' => $extras,
        ]);
    }

    /**
     * action show
     *
     * @param \Joekolade\Nursing\Domain\Model\Position $position
     * @return void
     */
    public function showAction(\Joekolade\Nursing\Domain\Model\Position $position)
    {
        $this->view->assign('position', $position);
    }
}
