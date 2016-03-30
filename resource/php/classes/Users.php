<?php
/**
 * Created by PhpStorm.
 * User: just
 * Date: 15.03.16
 * Time: 07:56
 */
class Users implements Database
{
    use Validation;
    /**
     * Database constructor.
     */
    public function __construct()
    {
    }

    private function connect()
    {
        global $hostname,$DBName,$username,$password;
        try {
            $db = new PDO("mysql:host=$hostname;dbname=$DBName", $username, $password );
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
        {
            throw new PDOException('Can\'t connect to DB' );
        }
        return $db;
    }

    private function sendQuery($query, $number = false)
    {
        try{
            $db = $this->connect();
            $search = $db -> query($query);
            $db =null;
            if($number) {
                return $search -> fetchObject();
            } else {
                return $search -> fetchAll();
            }
        }
        catch (Throwable $e){
            var_dump($e);
        }
    }

    public function add(array $data)
    {
        $fname = $this->getValue($data, 'fName');
        $lname = $this->getValue($data, 'lName');
        $username = $this->getValue($data, 'username');
        $user_mail = $this->getValue($data, 'mail');
        $user_pass = $this->getValue($data, 'regPass');
        $user_pass = md5($user_pass);
        $insert = "INSERT INTO users (user_fname, user_lname, username, user_mail, user_pass)
                                        VALUES ('$fname','$lname','$username','$user_mail','$user_pass')";
        try {
            $db = $this->connect();
            $task = $db->prepare($insert);
//            var_dump($task);
            $task ->execute();
            $db = null;
            return true;
        }
        catch (Throwable $e){
            var_dump($e);
        }
    }

    public function select(array $data,bool $number)
    {

        $where = $this -> getValue($data, 'where');
        $has =  $this -> getValue($data, 'has');
        if(!$number){
            $select = "SELECT * FROM users";
        } else if($number  && isset($has) && isset($where)) {
            $select = "SELECT * FROM users WHERE $where = '$has'";
        } else {
            throw new Exception('You must define $where or $has');
        }
//        var_dump($select);
        $this->sendQuery($select, $number);
    }

    public function selectFrom($data)
    {
         $select = "SELECT * FROM users WHERE user_age >= $data";
        $this->sendQuery($select);
    }

    public function selectTo($data)
    {
         $select = "SELECT * FROM users WHERE user_age <= $data";
        $this->sendQuery($select);
    }

    public function selectBetween($form, $to)
    {
         $select = "SELECT * FROM users WHERE user_age $form BETWEEN $to";
        $this->sendQuery($select);
    }

    public function update(array $data)
    {

    }

    public function delete(array $data)
    {

    }
}