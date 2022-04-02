

<?php $__env->startSection('Main-content'); ?>
<div>
    <div class="float-start">
        <h4 class="pb-3"> Add a Task</h4>
    </div>
    <div class="float-end">
        <a href="<?php echo e(route('index')); ?>" class="btn btn-info">
            <i class="fa fa-arrow-left"></i> All Task

        </a>
    </div>
    <div class="clearfix"></div>
</div>
    
    
        <div class="card card-body bg-light p-4">
        <form action="<?php echo e(route('task.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Status</label>
                <select name="status" id="status" class="form-control">
                    <?php $__currentLoopData = $statuses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $status): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($status['value']); ?>"> <?php echo e($status['label']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>        
            </div>
            
            <button type="submit" class="btn btn-success">
                <i class="fa fa-check "></i> Save
            </button>
        </form>
                
        </div>
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Task Manager Web App\example-app\resources\views/create.blade.php ENDPATH**/ ?>