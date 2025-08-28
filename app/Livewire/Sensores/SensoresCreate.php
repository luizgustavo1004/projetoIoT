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


    protected $rules = [
        'descricao' => 'required|max:255',
        'ambiente' => 'required',
        'codigo' => 'unique:sensors,codigo',
        'tipo' => 'required|max:255',
        'status' => 'required'
    ];

    protected $messages = [
        'descricao.required' => 'a descrição é obrigatoria',
        'descricao.max' => 'a descrição tem um limite de 255 caracteres',
        
        'ambiente.required' => 'esqueceu de selecionar o ambiente ID',

        'codigo.unique' => 'O codigo nao pode ser o mesmo',
        
        'tipo.required' => 'É obrigatorio voce informar o tipo do sensor',
        'tipo.max' => 'O tipo do sensor tem um maximo de 255 caracteres',

        'status.required' => 'o status do seu sensor é obrigatorio'
    ];


    public function store()
    {
        if ($this->ambiente == null) {
            Session()->flash('error', 'Nao foi possivel encontrar o Id');
        
        }

        $this->validate();

        Sensor::create([
            'descricao' => $this->descricao,
            'ambiente_id' => $this->ambiente,
            'codigo' => $this->codigo,
            'tipo' => $this->tipo,
            'status' => $this->status
        ]);

        Session()->flash('message', 'Cadastro Realizado');
        return redirect()->route('Sensor.List');
    }

    public function render()
    {

        $ambientes = Ambiente::all();
        return view('livewire.sensores.sensores-create', compact('ambientes'));
    }
}
