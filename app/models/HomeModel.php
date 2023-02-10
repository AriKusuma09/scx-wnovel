<?php 

    Class HomeModel {

        private $table = 'user',
                $db;

        public function __construct() {
            $this->db = new Database;
        }

        public function getUser() {
            $query = "SELECT * FROM {$this->table}";

            $this->db->query($query);

            $this->db->execute();
            return $this->db->allResult();
        }

    }
 