<?php
namespace api\Controller;
 
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
 
class AnimeController extends AbstractActionController
{
    public function indexAction()
    {
        $message = $this->params()->fromQuery('message', 'foo');
        return new ViewModel(array('message' => $message));
    }
}