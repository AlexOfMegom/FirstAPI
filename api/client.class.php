<?php
include('connection/connection.class.php');
/**
* Client class verify what method was sent and execute the respective method.
*/
class Client
{
	//Attributes
	private $id;
	private $name;
	private $company;
	private $telnumber;
	private $email;
	private $brdate;
	private $pic;


	

	private $db;
	private $method;
	function __construct($name = '',$company='', $telnumber='',$email='',$brdate='')
	{
		# Construct the class and set the values in the attributes.
		$this->db = ConnectionDB::getInstance();
		$this->name = $name;
		// $this->age = $age;
		// $this->gender = $gender;
		$this->company= $company;
		$this->telnumber = $telnumber;
		$this->email = $email;	
		
		$this->brdate = $brdate;
	
		
	}

	function verifyMethod($method,$route){

		
		//Verifies what is the method sent.
		switch ($method) {
		case 'GET':
			# When the method is GET, returns the client
			return self::doGet($route);
			break;
		case 'POST':
			# When the method is POST, includes a new client
			if(empty($route[1])){
				return self::doPost();
			}else{
				return $arr_json = array('status' => 404);
			} 
			break;
		// case 'PUT':
		// 	# When the method is PUT, alters an existing client
		// 	return self::doPut($route); 
		// 	break;
		case 'DELETE':
			# When the method is DELETE, excludes an existing client.
			return self::doDelete($route); 
			break;		
		default:
			# When the method is different of the previous methods, return an error message.
			return array('status' => 405);
      		break;
		}
	}

	function doGet($route){
		//GET method
		$sql = 'SELECT * FROM api.client WHERE id = :id';
	    $stmt = $this->db->prepare($sql);
	    $stmt->bindValue(":id", $route[1]);
	    $stmt->execute();

	    if($stmt->rowCount() > 0)
	    {
	    	$row  = $stmt->fetch(PDO::FETCH_ASSOC);
			return $arr_json =    array('status' => 200, 'client' => $row);
	    }else{
			return $arr_json = array('status' => 404);
	    }
	}
	function doPost(){
		//POST method
		$sql = 'INSERT api.client (name,company,telnumber,brdate,email) VALUES (:name,:company,:telnumber,:brdate,:email)';
	    $stmt = $this->db->prepare($sql);
	    $stmt->bindValue(':name', $this->name);
	    $stmt->bindValue(':company', $this->company);
		$stmt->bindValue(':telnumber', $this->telnumber);
		$stmt->bindValue(':email', $this->email);
	     $stmt->bindValue(':brdate', $this->brdate);
	
	    $stmt->execute();
		
	    if($stmt->rowCount() > 0)
	    {
			 
			return $arr_json = array('status' => 200);
	    }else{
			return $arr_json = array('status' => 400);
	    }
		
	}
	function doPut($route){
		//PUT method
		$sql = 'UPDATE api.client 
						SET 
						name = :name
						, company = :company
						, email = :email
						, telnumber = :telnumber
						, brdate = :brdate
						WHERE id = :id';
	    $stmt = $this->db->prepare($sql);
	    $stmt->bindValue(':name', $this->name);
	    // $stmt->bindValue(':age', $this->age);
	    // $stmt->bindValue(':gender', $this->gender);
		$stmt->bindValue(':company', $this->company);
		$stmt->bindValue(':email', $this->email);
	    $stmt->bindValue(':telnumber', $this->telnumber);
	    $stmt->bindValue(':brdate', $this->brdate);
	    $stmt->bindValue(":id", $route[1]);
	    $stmt->execute();

	    if($stmt->rowCount() > 0)
	    {
			return $arr_json = array('status' => 200);
	    }else{
			return $arr_json = array('status' => 400);
	    }

	}
	function doDelete($route){
		//DELETE method
		$sql = 'DELETE FROM api.client WHERE id = :id';
	    $stmt = $this->db->prepare($sql);
	    $stmt->bindValue(":id", $route[1]);
	    $stmt->execute();
	    if($stmt->rowCount() > 0)
	    {
			return $arr_json = array('status' => 200);
	    }else{
			return $arr_json = array('status' => 400);
	    }
	}
}
?>