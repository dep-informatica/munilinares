<?php

class Menu {

    private $_db;

    public function __construct() {
        $this->_db = new Database();
    }

    public function getMenu() {

        $menu = $this->_db->query("SELECT * FROM menu1");

        return $menu->fetchAll();
    }

    function getSubMenu($id) {
        $menusub = $this->_db->query("SELECT * FROM menu2 where ID_menu1M2 = '$id'");
        return $menusub->fetchAll();
    }

    function getSub2Menu($id2) {
        $menusub = $this->_db->query("SELECT * FROM menu3 where ID_menu2M3 = '$id2'");
        return $menusub->fetchAll();
    }
}
