
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Vista de perfil</h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">perfil</li>
                    <li class="breadcrumb-item active" aria-current="page">visualizar</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Elements -->
    <div class="block block-rounded block-bordered">
        <div class="block-header block-header-default">
            <h3 class="block-title">Vista de perfil <a href="<?php echo e(url('admin/EditProfileView')); ?>" style="float: right;"><i class="fa fa-user-edit fa-2x" style="font-size: 19px;"></i></a></h3>
        </div>
        <div class="block-content">
            <div class="row push">
                <div class="col-lg-6">
                    <p class="text-muted">
                    	nome : <?php echo e(Auth::user()->name); ?>

                    </p>
                </div>
                <div class="col-lg-6">
                	<p>
                		E-mail : <?php echo e(Auth::user()->email); ?>

                	</p>
                </div>
                <div class="col-lg-6">
                    <p>
                        número de telefone : <?php echo e(Auth::user()->phone); ?>

                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- END Elements -->
</div>
<!-- END Page Content -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>