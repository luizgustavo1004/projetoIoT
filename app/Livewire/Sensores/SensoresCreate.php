<?php

namespace App\Livewire\Sensores;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;

class SensoresCreate extends Component
{

    public $codigo;
    public $tipo;
    public $descricao;
    public $status;
    public $ambiente;

    public function store()
    {
        if ($this->ambiente == null) {
            Session()->flash('error', 'Nao foi possivel encontrar o Id');
        }

        Sensor::create([
            'descricao' => $this->descricao,
            'ambiente_id' => $this->ambiente,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'status' => $this->status
        ]);

        Session()->flash('success', 'Cadastro Realizado');
    }

    public function render()
    {

        $ambientes = Ambiente::all();
        return view('livewire.sensores.sensores-create', compact('ambientes'));
    }
}
