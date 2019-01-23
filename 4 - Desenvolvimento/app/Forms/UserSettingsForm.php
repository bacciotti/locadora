<?php

namespace App\Forms;

use App\Models\User;
use Kris\LaravelFormBuilder\Form;

class UserSettingsForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('password', 'password' , [
                'rules' => 'required|min:6|max:16|confirmed',
                'label' => 'Senha'
            ])
            ->add('password_confirmation', 'password', [
                'label' => 'Confirmação de Senhaa'
            ]);
    }
}
