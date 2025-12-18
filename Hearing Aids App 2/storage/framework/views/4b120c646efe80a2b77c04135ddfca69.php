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
    <h2>Dashboard</h2>
    <p class="muted">Your saved favorites are listed below.</p>

    <?php if($favoriteHearingAids->isEmpty()): ?>
        <div class="card">
            <p>You have not favorited any hearing aids yet. Browse the <a href="<?php echo e(route('hearing-aids.index')); ?>">home page</a> and click “Favorite”.</p>
        </div>
    <?php else: ?>
        <div class="card">
            <div class="table-wrap">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>Brand</th>
                            <th>Hearing instrument</th>
                            <th>Price per pair</th>
                            <th>Rechargeable</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $favoriteHearingAids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td data-label="Brand"><?php echo e($aid->brand->name); ?></td>
                                <td data-label="Hearing instrument">
                                    <a href="<?php echo e(route('hearing-aids.show', $aid)); ?>"><?php echo e($aid->instrument); ?></a>
                                </td>
                                <td data-label="Price per pair">£<?php echo e(number_format($aid->price_per_pair, 2)); ?></td>
                                <td data-label="Rechargeable"><?php echo e($aid->rechargeable ? 'Yes' : 'No'); ?></td>
                                <td data-label="Actions">
                                    <form method="POST" action="<?php echo e(route('favorites.destroy', $aid)); ?>" class="inline-form">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn tiny secondary">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php endif; ?>
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
<?php /**PATH D:\fatmah friend\hearing-aids-app\resources\views/dashboard.blade.php ENDPATH**/ ?>