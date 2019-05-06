<?php 
defined('BASEPATH') OR exit('No direct script access allowed');


class UsuarioModel extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    public function getUser(){
        $user=$this->db->query("select * from user")->result();
        
        return $user;
    }
    public function setUser($name,$surname){
        /*$name=$this->db->escape($name);
        $surname=$this->db->escape($surname);*/
        return $this->db->query("INSERT INTO user (name,surname) VALUES ($name,$surname)");
    }
}