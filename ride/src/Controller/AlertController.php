<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Datasource\ConnectionManager;
use Cake\Mailer\MailerAwareTrait;

/**
 * Alert Controller
 *
 * @property \App\Model\Table\AlertTable $Alert
 *
 * @method \App\Model\Entity\Alert[] paginate($object = null, array $settings = [])
 */
class AlertController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $alert = $this->paginate($this->Alert);

        $this->set(compact('alert'));
        $this->set('_serialize', ['alert']);
    }
    public function sample()
    {
        $email = $_POST['email'];
        $id = $_POST['bid'];
        echo $email;
        echo $id;
        $conn = ConnectionManager::get('default');
        $amount = $conn->execute("select * from alert where id = '{$id}'");
        $to = $amount->fetchAll('assoc');
        $sp = $to[0]['start_place'];
        $ep = $to[0]['end_place'];
        $tot = $to[0]['amount'];
        $res = $conn->execute("select * from cccollection1 where email = '{$email}'");
        $booking = $res->fetchAll('assoc');
        $total = $booking[0]['total_amount']+$tot;
        $resu = $conn->execute("update cccollection1 set total_amount='{$total}' where email='{$email}';");

        $res1 = $conn->execute("select * from cccollection2 where email = '{$email}'");
        $booking1 = $res1->fetchAll('assoc');
        $total1 = $booking1[0]['total_amount']+$tot;
        $resu1 = $conn->execute("update cccollection2 set total_amount='{$total1}' where email='{$email}';");

        $res2 = $conn->execute("insert into history(booking_number,email,start_place,end_place,amount) values('$id','$email','$sp','$ep','$tot')");
        $res3 = $conn->execute("update alert set status='Assigned' where id='{$id}'");
        

        $this->getMailer('Users')->send('email', [$email,$id]);
        return $this->redirect(['action' => 'index']);
        die();
        
    }
    public function assign()
    {
        if( $this->request->is('ajax') ) {
            $bid = $this->request->data('value');
            //echo $bid;
            $conn = ConnectionManager::get('default');
            $count = $conn->execute("select Count(*) as value from status");
            $result = $count->fetchAll('assoc');
            $count1 = $result[0]['value'];
            $res = $conn->execute("select * from status");
            $booking = $res->fetchAll('assoc');
            $i=0;
            //echo "<form action = 'alert/sample' method='post'>";
            while ( $i < $count1) {
                # code...
                ?>
                    <style>
                                    table {
                        font-family: arial, sans-serif;
                        border-collapse: collapse;
                        width: 100%;
                    }

                    td, th {
                        border: 0px solid #dddddd;
                        text-align: left;
                        padding: 8px;
                    }

                    tr:nth-child(even) {
                        background-color: #dddddd;
                    }
                    </style>
                 <form action="alert/sample" method="POST">
                    <table>
                <tr>
                <td><?php $id = $booking[$i]['id']; echo $id; ?></td>
                <td><?php echo $booking[$i]['email'] ?></td>
                <td><?php echo $booking[$i]['now_place'] ?></td>
                <td><?php echo $booking[$i]['total_count'] ?></td>
                <td><?php echo $booking[$i]['taxi_number'] ?></td>
                <td><?php echo $booking[$i]['taxi_status'] ?></td>
                <td><?php echo $booking[$i]['driver_status'] ?></td>
                <td><?php echo $booking[$i]['travel_status'] ?></td>
                <td class="actions">
                    <input type="hidden" name="bid" value="<?= $bid ?>">
                    <input type="hidden" name="email" value="<?= $booking[$i]['email'] ?>">
                    <input type="submit" class="btn btn-danger1" value="Assign">
                </td>
            </tr>
            </table>
            </form>
            <?php
            $i=$i+1; 
            }
            //echo "</form>";
            die();
        }
        
        
    }

    /**
     * View method
     *
     * @param string|null $id Alert id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    /*public function view($id = null)
    {
        $alert = $this->Alert->get($id, [
            'contain' => []
        ]);

        $this->set('alert', $alert);
        $this->set('_serialize', ['alert']);
    }

    */
    public function view($id = null)
    {
        $alert = $this->Alert->get($id, [
            'contain' => []
        ]);

        $this->set('alert', $alert);
        $this->set('_serialize', ['alert']);
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alert = $this->Alert->newEntity();
        if ($this->request->is('post')) {
            $alert = $this->Alert->patchEntity($alert, $this->request->getData());
            if ($this->Alert->save($alert)) {
                $this->Flash->success(__('The alert has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alert could not be saved. Please, try again.'));
        }
        $this->set(compact('alert'));
        $this->set('_serialize', ['alert']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alert id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alert = $this->Alert->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alert = $this->Alert->patchEntity($alert, $this->request->getData());
            if ($this->Alert->save($alert)) {
                $this->Flash->success(__('The alert has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alert could not be saved. Please, try again.'));
        }
        $this->set(compact('alert'));
        $this->set('_serialize', ['alert']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alert id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alert = $this->Alert->get($id);
        if ($this->Alert->delete($alert)) {
            $this->Flash->success(__('The alert has been deleted.'));
        } else {
            $this->Flash->error(__('The alert could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    use MailerAwareTrait;
}
