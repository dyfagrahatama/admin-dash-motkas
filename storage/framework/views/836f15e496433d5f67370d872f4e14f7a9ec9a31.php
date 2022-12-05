<div class="container">
    <?php echo $__env->make('admin-lte/flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="row">
        <div class="col-md-8 mb-3">
            <h1><?php echo e($title); ?></h1>
        </div>
        <?php if(!$detail_motor): ?>
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
        <?php endif; ?>
    </div>

    <?php if($detail_motor): ?>
        
        <div class="row">
            <div class="col-md-4">
                <img src="https://s3-ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2019/08/21165011/Cara-Merawat-Motor-Klasik-dengan-Mudah-dan-Murah.jpg
" alt="<?php echo e($motor->judul); ?>" width="300" height="400">
            </div>
            <div class="col-md-8">
                 <table class="table">
                  <tbody>
                    <tr>
                      <th>Judul</th>
                      <td>:</td>
                      <td><?php echo e($motor->judul); ?></td>
                    </tr>
                    <tr>
                      <th>Produktor</th>
                      <td>:</td>
                      <td><?php echo e($motor->produktor); ?></td>
                    </tr>
                    <tr>
                      <th>Kategori</th>
                      <td>:</td>
                      <td><?php echo e($motor->kategori->nama); ?></td>
                    </tr>
                    <tr>
                      <th>Penerbit</th>
                      <td>:</td>
                      <td><?php echo e($motor->penerbit->nama); ?></td>
                    </tr>
                    <tr>
                      <th>Rak</th>
                      <td>:</td>
                      <td><?php echo e($motor->rak->rak); ?></td>
                    </tr>
                    <tr>
                      <th>Baris</th>
                      <td>:</td>
                      <td><?php echo e($motor->rak->baris); ?></td>
                    </tr>
                    <tr>
                      <th>Stok</th>
                      <td>:</td>
                      <td><?php echo e($motor->stok); ?></td>
                    </tr>
                  </tbody>
                </table>

                <button wire:click="keranjang(<?php echo e($motor->id); ?>)" class="btn btn-success">Keranjang</button>
            </div>
        </div>

    <?php else: ?>
    
        <?php if($motor->isNotEmpty()): ?>
    
            <div class="row">
                <?php $__currentLoopData = $motor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div wire:click="detailMotor(<?php echo e($item->id); ?>)" class="card mb-4 shadow" style="cursor: pointer">
                        <img src="https://s3-ap-southeast-1.amazonaws.com/moladin.assets/blog/wp-content/uploads/2019/08/21165011/Cara-Merawat-Motor-Klasik-dengan-Mudah-dan-Murah.jpg
" class="card-img-top" alt="<?php echo e($item->judul); ?>" width="200" height="300">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo e($item->judul); ?></strong></h5>
                            <p class="card-text"><?php echo e($item->produktor); ?></p>
                        </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="row justify-content-center">
                <?php echo e($motor->links()); ?>

            </div>

        <?php else: ?>

            <div class="alert alert-danger">
                Data tidak ada
            </div>
        <?php endif; ?>

    <?php endif; ?>
    
</div><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/livewire/peminjam/motor.blade.php ENDPATH**/ ?>