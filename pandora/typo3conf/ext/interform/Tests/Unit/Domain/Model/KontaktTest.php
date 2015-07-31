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
 * Test case for class \Interain\Interform\Domain\Model\Kontakt.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Michael Odendahl <info@intertain.me>
 */
class KontaktTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \Interain\Interform\Domain\Model\Kontakt
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \Interain\Interform\Domain\Model\Kontakt();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getVornameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getVorname()
		);
	}

	/**
	 * @test
	 */
	public function setVornameForStringSetsVorname() {
		$this->subject->setVorname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'vorname',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNachnameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNachname()
		);
	}

	/**
	 * @test
	 */
	public function setNachnameForStringSetsNachname() {
		$this->subject->setNachname('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nachname',
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
	public function getUnternehmenReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getUnternehmen()
		);
	}

	/**
	 * @test
	 */
	public function setUnternehmenForStringSetsUnternehmen() {
		$this->subject->setUnternehmen('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'unternehmen',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForStringSetsPosition() {
		$this->subject->setPosition('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'position',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelefonReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTelefon()
		);
	}

	/**
	 * @test
	 */
	public function setTelefonForStringSetsTelefon() {
		$this->subject->setTelefon('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telefon',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNachrichtReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNachricht()
		);
	}

	/**
	 * @test
	 */
	public function setNachrichtForStringSetsNachricht() {
		$this->subject->setNachricht('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'nachricht',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAnhangReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAnhang()
		);
	}

	/**
	 * @test
	 */
	public function setAnhangForStringSetsAnhang() {
		$this->subject->setAnhang('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'anhang',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSonstigesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSonstiges()
		);
	}

	/**
	 * @test
	 */
	public function setSonstigesForStringSetsSonstiges() {
		$this->subject->setSonstiges('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'sonstiges',
			$this->subject
		);
	}
}
