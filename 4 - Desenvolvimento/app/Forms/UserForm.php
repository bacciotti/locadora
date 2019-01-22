<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class UserForm extends Form
{
    public function buildForm()
    {
        $id = $this->getData('id');
        $this
            ->add('name', 'text', [
                'label' => 'Nome' ,
                'rules' => 'required|max:255'
            ])
            ->add('email', 'email', [
                'label' => 'E-mail',
                'rules' => "required|max:255|unique:users,email,{$id}"
            ])
            ->add('send_mail', 'checkbox', [
                'label' => 'Enviar e-mail de criação de conta.',
                'value' => true,
                'checked' => false
            ]);

    }
}
