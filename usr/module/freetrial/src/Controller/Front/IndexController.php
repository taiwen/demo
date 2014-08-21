<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14-8-19
 * Time: 下午5:24
 */

namespace Module\Freetrial\Controller\Front;
use Pi\Mvc\Controller\ActionController;
use Module\Freetrial\Form\IndexForm;
use Module\Freetrial\Form\IndexFilter;
use Pi;
class IndexController extends ActionController
{


    protected function renderForm()
    {
        $form = new IndexForm('index');
        $form->setAttribute('action', $this->url('', array('action' => 'index')));

        return $form;
    }


    public function indexAction()
    {
        Pi::service('i18n')->loadModule('form');



        $form = $this->renderForm();

        if ($this->request->isPost()) {
            $post = $this->request->getPost();
            $form->setData($post);
            $form->setInputFilter(new IndexFilter);
            if (!$form->isValid()) {
                $this->view()->assign('form', $form);
                return ;
            }
            $data  = $form->getData();
            $columns = array('username', 'work', 'company', 'comp_mail','phonenum');
            foreach (array_keys($data) as $key) {
                if (!in_array($key, $columns)) {
                    unset($data[$key]);
                }
            }

            $row = $this->getModel('freetrial')->createRow($data);
            $row->save();
         /*   if (!$row->id) {
                $this->view()->assign('form', $form);
                $this->view()->assign('error', __('Failed insert user data!'));
                return ;
            }*/
            $module = $this->getModule();
          //  Pi::service('registry')->handler('user', $module)->clear($module);


            // $this->view()->setTemplate('register-success');
            $this->view()->setTemplate(false);
            $this->view()->assign('content', __('成功试用!'));
            $this->view()->assign('info', $data);
            return ;

        }
        $this->view()->assign('form', $form);
       // $this->view()->assign('title', __('Contact us'));
    }
}