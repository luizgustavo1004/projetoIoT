<?php

namespace App\Livewire\Sensores;

use App\Models\Sensor;
use Livewire\Component;

class SensoresEdit extends Component
{

    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $ambiente;

      public function mount($id)
    {
        $ambiente = Ambiente::find($id);
        
        if($ambiente == null){
            session()->flash('error', 'Id do Ambiente nao encontrado');
        }  else{
            $this->AmbienteId = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
        }

    public function mount($id)
    {
        $sensor  = Sensor
    }

    public function render()
    {
        return view('livewire.sensores.sensores-edit');
    }
}
