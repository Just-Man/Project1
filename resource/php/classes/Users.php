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
        }
        catch(PDOException $e)
        {
            throw new PDOException('Can\'t connect to DB' );
        }
        return $db;
    }

    public function add(array $data)
    {
        $fname = $this->getValue($data, 'fName');
        $lname = $this->getValue($data, 'lName');
        $username = $this->getValue($data, 'username');
        $user_mail = $this->getValue($data, 'mail');
        $user_pass = $this->getValue($data, 'regPass');
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
            throw new PDOException('грешка при записа');
        }
    }

    public function select(array $data)
    {
        $db = $this->connect();
        $username = $this -> getValue($data, 'username');
        $user_mail = $this -> getValue($data, 'mail');
        $where = $username ? 'username' : 'user_mail';
        $has = $username ? $username : $user_mail;
        $select = "SELECT * FROM users WHERE $where = '$has'";
        $search = $db -> query($select);
        return $search -> fetchObject();
    }

    public function update(array $data)
    {

    }

    public function delete(array $data)
    {

    }
}