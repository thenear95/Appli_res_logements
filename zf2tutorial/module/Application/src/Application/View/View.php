<?php
$form->setAttribute('action', $this->url('home'))
     ->prepare();

echo $this->form()->openTag($form);

$product = $form->get('product');

echo $this->formRow($product->get('name'));
echo $this->formRow($product->get('price'));
echo $this->formCollection($product->get('categories'));

$brand = $product->get('brand');

echo $this->formRow($brand->get('name'));
echo $this->formRow($brand->get('url'));

echo $this->formHidden($form->get('csrf'));
echo $this->formElement($form->get('submit'));

echo $this->form()->closeTag();
