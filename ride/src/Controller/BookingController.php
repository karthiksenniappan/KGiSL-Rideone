<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;

class BookingController extends AppController
{
	

    public function index(){
   
    }

    public function view(){

    }
    public function cancel($id = null){
        $conn = ConnectionManager::get('default');
        $res = $conn->execute("update alert set status = 'cancelled' where id = '{$id}'");
        $this->Flash->success(__('Booking cancelled successful'));
        return $this->redirect(['controller'=>'Booking','action' => 'view']);
    }
     public function sample(){
         $mobile = $_POST['mobile'];
         $car = $_POST['car'];
         $usermail = $_POST['usermail'];
         $model = $_POST['model'];
         $tariff = $_POST['tariff'];
         $distance = $_POST['distance'];
         $amount = $_POST['amount'];
         $night = $_POST['night'];
         $start_place = $_POST['start_place'];
         $end_place = $_POST['end_place'];
         $status = "Not assign";


        $conn = ConnectionManager::get('default');
        $res = $conn->execute("insert into alert(useremail,mobile,car,model,tariff,distance,amount,night,start_place,end_place,status)
                                values('{$usermail}','{$mobile}','{$car}','{$model}','{$tariff}','{$distance}','{$amount}','{$night}','{$start_place}','{$end_place}','{$status}')");
        if($res){
            $this->Flash->success(__('The history has been saved.'));

            return $this->redirect(['action' => 'view']);
        }


        //$mobile = mysql_real_escape_string($_POST['mobile']);
        //echo "$mobile";
        exit();
        
        $this->set(compact('booking'));
        $this->set('_serialize', ['booking']);
   
    }
    public function confirmed(){


    	if( $this->request->is('ajax') ) {

            $Distance = explode('mi',$this->request->data('Distance'));
            $km = $Distance[0]*1.60934;
            $carmodel = $this->request->data('carmodel');
            $model = $this->request->data('model');
            $Tariff = $this->request->data('Tariff');
            $usermail = $this->request->session()->read('Auth.User.email');

        $conn = ConnectionManager::get('default');
        $res = $conn->execute("select * from tariff where car_model = '{$carmodel}' AND categories='{$model}' AND tariff_type='{$Tariff}'");
        $booking = $res->fetchAll('assoc');



        echo "<form action = 'booking/sample' method='post'>";
    	
        echo   "Mobile Number : <input type ='text' readonly name='mobile' value='".$this->request->data('mobile')."'";
        echo "<br>";

        echo   "E-Mail : <input type ='text' readonly name='usermail' value='".$usermail."'";
        echo "<br>";

        echo   "Car Model : <input type ='text' readonly name='car' value='".$carmodel."'";

        //echo   "Car Name : ".$carmodel = $this->request->data('carmodel');
        echo "<br>";

        echo   "Type : <input type ='text' readonly name='model' value='".$model."'";

        //echo   "Type : ".$model = $this->request->data('model');
        echo "<br>";

        echo   "Tariff : <input type ='text' readonly name='tariff' value='".$Tariff."'";
        echo "<br>";

        //echo   "Tariff : ".$Tariff = $this->request->data('Tariff');

        echo   "Distance(Kilometer) : <input type ='text' readonly name='distance' value='".$km."'";
        echo "<br>";

        //echo   "Distance : ".$Distance[0];
        //Amount calculation start
            if($km<=2){
               $amount = $booking[0]['minimum_amount'];
               echo   "Amount : <input type ='text' readonly name='amount' value='".$amount."'";
               echo "<br>";

            }
            if($km>2){
                $amount = $km*$booking[0]['after_extra_amount'];
                echo   "Amount : <input type ='text' readonly name='amount' value='".$amount."'";
                echo "<br>";
               

            }
            $night=$booking[0]['night_amount'];
            
            

            echo   "Night Amount : <input type ='text' readonly name='night' value='".$night."'";

            echo "<br>";

        //Amount calculation end
        echo   "Start Place : <input type ='text' readonly name='start_place' value='".$this->request->data('source')."'";
        echo "<br>";

        //echo   "Start Place : ".$source = $this->request->data('source');

        echo   "Destination Place : <input type ='text' readonly name='end_place' value='".$this->request->data('destination')."'";


        //echo   "Destination Place : ".$destination = $this->request->data('destination');
        echo "<br><input type='submit' class = 'btn btn-primary' ></form>";
        die();
    	
    }

    	//print_r($_POST['mobile']);exit;
    	/*$this->set('mobile','mobile');
    	$this->set('carmodel','carmodel');
    	$this->set('model','model');
    	$this->set('tariff','Tariff');
    	$this->set('source','source');
    	$this->set('destination','destination');
    	$this->set('distance','Distance');
    	$this->render("confirmed");
   */
    }
    
}
