 <?php if($delete): ?>
        <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title">Hapus Rak</h4>
                <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </span>
                </div>
                <div class="modal-body">
                <p>Anda yakin ingin mengahapus data ?</p>
                </div>
                <div class="modal-footer justify-content-between">
                <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">Batal</span>
                <span type="button" wire:click="destroy(<?php echo e($rak_id); ?>)" class="btn btn-danger">Hapus</span>
                </div>
            </div>
            </div>
        </div>
    <?php endif; ?><?php /**PATH D:\PRAKTIKUM SBD\TA\laravel8_perpustakaan\resources\views/petugas/rak/delete.blade.php ENDPATH**/ ?>