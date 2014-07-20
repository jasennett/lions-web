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
            array('email', 'email'),
            // experience, comments are not required but should be assigned from the POST
            array('experience, comments', 'safe')
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

    public function emailResults()
    {
        $name='=?UTF-8?B?'.base64_encode($this->name).'?=';
        $subject='=?UTF-8?B?'.base64_encode('New Player Form Submission').'?=';
        $headers="From: $name <{$this->email}>\r\n".
            "Reply-To: {$this->email}\r\n".
            "MIME-Version: 1.0\r\n".
            "Content-Type: text/plain; charset=UTF-8";

        $content = "Name:\n$this->name\n\n";
        $content .= "Email:\n$this->email\n\n";
        $content .= "Expectations:\n".static::$expectationsValues[$this->expectations]."\n\n";
        $content .= "Experience:\n$this->experience\n\n";
        $content .= "Additional Comments:\n$this->comments";

        mail(Yii::app()->params['adminEmail'],$subject,$content,$headers);
    }
} 