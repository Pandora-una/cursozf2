<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class CadastroController extends AbstractActionController
{
    public function abrirCadastroAction()
    {
        return new ViewModel();
    }
    
    public function incluirCadastroAction()
    {
    	return new ViewModel();
    }
}
