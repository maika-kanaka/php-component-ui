<?php 

include 'vendor/autoload.php';

use ComponentUI\Form;

$form = new Form();
// $form->input([
//     'label' => 'Fullname',
//     'name' => 'fullname',
//     'value' => 'Maika Kanaka',
//     'view_type' => 'horizontal',

//     'description' => 'Your fullname here',
//     'message_error' => '' // validation message here 
// ]);

$form->textarea([
    'label' => 'Fullname',
    'name' => 'fullname',
    'value' => 'Maika Kanaka',
    'view_type' => '',

    'description' => 'Your fullname here',
    'message_error' => '' // validation message here 
]);

// $options = [
//     ['value' => 'monday', 'label' => 'Monday', 'sub-text' => 'Bad day'],
//     ['value' => 'tuesday', 'label' => 'Tuesday', 'sub-text' => 'Fight ....'],
//     ['value' => 'wednesday', 'label' => 'Wednesday', 'sub-text' => null],
// ];
// $form->dropdown([
//     'label' => 'Day',
//     'name' => 'day',
//     'options' => $options,
//     'value' => 'tuesday'
// ]);

// $options = ['M' => 'Male', 'F' => 'Female', 'O' => 'Other'];
// $form->radio([
//     'label' => 'Gender',
//     'name' => 'gender',
//     'options' => $options,
//     'value' => 'F'
// ]);

// use ComponentUI\Alert;

// $alert = new Alert();
// $message = $alert->danger('asd');
// echo $message;