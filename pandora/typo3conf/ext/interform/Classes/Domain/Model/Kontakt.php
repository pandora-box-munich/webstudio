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
 * Kontakt
 */
class Kontakt extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	protected $state;

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
	 * resort
	 *
	 * @var string
	 */
	protected $resort = '';

	/**
	 * comments
	 *
	 * @var string
	 */
	protected $comments = '';

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