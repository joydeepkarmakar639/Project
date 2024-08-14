<?php
class connect
{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $db_name = "travel";
    private $con = '';

    //--------------------Add Flight-------------------//
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->pwd);
        mysqli_select_db($this->con, $this->db_name);
    }

    public function save_flight($fno, $source, $dest, $stops, $f_date, $time, $fare) /*It is used to assign values in database*/
    {
        $sql = "insert into tbl_flight(fno,source,dest,stops,f_date,time,fare)values('$fno','$source','$dest','$stops','$f_date','$time','$fare')";
        $n = mysqli_query($this->con, $sql) or die(mysqli_error($this->con)); /*Die is used to check error in code*/
        return $n;
    }

    //-------------------Show flight-------------------------//

    function getFlightDetails()
    {
        $sql = "select * from tbl_flight order by id";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }

    //===============Delete Flights=======================//
    function deleteFlightDetails($id)
    {
        $sql = "delete from tbl_flight where id='$id'";
        mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
    }

    //===============Edit Flight==========================//
    public function edit_flight($fno, $source, $dest, $stops, $f_date, $time, $fare)
    {
        $sql = "update tbl_flight set source='$source',dest='$dest',stops='$stops',f_date='$f_date',time='$time',fare='$fare' where fno='$fno'";
        $n = mysqli_query($this->con, $sql) or die(mysqli_error($this->con)); /*Die is used to check error in code*/
        return $n;
    }

    //======================================================//
    function getFlightDetailsByNo($id)
    {
        $sql = "select * from tbl_flight where id='$id'";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        $arr = mysqli_fetch_array($res);
        return $arr;
    }
    function getBookingDetails()
    {
        $sql = "select * from tbl_book";
        $res = mysqli_query($this->con, $sql);
        return $res;
    }
    function getAllFlightDetails($source, $dest)
    {
        $sql = "select * from tbl_flight where source='$source' and dest='$dest'";
        $res = mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
        return $res;
    }
    function deleteBookDetails($id)
    {
        $sql = "delete from tbl_book where id='$id'";
        mysqli_query($this->con, $sql) or die(mysqli_error($this->con));
    }

}
?>