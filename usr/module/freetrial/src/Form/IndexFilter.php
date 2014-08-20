<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14-8-19
 * Time: 下午5:25
 */
namespace Module\Freetrial\Form;

use Zend\InputFilter\InputFilter;

class IndexFilter extends InputFilter
{
    public function __construct()
    {
        $this->add(array(
            'name'          => 'username',
            'options'       => array(
                'label'     => __('姓名*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));

        $this->add(array(
            'name'          => 'work',
            'options'       => array(
                'label'     => __('职务*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));
        $this->add(array(
            'name'          => 'company',
            'options'       => array(
                'label'     => __('公司*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));
        $this->add(array(
            'name'          => 'comp_mail',
            'options'       => array(
                'label'     => __('企业邮箱*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));
        $this->add(array(
            'name'          => 'phonenum',
            'options'       => array(
                'label'     => __('电话*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));
        $this->add(array(
            'name'          => 'submit',
            'attributes'    => array(
                'value'     => __('免费试用'),
                'type'          => 'submit',
            ),

        ));
    }
}