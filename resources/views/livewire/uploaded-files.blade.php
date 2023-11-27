<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
       @foreach ($this->files as $file)
            <div>
                <a href="#" wire:click.prevent="download({{ $file->id }})" class="text-sm font-medium text-indigo-600">{{ $file->file_name }}</a>
            </div>
       @endforeach
    </div>
</div>
