<?php


namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

 class IndexController extends AbstractActionController
 {
    public function indexAction()
     {
    
         echo '<div class="mn-green">O&ugrave; on est maintenant?</div>';
         return new ViewModel();
    }
/*      public function indexAction()
 {
     $form = new CreateProduct();
     $product = new Product();
     $form->bind($product);

     if ($this->request->isPost()) {
         $form->setData($this->request->getPost());

         if ($form->isValid()) {
             var_dump($product);
         }
     }

     return array(
         'form' => $form
     );
 }
 */    
    
 }

