<?php 

class Users extends CI_Model{

    private $sessionId = '';

    public function isValidate($username,$password, $type = 1){
        $this->db->where(['email' => $username, 'password' => $password] );
		if(is_array($type)){
			 $this->db->where_in('userType', $type);
		} else {
		  $this->db->where('userType', $type);
	    }
        $q = $this->db->get('users');
        //print_r($this->db->last_query()); die('hereereeeeee');
        if( $q->num_rows() ){
            $q = $this -> db
           -> select('*')
           -> where('email', $username)
		   -> where('userType', $type)
           -> limit(1)
           -> get('users');
           $row = $q->row_array();
          

            return $row;
        }else{
            return false;
        }
    }
//need
    public function getassestList(){
        $this->db->select('*')->from('assets');
        
        $query = $this->db->get();
        if( $query->num_rows() ){
            return $query->result();
        }       
    }
// need
    public function getUser($id){
        $rs = $this->db->get_where('assets', array( 'id' => $id), 1);
        //print_r($this->db->last_query());
		if($rs->num_rows() == 0){
				return false;
		}
		return $rs->row();
    }
//need
    public function updateUser($id,$Data){
        //echo "<pre>";print_r($userData);die('inside model update function ');
        $this->db->where('id', $id);
		return $this->db->update('assets', $Data);
    }

    

    public function deleteUserById($id){
        $this->db->where('id',$id);
        print_r($this->db->last_query());
        return $this->db->delete('assets');
    }
    
    

}



?>