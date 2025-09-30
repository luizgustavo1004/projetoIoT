<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{

    public $AmbienteId;
    public $nome;
    public $descricao;
    public $status;

     protected $rules = [
        'nome'=> 'max:255',
        'descricao' => 'max:255',
        
    ];

    protected $messages = [
        'nome.max' => 'o campo tem um maximo de 255 caracteres',
        'descricao.max' => 'o campo descricao tem um maximo de 255 caracteres',
    ];


    public function mount($id)
    {
        $ambiente = Ambiente::find($id);
        
        if($ambiente == null){
            session()->flash('error', 'Id do Ambiente nao encontrado');
            return $this->redirect(route('Ambiente.index'));

        }  else{
            $this->AmbienteId = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
        }
        
        
    }


    public function save()
    {
        $ambiente = Ambiente::find($this->AmbienteId);


        $ambiente->nome = $this->nome;
        $ambiente->descricao = $this->descricao;
        $ambiente->status = $this->status;
        $ambiente->save();

        return $this->redirect(route('Ambiente.index'));
        session()->flash('message', 'ambiente atualizado com sucesso!');
    }

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
