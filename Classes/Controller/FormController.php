<?php

namespace MyVendor\IwmExtension\Controller;

use MyVendor\IwmExtension\Domain\Repository\FormRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
<<<<<<< Updated upstream
=======
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Database\ConnectionPool;
>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
    public function listAction()
=======
    public function listAction():void
>>>>>>> Stashed changes
    {
        $formlabels = $this->formRepository->findAll();
        $this->view->assign('labels', $formlabels);

        return $this->view->render();
    }
<<<<<<< Updated upstream
=======

    public function insertUser($values):void
    {
        GeneralUtility::makeInstance(ConnectionPool::class)
            ->getConnectionForTable('tx_iwmextension_user')
                ->insert(
                    'tx_iwmextension_user',
                    [
                        'firstname' => $values[firstname],
                        'lastname' => $values[lastnamename],
                        'firstname' => $values[email],
                        'lastname' => $values[profilepicture],
                        'firstname' => $values[password],
                        'lastname' => $values[birthdate],
                    ]
                )
    }
>>>>>>> Stashed changes
}