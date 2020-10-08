<?php 
    class RegisterController extends controller{

        function login(){}
        public function __construct(){
            $this->view("register",[]);
        }
        
        public function register(){
            $error = false;
            if(isset($_POST["register"])){
                $id = $_POST["user_id"];
                $username = $_POST["username"];
                $password = $_POST["password"];
                $gmail = $_POST["gmail"];
                $location = $_POST["location"];
                $phone = $_POST["phone"];
                if(empty($id) || empty($username) || empty($password) || empty($gmail) || empty($location) || empty($phone)){
                    $this->view("register",["error"=>"Input invalid!"]);
                }else{
                    $model = $this->model("model_login");
                    $result = $model->register($id,$username,$password,$gmail,$location,$phone);  
                    echo $result;
                }
 
            }else{
                header("location:login");  
            }
        }
    }

?>