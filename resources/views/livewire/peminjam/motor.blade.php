<div class="container">
    @include('admin-lte/flash')

    <div class="row">
        <div class="col-md-8 mb-3">
            <h1>{{$title}}</h1>
        </div>
        @if (!$detail_motor)
            <div class="col-md-4">
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group mb-2">
                  <input wire:model="search" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari Motor">
                  <div class="input-group-prepend">
                    <button class="input-group-text">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
            </div>
        @endif
    </div>

    @if ($detail_motor)
        
        <div class="row">
            <div class="col-md-4">
                <img src="https://s3-ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2019/08/21165011/Cara-Merawat-Motor-Klasik-dengan-Mudah-dan-Murah.jpg
" alt="{{$motor->judul}}" width="300" height="400">
            </div>
            <div class="col-md-8">
                 <table class="table">
                  <tbody>
                    <tr>
                      <th>Judul</th>
                      <td>:</td>
                      <td>{{$motor->judul}}</td>
                    </tr>
                    <tr>
                      <th>Produktor</th>
                      <td>:</td>
                      <td>{{$motor->produktor}}</td>
                    </tr>
                    <tr>
                      <th>Kategori</th>
                      <td>:</td>
                      <td>{{$motor->kategori->nama}}</td>
                    </tr>
                    <tr>
                      <th>Penerbit</th>
                      <td>:</td>
                      <td>{{$motor->penerbit->nama}}</td>
                    </tr>
                    <tr>
                      <th>Rak</th>
                      <td>:</td>
                      <td>{{$motor->rak->rak}}</td>
                    </tr>
                    <tr>
                      <th>Baris</th>
                      <td>:</td>
                      <td>{{$motor->rak->baris}}</td>
                    </tr>
                    <tr>
                      <th>Stok</th>
                      <td>:</td>
                      <td>{{$motor->stok}}</td>
                    </tr>
                  </tbody>
                </table>

                <button wire:click="keranjang({{$motor->id}})" class="btn btn-success">Keranjang</button>
            </div>
        </div>

    @else
    
        @if ($motor->isNotEmpty())
    
            <div class="row">
                @foreach ($motor as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div wire:click="detailMotor({{$item->id}})" class="card mb-4 shadow" style="cursor: pointer">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2019/08/21165011/Cara-Merawat-Motor-Klasik-dengan-Mudah-dan-Murah.jpg
" class="card-img-top" alt="{{$item->judul}}" width="200" height="300">
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{$item->judul}}</strong></h5>
                            <p class="card-text">{{$item->produktor}}</p>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row justify-content-center">
                {{$motor->links()}}
            </div>

        @else

            <div class="alert alert-danger">
                Data tidak ada
            </div>
        @endif

    @endif
    
</div>