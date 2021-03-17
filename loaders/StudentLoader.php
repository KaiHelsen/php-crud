<?php
declare(strict_types=1);
include_once "Loader.php";
include_once "Model/student.php";

class StudentLoader extends Loader
{
    private string $serverName = 'localhost';
    private string $username = 'root';
    private string $password = '';
    private string $db = 'crud';


    private StudentClass $student;

    private array $students = [];


    public function __construct()
    {

    }

    public function connect(): ?PDO
    {


        //driver options array
        //sets driver specific attributes
        $driverOptions = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'", //command to execute when connecting to the MySQL server
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //raises e_warning on failure and throws exceptions.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //returns fetch result as an array indexed by column name

        ];

        try
        {

            $conn = new PDO('mysql:host=' . $this->serverName . ';dbname=' . $this->db, $this->username, $this->password, $driverOptions);
            echo "connection successful!";

            //create new PDO (PHP data object)
            //first set up connection information for PDO (database host, database, username, password, driver options)
            $conn = new PDO('mysql:host=' . $this->serverName . ';dbname=' . $this->db, $this->username, $this->password, $driverOptions);
//            echo "connection successful!";

            return $conn;
        }
        catch (PDOException $exception)
        {

            echo "connection failed: " . $exception->getMessage();

//            echo "connection failed: " . $exception->getMessage();

            return null;
        }
    }



    public function fetchAll() : ?array
    {
        $pdo = $this->connect();

        $handle = $pdo->prepare('SELECT * FROM crud.student ORDER BY student.id');
        $handle->execute();
        return $handle->fetchAll();
    }

    public function fetchSingle(int $id) : ?array
    {
        $id = (int)abs($id);
        $pdo = $this->connect();

        $handle = $pdo->prepare('SELECT * FROM crud.student WHERE student.id = :id ORDER BY student.id');
        $handle->bindValue(':id', $id);
        $handle->execute();
        return $handle->fetchAll();
    }


}