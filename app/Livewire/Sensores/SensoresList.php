<?php

namespace App\Livewire\Sensores;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensoresList extends Component
{

     use WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $search = '';
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15],
    ];

    


    public function render()
    {

         $sensores = Sensor::where('codigo', 'like', "%{$this->search}%")
        ->orWhere('tipo', 'like', "%{$this->search}%")
        ->paginate($this->perPage);

        return view('livewire.sensores.sensores-list', compact('sensores'));
    }
    
    public function delete($id)
    {
        $sensor = Sensor::findOrFail($id);
        Sensor::findOrFail($sensor->id)->delete();
        session()->flash('message', 'Sensor deletado com sucesso.');
    }

   

    public function toggleStatus(Sensor $sensor)
    {
        $sensor->status = !$sensor->status; 
        $sensor->save();

    }

    }



   