<div class="container">
    <?php echo $__env->make('admin-lte/flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">
        <div class="col-md-8 mb-3">
            <h1><?php echo e($title); ?></h1>
        </div>
        <?php if(!$detail_buku): ?>
            <div class="col-md-4">
              <label class="sr-only" for="inlineFormInputGroup">Username</label>
                <div class="input-group mb-2">
                  <input wire:model="search" type="text" class="form-control" id="inlineFormInputGroup" placeholder="Cari Buku">
                  <div class="input-group-prepend">
                    <button class="input-group-text">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <?php if($detail_buku): ?>
        
        <div class="row">
            <div class="col-md-4">
                <img src="/storage/<?php echo e($buku->sampul); ?>" alt="<?php echo e($buku->judul); ?>" width="300" height="400">
            </div>
            <div class="col-md-8">
                 <table class="table">
                  <tbody>
                    <tr>
                      <th>Judul</th>
                      <td>:</td>
                      <td><?php echo e($buku->judul); ?></td>
                    </tr>
                    <tr>
                      <th>Penulis</th>
                      <td>:</td>
                      <td><?php echo e($buku->penulis); ?></td>
                    </tr>
                    <tr>
                      <th>Kategori</th>
                      <td>:</td>
                      <td><?php echo e($buku->kategori->nama); ?></td>
                    </tr>
                    <tr>
                      <th>Penerbit</th>
                      <td>:</td>
                      <td><?php echo e($buku->penerbit->nama); ?></td>
                    </tr>
                    <tr>
                      <th>Rak</th>
                      <td>:</td>
                      <td><?php echo e($buku->rak->rak); ?></td>
                    </tr>
                    <tr>
                      <th>Baris</th>
                      <td>:</td>
                      <td><?php echo e($buku->rak->baris); ?></td>
                    </tr>
                    <tr>
                      <th>Stok</th>
                      <td>:</td>
                      <td><?php echo e($buku->stok); ?></td>
                    </tr>
                  </tbody>
                </table>

                <button wire:click="keranjang(<?php echo e($buku->id); ?>)" class="btn btn-success">Keranjang</button>
            </div>
        </div>

    <?php else: ?>
    
        <?php if($buku->isNotEmpty()): ?>
    
            <div class="row">
                <?php $__currentLoopData = $buku; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div wire:click="detailBuku(<?php echo e($item->id); ?>)" class="card mb-4 shadow" style="cursor: pointer">
                        <img src="/storage/<?php echo e($item->sampul); ?>" class="card-img-top" alt="<?php echo e($item->judul); ?>" width="200" height="300">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo e($item->judul); ?></strong></h5>
                            <p class="card-text"><?php echo e($item->penulis); ?></p>
                        </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="row justify-content-center">
                <?php echo e($buku->links()); ?>

            </div>

        <?php else: ?>

            <div class="alert alert-danger">
                Data tidak ada
            </div>
        <?php endif; ?>

    <?php endif; ?>
    
</div><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/livewire/peminjam/buku.blade.php ENDPATH**/ ?>