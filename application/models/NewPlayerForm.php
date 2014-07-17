<?php

class NewPlayerForm extends CFormModel
{
    public $name;
    public $email;
    public $experience;
    public $expectations;
    public $comments;

    public static $expectationsValues = array(
        'aside' => 'Make the A side as a premier player',
        'learn' => ' New player - learn the game',
        'casual' => 'Casual/Social Player',
        'oldboys' => 'Play for the Old Boys (over 34)',
        'coach' => 'Coach',
        'fan' => 'Fan, Social member, Club Administrator'
    );

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // name, email, subject and body are required
            array('name, email, expectations', 'required'),
            // email has to be a valid email address
            array('email', 'email')
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'experience'=>'Previous Rugby Experience',
            'expectations'=>'Expectations',
            'comments'=>'Additional Comments'
        );
    }
} 