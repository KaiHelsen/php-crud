<?php
declare(strict_types = 1);
include_once 'Controller.php';

class StudentController extends Controller {
    
public function render(array $GET, array $POST): void
{
    //TODO: implement system to handle what the user wishes to do within the system.
    //  meaning: the controller should be able to go to a different view depending on whether
    //  the user wants an overview, or a view of a specific student/student/teacher
    //  it might be interesting to cram this additional information in the $get,
    //  and then use that to vary between pages
    //  for now, we stick with the overview.

    //start up loader
    $loader = new StudentLoader();
    $pdo = $loader->connect();

    $handle = $pdo->prepare('SELECT firstname FROM crud.student ORDER BY student.id');
    $handle->execute();
    $students = $handle->fetchAll();

    //TODO: Implement render() method.
    //require 'View/studentsOverview.php';

    //var_dump($GET);
    //var_dump($POST);
    $loader = new StudentLoader(); //see about fitting all the upcoming logic into the loader student directly.

    //var_dump($loader->fetchSingle(1));

    //TODO: Implement render() method.
    if (!isset($_GET['id']))
    {
        //go to student overview page
        $data = $loader->fetchall();  //fetch ALL rows
        require 'View/studentsOverview.php';
    }
    else
    {
        $data = $loader->fetchSingle((int)$GET['id']);
        if (!isset($_GET['edit']))
        {
            //go to student detail page
            $data = $loader->fetchSingle((int)$GET['id']);
            require 'View/studentsDetailView.php';
        }
        else
        {
            //go to student edit page
            $data = $loader->fetchSingle((int)$GET['id']);
            require 'View/studentsEditView.php';
        }
    }

}
}