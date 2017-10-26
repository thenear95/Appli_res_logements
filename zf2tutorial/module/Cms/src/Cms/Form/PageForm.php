<?php
namespace Cms\Form;
use Zend\Form\Form, Zend\Form\FieldsetInterface;
class PageForm extends Form {
    public function __construct() {
        parent::__construct();
        //Nom du formulaire
        $this -> setName('page');
        //Méthode d'envoie (GET,POST)
        $this -> setAttribute('method', 'post');
        //Définition des champs
        $this -> add(array('name' => 'id', 'attributes' => array('type' => 'hidden', ), ));
        $this -> add(array('name' => 'title', 'attributes' => array('type' => 'text', ), 'options' => array('label' => 'Titre', ), ));
        $this -> add(array('name' => 'content', 'attributes' => array('type' => 'textarea', ), 'options' => array('label' => 'Contenu', ), ));
        //Definition des Actions
        $this -> add(array('name' => 'submit', 'attributes' => array('type' => 'submit', 'value' => 'Envoyer', 'id' => 'submitbutton', ), ));
	}
}
