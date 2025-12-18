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
    <article class="card">
        <h2><?php echo e($hearingAid->brand->name); ?> – <?php echo e($hearingAid->instrument); ?></h2>

        <p class="price">
            Price per pair: <strong>£<?php echo e(number_format($hearingAid->price_per_pair, 2)); ?></strong>
        </p>

        <dl class="details-list">
            <div>
                <dt>Rechargeable</dt>
                <dd><?php echo e($hearingAid->rechargeable ? 'Yes' : 'No'); ?></dd>
            </div>
            <div>
                <dt>Sound quality</dt>
                <dd><?php if (isset($component)) { $__componentOriginale32d02d1a95a04916bc939ee53f28428 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale32d02d1a95a04916bc939ee53f28428 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars','data' => ['value' => $hearingAid->sound_quality]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hearingAid->sound_quality)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $attributes = $__attributesOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__attributesOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $component = $__componentOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__componentOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?></dd>
            </div>
            <div>
                <dt>Suitability for active lifestyles</dt>
                <dd><?php if (isset($component)) { $__componentOriginale32d02d1a95a04916bc939ee53f28428 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale32d02d1a95a04916bc939ee53f28428 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars','data' => ['value' => $hearingAid->suitability_active_lifestyles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hearingAid->suitability_active_lifestyles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $attributes = $__attributesOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__attributesOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $component = $__componentOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__componentOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?></dd>
            </div>
            <div>
                <dt>Suitability in small groups</dt>
                <dd><?php if (isset($component)) { $__componentOriginale32d02d1a95a04916bc939ee53f28428 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale32d02d1a95a04916bc939ee53f28428 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars','data' => ['value' => $hearingAid->suitability_small_groups]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hearingAid->suitability_small_groups)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $attributes = $__attributesOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__attributesOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $component = $__componentOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__componentOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?></dd>
            </div>
            <div>
                <dt>Social situations</dt>
                <dd><?php if (isset($component)) { $__componentOriginale32d02d1a95a04916bc939ee53f28428 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale32d02d1a95a04916bc939ee53f28428 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars','data' => ['value' => $hearingAid->social_situations]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hearingAid->social_situations)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $attributes = $__attributesOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__attributesOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $component = $__componentOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__componentOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?></dd>
            </div>
        </dl>

        <?php if($hearingAid->description): ?>
            <section class="description">
                <h3>Information about this hearing aid</h3>
                <p><?php echo e($hearingAid->description); ?></p>
            </section>
        <?php endif; ?>

        <div class="form-actions">
            <?php if(auth()->guard()->check()): ?>
                <?php if($isFavorite): ?>
                    <form method="POST" action="<?php echo e(route('favorites.destroy', $hearingAid)); ?>" class="inline-form">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn secondary">Remove from favorites</button>
                    </form>
                <?php else: ?>
                    <form method="POST" action="<?php echo e(route('favorites.store', $hearingAid)); ?>" class="inline-form">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="btn">Add to favorites</button>
                    </form>
                <?php endif; ?>
            <?php endif; ?>

            <?php if(auth()->check() && auth()->user()->is_admin): ?>
                <a href="<?php echo e(route('hearing-aids.edit', $hearingAid)); ?>" class="btn">Edit</a>
            <?php endif; ?>

            <a href="<?php echo e(route('hearing-aids.index')); ?>" class="btn secondary">Back to list</a>
        </div>
    </article>
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
<?php /**PATH D:\fatmah friend\hearing-aids-app\resources\views/hearing-aids/show.blade.php ENDPATH**/ ?>