<?php 
    if(! defined('BASEPATH')) exit('No direct script acces allowed');

    class Model extends CI_Model 
    {
        public function checkLogin($mail,$pwd)
        {
            $ans = false;
            $format = "select * from Utilisateur where email = %s and motDePasse = %s";
            $sql = sprintf($format,$this->db->escape($mail),$this->db->escape($pwd));
            $query = $this->db->query($sql);
            $num_row = $query->num_rows();

            if($num_row >= 1)
            {
                $ans = true;
            }
            return $ans;
        }

        public function getUserId($mail,$pwd)
        {
            $format = "select idUtilisateur from Utilisateur where email = %s and motDePasse = %s";
            $sql = sprintf($format,$this->db->escape($mail),$this->db->escape($pwd));
            $query = $this->db->query($sql);
            $id = $query->row()->idUtilisateur;
            return $id;
        }
        public function inscription($nom,$email,$mdp)
        {
            $this->db->query("insert into utilisateur values(0,'$nom','$email','$mdp') ");
        }

        public function malisteObjets($id)
        {
            $format = "select * from Objet where propriétaire = %d";
            $sql = sprintf($format,$this->db->escape($id));
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }
        public function objetDétails($id)
        {
            $format = "select * from Objet where idObjet = %d";
            $sql = sprintf($format,$this->db->escape($id));
            $query = $this->db->query($sql);
            $result = array();

            foreach($query->result_array() as $row)
            {
                $result[] = $row;
            }
            return $result;
        }
    }
?>