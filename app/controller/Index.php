<?php

namespace Controller;

class Index {

    function home($f3) {
        $user = (new \Model\User())->findone(array('id=?', 1));
        $f3->set('user', $user);
        echo \Template::instance()->render('home.html');
    }

}
