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
class PositionController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * positionRepository
     *
     * @var \Joekolade\Nursing\Domain\Repository\PositionRepository
     * @inject
     */
    protected $positionRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction()
    {
        $positions = $this->positionRepository->findAll();
        $this->view->assign('positions', $positions);
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
