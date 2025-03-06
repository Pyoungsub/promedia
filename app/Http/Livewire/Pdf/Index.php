<?php

namespace App\Http\Livewire\Pdf;

use Livewire\Component;
use App\Models\Pdf;
use Spatie\PdfToImage\Pdf as PdfToImage;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
class Index extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $selected_date;

    public $uploadPdfModal;
    public $date;
    public $file;
    public function addPDF()
    {
        $this->uploadPdfModal = true;
    }
    public function save()
    {
        $validated = $this->validate([ 
            'date' => 'required|date_format:Y-m',
            'file' => 'required|mimes:pdf',
        ]);
        // Store the uploaded PDF
        $path = $this->file->storePublicly('pdf', ['disk' => 'public']);
        // Generate preview image
        $pdfPath = Storage::disk('public')->path($path);
        $pdf = new PdfToImage($pdfPath);
        $previewPath = 'previews/' . pathinfo($path, PATHINFO_FILENAME) . '.jpg';
        $previewFullPath = Storage::disk('public')->path($previewPath);
        // Ensure the previews directory exists
        if (!Storage::disk('public')->exists('previews')) {
            Storage::disk('public')->makeDirectory('previews');
        }
        $pdf->saveImage($previewFullPath);
        auth()->user()->admin->pdfs()->firstOrCreate(['date' => \Carbon\Carbon::createFromFormat('Y-m', $this->date)->startOfMonth(), 'file_path' => $path, 'preview_file_path' => $previewPath]);
        $this->reset(['uploadPdfModal', 'date', 'file']);
    }
    public function delPDF($id)
    {
        $pdf = Pdf::find($id);
        Storage::delete('public/'.$pdf->file_path);
        Storage::delete('public/'.$pdf->preview_file_path);
        $pdf->delete();
    }
    public function updatedSelectedDate()
    {
        $this->resetPage();
    }
    public function render()
    {
        $selected_date = $this->selected_date;
        $pdfs = Pdf::when($selected_date, function ($query, $selected_date) {
            $selected_date = \Carbon\Carbon::createFromFormat('Y-m', $selected_date)->startOfMonth();
            return $query->where('date', $selected_date);
        })
        ->orderBy('date', 'desc')
        ->paginate(10);
        return view('livewire.pdf.index', ['pdfs' => $pdfs]);
    }
}
