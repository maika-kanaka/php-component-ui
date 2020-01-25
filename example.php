<?php 

include 'vendor/autoload.php';

use ComponentUI\Form;

$form = new Form();
$form->input([
    'label' => 'Fullname',
    'name' => 'fullname',
    'value' => 'Maika Kanaka',
    'view_type' => 'horizontal',

    'description' => 'Your fullname here',
    'message_error' => '' // validation message here 
]);

use ComponentUI\Alert;

$alert = new Alert();
$message = $alert->danger('asd');
echo $message;