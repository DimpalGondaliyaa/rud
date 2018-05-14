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
        $q=$this->db->query("SELECT * FROM contactdetails WHERE u_email='dimpal@gmail.com'");
        $data=$q->result_array();
        return $data;
    }

    /*Get Categories*/
/*
    public function getCategories(){
        $q=$this->db->query("SELECT * FROM categories WHERE cat_status='1'");
        $cat=$q->result_array();
        return $cat;
    }

    public function getProducts(){

        $q=$this->db->query("SELECT * FROM products ORDER BY id DESC");
        $row=$q->result_array();
        return $row;

    }


     public function getShopProducts(){

        $q=$this->db->query("SELECT * FROM shop_products ORDER BY id DESC");
        $row=$q->result_array();
        return $row;

    }
*/

    /* Seller add/edit delete products */
    /*public function addProduct($pro_data)
    {
        //$pro_data["status"] = 0;
        $query=$this->db->insert("products",$pro_data);       
        $id=$this->db->insert_id();
        return $id;

    }

    public function updateProduct($result,$up_id)
    {
        $this->db->where('id',$up_id);
        $this->db->update("products",$result);
    }

    public function updateProduct1($pro_data,$pro_id)
    {
        $this->db->where('id',$pro_id);
        $this->db->update("products",$pro_data);
    }*/
    /*add categories*/


    /*Add Shop Product*/

        /* Seller add/edit delete products */
    /*public function addShopProduct($pro_data)
    {
        //$pro_data["status"] = 0;
        $query=$this->db->insert("shop_products",$pro_data);       
        $id=$this->db->insert_id();
        return $id;

    }

    public function updateShopProduct($pro_data,$pro_id)
    {
        $this->db->where('id',$pro_id);
        $this->db->update("shop_products",$pro_data);
    }
    /*add categories*/



    public function addProductsCategories($data){
        $query=$this->db->insert("categories",$data);       
        $id=$this->db->insert_id();
        return $id;
    }

    public function updateCat($catData,$cat_id)
    {
        $this->db->where('cat_id',$cat_id);
        $this->db->update("categories",$catData);
    }

    




    /*Update Categories*/
    /*public function updateCategory($result,$up_id)
    {
        $this->db->where('cat_id',$up_id);
        $this->db->update("categories",$result);
    }

    public function updateCategory1($pro_data,$pro_id)
    {
        $this->db->where('cat_id',$pro_id);
        $this->db->update("categories",$pro_data);
    }

*/

    /*Fetch data to Model*/
    /*public function editProdcut($id)
        {
            $data = $this->db->query("SELECT * FROM products WHERE id='".$id."'");
            $ress = $data->row_array();
            return $ress;
        }


    public function getsharedatabtid($id)
        {
            $q1=$this->db->query("select * from products where id='$id'");
            $q2 = $q1->row_array();
            return $q2;
        }
    
     public function editCategory($id)
        {
            $data = $this->db->query("SELECT * FROM categories WHERE cat_id='".$id."'");
            $ress = $data->row_array();
            return $ress;
        }*/

    
}