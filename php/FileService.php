<?php
	require_once("Database.php");

	class FileService {
		
		private $db;
		
		function __construct() {
			$config =parse_ini_file ("database_config.ini");
			
			$this->db  = new OBJ_mysql($config);
	   	}
		
		public function insert($item) {
			$id = $this->db->insert("file", $item);
			
			return $this->get($id);
		}
        
        public function get($id = null) { 
			if($id == null) {
				$q = "SELECT * FROM file";
			}
			else {
				$q = "SELECT * FROM file WHERE id = $id";
			}
			
			$query = $this->db->query($q);
			
			if($id == null) {
				return $query->fetchAll();
			}
			else {
				return $query->fetch();	
			}
		}
        
        public function getByItem($id) { 
            $q = "SELECT * FROM file WHERE itemId = $id";
			
			$query = $this->db->query($q);
			
            return $query->fetchAll();
		}
	}
?>