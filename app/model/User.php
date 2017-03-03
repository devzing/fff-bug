<?php

namespace Model;

class User extends \DB\SQL\Mapper {

    //put your code here
    function __construct() {
        $f3 = \Base::instance();
        $db = $f3->get('db');
        $table = 'user';
        parent::__construct($db, $table);
    }

    function findChildren() {
        return $this->find(array('parentid=?', $this->id));
    }

}
