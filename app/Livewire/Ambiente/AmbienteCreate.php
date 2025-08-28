<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{
    public $nome;
    public $descricao;
    public $status;

    protected $rules = [
        'nome'=> 'required|max:255|min:1',
        'descricao' => 'required|max:255|min:1',
        'status' => 'required'
    ];

    protected $messages = [
        'nome.required' => 'o nomé um campo obrigatorio',
        'nome.max' => 'o campo tem um maximo de 255 caracteres',
        'nome.min' => 'o campo tem um minimo de 1 caracteres',
        
        'descricao.required' => 'o campo descrição é obrigatorio',
        'descricao.max' => 'o campo descricao tem um maximo de 255 caracteres',
        'descricao.min' => 'o campo descricao tem um minimo de 1 caracteres',

        'status.required' => 'o campo status deve ser obrigatorio'
    ];

    public function store()
    {

        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this -> status
        ]);
        session()->flash('message', 'Cadastro de ambiente Realizado');
        return $this->redirect(route('Ambiente.index'));
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-create');
    }
}
