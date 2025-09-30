<?php

namespace App\Livewire\Sensores;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensoresEdit extends Component
{

    public $sensorId;
     public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $ambiente;


    protected $rules = [
        'descricao' => 'max:255',
        'tipo' => 'max:255',
    ];

    protected $messages = [
        'descricao.max' => 'a descrição tem um limite de 255 caracteres',
    
        'tipo.max' => 'O tipo do sensor tem um maximo de 255 caracteres',
    ];

      public function mount($id)
    {
        $sensor = Sensor::find($id);
        
        if ($sensor == null) {
            Session()->flash('error', 'Nao foi possivel encontrar o Id');
            return redirect()->route('Sensor.List');
        }  else{
            $this->sensorId = $sensor->id;
            $this->ambiente = $sensor->ambiente_id;
            $this->descricao = $sensor->descricao;
            $this->codigo = $sensor->codigo;
            $this->tipo = $sensor->tipo;
            $this->status = $sensor->status;
        }

    }



        public function save(){

            $sensor = Sensor::find($this->sensorId);

            $this->validate();
        
            $sensor->ambiente_id = $this->ambiente;
            $sensor ->descricao = $this->descricao;
            $sensor ->codigo = $this->codigo;
            $sensor ->tipo = $this->tipo;
            $sensor ->status = $this->status;
            $sensor->save();

            session()->flash('message', 'Sensor Atualizado com sucesso!');
            return redirect()->route('Sensor.List');

        }



    
    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.sensores.sensores-edit', compact('ambientes'));
    }
}
