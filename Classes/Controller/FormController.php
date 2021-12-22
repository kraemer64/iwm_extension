<?php

namespace MyVendor\IwmExtension\Controller;

use MyVendor\IwmExtension\Domain\Repository\FormRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;

class FormController extends ActionController
{
    private $formRepository;

    /**
     * Inject the product repository
     *
     * @param \MyVendor\IwmExtension\Domain\Repository\FormRepository $formRepository
     */
    public function injectFormRepository(FormRepository $formRepository)
    {
        $this->formRepository = $formRepository;
    }

    public function listAction():void
    {
        $formlabels = $this->formRepository->findAll();
        $this->view->assign('labels', $formlabels);

        return $this->view->render();
    }

    public function redirectAction():void
    {
        $uriBuilder = $this->uriBuilder;

        $uri = $uriBuilder
            ->setTargetPageUid("Login.html")
            ->build();

        $this->redirectToUri($uri, 0, 404);
    }

    public function insertUser($values):void
    {
        GeneralUtility::makeInstance(ConnectionPool::class)->getConnectionForTable('tx_iwmextension_user')
        	->insert(
                'tx_iwmextension_user',
                [
                    'firstname' => $values[firstname],
                    'lastname' => $values[lastname],
                    'email' => $values[email],
                    'profilepicture' => $values[profilepicture],
                    'password' => $values[password],
                    'birthdate' => $values[birthdate],
                ]
            )

        redirectAction();
    }
}