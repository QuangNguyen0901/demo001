<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\Table;
use Cake\ORM\TableRegistry;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class UsersController extends AppController
{
    public function usersList()
    {
        $userTable = TableRegistry::get('Users');
        $users = $userTable->read_all_users();
        $this->set('users', $users);
    }

    public function userDetail($user_id)
    {
        //user_id = $this->request->getQuery('user_id');
        $userTable = TableRegistry::get('Users');
        $user = $userTable->read_detail_user($user_id);
        // debug($user);die;
        $this->set('user', $user);
//        pr($user->toArray());die;
    }

    public function userDelete($user_id)
    {
        $userTable = TableRegistry::get('Users'); // = $this->>users (cakephp2)
        $u_id = $this->Users->get($user_id);
        if ($this->Users->delete($u_id)) {
            $this->redirect('users/users-list');
        } else {
            $this->redirect($this->here);
        }
    }

    public function userEdit($user_id, $page)
    {
//        $userTable = TableRegistry::get('Users');
//        $user = $userTable->get($user_id);
//        $user->username = "ahehehehe";
//        $userTable->save($user);
//        if($page ==1) {
//            return $this->redirect('users/users-list');
//        }elseif($page ==2){
//            return $this->redirect(['controller' => 'users', 'action' => 'userDetail', $user->user_id]);
//        }
        if ($this->request->is('post')) {
            if ($this->Users->save($this->data)) {
                $this->Session->setFlash('User successfully saved.');
                $this->redirect(array('action' => 'index'));
            }
        } else {
            $this->data = $this->Users->findById($user_id);
        }
    }
}