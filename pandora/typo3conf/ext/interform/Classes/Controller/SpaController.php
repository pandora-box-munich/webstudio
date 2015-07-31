<?php
namespace Interain\Interform\Controller;


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
 * SpaController
 */
class SpaController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * spaRepository
	 *
	 * @var \Interain\Interform\Domain\Repository\SpaRepository
	 * @inject
	 */
	protected $spaRepository = NULL;

	/**
	 * action show
	 *
	 * @param \Interain\Interform\Domain\Model\Spa $spa
	 * @return void
	 */
	public function showAction(\Interain\Interform\Domain\Model\Spa $spa) {
		$this->view->assign('spa', $spa);
	}

	/**
	 * action new
	 *
	 * @param \Interain\Interform\Domain\Model\Spa $newSpa
	 * @ignorevalidation $newSpa
	 * @return void
	 */
	public function newAction(\Interain\Interform\Domain\Model\Spa $newSpa = NULL) {
		$this->view->assign('newSpa', $newSpa);
	}

	/**
	 * action create
	 *
	 * @param \Interain\Interform\Domain\Model\Spa $newSpa
	 * @return void
	 */
	public function createAction(\Interain\Interform\Domain\Model\Spa $newSpa) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->spaRepository->add($newSpa);
		$this->redirect('list');
	}

}