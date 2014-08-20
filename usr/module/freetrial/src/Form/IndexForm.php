<?php
/**
 * Pi Engine (http://pialog.org/)
 *
 * @link      http://code.pialog.org for the Pi Engine source repository
 * @copyright Copyright (c) Pi Engine (http://pialog.org/)
 */
namespace Module\Freetrial\Form;

use Pi\Form\Form as BaseForm;

class IndexForm extends BaseForm
{
    public function init()
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
            ),
            'type'          => 'submit',
        ));



    }

}
