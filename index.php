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
<form>
    <div class="form-group row">
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
        </div>
    </div>
    <fieldset class="form-group">
        <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
            <div class="col-sm-10">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                        First radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                    <label class="form-check-label" for="gridRadios2">
                        Second radio
                    </label>
                </div>
                <div class="form-check disabled">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                    <label class="form-check-label" for="gridRadios3">
                        Third disabled radio
                    </label>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="form-group row">
        <div class="col-sm-2">Checkbox</div>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck1">
                <label class="form-check-label" for="gridCheck1">
                    Example checkbox
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
</form>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <?php
            new Form_Builder($elements);
            ?>
        </div>

    </div>
</div>

<script src="js/bootstrap.min.js"></script>
</body>
</html>