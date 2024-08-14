<?php
class connect
{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $db_name = "travel";
    private $con = '';

    //--------------------Register Page-------------------//
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->pwd);
        mysqli_select_db($this->con, $this->db_name);
    }

    public function save_user($fname, $lname, $email, $uname, $pwd) /*It is used to assign values in database*/
    {
        $sql = "insert into tbl_register(fname,lname,email,uname,pwd)values('$fname','$lname','$email','$uname','$pwd')";
        $n = mysqli_query($this->con, $sql) or die(mysqli_error($this->con)); /*Die is used to check error in code*/
        return $n;
    }

    //-------------------Login Page---------------------//
    public function check_user($email, $pwd) /* It is used to check whether the email and passward are available in database or not*/
    {
        $sql = "select fname from tbl_register where email='$email' and pwd='$pwd'";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }

    //----------------Admin Login ----------------------------//
    function check_admin($email, $pwd)
    {
        $sql = "select * from tbl_admin where email='$email' and pwd='$pwd'";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }

    //----------------Source--------------------------------//
    public function book_source()
    {
        $sql = "select distinct(source) from tbl_flight";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }

    //----------------Source--------------------------------//
    public function book_destination()
    {
        $sql = "select distinct(dest) from tbl_flight";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }
    //----------------Flight Date----------------------//
    public function flight_date($source, $dest)
    {
        $sql = "select * from tbl_flight where source='$source' and dest='$dest';";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }
    function getUserDetails($fname)
    {
        $sql = "select * from tbl_register where fname='$fname'";
        $res = mysqli_query($this->con, $sql);
        $arr = mysqli_fetch_array($res);
        return $arr;
    }
    public function flight_fare($source, $dest)
    {
        $sql = "select fare from tbl_flight where source='$source' and dest='$dest';";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }
    public function save_book_now($fname, $lname, $email, $contact_no, $source, $dest, $date, $fare, $fno)
    {
        $sql = "insert into tbl_book (fname,lname,email,contact_no,source,dest,date,fare,fno)values('$fname','$lname','$email','$contact_no','$source','$dest','$date','$fare','$fno')";
        $n = mysqli_query($this->con, $sql) or die(mysqli_error($this->con)); /*Die is used to check error in code*/
        return $n;
    }
    function getBookingDetails($fname)
    {
        $sql = "select * from tbl_book where  fname='$fname'";
        $res = mysqli_query($this->con, $sql);
        $arr = mysqli_fetch_array($res);
        return $arr;
    }
    public function flight_no($source, $dest)
    {
        $sql = "select * from tbl_book where source='$source' and dest='$dest'";
        echo $sql;
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        $arr = mysqli_fetch_array($res);
        return $arr;
    }
    function getMyBookingDetails($fname)
    {
        $sql = "select * from tbl_book where  fname='$fname'";
        $res = mysqli_query($this->con, $sql);
        // $arr = mysqli_fetch_array($res);
        $data = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $data[] = $row;
        }
        return $data;
    }
    public function Myflight_no($source, $dest)
    {
        $sql = "select * from tbl_flight where source='$source' and dest='$dest'";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        $data = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $data[] = $row;
        }
        return $data;
    }
    function getMyBookingInvoice($id)
    {
        $sql = "select * from tbl_book where  id='$id'";
        $res = mysqli_query($this->con, $sql);
        // $arr = mysqli_fetch_array($res);
        $data = array();
        while ($row = mysqli_fetch_assoc($res)) {
            $data[] = $row;
        }
        return $data;
    }
    function getAllFlightDetails($source, $dest)
    {
        $sql = "select * from tbl_flight where source='$source' and dest='$dest'";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }
}
?>