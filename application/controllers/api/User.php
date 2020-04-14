<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class User extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function index_get($id = 0)
	{  
	   
        if(!empty($id)){
            $data = $this->db->get_where("items", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("items")->result();
        }
        $this->response($data, REST_Controller::HTTP_OK);
	}
      
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_post()
    {   
	    $this->load->library('phpmailer_lib');
        $input = file_get_contents('php://input');
		$input = json_decode($input);
		$activationCode = $this->generatePIN(4);
		$input->activation_code = $activationCode;
		//print_r($this->checkEmail($input->email));
		if($this->checkEmail($input->email)){
			
			$this->response([], REST_Controller::HTTP_OK);
		}else{
			
			$this->db->insert('users',$input);
			$token = openssl_random_pseudo_bytes(16);
			$input = (array)$input;
			$last_id = $this->db->insert_id();
			if($last_id>0){
				if($input['user_type']==2){
					$input['usertype']="Store Owner";
				}
				if($input['user_type']==1){
					$input['usertype']="Customer";
				}
				$input['email_varified']=0;
				$input['id'] =  $last_id;
				$token = bin2hex($token);
				$input['access_token'] =  $token;
				$input['password']="";
				$this->response(['userData'=>$input ], REST_Controller::HTTP_OK);
				
			}
			$body = "Activation Code is:-".$activationCode;
			
			$this->phpmailer_lib->send($input['email'], 'Activate Your Account', $body);
			
		}
		
    } 
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_put($id)
    {
        $input = $this->put();
        $this->db->update('items', $input, array('id'=>$id));
        $this->response(['Item updated successfully.'], REST_Controller::HTTP_OK);
    }
     
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function index_delete($id)
    {
        $this->db->delete('items', array('id'=>$id));
       
        $this->response(['Item deleted successfully.'], REST_Controller::HTTP_OK);
    }
	
   public function activateAccount_post($id=null)
    {
		
		$input = file_get_contents('php://input');
		$input = json_decode($input);
		$activation_code= $input->activation_code;
		$id = $input->id;
		$updateData['email_varified']=1;
		if($this->checkActivationCode($activation_code, $id)){
			
			$this->db->update('users', $updateData, array('id'=>$id));
            $this->response(['userData'=>$input ], REST_Controller::HTTP_OK);
			
		}else{
			$this->response([], REST_Controller::HTTP_OK);
		
		}
        
    }
	
	public function checkEmail($email){
		
		 $data = $this->db->get_where("users", ['email' => $email])->row_array();
		 return $data;
	}
	public function checkActivationCode($activation_code, $id){
		
		 $data = $this->db->get_where("users", ['activation_code' => $activation_code, 'id'=>$id])->row_array();
		 return $data;
	}
	
	public function generatePIN($digits = 4){
		$i = 0; //counter
		$pin = ""; //our default pin is blank.
		while($i < $digits){
			//generate a random number between 0 and 9.
			$pin .= mt_rand(0, 9);
			$i++;
		}
		return $pin;
	}
 
	
	
    
    	
}