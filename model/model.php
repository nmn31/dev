<?php   
class Model { 


     public function insert($name,$password,$email,$country){   
	    $conn = new mysqli("sql6.freemysqlhosting.net","sql6135475","8zKGpAzm6J", "sql6135475");
        $sql = "INSERT INTO reg (Name, Password, Email,Country)
                 VALUES ('$name','$password','$email','$country')";
				  
	   if ( mysqli_query($conn, $sql)){
            return true;
           } else{
           return false;
           }
		 }
	public function update($name,$password,$email,$country,$id){   
	    $conn = new mysqli("localhost","root","", "login");
		$sql = 'UPDATE reg SET Name="'.$name.'",Password= "'.$password.'", Email="'.$email.'", Country ="'.$country.'" WHERE id ="'.$id.'"';
       
        
		 if ( mysqli_query($conn, $sql)){
            
			return true;
           } else{
           return false;
           }

    } 
	
	public function insertimg($t,$id){   
	    $conn = new mysqli("localhost","root","", "login");
		$sql = 'UPDATE reg SET img="'.$t.'" WHERE id ="'.$id.'"';
        if ( mysqli_query($conn, $sql)){
            
			return true;
           } else{
           return false;
           }

    }
    public function login($name,$password){
	 $conn = new mysqli("sql6.freemysqlhosting.net","sql6135475","8zKGpAzm6J", "sql6135475");
	 $sql = "SELECT * FROM reg where Name='$name' AND Password= '$password'";
	 $result = $conn->query($sql);
	 if ($result->num_rows > 0) {
     echo "hi";
	 print_r($result);
    }
	} 	
		 
}   

?> 