

<?php $__env->startSection('Main-content'); ?>
<div>
    <div class="float-start">
        <h4 class="pb-3"> My Tasks</h4>
    </div>
    <div class="float-end">
        <a href="<?php echo e(route('task.create')); ?>" class="btn btn-info">
            <i class="fa fa-plus-circle"></i> Add a Task

        </a>
    </div>
    <div class="clearfix"></div>
</div>
    
<?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


            <div class="card mt-3" >
                <h5 class="card-header">
                <?php if($task->status=== "ToDo"): ?>
                    <?php echo e($task->title); ?>

                <?php else: ?>
                    <del><?php echo e($task->title); ?>  </del>
                <?php endif; ?>  


                    
                    <span class="badge rounded-pill bg-warning text-dark">
                        <?php echo e($task->created_at->diffForHumans()); ?>

                    </span>
                </h5>

                <div class="card-body">
                    <div class="card-text">
                        <div class="float-start">
                        <?php if($task->status=== "ToDo"): ?>
                            <?php echo e($task->description); ?>

                        <?php else: ?>
                            <del><?php echo e($task->description); ?>  </del>
                        <?php endif; ?> 


                        
                            <br>

                            <?php if($task->status=== "ToDo"): ?>

                                <span class="badge rounded-pill bg-info text-dark">
                                    ToDo
                                </span>
                            <?php else: ?>
                                <span class="badge rounded-pill bg-success text-white">
                                    Done
                                </span>    
                            <?php endif; ?>    

                            <small>Last Updated - <?php echo e($task->updated_at->diffForHumans()); ?></small>
                        </div>
                        <div class="float-end">
                            <a href="<?php echo e(route('task.edit',$task->id)); ?>" class="btn btn-success">
                                <i class="fa fa-edit "></i> Edit
                            </a>

                            <form action="<?php echo e(route('task.destroy', $task->id)); ?>" style="display:inline" method="POST">
                                <?php echo csrf_field(); ?> 
                                <?php echo method_field('DELETE'); ?>

                                <button type="submit" class="btn btn-danger">
                                    <i class="fa fa-trash"></i> Delete
                                </button>

                            </form>
                            
                        </div>
                        <div class="clearfix"></div>


                        
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
        
        <?php if(count($tasks)===0): ?>
            <div class="alert alert-danger p-2">
                Task Not Found!  PLease Add a Task
                <br>
                <br>
                <a href="<?php echo e(route('task.create')); ?>" class="btn btn-info btn-sm">
                    <i class="fa fa-plus-circle"></i> Add a Task
                </a>

            </div>
        <?php endif; ?>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Task Manager Web App\example-app\resources\views/index.blade.php ENDPATH**/ ?>