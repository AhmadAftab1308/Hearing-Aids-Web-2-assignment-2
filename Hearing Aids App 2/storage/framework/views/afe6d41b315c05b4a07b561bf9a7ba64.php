<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <h2>Manage Brands</h2>
    <p class="muted">Brands are stored in a separate table and linked to hearing aids (one-to-many relationship).</p>

    <div class="form-actions">
        <a href="<?php echo e(route('admin.brands.create')); ?>" class="btn">Add Brand</a>
        <a href="<?php echo e(route('hearing-aids.index')); ?>" class="btn secondary">Back to home</a>
    </div>

    <div class="card">
        <div class="table-wrap">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th class="actions-col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td data-label="Name"><?php echo e($brand->name); ?></td>
                            <td data-label="Description"><?php echo e($brand->description ?: '—'); ?></td>
                            <td data-label="Actions" class="actions-col">
                                <a href="<?php echo e(route('admin.brands.edit', $brand)); ?>" class="btn tiny">Edit</a>
                                <form method="POST" action="<?php echo e(route('admin.brands.destroy', $brand)); ?>" class="inline-form" onsubmit="return confirm('Delete this brand? (Hearing aids will also be deleted)')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn tiny danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="3">No brands yet.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="pagination">
            <?php if($brands->onFirstPage()): ?>
                <span class="disabled">Previous</span>
            <?php else: ?>
                <a href="<?php echo e($brands->previousPageUrl()); ?>">Previous</a>
            <?php endif; ?>

            <span>Page <?php echo e($brands->currentPage()); ?> of <?php echo e($brands->lastPage()); ?></span>

            <?php if($brands->hasMorePages()): ?>
                <a href="<?php echo e($brands->nextPageUrl()); ?>">Next</a>
            <?php else: ?>
                <span class="disabled">Next</span>
            <?php endif; ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH D:\fatmah friend\hearing-aids-app\resources\views/admin/brands/index.blade.php ENDPATH**/ ?>