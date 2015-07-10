<?php

class RegisterController extends ControllerBase {
    public function initialize()
    {
        $this->tag->setTitle('Sign Up');
        parent::initialize();
    }

    public function indexAction() {
        $form = new RegisterForm;

        if ($this->request->isPost()) {
            $username = $this->request->getPost('username', 'alphanum');
            $email = $this->request->getPost('email', 'email');
            $password = $this->request->getPost('password');
            $repeatPassword = $this->request->getPost('repeatPassword');

            if (strlen($username) < 5) {
                $this->flash->error('<h5>Username too short</h5>');
            } elseif ($password != $repeatPassword) {
                $this->flash->error('<h5>Passwords are different</h5>');
                return $this;
            } else {
                $user = new User();
                $user->username = $username;
                $user->password = $this->security->hash($password);
                $user->email = $email;
                $user->registertime = new Phalcon\Db\RawValue('now()');
                $user->groupid = 2;
                if ($user->save() == false) {
                    foreach ($user->getMessages() as $message) {
                        $this->flash->error((string) $message);
                    }
                } else {
                    $this->tag->setDefault('email', '');
                    $this->tag->setDefault('password', '');

                    $this->flash->success('<h5>Thanks for sign-up</h5><h6>Log in to start Advanture</h6>');
                    return $this->forward('session/index');
                }
            }
        }

        $this->view->form = $form;
    }
}