<?php
namespace Joekolade\Nursing\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Joe Schäfer <mail@schaefer-webentwicklung.de>
 */
class PositionControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Joekolade\Nursing\Controller\PositionController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Joekolade\Nursing\Controller\PositionController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllPositionsFromRepositoryAndAssignsThemToView()
    {

        $allPositions = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $positionRepository = $this->getMockBuilder(\Joekolade\Nursing\Domain\Repository\PositionRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $positionRepository->expects(self::once())->method('findAll')->will(self::returnValue($allPositions));
        $this->inject($this->subject, 'positionRepository', $positionRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('positions', $allPositions);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenPositionToView()
    {
        $position = new \Joekolade\Nursing\Domain\Model\Position();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('position', $position);

        $this->subject->showAction($position);
    }
}
