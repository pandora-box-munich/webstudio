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
 * KontaktController
 */
class KontaktController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * kontaktRepository
	 *
	 * @var \Interain\Interform\Domain\Repository\KontaktRepository
	 * @inject
	 */
	protected $kontaktRepository = NULL;

	/**
	 * @var \TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager
	 * @inject
	 */
	protected $persistenceManager = NULL;
	
	/**
	 * @var array
	 */
	protected $allConfig = NULL;
		
	
	public function initializeAction()
	{
		// benÃ¶tigt fÃ¼r Mailversand (Erkennung des Templates)
		$this->allConfig = $this->configurationManager->getConfiguration(
			\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK
		);
		
    	if ($this->arguments->hasArgument('newKontakt')) {
		// Alle Properties erlauben
 		$propertyMappingConfiguration = $this->arguments['newKontakt']->getPropertyMappingConfiguration();
 		$propertyMappingConfiguration->allowAllProperties();
    	}		

	}

	/**
	 * action new
	 *
	 * @param \Interain\Interform\Domain\Model\Kontakt $newKontakt
	 * @ignorevalidation $newKontakt
	 * @return void
	 */
	public function newAction(\Interain\Interform\Domain\Model\Kontakt $newKontakt = NULL) {
		$this->view->assign('newKontakt', $newKontakt);
	}

	/**
	 * action create
	 *
	 * @param \Interain\Interform\Domain\Model\Kontakt $newKontakt
	 * @return void
	 */
	public function createAction(\Interain\Interform\Domain\Model\Kontakt $newKontakt) {
		$this->kontaktRepository->add($newKontakt);
		$this->persistenceManager->persistAll();

		// Usercopy E-Mail versenden
		
		//	if($newKontakt->getMailcopy()){
		//	$this->sendEmail($newKontakt, 'Mail.html', $newKontakt->getMail(), $newKontakt->getVorname().' '.$newKontakt->getNachname());
		//	}
		
		// Admin E-Mail versenden
		
		if ($this->sendEmail($newKontakt, 'MailKontakt.html', $this->settings['mailto_mail'], $this->settings['mailto_name'])) {
					$targetUri = $this->uriBuilder->reset()->setLinkAccessRestrictedPages(true)->setTargetPageUid($this->settings['page_success'])->setNoCache(true)->buildFrontendUri();
					$this->redirectToUri($targetUri, 0, 200);
		} else {
					$targetUri = $this->uriBuilder->reset()->setLinkAccessRestrictedPages(true)->setTargetPageUid($this->settings['page_error'])->setNoCache(true)->buildFrontendUri();
					$this->redirectToUri($targetUri, 0, 200);
		}
	}

	/**
	 * @param \Interain\Interform\Domain\Model\Kontakt $newKontakt
	 * @param string $stepFileName
	 * @param string $mailto
	 * @param string $mailtoName
	 * @return boolean
	 */
	public function sendEmail(\Interain\Interform\Domain\Model\Kontakt $newKontakt, $stepFileName, $mailto, $mailtoName)
	{
		$emailView = $this->objectManager->get('\\TYPO3\\CMS\\Fluid\\View\\StandaloneView');
		/* @var $emailView \TYPO3\CMS\Fluid\View\StandaloneView */
		$conf = $this->configurationManager->getConfiguration(\TYPO3\CMS\Extbase\Configuration\ConfigurationManagerInterface::CONFIGURATION_TYPE_FRAMEWORK);
		$templateRootPath = \TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($this->allConfig['view']['templateRootPath']);
		$emailView->setLayoutRootPath(\TYPO3\CMS\Core\Utility\GeneralUtility::getFileAbsFileName($this->allConfig['view']['layoutRootPath']));
		$emailView->setTemplatePathAndFilename($templateRootPath . 'Email/' . $stepFileName);
		$emailView->assign('formular', $newKontakt);
		$emailView->assign('host', $_SERVER['HTTP_HOST']);
		$emailBody = $emailView->render();
		if ($emailBody) {
			/* @var $mail \TYPO3\CMS\Core\Mail\MailMessage */
			$mail = $this->objectManager->get('TYPO3\\CMS\\Core\\Mail\\MailMessage');
			$mail->setFrom(
				array($this->settings['sender_mail'] => $this->settings['sender_name'])
			)->setTo(
				array($this->settings['mailto_mail'] => $this->settings['mailto_name'])
			)->setSubject(
				$this->settings['mailtitle']
			)->setBody(
				$emailBody, 'text/html'
			);
			return $mail->send();
		} else {
			return false;
		}
	}

}