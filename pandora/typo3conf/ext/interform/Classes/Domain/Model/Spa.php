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
 * Spa
 */
class Spa extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

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
	 * mail
	 *
	 * @var string
	 */
	protected $mail = '';

	/**
	 * phone
	 *
	 * @var string
	 */
	protected $phone = '';

	/**
	 * coupleNames
	 *
	 * @var string
	 */
	protected $coupleNames = '';

	/**
	 * treatment1
	 *
	 * @var string
	 */
	protected $treatment1 = '';

	/**
	 * treatment1number
	 *
	 * @var string
	 */
	protected $treatment1number = '';

	/**
	 * treatment1numbermore
	 *
	 * @var string
	 */
	protected $treatment1numbermore = '';

	/**
	 * treatment1date
	 *
	 * @var string
	 */
	protected $treatment1date = '';

	/**
	 * treatment1time
	 *
	 * @var string
	 */
	protected $treatment1time = '';

	/**
	 * treatment1timerange
	 *
	 * @var string
	 */
	protected $treatment1timerange = '';

	/**
	 * treatment2
	 *
	 * @var string
	 */
	protected $treatment2 = '';

	/**
	 * treatment2number
	 *
	 * @var string
	 */
	protected $treatment2number = '';

	/**
	 * treatment2numbermore
	 *
	 * @var string
	 */
	protected $treatment2numbermore = '';

	/**
	 * treatment2date
	 *
	 * @var string
	 */
	protected $treatment2date = '';

	/**
	 * treatment2time
	 *
	 * @var string
	 */
	protected $treatment2time = '';

	/**
	 * treatment2timerange
	 *
	 * @var string
	 */
	protected $treatment2timerange = '';

	/**
	 * treatment3
	 *
	 * @var string
	 */
	protected $treatment3 = '';

	/**
	 * treatment3number
	 *
	 * @var string
	 */
	protected $treatment3number = '';

	/**
	 * treatment3numbermore
	 *
	 * @var string
	 */
	protected $treatment3numbermore = '';

	/**
	 * treatment3date
	 *
	 * @var string
	 */
	protected $treatment3date = '';

	/**
	 * treatment3time
	 *
	 * @var string
	 */
	protected $treatment3time = '';

	/**
	 * treatment3timerange
	 *
	 * @var string
	 */
	protected $treatment3timerange = '';

	/**
	 * message
	 *
	 * @var string
	 */
	protected $message = '';

	/**
	 * requirements
	 *
	 * @var string
	 */
	protected $requirements = '';

	/**
	 * occassion
	 *
	 * @var string
	 */
	protected $occassion = '';

	/**
	 * occassionOther
	 *
	 * @var string
	 */
	protected $occassionOther = '';

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
	 * Returns the coupleNames
	 *
	 * @return string $coupleNames
	 */
	public function getCoupleNames() {
		return $this->coupleNames;
	}

	/**
	 * Sets the coupleNames
	 *
	 * @param string $coupleNames
	 * @return void
	 */
	public function setCoupleNames($coupleNames) {
		$this->coupleNames = $coupleNames;
	}

	/**
	 * Returns the treatment1
	 *
	 * @return string $treatment1
	 */
	public function getTreatment1() {
		return $this->treatment1;
	}

	/**
	 * Sets the treatment1
	 *
	 * @param string $treatment1
	 * @return void
	 */
	public function setTreatment1($treatment1) {
		$this->treatment1 = $treatment1;
	}

	/**
	 * Returns the treatment1number
	 *
	 * @return string $treatment1number
	 */
	public function getTreatment1number() {
		return $this->treatment1number;
	}

	/**
	 * Sets the treatment1number
	 *
	 * @param string $treatment1number
	 * @return void
	 */
	public function setTreatment1number($treatment1number) {
		$this->treatment1number = $treatment1number;
	}

	/**
	 * Returns the treatment1numbermore
	 *
	 * @return string $treatment1numbermore
	 */
	public function getTreatment1numbermore() {
		return $this->treatment1numbermore;
	}

	/**
	 * Sets the treatment1numbermore
	 *
	 * @param string $treatment1numbermore
	 * @return void
	 */
	public function setTreatment1numbermore($treatment1numbermore) {
		$this->treatment1numbermore = $treatment1numbermore;
	}

	/**
	 * Returns the treatment1date
	 *
	 * @return string $treatment1date
	 */
	public function getTreatment1date() {
		return $this->treatment1date;
	}

	/**
	 * Sets the treatment1date
	 *
	 * @param string $treatment1date
	 * @return void
	 */
	public function setTreatment1date($treatment1date) {
		$this->treatment1date = $treatment1date;
	}

	/**
	 * Returns the treatment1time
	 *
	 * @return string $treatment1time
	 */
	public function getTreatment1time() {
		return $this->treatment1time;
	}

	/**
	 * Sets the treatment1time
	 *
	 * @param string $treatment1time
	 * @return void
	 */
	public function setTreatment1time($treatment1time) {
		$this->treatment1time = $treatment1time;
	}

	/**
	 * Returns the treatment1timerange
	 *
	 * @return string $treatment1timerange
	 */
	public function getTreatment1timerange() {
		return $this->treatment1timerange;
	}

	/**
	 * Sets the treatment1timerange
	 *
	 * @param string $treatment1timerange
	 * @return void
	 */
	public function setTreatment1timerange($treatment1timerange) {
		$this->treatment1timerange = $treatment1timerange;
	}

	/**
	 * Returns the treatment2
	 *
	 * @return string $treatment2
	 */
	public function getTreatment2() {
		return $this->treatment2;
	}

	/**
	 * Sets the treatment2
	 *
	 * @param string $treatment2
	 * @return void
	 */
	public function setTreatment2($treatment2) {
		$this->treatment2 = $treatment2;
	}

	/**
	 * Returns the treatment2number
	 *
	 * @return string $treatment2number
	 */
	public function getTreatment2number() {
		return $this->treatment2number;
	}

	/**
	 * Sets the treatment2number
	 *
	 * @param string $treatment2number
	 * @return void
	 */
	public function setTreatment2number($treatment2number) {
		$this->treatment2number = $treatment2number;
	}

	/**
	 * Returns the treatment2numbermore
	 *
	 * @return string $treatment2numbermore
	 */
	public function getTreatment2numbermore() {
		return $this->treatment2numbermore;
	}

	/**
	 * Sets the treatment2numbermore
	 *
	 * @param string $treatment2numbermore
	 * @return void
	 */
	public function setTreatment2numbermore($treatment2numbermore) {
		$this->treatment2numbermore = $treatment2numbermore;
	}

	/**
	 * Returns the treatment2date
	 *
	 * @return string $treatment2date
	 */
	public function getTreatment2date() {
		return $this->treatment2date;
	}

	/**
	 * Sets the treatment2date
	 *
	 * @param string $treatment2date
	 * @return void
	 */
	public function setTreatment2date($treatment2date) {
		$this->treatment2date = $treatment2date;
	}

	/**
	 * Returns the treatment2time
	 *
	 * @return string $treatment2time
	 */
	public function getTreatment2time() {
		return $this->treatment2time;
	}

	/**
	 * Sets the treatment2time
	 *
	 * @param string $treatment2time
	 * @return void
	 */
	public function setTreatment2time($treatment2time) {
		$this->treatment2time = $treatment2time;
	}

	/**
	 * Returns the treatment2timerange
	 *
	 * @return string $treatment2timerange
	 */
	public function getTreatment2timerange() {
		return $this->treatment2timerange;
	}

	/**
	 * Sets the treatment2timerange
	 *
	 * @param string $treatment2timerange
	 * @return void
	 */
	public function setTreatment2timerange($treatment2timerange) {
		$this->treatment2timerange = $treatment2timerange;
	}

	/**
	 * Returns the treatment3
	 *
	 * @return string $treatment3
	 */
	public function getTreatment3() {
		return $this->treatment3;
	}

	/**
	 * Sets the treatment3
	 *
	 * @param string $treatment3
	 * @return void
	 */
	public function setTreatment3($treatment3) {
		$this->treatment3 = $treatment3;
	}

	/**
	 * Returns the treatment3number
	 *
	 * @return string $treatment3number
	 */
	public function getTreatment3number() {
		return $this->treatment3number;
	}

	/**
	 * Sets the treatment3number
	 *
	 * @param string $treatment3number
	 * @return void
	 */
	public function setTreatment3number($treatment3number) {
		$this->treatment3number = $treatment3number;
	}

	/**
	 * Returns the treatment3numbermore
	 *
	 * @return string $treatment3numbermore
	 */
	public function getTreatment3numbermore() {
		return $this->treatment3numbermore;
	}

	/**
	 * Sets the treatment3numbermore
	 *
	 * @param string $treatment3numbermore
	 * @return void
	 */
	public function setTreatment3numbermore($treatment3numbermore) {
		$this->treatment3numbermore = $treatment3numbermore;
	}

	/**
	 * Returns the treatment3date
	 *
	 * @return string $treatment3date
	 */
	public function getTreatment3date() {
		return $this->treatment3date;
	}

	/**
	 * Sets the treatment3date
	 *
	 * @param string $treatment3date
	 * @return void
	 */
	public function setTreatment3date($treatment3date) {
		$this->treatment3date = $treatment3date;
	}

	/**
	 * Returns the treatment3time
	 *
	 * @return string $treatment3time
	 */
	public function getTreatment3time() {
		return $this->treatment3time;
	}

	/**
	 * Sets the treatment3time
	 *
	 * @param string $treatment3time
	 * @return void
	 */
	public function setTreatment3time($treatment3time) {
		$this->treatment3time = $treatment3time;
	}

	/**
	 * Returns the treatment3timerange
	 *
	 * @return string $treatment3timerange
	 */
	public function getTreatment3timerange() {
		return $this->treatment3timerange;
	}

	/**
	 * Sets the treatment3timerange
	 *
	 * @param string $treatment3timerange
	 * @return void
	 */
	public function setTreatment3timerange($treatment3timerange) {
		$this->treatment3timerange = $treatment3timerange;
	}

	/**
	 * Returns the message
	 *
	 * @return string $message
	 */
	public function getMessage() {
		return $this->message;
	}

	/**
	 * Sets the message
	 *
	 * @param string $message
	 * @return void
	 */
	public function setMessage($message) {
		$this->message = $message;
	}

	/**
	 * Returns the requirements
	 *
	 * @return string $requirements
	 */
	public function getRequirements() {
		return $this->requirements;
	}

	/**
	 * Sets the requirements
	 *
	 * @param string $requirements
	 * @return void
	 */
	public function setRequirements($requirements) {
		$this->requirements = $requirements;
	}

	/**
	 * Returns the occassion
	 *
	 * @return string $occassion
	 */
	public function getOccassion() {
		return $this->occassion;
	}

	/**
	 * Sets the occassion
	 *
	 * @param string $occassion
	 * @return void
	 */
	public function setOccassion($occassion) {
		$this->occassion = $occassion;
	}

	/**
	 * Returns the occassionOther
	 *
	 * @return string $occassionOther
	 */
	public function getOccassionOther() {
		return $this->occassionOther;
	}

	/**
	 * Sets the occassionOther
	 *
	 * @param string $occassionOther
	 * @return void
	 */
	public function setOccassionOther($occassionOther) {
		$this->occassionOther = $occassionOther;
	}

}