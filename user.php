<?php
class user{     
        private $id;
        public $login;
        public $password;
        public $email; 
        public $firstname;
        public $lastname;

        public function register($login, $password, $email, $firstname, $lastname){

        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;

        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "INSERT INTO utilisateurs (login, password, email, firstname, lastname) VALUES ('$login', '$password', '$email', '$firstname', '$lastname')";
        $query = mysqli_query($connect, $request);
}

        public function connect($login, $password){

        $this->login = $login;
        $this->password = $password;
        
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "SELECT * FROM utilisateurs";
        $query = mysqli_query($connect, $request);
        $result = mysqli_fetch_all($query,MYSQLI_ASSOC);

        for ($i=0; isset($result[$i]); $i ++){
        $passwordcheck = $result[$i]['password'];
        $logincheck = $result[$i]['login'];
        if ($login == $logincheck && $password == $passwordcheck){
        echo "Vous êtes connecté ";
        }
        }
        if ($passwordcheck == FALSE) {
        echo "Erreur";
        }
        
}       
        public function disconnect(){
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "SELECT * FROM utilisateurs";
        mysqli_close($connect);
        echo "Vous êtes déconnecté";
        }
        
        public function delete(){
        $login = $this->login;
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "DELETE FROM utilisateurs WHERE login = '".$login."'";
        $query = mysqli_query($connect, $request);
}

        public function update($login, $password, $email, $firstname, $lastname){
        $log = $this->login;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request ="UPDATE utilisateurs SET login = '$login', password = '$password', email = '$email', firstname = '$firstname', lastname = '$lastname' WHERE login = '".$log."'";
        $query = mysqli_query($connect, $request);
        
        echo "L'utilisateur a bien été mis à jour";
}
        public function getAllInfos(){
        $login = $this->login;        
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "SELECT * FROM utilisateurs WHERE login = '$login'";
        $query = mysqli_query($connect, $request);
        $result = mysqli_fetch_assoc($query);
        var_dump($result);
        return ($result);
}
        public function getLogin(){
        $login = $this->login; 
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "SELECT * FROM utilisateurs WHERE login = '$login'";
        $query = mysqli_query($connect, $request);
        $result = mysqli_fetch_assoc($query);
        echo $login ;
}
        public function getEmail(){
        $login = $this->login; 
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "SELECT * FROM utilisateurs WHERE login = '$login'";
        $query = mysqli_query($connect, $request);
        $result = mysqli_fetch_assoc($query);
        echo $result['email'] ;
}
        public function getFirstname(){
        $login = $this->login; 
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "SELECT * FROM utilisateurs WHERE login = '$login'";
        $query = mysqli_query($connect, $request);
        $result = mysqli_fetch_assoc($query);
        echo $result['firstname'] ;
}       
        public function getLastname(){
        $login = $this->login; 
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $request = "SELECT * FROM utilisateurs WHERE login = '$login'";
        $query = mysqli_query($connect, $request);
        $result = mysqli_fetch_assoc($query);
        echo $result['lastname'] ;
}       
        public function refresh(){
        $connect = mysqli_connect('localhost', 'root', '', 'classes');
        $login = $this->login;
        $request = "SELECT * FROM utilisateurs WHERE login = '$login'";
        $query = mysqli_query($connect, $request);
        $refresh = mysqli_refresh($connect, $request);
        echo 'La base de donnée a bien été mis à jour';

}
}
?>