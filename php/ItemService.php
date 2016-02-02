<?php
	require_once("Database.php");
	require_once("Mail.php");
    require_once("FileService.php");
    require_once("Plinq.php");

	class ItemService {
		
		private $db;
		
		function __construct() {
			$config =parse_ini_file ("database_config.ini");
			
			$this->db  = new OBJ_mysql($config);
	   	}
		
        public function delete($id) {
            $q = "UPDATE item SET deleted = 1 WHERE id = $id";
			
			$query = $this->db->query($q);
            
            return $query;
        }
        
		public function insert($item, $images) {
            $fileService = new FileService();
            
			$id = $this->db->insert("item", $item);
            
            for($i = 0; $i < count($images['name']); $i++) {
                $name = $images['name'][$i];
                $type = $images['type'][$i];
                $tmp_name = $images['tmp_name'][$i];
                $error = $images['error'][$i];
                $size = $images['size'][$i];
                $target = $_SERVER["DOCUMENT_ROOT"] . 'uploads/' . uniqid() . "_" . $name;
                $image = imagecreatefromjpeg($tmp_name);
                
//                if ($images['mime'][$i] == 'image/jpeg') $image = imagecreatefromjpeg($tmp_name);
//                elseif ($images['mime'][$i] == 'image/gif') $image = imagecreatefromgif($tmp_name);
//                elseif ($images['mime'][$i] == 'image/png') $image = imagecreatefrompng($tmp_name);

                //save it
                imagejpeg($image, $target, 25);
                
                //move_uploaded_file( $tmp_name, $target);
            
                $file = array( 
                    "originalFilename" => $name, 
                    "itemId" => $id, 
                    "location" => str_replace($_SERVER["DOCUMENT_ROOT"], "/", $target), 
                    "type" => $type, 
                    "size" => $size 
                );
                
                $fileService->insert($file);
            }
            
			return $this->get($id);
		}
        
        public function get($id = null) { 
			if($id == null) {
				$q = "SELECT * FROM item WHERE deleted != 1";
			}
			else {
				$q = "SELECT * FROM item WHERE deleted != 1 AND id = $id";
			}
			
			$query = $this->db->query($q);
			
			if($id == null) {
				return $query->fetchAll();
			}
			else {
				return $query->fetch();	
			}
		}
        
        public function getWithImages($id = null) {
            $fileService = new FileService();
            
            if($id == null) {
                $filesQuery = $fileService->get();
                $itemsQuery = $this->get();

                $files = new Plinq($filesQuery);
                $items = new Plinq($itemsQuery);

                $result = $items->Select(function($k, $v) use($files) {

                    $v->images = $files->Where(function($k2, $v2) use($v) {  
                        return $v->id == $v2->itemId;
                    })->ToArray();

                    return $v;

                })->ToArray();

                return $result;
            }
            else {
                $item = $this->get($id);
                $files = $fileService->getByItem($id);
                
                $item->images = $files;
                
                return $item;
            }
        }
	}
?>