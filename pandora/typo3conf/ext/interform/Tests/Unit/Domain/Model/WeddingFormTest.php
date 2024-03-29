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
 * Test case for class \Interain\Interform\Domain\Model\WeddingForm.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Odendahl <info@intertain.me>
 */
class WeddingFormTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Interain\Interform\Domain\Model\WeddingForm
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Interain\Interform\Domain\Model\WeddingForm();
	}

	protected function tearDown() {
		unset($this->subject);
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
	public function getStreet1ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreet1()
		);
	}

	/**
	 * @test
	 */
	public function setStreet1ForStringSetsStreet1() {
		$this->subject->setStreet1('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'street1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStreet2ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getStreet2()
		);
	}

	/**
	 * @test
	 */
	public function setStreet2ForStringSetsStreet2() {
		$this->subject->setStreet2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'street2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCity()
		);
	}

	/**
	 * @test
	 */
	public function setCityForStringSetsCity() {
		$this->subject->setCity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'city',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStateReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getState()
		);
	}

	/**
	 * @test
	 */
	public function setStateForStringSetsState() {
		$this->subject->setState('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'state',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getZipReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getZip()
		);
	}

	/**
	 * @test
	 */
	public function setZipForStringSetsZip() {
		$this->subject->setZip('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'zip',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCountryReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCountry()
		);
	}

	/**
	 * @test
	 */
	public function setCountryForStringSetsCountry() {
		$this->subject->setCountry('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'country',
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
	public function getCommentsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getComments()
		);
	}

	/**
	 * @test
	 */
	public function setCommentsForStringSetsComments() {
		$this->subject->setComments('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'comments',
			$this->subject
		);
	}
}
