<?php
namespace Joekolade\Nursing\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Joe Schäfer <mail@schaefer-webentwicklung.de>
 */
class PositionTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Joekolade\Nursing\Domain\Model\Position
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Joekolade\Nursing\Domain\Model\Position();
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
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getImagesReturnsInitialValueForFileReference()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getImages()
        );
    }

    /**
     * @test
     */
    public function setImagesForFileReferenceSetsImages()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $objectStorageHoldingExactlyOneImages = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneImages->attach($image);
        $this->subject->setImages($objectStorageHoldingExactlyOneImages);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneImages,
            'images',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addImageToObjectStorageHoldingImages()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $imagesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $imagesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($image));
        $this->inject($this->subject, 'images', $imagesObjectStorageMock);

        $this->subject->addImage($image);
    }

    /**
     * @test
     */
    public function removeImageFromObjectStorageHoldingImages()
    {
        $image = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $imagesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $imagesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($image));
        $this->inject($this->subject, 'images', $imagesObjectStorageMock);

        $this->subject->removeImage($image);
    }

    /**
     * @test
     */
    public function getTopjobReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getTopjob()
        );
    }

    /**
     * @test
     */
    public function setTopjobForBoolSetsTopjob()
    {
        $this->subject->setTopjob(true);

        self::assertAttributeEquals(
            true,
            'topjob',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getTxCsseoReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getTxCsseo()
        );
    }

    /**
     * @test
     */
    public function setTxCsseoForIntSetsTxCsseo()
    {
        $this->subject->setTxCsseo(12);

        self::assertAttributeEquals(
            12,
            'txCsseo',
            $this->subject
        );
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

    /**
     * @test
     */
    public function getLocationReturnsInitialValueForLocation()
    {
        self::assertEquals(
            null,
            $this->subject->getLocation()
        );
    }

    /**
     * @test
     */
    public function setLocationForLocationSetsLocation()
    {
        $locationFixture = new \Joekolade\Nursing\Domain\Model\Location();
        $this->subject->setLocation($locationFixture);

        self::assertAttributeEquals(
            $locationFixture,
            'location',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmployerReturnsInitialValueForEmployer()
    {
        self::assertEquals(
            null,
            $this->subject->getEmployer()
        );
    }

    /**
     * @test
     */
    public function setEmployerForEmployerSetsEmployer()
    {
        $employerFixture = new \Joekolade\Nursing\Domain\Model\Employer();
        $this->subject->setEmployer($employerFixture);

        self::assertAttributeEquals(
            $employerFixture,
            'employer',
            $this->subject
        );
    }
}
