<?php
namespace Joekolade\Nursing\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Joe Schäfer <mail@schaefer-webentwicklung.de>
 */
class LocationTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Joekolade\Nursing\Domain\Model\Location
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Joekolade\Nursing\Domain\Model\Location();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getZipReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getZip()
        );
    }

    /**
     * @test
     */
    public function setZipForStringSetsZip()
    {
        $this->subject->setZip('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'zip',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRegionsReturnsInitialValueForRegion()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getRegions()
        );
    }

    /**
     * @test
     */
    public function setRegionsForObjectStorageContainingRegionSetsRegions()
    {
        $region = new \Joekolade\Nursing\Domain\Model\Region();
        $objectStorageHoldingExactlyOneRegions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneRegions->attach($region);
        $this->subject->setRegions($objectStorageHoldingExactlyOneRegions);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneRegions,
            'regions',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addRegionToObjectStorageHoldingRegions()
    {
        $region = new \Joekolade\Nursing\Domain\Model\Region();
        $regionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $regionsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($region));
        $this->inject($this->subject, 'regions', $regionsObjectStorageMock);

        $this->subject->addRegion($region);
    }

    /**
     * @test
     */
    public function removeRegionFromObjectStorageHoldingRegions()
    {
        $region = new \Joekolade\Nursing\Domain\Model\Region();
        $regionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $regionsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($region));
        $this->inject($this->subject, 'regions', $regionsObjectStorageMock);

        $this->subject->removeRegion($region);
    }
}
