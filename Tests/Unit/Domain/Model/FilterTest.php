<?php
namespace Joekolade\Nursing\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Joe Schäfer <mail@schaefer-webentwicklung.de>
 */
class FilterTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Joekolade\Nursing\Domain\Model\Filter
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Joekolade\Nursing\Domain\Model\Filter();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getLocsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getLocs()
        );
    }

    /**
     * @test
     */
    public function setLocsForStringSetsLocs()
    {
        $this->subject->setLocs('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'locs',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTypesReturnsInitialValueForType()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getTypes()
        );
    }

    /**
     * @test
     */
    public function setTypesForObjectStorageContainingTypeSetsTypes()
    {
        $type = new \Joekolade\Nursing\Domain\Model\Type();
        $objectStorageHoldingExactlyOneTypes = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneTypes->attach($type);
        $this->subject->setTypes($objectStorageHoldingExactlyOneTypes);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneTypes,
            'types',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addTypeToObjectStorageHoldingTypes()
    {
        $type = new \Joekolade\Nursing\Domain\Model\Type();
        $typesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $typesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($type));
        $this->inject($this->subject, 'types', $typesObjectStorageMock);

        $this->subject->addType($type);
    }

    /**
     * @test
     */
    public function removeTypeFromObjectStorageHoldingTypes()
    {
        $type = new \Joekolade\Nursing\Domain\Model\Type();
        $typesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $typesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($type));
        $this->inject($this->subject, 'types', $typesObjectStorageMock);

        $this->subject->removeType($type);
    }

    /**
     * @test
     */
    public function getLocationsReturnsInitialValueForLocation()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLocations()
        );
    }

    /**
     * @test
     */
    public function setLocationsForObjectStorageContainingLocationSetsLocations()
    {
        $location = new \Joekolade\Nursing\Domain\Model\Location();
        $objectStorageHoldingExactlyOneLocations = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLocations->attach($location);
        $this->subject->setLocations($objectStorageHoldingExactlyOneLocations);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneLocations,
            'locations',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addLocationToObjectStorageHoldingLocations()
    {
        $location = new \Joekolade\Nursing\Domain\Model\Location();
        $locationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $locationsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($location));
        $this->inject($this->subject, 'locations', $locationsObjectStorageMock);

        $this->subject->addLocation($location);
    }

    /**
     * @test
     */
    public function removeLocationFromObjectStorageHoldingLocations()
    {
        $location = new \Joekolade\Nursing\Domain\Model\Location();
        $locationsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $locationsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($location));
        $this->inject($this->subject, 'locations', $locationsObjectStorageMock);

        $this->subject->removeLocation($location);
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

    /**
     * @test
     */
    public function getEmploymentsReturnsInitialValueForEmployment()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getEmployments()
        );
    }

    /**
     * @test
     */
    public function setEmploymentsForObjectStorageContainingEmploymentSetsEmployments()
    {
        $employment = new \Joekolade\Nursing\Domain\Model\Employment();
        $objectStorageHoldingExactlyOneEmployments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneEmployments->attach($employment);
        $this->subject->setEmployments($objectStorageHoldingExactlyOneEmployments);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneEmployments,
            'employments',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addEmploymentToObjectStorageHoldingEmployments()
    {
        $employment = new \Joekolade\Nursing\Domain\Model\Employment();
        $employmentsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $employmentsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($employment));
        $this->inject($this->subject, 'employments', $employmentsObjectStorageMock);

        $this->subject->addEmployment($employment);
    }

    /**
     * @test
     */
    public function removeEmploymentFromObjectStorageHoldingEmployments()
    {
        $employment = new \Joekolade\Nursing\Domain\Model\Employment();
        $employmentsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $employmentsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($employment));
        $this->inject($this->subject, 'employments', $employmentsObjectStorageMock);

        $this->subject->removeEmployment($employment);
    }

    /**
     * @test
     */
    public function getExtrasReturnsInitialValueForExtra()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getExtras()
        );
    }

    /**
     * @test
     */
    public function setExtrasForObjectStorageContainingExtraSetsExtras()
    {
        $extra = new \Joekolade\Nursing\Domain\Model\Extra();
        $objectStorageHoldingExactlyOneExtras = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneExtras->attach($extra);
        $this->subject->setExtras($objectStorageHoldingExactlyOneExtras);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneExtras,
            'extras',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addExtraToObjectStorageHoldingExtras()
    {
        $extra = new \Joekolade\Nursing\Domain\Model\Extra();
        $extrasObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $extrasObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($extra));
        $this->inject($this->subject, 'extras', $extrasObjectStorageMock);

        $this->subject->addExtra($extra);
    }

    /**
     * @test
     */
    public function removeExtraFromObjectStorageHoldingExtras()
    {
        $extra = new \Joekolade\Nursing\Domain\Model\Extra();
        $extrasObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $extrasObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($extra));
        $this->inject($this->subject, 'extras', $extrasObjectStorageMock);

        $this->subject->removeExtra($extra);
    }
}
