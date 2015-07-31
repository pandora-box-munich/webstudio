<?php

namespace Interain\Interform\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Michael Odendahl <info@intertain.me>, intertain GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \Interain\Interform\Domain\Model\Spa.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Odendahl <info@intertain.me>
 */
class SpaTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Interain\Interform\Domain\Model\Spa
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Interain\Interform\Domain\Model\Spa();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getResortReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getResort()
		);
	}

	/**
	 * @test
	 */
	public function setResortForStringSetsResort() {
		$this->subject->setResort('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'resort',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSalutationReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSalutation()
		);
	}

	/**
	 * @test
	 */
	public function setSalutationForStringSetsSalutation() {
		$this->subject->setSalutation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'salutation',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFirstNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFirstName()
		);
	}

	/**
	 * @test
	 */
	public function setFirstNameForStringSetsFirstName() {
		$this->subject->setFirstName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'firstName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLastNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLastName()
		);
	}

	/**
	 * @test
	 */
	public function setLastNameForStringSetsLastName() {
		$this->subject->setLastName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'lastName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMail()
		);
	}

	/**
	 * @test
	 */
	public function setMailForStringSetsMail() {
		$this->subject->setMail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mail',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPhoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPhone()
		);
	}

	/**
	 * @test
	 */
	public function setPhoneForStringSetsPhone() {
		$this->subject->setPhone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'phone',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCoupleNamesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCoupleNames()
		);
	}

	/**
	 * @test
	 */
	public function setCoupleNamesForStringSetsCoupleNames() {
		$this->subject->setCoupleNames('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'coupleNames',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment1ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment1()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment1ForStringSetsTreatment1() {
		$this->subject->setTreatment1('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment1numberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment1number()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment1numberForStringSetsTreatment1number() {
		$this->subject->setTreatment1number('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment1number',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment1numbermoreReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment1numbermore()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment1numbermoreForStringSetsTreatment1numbermore() {
		$this->subject->setTreatment1numbermore('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment1numbermore',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment1dateReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment1date()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment1dateForStringSetsTreatment1date() {
		$this->subject->setTreatment1date('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment1date',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment1timeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment1time()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment1timeForStringSetsTreatment1time() {
		$this->subject->setTreatment1time('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment1time',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment1timerangeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment1timerange()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment1timerangeForStringSetsTreatment1timerange() {
		$this->subject->setTreatment1timerange('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment1timerange',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment2ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment2()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment2ForStringSetsTreatment2() {
		$this->subject->setTreatment2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment2numberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment2number()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment2numberForStringSetsTreatment2number() {
		$this->subject->setTreatment2number('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment2number',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment2numbermoreReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment2numbermore()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment2numbermoreForStringSetsTreatment2numbermore() {
		$this->subject->setTreatment2numbermore('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment2numbermore',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment2dateReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment2date()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment2dateForStringSetsTreatment2date() {
		$this->subject->setTreatment2date('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment2date',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment2timeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment2time()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment2timeForStringSetsTreatment2time() {
		$this->subject->setTreatment2time('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment2time',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment2timerangeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment2timerange()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment2timerangeForStringSetsTreatment2timerange() {
		$this->subject->setTreatment2timerange('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment2timerange',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment3ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment3()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment3ForStringSetsTreatment3() {
		$this->subject->setTreatment3('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment3',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment3numberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment3number()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment3numberForStringSetsTreatment3number() {
		$this->subject->setTreatment3number('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment3number',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment3numbermoreReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment3numbermore()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment3numbermoreForStringSetsTreatment3numbermore() {
		$this->subject->setTreatment3numbermore('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment3numbermore',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment3dateReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment3date()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment3dateForStringSetsTreatment3date() {
		$this->subject->setTreatment3date('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment3date',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment3timeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment3time()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment3timeForStringSetsTreatment3time() {
		$this->subject->setTreatment3time('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment3time',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTreatment3timerangeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTreatment3timerange()
		);
	}

	/**
	 * @test
	 */
	public function setTreatment3timerangeForStringSetsTreatment3timerange() {
		$this->subject->setTreatment3timerange('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'treatment3timerange',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMessageReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMessage()
		);
	}

	/**
	 * @test
	 */
	public function setMessageForStringSetsMessage() {
		$this->subject->setMessage('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'message',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRequirementsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRequirements()
		);
	}

	/**
	 * @test
	 */
	public function setRequirementsForStringSetsRequirements() {
		$this->subject->setRequirements('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'requirements',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOccassionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOccassion()
		);
	}

	/**
	 * @test
	 */
	public function setOccassionForStringSetsOccassion() {
		$this->subject->setOccassion('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'occassion',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOccassionOtherReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOccassionOther()
		);
	}

	/**
	 * @test
	 */
	public function setOccassionOtherForStringSetsOccassionOther() {
		$this->subject->setOccassionOther('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'occassionOther',
			$this->subject
		);
	}
}
