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
 * Test case for class \Interain\Interform\Domain\Model\Event.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Odendahl <info@intertain.me>
 */
class EventTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Interain\Interform\Domain\Model\Event
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Interain\Interform\Domain\Model\Event();
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
	public function getMeetingReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMeeting()
		);
	}

	/**
	 * @test
	 */
	public function setMeetingForStringSetsMeeting() {
		$this->subject->setMeeting('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'meeting',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDate1ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDate1()
		);
	}

	/**
	 * @test
	 */
	public function setDate1ForStringSetsDate1() {
		$this->subject->setDate1('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'date1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDate2ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDate2()
		);
	}

	/**
	 * @test
	 */
	public function setDate2ForStringSetsDate2() {
		$this->subject->setDate2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'date2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDateFlexibilityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDateFlexibility()
		);
	}

	/**
	 * @test
	 */
	public function setDateFlexibilityForStringSetsDateFlexibility() {
		$this->subject->setDateFlexibility('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'dateFlexibility',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAltDate1ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAltDate1()
		);
	}

	/**
	 * @test
	 */
	public function setAltDate1ForStringSetsAltDate1() {
		$this->subject->setAltDate1('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'altDate1',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAltDate2ReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAltDate2()
		);
	}

	/**
	 * @test
	 */
	public function setAltDate2ForStringSetsAltDate2() {
		$this->subject->setAltDate2('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'altDate2',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRoomNumbersReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRoomNumbers()
		);
	}

	/**
	 * @test
	 */
	public function setRoomNumbersForStringSetsRoomNumbers() {
		$this->subject->setRoomNumbers('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'roomNumbers',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCompanyReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCompany()
		);
	}

	/**
	 * @test
	 */
	public function setCompanyForStringSetsCompany() {
		$this->subject->setCompany('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'company',
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
	public function getAttendeesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAttendees()
		);
	}

	/**
	 * @test
	 */
	public function setAttendeesForStringSetsAttendees() {
		$this->subject->setAttendees('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'attendees',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSetupRoundsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSetupRounds()
		);
	}

	/**
	 * @test
	 */
	public function setSetupRoundsForStringSetsSetupRounds() {
		$this->subject->setSetupRounds('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'setupRounds',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSetupAuditoriumReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSetupAuditorium()
		);
	}

	/**
	 * @test
	 */
	public function setSetupAuditoriumForStringSetsSetupAuditorium() {
		$this->subject->setSetupAuditorium('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'setupAuditorium',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSetupClassroomReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSetupClassroom()
		);
	}

	/**
	 * @test
	 */
	public function setSetupClassroomForStringSetsSetupClassroom() {
		$this->subject->setSetupClassroom('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'setupClassroom',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSetupConferenceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSetupConference()
		);
	}

	/**
	 * @test
	 */
	public function setSetupConferenceForStringSetsSetupConference() {
		$this->subject->setSetupConference('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'setupConference',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSetupExhibitReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSetupExhibit()
		);
	}

	/**
	 * @test
	 */
	public function setSetupExhibitForStringSetsSetupExhibit() {
		$this->subject->setSetupExhibit('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'setupExhibit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSetupCocktailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSetupCocktail()
		);
	}

	/**
	 * @test
	 */
	public function setSetupCocktailForStringSetsSetupCocktail() {
		$this->subject->setSetupCocktail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'setupCocktail',
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
