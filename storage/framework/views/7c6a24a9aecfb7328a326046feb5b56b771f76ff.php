  <?php if($edit): ?>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Kategori</label>
                    <input wire:model="nama" type="text" class="form-control" id="nama" name="nama">
                    <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <span wire:click="update(<?php echo e($kategori_id); ?>)" class="btn btn-sm btn-success">Update</span>
            </div>
        </div>
    <?php endif; ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/petugas/kategori/edit.blade.php ENDPATH**/ ?>