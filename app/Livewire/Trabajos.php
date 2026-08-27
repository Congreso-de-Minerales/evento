<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class Trabajos extends Component
{
    use WithFileUploads;

    public $trabajo;
    public $titulo;
    public $autor;
    public $successMessage = '';

    public function rules()
    {
        return [
            'titulo' => 'required|min:5',
            'autor' => 'required|min:3',
            'trabajo' => 'required|file|mimes:pdf,doc,docx|max:5120', // 5MB Max
        ];
    }

    public function submit()
    {
        $this->validate();

        // Almacenar el archivo en storage/app/trabajos
        $path = $this->trabajo->store('trabajos');

        // Aquí podrías guardar la información en la base de datos
        // Trabajo::create([...])

        $this->successMessage = '¡Tu trabajo se ha subido correctamente!';
        
        $this->reset(['titulo', 'autor', 'trabajo']);
    }

    public function render()
    {
        return view('livewire.trabajos');
    }
}
