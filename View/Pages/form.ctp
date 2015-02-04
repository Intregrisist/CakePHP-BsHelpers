<?php

$animals = array(
    'dog' => 'Dog',
    'cat' => 'Cat',
    'rabbit' => 'Rabbit'
);
$status = array(
    0 => 'No',
    1 => 'Yes'
);

// Stacked - Set by default
//$this->BsForm->setFormType('stacked');
echo '<div class="container">'.
    '<h2>Stacked Form</h2>'.
    $this->BsForm->create('ModelA').
        $this->BsForm->input('First name').
        $this->BsForm->inputGroup('User.email', array('content' => '@', 'class' => 'addon-mail'), array('label' => 'E-mail')).
        $this->BsForm->checkbox('User.notifications', array('label' => 'Do you want notifications ?', 'checked' => 'checked')).
        $this->BsForm->select('User.animal', $animals, array('label' => "What's your favorite animal ?", 'help' => 'Only one can be chosen')).
        $this->BsForm->radio('User.married', $status, array('label' => 'Are you married ?')).
        $this->BsForm->submit('Send').
    $this->BsForm->end();
echo '</div>';


// Horizontal Form
$this->BsForm->setFormType('horizontal');
echo '<br/>'.
'<div class="container">'.
	'<div class="row">'.
		'<div class="col-xs-12">'.
			'<h1>Basic form</h1>'.
			$this->BsForm->create('Model').
				$this->BsForm->input('First name').
				$this->BsForm->input('Last name').
				$this->BsForm->input('Nickname').
				$this->BsForm->submit('Send').
			$this->BsForm->end().
		'</div>'.
	'</div>'.
'</div>';
echo '<br/>';




// Second Form

$select_options = array('M' => 'Man', 'W' => 'Woman');
$radio_options = array(0, 1, 2, 3, 4);

echo '<br/>'.

'<div class="container">'.
	'<div class="row">'.
		'<div class="col-xs-12">'.
			'<h1>Form with select, radio and checkbox</h1>'.
			$this->BsForm->create('Model').
				$this->BsForm->select('Sex', $select_options).
				$this->BsForm->checkbox('Married').
				$this->BsForm->radio('Kids', $radio_options).
				$this->BsForm->submit('Send').
			$this->BsForm->end().
		'</div>'.
	'</div>'.
'</div>';
echo '<br/>';




// Third Form

$this->BsForm->setLeft(2);
$this->BsForm->setRight(10);

$multiple_checkbox_options = array('Man' , 'Woman');

echo '<br/>'.

'<div class="container">'.
	'<div class="row">'.
		'<div class="col-xs-12">'.
			'<h1>Form more complicated and with a different columns size</h1>'.
			$this->BsForm->create('OtherModel').
				$this->BsForm->input('Name', array('help' => 'this input have the state "warning"', 'state' => 'warning')).
				$this->BsForm->select('Sex', $multiple_checkbox_options, array('multiple' => 'checkbox', 'inline' => 'inline', 'help' => 'what is your sex ?')).
				$this->BsForm->radio('Kids', $radio_options, array('label' => 'Kids', 'inline' => 'inline', 'help' => 'how many kids do you have ?')).
				$this->BsForm->submit('Send').
			$this->BsForm->end().
		'</div>'.
	'</div>'.
'</div>';