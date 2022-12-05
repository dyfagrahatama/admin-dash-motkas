<?php

namespace App\Http\Livewire\Petugas;

use App\Models\Motor as ModelsMotor;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\Rak;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class Motor extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    use WithFileUploads;

    public $create, $edit, $delete, $show;
    public $kategori, $rak, $penerbit;
    public $kategori_id, $rak_id, $penerbit_id, $baris;
    public $judul, $stok, $produktor, $sampul, $motor_id, $search;

    protected $rules = [
        'judul' => 'required',
        'produktor' => 'required',
        'stok' => 'required|numeric|min:1',
        'sampul' => 'required|image|max:1024',
        'kategori_id' => 'required|numeric|min:1',
        'rak_id' => 'required|numeric|min:1',
        'penerbit_id' => 'required|numeric|min:1',
    ];

    protected $validationAttributes = [
        'kategori_id' => 'kategori',
        'rak_id' => 'rak',
        'penerbit_id' => 'penerbit',
    ];

    public function pilihKategori()
    {
        $this->rak = Rak::where('kategori_id', $this->kategori_id)->get();
    }

    public function create()
    {
        $this->format();

        $this->create = true;
        $this->kategori = Kategori::all();
        $this->penerbit = Penerbit::all();
    }

    public function store()
    {
        $this->validate();

        $this->sampul = $this->sampul->store('motor', 'public');

        ModelsMotor::create([
            'sampul' => $this->sampul,
            'judul' => $this->judul,
            'produktor' => $this->produktor,
            'stok' => $this->stok,
            'kategori_id' => $this->kategori_id,
            'rak_id' => $this->rak_id,
            'penerbit_id' => $this->penerbit_id,
            'slug' => Str::slug($this->judul)
        ]);

        session()->flash('sukses', 'Data berhasil ditambahkan.');
        $this->format();
    }

    public function show(ModelsMotor $motor)
    {
        $this->format();

        $this->show = true;
        $this->judul = $motor->judul;
        $this->sampul = $motor->sampul;
        $this->produktor = $motor->produktor;
        $this->stok = $motor->stok;
        $this->kategori = $motor->kategori->nama;
        $this->penerbit = $motor->penerbit->nama;
        $this->rak = $motor->rak->rak;
        $this->baris = $motor->rak->baris;
    }

    public function edit(ModelsMotor $motor)
    {
        $this->format();

        $this->edit = true;
        $this->motor_id = $motor->id;
        $this->judul = $motor->judul;
        $this->produktor = $motor->produktor;
        $this->stok = $motor->stok;
        $this->kategori_id = $motor->kategori_id;
        $this->rak_id = $motor->rak_id;
        $this->penerbit_id = $motor->penerbit_id;
        $this->kategori = Kategori::all();
        $this->rak = Rak::where('kategori_id', $motor->kategori_id)->get();
        $this->penerbit = Penerbit::all();
    }

    public function update(ModelsMotor $motor)
    {
        $validasi = [
            'judul' => 'required',
            'produktor' => 'required',
            'stok' => 'required|numeric|min:1',
            'kategori_id' => 'required|numeric|min:1',
            'rak_id' => 'required|numeric|min:1',
            'penerbit_id' => 'required|numeric|min:1',
        ];

        if ($this->sampul) {
            $validasi['sampul'] = 'required|image|max:1024';
        }

        $this->validate($validasi);

        if ($this->sampul) {
            Storage::disk('public')->delete($motor->sampul);
            $this->sampul = $this->sampul->store('motor', 'public');
        } else {
            $this->sampul = $motor->sampul;
        }

        $motor->update([
            'sampul' => $this->sampul,
            'judul' => $this->judul,
            'produktor' => $this->produktor,
            'stok' => $this->stok,
            'kategori_id' => $this->kategori_id,
            'rak_id' => $this->rak_id,
            'penerbit_id' => $this->penerbit_id,
            'slug' => Str::slug($this->judul)
        ]);

        session()->flash('sukses', 'Data berhasil diubah.');
        $this->format();
    }

    public function delete(ModelsMotor $motor)
    {
        $this->format();

        $this->delete = true;
        $this->motor_id = $motor->id;
    }

    public function destroy(ModelsMotor $motor)
    {
        Storage::disk('public')->delete($motor->sampul);
        $motor->delete();

        session()->flash('sukses', 'Data berhasil dihapus.');
        $this->format();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search) {
            $motor = ModelsMotor::latest()->where('judul', 'like', '%'. $this->search .'%')->paginate(5);
        } else {
            $motor = ModelsMotor::latest()->paginate(5);
        }
        
        return view('livewire.petugas.motor', compact('motor'));
    }

    public function format()
    {
        unset($this->create);
        unset($this->delete);
        unset($this->edit);
        unset($this->show);
        unset($this->motor_id);
        unset($this->judul);
        unset($this->sampul);
        unset($this->stok);
        unset($this->produktor);
        unset($this->kategori);
        unset($this->penerbit);
        unset($this->rak);
        unset($this->rak_id);
        unset($this->penerbit_id);
        unset($this->kategori_id);
    }
}
