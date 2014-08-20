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
                'label'     => __('name*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));

        $this->add(array(
            'name'          => 'work',
            'options'       => array(
                'label'     => __('title*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));
        $this->add(array(
            'name'          => 'company',
            'options'       => array(
                'label'     => __('company*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));
        $this->add(array(
            'name'          => 'comp_mail',
            'options'       => array(
                'label'     => __('email*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));
        $this->add(array(
            'name'          => 'phonenum',
            'options'       => array(
                'label'     => __('phone*'),
            ),
            'attributes'    => array(

                'type'      => 'text',
            ),
        ));
        $this->add(array(
            'name'          => 'submit',
            'attributes'    => array(
                'value'     => __('freetrial'),
                'type'          => 'submit',
            ),

        ));
    }
}
