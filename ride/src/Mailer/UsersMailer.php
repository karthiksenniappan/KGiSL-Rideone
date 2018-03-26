<?php
namespace App\Mailer;

use App\Controller\AppController;
use Cake\Mailer\Mailer;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;
use Cake\Mailer\Email;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;
use Cake\Datasource\ConnectionManager;
use Cake\ORM\TableRegistry;

/**
 * Users mailer.
 */
class UsersMailer extends Mailer
{

    /**
     * Mailer's name.
     *
     * @var string
     */
    static public $name = 'Users';

    public function welcome($user){
    	$email = new Email('karthik');
		$email->from(['me@example.com' => 'My Site'])
		->template('karthik', 'users')
    	->emailFormat('html')
    	->to($user->email)
    	->subject(sprintf('Welcome %s',$user->name))
    	->send();
        if($page==null){
            sleep(10);
            echo "Mail Send Successfull!";
            header("Location:http://localhost/ride/");
            exit();
        }
         
    	die('Email Sent!');
    }


    public function email($driver,$id,$page=null){
        $conn = ConnectionManager::get('default');
        $res = $conn->execute("select * from alert where id = '{$id}'");
        $booking = $res->fetchAll('assoc');
        $mobile = $booking[0]['mobile'];
        $amount = $booking[0]['amount'];
        $sp = $booking[0]['start_place'];
        $ep = $booking[0]['end_place'];
        $msg="hello";
        $email = new Email('karthik');
        $email->from(['me@example.com' => 'My Site'])
        ->template('karthik', 'default')
        ->emailFormat('html')
        ->to($driver)
        ->subject(sprintf('[Mobile: %s ],[Start_place : %s ],[End_place: %s ],[Amount: %s]',$mobile,$sp,$ep,$amount))
        ->send();
        if($page==null){
            sleep(10);
            echo "Mail Send Successfull!";
            header("Location:http://localhost/ride/alert");
            exit();
        }
        die('Email Sent!');
    }
    

}
