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
 * Test case for class Interain\Interform\Controller\SpaController.
 *
 * @author Michael Odendahl <info@intertain.me>
 */
class SpaControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \Interain\Interform\Controller\SpaController
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = $this->getMock('Interain\\Interform\\Controller\\SpaController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenSpaToView() {
		$spa = new \Interain\Interform\Domain\Model\Spa();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('spa', $spa);

		$this->subject->showAction($spa);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenSpaToView() {
		$spa = new \Interain\Interform\Domain\Model\Spa();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newSpa', $spa);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($spa);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenSpaToSpaRepository() {
		$spa = new \Interain\Interform\Domain\Model\Spa();

		$spaRepository = $this->getMock('Interain\\Interform\\Domain\\Repository\\SpaRepository', array('add'), array(), '', FALSE);
		$spaRepository->expects($this->once())->method('add')->with($spa);
		$this->inject($this->subject, 'spaRepository', $spaRepository);

		$this->subject->createAction($spa);
	}
}
