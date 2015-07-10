<?php
use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Validator\Email as EmailValidator;
use Phalcon\Mvc\Model\Validator\Uniqueness as UniquenessValidator;

class User extends Model {
    public function validation()
    {
        $this->validate(new EmailValidator(array(
            'field' => 'email'
        )));
        $this->validate(new UniquenessValidator(array(
            'field' => 'email',
            'message' => '<h5>Sorry, The email was registered by another user</h5>'
        )));
        $this->validate(new UniquenessValidator(array(
            'field' => 'username',
            'message' => '<h5>Sorry, That username is already taken</h5>'
        )));
        if ($this->validationHasFailed() == true) {
            return false;
        }
    }
}
