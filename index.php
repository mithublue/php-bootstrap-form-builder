<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<?php include 'class.form-builder.php';?>
<?php
$elements = array(
    'settings' => array(
        'action' => '',
        'method' => 'post',
        'media' => false
    ),
    'fields' => array(
        array(
            'name' => 'first_name',
            'label' => 'First Name',
            'type' => 'text',
            'max' => '',
            'min' => '',
            'class' => '',
            'id' => '',
            'span' => '8'
        ),
        array(
            'name' => 'email',
            'label' => 'Email',
            'type' => 'email',
            'max' => '',
            'min' => '',
            'class' => '',
            'id' => '',
            'span' => '12'
        ),
        array(
            'name' => 'phone',
            'label' => 'Phone',
            'type' => 'text',
            'max' => '',
            'min' => '',
            'class' => '',
            'id' => '',
        ),
        array(
            'name' => 'about',
            'label' => 'About',
            'desc' => 'Say something about yourself',
            'type' => 'textarea',
            'max' => '',
            'min' => '',
            'class' => '',
        ),
        array(
            'name' => 'hobby',
            'label' => 'Hobby',
            'desc' => 'What is your hobby',
            'type' => 'select',
            'options' => array(
                '' => 'Select an option',
                'catan' => 'Catan',
                'scyth' => 'Scyth'
            ),
            'multiple' => false
        ),
        array(
            'name' => 'agreement',
            'label' => 'Agreement',
            'desc' => 'Did you read that agreement',
            'type' => 'checkbox',
            'options' => array(
                'no' => 'I did not read that agreement',
                'yes' => 'Yes, I have read that agreement'
            ),
            'layout' => 'horizontal' //vertical
        ),
        array(
            'name' => 'classification',
            'label' => 'Classification',
            'desc' => 'Mention tha classification',
            'type' => 'radio',
            'options' => array(
                'classification-1' => 'Classification 1',
                'classification-2' => 'Classification 2'
            ),
            'layout' => 'horizontal' //vertical
        )
    )
);
?>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php new Form_Builder($elements); ?>
        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
</body>
</html>