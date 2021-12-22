<?php

namespace MyVendor\IwmExtension\Controller;

use MyVendor\IwmExtension\Domain\Repository\FormRepository;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

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

    public function listAction()
    {
        $formlabels = $this->formRepository->findAll();
        $this->view->assign('labels', $formlabels);

        return $this->view->render();
    }
}