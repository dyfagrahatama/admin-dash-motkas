<?php

namespace App\Http\Livewire\Peminjam;

use App\Models\Motor as ModelsMotor;
use App\Models\DetailPeminjaman;
use App\Models\Kategori;
use App\Models\Peminjaman;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Motor extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    protected $listeners = ['pilihKategori', 'semuaKategori'];

    public $kategori_id, $pilih_kategori, $motor_id, $detail_motor, $search;

    public function pilihKategori($id)
    {
        $this->format();
        $this->kategori_id = $id;
        $this->pilih_kategori = true;
        $this->updatingSearch();
    }

    public function semuaKategori()
    {
        $this->format();
        $this->pilih_kategori = false;
        $this->updatingSearch();
    }

    public function detailMotor($id)
    {
        $this->format();
        $this->detail_motor = true;
        $this->motor_id = $id;
    }

    public function keranjang(ModelsMotor $motor)
    {
        // user harus login
        if (auth()->user()) {
            
            // role peminjam
            if (auth()->user()->hasRole('peminjam')) {
               
                $peminjaman_lama = DB::table('peminjaman')
                    ->join('detail_peminjaman', 'peminjaman.id', '=', 'detail_peminjaman.peminjaman_id')
                    ->where('peminjam_id', auth()->user()->id)
                    ->where('status', '!=', 3)
                    ->get();

                // jumlah maksimal 2
                if ($peminjaman_lama->count() == 2) {
                    session()->flash('gagal', 'Motor yang dipinjam maksimal 2');
                } else {

                    // peminjaman belum ada isinya
                    if ($peminjaman_lama->count() == 0) {
                        $peminjaman_baru = Peminjaman::create([
                            'kode_pinjam' => random_int(100000000, 999999999),
                            'peminjam_id' => auth()->user()->id,
                            'status' => 0
                        ]);

                        DetailPeminjaman::create([
                            'peminjaman_id' => $peminjaman_baru->id,
                            'motor_id' => $motor->id
                        ]);

                        $this->emit('tambahKeranjang');
                        session()->flash('sukses', 'Motor berhasil ditambahkan ke dalam keranjang');
                    } else {

                        // motor tidak boleh sama
                        if ($peminjaman_lama[0]->motor_id == $motor->id) {
                            session()->flash('gagal', 'Motor tidak boleh sama');
                        } else {

                            DetailPeminjaman::create([
                                'peminjaman_id' => $peminjaman_lama[0]->peminjaman_id,
                                'motor_id' => $motor->id
                            ]);

                            $this->emit('tambahKeranjang');
                            session()->flash('sukses', 'Motor berhasil ditambahkan ke dalam keranjang');
                        }

                    }

                }

            } else {
                session()->flash('gagal', 'Role user anda bukan peminjam');
            }

        } else {
            session()->flash('gagal', 'Anda harus login terlebih dahulu');
            redirect('/login');
        }
        
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->pilih_kategori) {
            if ($this->search) {
                $motor = ModelsMotor::latest()->where('judul', 'like', '%'. $this->search .'%')->where('kategori_id', $this->kategori_id)->paginate(12);
            } else {
                $motor = ModelsMotor::latest()->where('kategori_id', $this->kategori_id)->paginate(12);
            }
            $title = Kategori::find($this->kategori_id)->nama;
        }elseif ($this->detail_motor) {
            $motor = ModelsMotor::find($this->motor_id);
            $title = 'Detail Motor';
        } else {
            if ($this->search) {
                $motor = ModelsMotor::latest()->where('judul', 'like', '%'. $this->search .'%')->paginate(12);
            } else {
                $motor = ModelsMotor::latest()->paginate(12);
            }
            $title = 'Semua Motor';
        }
        
        return view('livewire.peminjam.motor', compact('motor', 'title'));
    }

    public function format()
    {
        $this->detail_motor = false;
        $this->pilih_kategori = false;
        unset($this->motor_id);
        unset($this->kategori_id);
    }
}
