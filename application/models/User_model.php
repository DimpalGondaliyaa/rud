<?php 
class User_model extends CI_Model{

    public function login($data){
        $email=$data['email'];
        $password=$data['password'];
        $query=$this->db->query("select * from seller where email='$email' and password='$password'");
        if($query->num_rows()==1){
            $check=array(
                "status"=>"ok",
                "message"=>"Login Successfully.."
                );
            $sellerRow = $query->row_array();
            $this->session->set_userdata('email', $email);
            $this->session->set_userdata('seller_id', $sellerRow["id"]);
        }
        else{
            $check=array(
                "status"=>"fail",
                "message"=>"Please check your login details"

                );          
        }
        return $check;
    }

    public function getDetails(){
        $e = $this->session->userdata("email");
        $q=$this->db->query("SELECT * FROM contactdetails WHERE u_email='$e'");
        $data=$q->result_array();
        return $data;
    }
}