<?php

$config=[
    'signup_valid'=>
    [
        [
            'field'=>'email',
            'label'=>'Email',
            'rules'=>'required|valid_email|is_unique[users.email]'
        ],
        [
            'field'=>'full_name',
            'label'=>'Full Name',
            'rules'=>'required'
        ],
        [
            'field'=>'password',
            'label'=>'Password',
            'rules'=>'required'
        ]
    ],
        'signin_valid'=>
        [
            [
                'field'=>'email',
                'label'=>'Email',
                'rules'=>'required|valid_email'
            ],
            [
                'field'=>'password',
                'label'=>'Password',
                'rules'=>'required'
            ]
          ],
    

   
     ];





?>