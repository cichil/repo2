<?php
function createUser($name, $email, $role){
	return "user created with name : $name, email : $email, role : $role";
}

echo createUser(name:"sudoko",email:"sudoko@doko.com",role:"super admin");
	
echo "\n";
?>
