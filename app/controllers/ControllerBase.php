<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\View;

class ControllerBase extends Controller {

    protected $auth;

    protected function getAuth()
    {
        $this->auth = $this->session->get('auth');

        $this->view->isUser = false;
        $this->view->isAdmin = false;
        if($this->auth) {
            if($this->auth["groupid"] == 1)
                $this->view->isAdmin = true;
            if($this->auth["groupid"] <> 0)
                $this->view->isUser = true;
        }
    }

    private function prepareDebug() {
        $this->view->isLocal = $this->__debug["local"];
    }

    protected function initialize() {
        $this->getAuth();
        $this->tag->prependTitle('SNGOJ::');
        $this->view->setTemplateAfter('main');

        $this->prepareDebug();

        if($this->request->isAjax()) {
            $this->view->setRenderLevel(View::LEVEL_AFTER_TEMPLATE);
        } else {
            $this->view->setRenderLevel(View::LEVEL_MAIN_LAYOUT);
        }
    }

    protected function forward($uri) {
        $uriParts = explode('/', $uri);
        $params = array_slice($uriParts, 2);
        return $this->dispatcher->forward(
            array(
                'controller' => $uriParts[0],
                'action' => $uriParts[1],
                'params' => $params
            )
        );
    }
    protected function redirect($uri) {
        return $this->response->redirect($uri);
    }
}
