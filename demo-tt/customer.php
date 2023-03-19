<?php
   
   // $filepath = realpath(dirname(__FILE__));
   // include_once ($filepath.'/../lib/database.php');
   // include_once ($filepath.'/../lib/format.php');
   include 'session.php';
   Session::checkLogin();
   include 'database.php';
   include 'format.php';
   

   
?>

<?php
     
     class customer
     {
        private $db;
        private $fm;
        public function __construct()
        {
            $this->db = new Database();
            // $this->db = new Database();
            $this->fm = new Format();

        }
        public  function insert_customer($data){
         $name = mysqli_real_escape_string($this->db->link, $data['name']);
         $city = mysqli_real_escape_string($this->db->link, $data['city']);
         $zipcode = mysqli_real_escape_string($this->db->link, $data['zipcode']);
         $email = mysqli_real_escape_string($this->db->link, $data['email']);
         $address = mysqli_real_escape_string($this->db->link, $data['address']);
         $country = mysqli_real_escape_string($this->db->link, $data['country']);
         $phone = mysqli_real_escape_string($this->db->link, $data['phone']);
         $password = mysqli_real_escape_string($this->db->link, $data['password']);
         if ($name =="" || $city=="" || $zipcode==""|| $email==""|| $address=="" || $country=="" || $phone == "" || $password=="")
         {
            $alert = "<span class='error'>Vui lòng điền đầy đủ thông tin</span>";
            return $alert;
         }
         else{
            $check_email = "SELECT * FROM tbl_customer WHERE email='$email' LIMIT 1";
            $result_check = $this->db->select($check_email);
            if ($result_check)
            {
               $alert = "<span  class='error'> Email đã tồn tại </span>";
               return $alert;

            }
            else{
               $query = "INSERT INTO tbl_customer(name,city,zipcode,email,address,country,phone,password) VALUES ('$name', '$city', '$zipcode', '$email', '$address', '$country', '$phone', '$password') ";
               $result = $this->db->insert($query);
               if ($result){
                  $alert = "<span class='success'> Tạo tài khoản thành công </span>";
                  return $alert;
               }
               else{
                  $alert = "<span class='error'>Tạo tài khoản thất bại </span>";
                  return $alert;
               }
            }
         }
      }
        
      public function login_customer($data){
          $email = mysqli_real_escape_string($this->db->link, $data['email']);
         $password = mysqli_real_escape_string($this->db->link, $data['password']);
         if ($email == "" || $password=="")
         {
            $alert = "<span class='error'>Vui lòng điền Email hoặc password </span>";
            return $alert;
         }
         else{
            $check_login = "SELECT * FROM tbl_customer WHERE email='$email' AND password ='$password' LIMIT 1";
            $result_check = $this->db->select($check_login);
           
            if ($result_check != false)
            {
               $value=$result_check->fetch_assoc();
               Session::set("adminlogin", true);
               Session::set('id', $value['id']);
               Session::set('name', $value['name']);
               
               header('Location:indexlogin.php');

               
              




            }
            else{
              
               $alert = "<span  class='error'> email hoặc password không đúng </span>";
               return $alert;
            }
         }
      }

        
   }
     
   
?>