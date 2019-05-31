<?php
class Book_model extends CI_Model{

	function __construct() {

	    parent::__construct();
	}

	function save($data){
		// Inserting in Table(students) of Database(college)
		 $this->db->insert('books', $data);
	}


	function setuptable() {

		if( $this->db->table_exists('books') == FALSE ){

       
			$query = "CREATE TABLE book(
			            id INT AUTO_INCREMENT PRIMARY KEY,
					    store VARCHAR(200) NOT NULL,
					     VARCHAR(200) NOT NULL,
					    sechedule VARCHAR(200),
					    datecreated DATE

	                  )";

	        $this->db->query($query);

        }
	}

}
?>