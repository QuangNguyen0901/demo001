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
use Cake\Validation\Validator;

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
        $userTable = TableRegistry::get('Users'); //tao 1 đối tượng của model Users
        if ($this->request->is('post')) {
//            pr($_POST['username']);
            $conditions = array();
            if ($_POST['username'] != null) {                                    //khac nhau giua !empty va != null
                $conditions['username like'] = '%' . $_POST['username'] . '%';
            }
            if ($_POST['sex'] != null) {
                $conditions['sex'] = $_POST['sex'];
            }

            $users = $userTable->search_user($conditions);
        } else {
            $users = $userTable->read_all_users();
        }
        $this->set('users', $users);// set giá trị $users cho biến POST users
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
        $userTable = TableRegistry::get('Users'); // = $this->>users (cakephp2),tao 1 đối tượng của model Users
        $u_id = $this->Users->get($user_id);
        if ($this->Users->delete($u_id)) {      // thưc hiện lệnh xóa luôn
            $this->redirect('users/users-list');
        } else {
            $this->redirect($this->here);
        }
    }

    public function userEdit($user_id, $page)
    {

        $userTable = TableRegistry::get('Users');
        $user = $userTable->get($user_id);
        $this->set('user', $user); //gán đối tượng $user cho UsersController
        if ($this->request->is('post')) {
//            pr($_POST);
//            die;
            $this->request->data['User']['user_id'] = $user_id; //gán user_id post lên == user id
            $user = $userTable->patchEntity($user, $this->request->getData('User'));
//            pr($_POST);
//            pr($user);die;
            if ($userTable->save($user)) {
                $this->Flash->success('User successfully saved.');
//                $this->redirect(array('action' => 'usersList'));
                if ($page == 1) {
                    return $this->redirect('users/users-list');
                } elseif ($page == 2) {
                    return $this->redirect(['controller' => 'users', 'action' => 'userDetail', $user->user_id]);
                }
            }
        } else {
            $this->data = $this->Users->findById($user_id);
        }
    }

    public function userAdd()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData()); //do ben view create('User'); co khai bao 1 mang nen ben nay phai get mang do 'user', cung model khong can khai bao cung dc
            if ($this->Users->save($user)) {
                $this->Flash->success('User successfully saved.');
                $this->redirect(array('action' => 'usersList'));
            }
        }
        $this->set('user', $user);
    }

    public function userEdit2()
    {
        $this->layout = false;
        //return $this->redirect('users/user_edit2');
    }

    public function userRegister()
    {
//        $this->layout = false;
//        $this->viewBuilder()->setLayout(false);
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData()); //do ben view create('User'); co khai bao 1 mang nen ben nay phai get mang do 'user', cung model khong can khai bao cung dc
            if ($this->Users->save($user)) {
                $this->Flash->success('User successfully saved.');
                $this->redirect(array('action' => 'usersList'));
            }
        }
        $this->set('user', $user);
//        debug($user);
    }

    public function userLogin()
    {
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }


}