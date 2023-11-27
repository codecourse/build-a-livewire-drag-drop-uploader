<?php

namespace App\Http\Livewire;

use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class UploadedFiles extends Component
{
    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function getFilesProperty()
    {
        return File::latest()->get();
    }

    public function download($id)
    {
        return Storage::download(File::findOrFail($id)->file_path);
    }

    public function render()
    {
        return view('livewire.uploaded-files');
    }
}
