<?php

    class bloglib {
        
        public static function getBlogEntries($query) {
            // connect
            $m = new MongoClient();
            try {
                // select a database
                $db = $m->local;
                    
                // select a collection (analogous to a relational database's table)
                $collection = $db->tandkblogs;
                
                // find everything in the collection
                if($query != null)
                    $cursor = $collection->find($query);
                else 
                    $cursor = $collection->find();
                    
                return $cursor;
            } finally {
                $m = null;
            }
        }
        
        public static function getBlogEntry($id) {
            // connect
            $m = new MongoClient();
            try {
                // select a database
                $db = $m->local;
                $collection = $db->tandkblogs;
                
                //Get item by ID and return
                $query = array('_id' => new MongoId($id));
                $cursor = $collection->findOne($query);
                
                return $cursor;
                
            } finally {
                $m = null;
            }
        }
        
        public static function deleteBlogEntry($id) {
            // connect
            $m = new MongoClient();
            try {
                // select a database
                $db = $m->local;
                $collection = $db->tandkblogs;
                
                //Get item by ID and return
                $query = array('_id' => new MongoId($id));
                $cursor = $collection->remove($query);
                
            } finally {
                $m = null;
            }
        }
        
        public static function addBlogEntry($entry) {
            // connect
            $m = new MongoClient();
            try {
                // select a database
                $db = $m->local;
                $collection = $db->tandkblogs;
                
                //Get item by ID and return
                $result = $collection->insert($entry);
                return $result["ok"];
                
            } finally {
                $m = null;
            }
        }
        
    }

?>