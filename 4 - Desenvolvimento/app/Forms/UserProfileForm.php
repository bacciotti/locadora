<?php
namespace App\Forms;
use Kris\LaravelFormBuilder\Form;
class UserProfileForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('address', 'text', [
                'label' => 'Endereço',
                'rules' => 'required|max:255'
            ])
            ->add('gender', 'select', [
                'label' => 'Gênero',
                'choices' => ['m' => 'Masculino', 'f' => 'Feminino'],
                'selected' => 'm'
            ])
            ->add('birth_date', 'date', [
                'label' => 'Data de Nascimento',
                'rules' => 'required|max:255'
            ])
            ->add('cpf', 'text', [
                'label' => 'CPF',
                'rules' => 'required|max:255'
            ])
            ->add('work_place', 'text', [
                'label' => 'Local de Trabalho',
                'rules' => 'required|max:255'
            ])
            ->add('home_phone', 'text', [
                'label' => 'Telefone Casa',
                'rules' => 'required|max:255'
            ])
            ->add('work_phone', 'text', [
                'label' => 'Telefone Trabalho',
                'rules' => 'required|max:255'
            ])
            ->add('mobile_phone', 'text', [
            'label' => 'Telefone Celular',
            'rules' => 'required|max:255'
    ]);

    }
}
