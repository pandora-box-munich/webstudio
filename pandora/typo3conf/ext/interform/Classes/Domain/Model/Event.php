<?php
namespace Interain\Interform\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Michael Odendahl <info@intertain.me>, intertain GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 * Event
 */
class Event extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * resort
	 *
	 * @var string
	 */
	protected $resort = '';

	/**
	 * salutation
	 *
	 * @var string
	 */
	protected $salutation = '';

	/**
	 * firstName
	 *
	 * @var string
	 */
	protected $firstName = '';

	/**
	 * lastName
	 *
	 * @var string
	 */
	protected $lastName = '';

	/**
	 * meeting
	 *
	 * @var string
	 */
	protected $meeting = '';

	/**
	 * date1
	 *
	 * @var string
	 */
	protected $date1 = '';

	/**
	 * date2
	 *
	 * @var string
	 */
	protected $date2 = '';

	/**
	 * dateFlexibility
	 *
	 * @var string
	 */
	protected $dateFlexibility = '';

	/**
	 * altDate1
	 *
	 * @var string
	 */
	protected $altDate1 = '';

	/**
	 * altDate2
	 *
	 * @var string
	 */
	protected $altDate2 = '';

	/**
	 * roomNumbers
	 *
	 * @var string
	 */
	protected $roomNumbers = '';

	/**
	 * company
	 *
	 * @var string
	 */
	protected $company = '';

	/**
	 * street1
	 *
	 * @var string
	 */
	protected $street1 = '';

	/**
	 * street2
	 *
	 * @var string
	 */
	protected $street2 = '';

	/**
	 * city
	 *
	 * @var string
	 */
	protected $city = '';

	/**
	 * state
	 *
	 * @var string
	 */
	protected $state = '';

	/**
	 * zip
	 *
	 * @var string
	 */
	protected $zip = '';

	/**
	 * country
	 *
	 * @var string
	 */
	protected $country = '';

	/**
	 * phone
	 *
	 * @var string
	 */
	protected $phone = '';

	/**
	 * mail
	 *
	 * @var string
	 */
	protected $mail = '';

	/**
	 * attendees
	 *
	 * @var string
	 */
	protected $attendees = '';

	/**
	 * setupRounds
	 *
	 * @var string
	 */
	protected $setupRounds = '';

	/**
	 * setupAuditorium
	 *
	 * @var string
	 */
	protected $setupAuditorium = '';

	/**
	 * setupClassroom
	 *
	 * @var string
	 */
	protected $setupClassroom = '';

	/**
	 * setupConference
	 *
	 * @var string
	 */
	protected $setupConference = '';

	/**
	 * setupExhibit
	 *
	 * @var string
	 */
	protected $setupExhibit = '';

	/**
	 * setupCocktail
	 *
	 * @var string
	 */
	protected $setupCocktail = '';

	/**
	 * comments
	 *
	 * @var string
	 */
	protected $comments = '';

	/**
	 * Returns the resort
	 *
	 * @return string $resort
	 */
	public function getResort() {
		return $this->resort;
	}

	/**
	 * Sets the resort
	 *
	 * @param string $resort
	 * @return void
	 */
	public function setResort($resort) {
		$this->resort = $resort;
	}

	/**
	 * Returns the salutation
	 *
	 * @return string $salutation
	 */
	public function getSalutation() {
		return $this->salutation;
	}

	/**
	 * Sets the salutation
	 *
	 * @param string $salutation
	 * @return void
	 */
	public function setSalutation($salutation) {
		$this->salutation = $salutation;
	}

	/**
	 * Returns the firstName
	 *
	 * @return string $firstName
	 */
	public function getFirstName() {
		return $this->firstName;
	}

	/**
	 * Sets the firstName
	 *
	 * @param string $firstName
	 * @return void
	 */
	public function setFirstName($firstName) {
		$this->firstName = $firstName;
	}

	/**
	 * Returns the lastName
	 *
	 * @return string $lastName
	 */
	public function getLastName() {
		return $this->lastName;
	}

	/**
	 * Sets the lastName
	 *
	 * @param string $lastName
	 * @return void
	 */
	public function setLastName($lastName) {
		$this->lastName = $lastName;
	}

	/**
	 * Returns the meeting
	 *
	 * @return string $meeting
	 */
	public function getMeeting() {
		return $this->meeting;
	}

	/**
	 * Sets the meeting
	 *
	 * @param string $meeting
	 * @return void
	 */
	public function setMeeting($meeting) {
		$this->meeting = $meeting;
	}

	/**
	 * Returns the date1
	 *
	 * @return string $date1
	 */
	public function getDate1() {
		return $this->date1;
	}

	/**
	 * Sets the date1
	 *
	 * @param string $date1
	 * @return void
	 */
	public function setDate1($date1) {
		$this->date1 = $date1;
	}

	/**
	 * Returns the date2
	 *
	 * @return string $date2
	 */
	public function getDate2() {
		return $this->date2;
	}

	/**
	 * Sets the date2
	 *
	 * @param string $date2
	 * @return void
	 */
	public function setDate2($date2) {
		$this->date2 = $date2;
	}

	/**
	 * Returns the dateFlexibility
	 *
	 * @return string $dateFlexibility
	 */
	public function getDateFlexibility() {
		return $this->dateFlexibility;
	}

	/**
	 * Sets the dateFlexibility
	 *
	 * @param string $dateFlexibility
	 * @return void
	 */
	public function setDateFlexibility($dateFlexibility) {
		$this->dateFlexibility = $dateFlexibility;
	}

	/**
	 * Returns the altDate1
	 *
	 * @return string $altDate1
	 */
	public function getAltDate1() {
		return $this->altDate1;
	}

	/**
	 * Sets the altDate1
	 *
	 * @param string $altDate1
	 * @return void
	 */
	public function setAltDate1($altDate1) {
		$this->altDate1 = $altDate1;
	}

	/**
	 * Returns the altDate2
	 *
	 * @return string $altDate2
	 */
	public function getAltDate2() {
		return $this->altDate2;
	}

	/**
	 * Sets the altDate2
	 *
	 * @param string $altDate2
	 * @return void
	 */
	public function setAltDate2($altDate2) {
		$this->altDate2 = $altDate2;
	}

	/**
	 * Returns the roomNumbers
	 *
	 * @return string $roomNumbers
	 */
	public function getRoomNumbers() {
		return $this->roomNumbers;
	}

	/**
	 * Sets the roomNumbers
	 *
	 * @param string $roomNumbers
	 * @return void
	 */
	public function setRoomNumbers($roomNumbers) {
		$this->roomNumbers = $roomNumbers;
	}

	/**
	 * Returns the company
	 *
	 * @return string $company
	 */
	public function getCompany() {
		return $this->company;
	}

	/**
	 * Sets the company
	 *
	 * @param string $company
	 * @return void
	 */
	public function setCompany($company) {
		$this->company = $company;
	}

	/**
	 * Returns the street1
	 *
	 * @return string $street1
	 */
	public function getStreet1() {
		return $this->street1;
	}

	/**
	 * Sets the street1
	 *
	 * @param string $street1
	 * @return void
	 */
	public function setStreet1($street1) {
		$this->street1 = $street1;
	}

	/**
	 * Returns the street2
	 *
	 * @return string $street2
	 */
	public function getStreet2() {
		return $this->street2;
	}

	/**
	 * Sets the street2
	 *
	 * @param string $street2
	 * @return void
	 */
	public function setStreet2($street2) {
		$this->street2 = $street2;
	}

	/**
	 * Returns the city
	 *
	 * @return string $city
	 */
	public function getCity() {
		return $this->city;
	}

	/**
	 * Sets the city
	 *
	 * @param string $city
	 * @return void
	 */
	public function setCity($city) {
		$this->city = $city;
	}

	/**
	 * Returns the state
	 *
	 * @return string $state
	 */
	public function getState() {
		return $this->state;
	}

	/**
	 * Sets the state
	 *
	 * @param string $state
	 * @return void
	 */
	public function setState($state) {
		$this->state = $state;
	}

	/**
	 * Returns the zip
	 *
	 * @return string $zip
	 */
	public function getZip() {
		return $this->zip;
	}

	/**
	 * Sets the zip
	 *
	 * @param string $zip
	 * @return void
	 */
	public function setZip($zip) {
		$this->zip = $zip;
	}

	/**
	 * Returns the country
	 *
	 * @return string $country
	 */
	public function getCountry() {
		return $this->country;
	}

	/**
	 * Sets the country
	 *
	 * @param string $country
	 * @return void
	 */
	public function setCountry($country) {
		$this->country = $country;
	}

	/**
	 * Returns the phone
	 *
	 * @return string $phone
	 */
	public function getPhone() {
		return $this->phone;
	}

	/**
	 * Sets the phone
	 *
	 * @param string $phone
	 * @return void
	 */
	public function setPhone($phone) {
		$this->phone = $phone;
	}

	/**
	 * Returns the mail
	 *
	 * @return string $mail
	 */
	public function getMail() {
		return $this->mail;
	}

	/**
	 * Sets the mail
	 *
	 * @param string $mail
	 * @return void
	 */
	public function setMail($mail) {
		$this->mail = $mail;
	}

	/**
	 * Returns the attendees
	 *
	 * @return string $attendees
	 */
	public function getAttendees() {
		return $this->attendees;
	}

	/**
	 * Sets the attendees
	 *
	 * @param string $attendees
	 * @return void
	 */
	public function setAttendees($attendees) {
		$this->attendees = $attendees;
	}

	/**
	 * Returns the setupRounds
	 *
	 * @return string $setupRounds
	 */
	public function getSetupRounds() {
		return $this->setupRounds;
	}

	/**
	 * Sets the setupRounds
	 *
	 * @param string $setupRounds
	 * @return void
	 */
	public function setSetupRounds($setupRounds) {
		$this->setupRounds = $setupRounds;
	}

	/**
	 * Returns the setupAuditorium
	 *
	 * @return string $setupAuditorium
	 */
	public function getSetupAuditorium() {
		return $this->setupAuditorium;
	}

	/**
	 * Sets the setupAuditorium
	 *
	 * @param string $setupAuditorium
	 * @return void
	 */
	public function setSetupAuditorium($setupAuditorium) {
		$this->setupAuditorium = $setupAuditorium;
	}

	/**
	 * Returns the setupClassroom
	 *
	 * @return string $setupClassroom
	 */
	public function getSetupClassroom() {
		return $this->setupClassroom;
	}

	/**
	 * Sets the setupClassroom
	 *
	 * @param string $setupClassroom
	 * @return void
	 */
	public function setSetupClassroom($setupClassroom) {
		$this->setupClassroom = $setupClassroom;
	}

	/**
	 * Returns the setupConference
	 *
	 * @return string $setupConference
	 */
	public function getSetupConference() {
		return $this->setupConference;
	}

	/**
	 * Sets the setupConference
	 *
	 * @param string $setupConference
	 * @return void
	 */
	public function setSetupConference($setupConference) {
		$this->setupConference = $setupConference;
	}

	/**
	 * Returns the setupExhibit
	 *
	 * @return string $setupExhibit
	 */
	public function getSetupExhibit() {
		return $this->setupExhibit;
	}

	/**
	 * Sets the setupExhibit
	 *
	 * @param string $setupExhibit
	 * @return void
	 */
	public function setSetupExhibit($setupExhibit) {
		$this->setupExhibit = $setupExhibit;
	}

	/**
	 * Returns the setupCocktail
	 *
	 * @return string $setupCocktail
	 */
	public function getSetupCocktail() {
		return $this->setupCocktail;
	}

	/**
	 * Sets the setupCocktail
	 *
	 * @param string $setupCocktail
	 * @return void
	 */
	public function setSetupCocktail($setupCocktail) {
		$this->setupCocktail = $setupCocktail;
	}

	/**
	 * Returns the comments
	 *
	 * @return string $comments
	 */
	public function getComments() {
		return $this->comments;
	}

	/**
	 * Sets the comments
	 *
	 * @param string $comments
	 * @return void
	 */
	public function setComments($comments) {
		$this->comments = $comments;
	}

}