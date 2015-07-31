<?php
namespace Interain\Interform\Tests\Unit\Controller;
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
 * Test case for class Interain\Interform\Controller\KontaktController.
 *
 * @author Michael Odendahl <info@intertain.me>
 */
class KontaktControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Interain\Interform\Controller\KontaktController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Interain\\Interform\\Controller\\KontaktController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenKontaktToView() {
		$kontakt = new \Interain\Interform\Domain\Model\Kontakt();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newKontakt', $kontakt);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($kontakt);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenKontaktToKontaktRepository() {
		$kontakt = new \Interain\Interform\Domain\Model\Kontakt();

		$kontaktRepository = $this->getMock('Interain\\Interform\\Domain\\Repository\\KontaktRepository', array('add'), array(), '', FALSE);
		$kontaktRepository->expects($this->once())->method('add')->with($kontakt);
		$this->inject($this->subject, 'kontaktRepository', $kontaktRepository);

		$this->subject->createAction($kontakt);
	}
}
