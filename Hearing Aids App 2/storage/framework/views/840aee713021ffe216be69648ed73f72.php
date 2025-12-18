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
    <h2>Compare Hearing Aids</h2>

    <p class="muted">
        Compare different hearing aids, their prices and how suitable they are for active lifestyles, small groups and social situations.
        Use the search and price filter to find the most suitable option.
    </p>

    <form method="GET" action="<?php echo e(route('hearing-aids.index')); ?>" class="filter-form">
        <div class="field">
            <label for="search">Search (brand, model or description)</label>
            <input
                type="text"
                id="search"
                name="search"
                value="<?php echo e(request('search')); ?>"
                placeholder="e.g. Specsavers, Premium"
            >
        </div>

        <div class="field">
            <label for="price_filter">Filter by price</label>
            <select id="price_filter" name="price_filter">
                <option value="all" <?php echo e(request('price_filter') === 'all' ? 'selected' : ''); ?>>All prices</option>
                <option value="under_1000" <?php echo e(request('price_filter') === 'under_1000' ? 'selected' : ''); ?>>Under £1000</option>
                <option value="1000_2000" <?php echo e(request('price_filter') === '1000_2000' ? 'selected' : ''); ?>>£1000 - £2000</option>
                <option value="over_2000" <?php echo e(request('price_filter') === 'over_2000' ? 'selected' : ''); ?>>Over £2000</option>
            </select>
        </div>

        <div class="actions">
            <button type="submit" class="btn">Apply</button>
            <a class="btn secondary" href="<?php echo e(route('hearing-aids.index')); ?>">Reset</a>
        </div>
    </form>

    <div class="table-wrap">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Brand</th>
                    <th>Hearing instrument</th>
                    <th>Price per pair</th>
                    <th>Rechargeable</th>
                    <th>Sound quality</th>
                    <th>Active lifestyle</th>
                    <th>Small groups</th>
                    <th>Social situations</th>
                    <th class="actions-col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $hearingAids; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aid): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td data-label="Brand"><?php echo e($aid->brand->name); ?></td>
                        <td data-label="Hearing instrument">
                            <a href="<?php echo e(route('hearing-aids.show', $aid)); ?>"><?php echo e($aid->instrument); ?></a>
                        </td>
                        <td data-label="Price per pair">£<?php echo e(number_format($aid->price_per_pair, 2)); ?></td>
                        <td data-label="Rechargeable"><?php echo e($aid->rechargeable ? 'Yes' : 'No'); ?></td>
                        <td data-label="Sound quality"><?php if (isset($component)) { $__componentOriginale32d02d1a95a04916bc939ee53f28428 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale32d02d1a95a04916bc939ee53f28428 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars','data' => ['value' => $aid->sound_quality]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($aid->sound_quality)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $attributes = $__attributesOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__attributesOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $component = $__componentOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__componentOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?></td>
                        <td data-label="Active lifestyle"><?php if (isset($component)) { $__componentOriginale32d02d1a95a04916bc939ee53f28428 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale32d02d1a95a04916bc939ee53f28428 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars','data' => ['value' => $aid->suitability_active_lifestyles]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($aid->suitability_active_lifestyles)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $attributes = $__attributesOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__attributesOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $component = $__componentOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__componentOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?></td>
                        <td data-label="Small groups"><?php if (isset($component)) { $__componentOriginale32d02d1a95a04916bc939ee53f28428 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale32d02d1a95a04916bc939ee53f28428 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars','data' => ['value' => $aid->suitability_small_groups]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($aid->suitability_small_groups)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $attributes = $__attributesOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__attributesOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $component = $__componentOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__componentOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?></td>
                        <td data-label="Social situations"><?php if (isset($component)) { $__componentOriginale32d02d1a95a04916bc939ee53f28428 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale32d02d1a95a04916bc939ee53f28428 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars','data' => ['value' => $aid->social_situations]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($aid->social_situations)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $attributes = $__attributesOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__attributesOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale32d02d1a95a04916bc939ee53f28428)): ?>
<?php $component = $__componentOriginale32d02d1a95a04916bc939ee53f28428; ?>
<?php unset($__componentOriginale32d02d1a95a04916bc939ee53f28428); ?>
<?php endif; ?></td>
                        <td data-label="Actions" class="actions-col">
                            <?php if(auth()->guard()->check()): ?>
                                <?php $isFav = in_array($aid->id, $favoriteIds ?? []); ?>

                                <?php if($isFav): ?>
                                    <form method="POST" action="<?php echo e(route('favorites.destroy', $aid)); ?>" class="inline-form">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn tiny secondary">Unfavorite</button>
                                    </form>
                                <?php else: ?>
                                    <form method="POST" action="<?php echo e(route('favorites.store', $aid)); ?>" class="inline-form">
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn tiny">Favorite</button>
                                    </form>
                                <?php endif; ?>
                            <?php endif; ?>

                            <?php if(auth()->check() && auth()->user()->is_admin): ?>
                                <a class="btn tiny" href="<?php echo e(route('hearing-aids.edit', $aid)); ?>">Edit</a>

                                <form method="POST" action="<?php echo e(route('hearing-aids.destroy', $aid)); ?>" class="inline-form" onsubmit="return confirm('Delete this hearing aid?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn tiny danger">Delete</button>
                                </form>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="9">No results found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <div class="pagination">
        <?php if($hearingAids->onFirstPage()): ?>
            <span class="disabled">Previous</span>
        <?php else: ?>
            <a href="<?php echo e($hearingAids->previousPageUrl()); ?>">Previous</a>
        <?php endif; ?>

        <span>Page <?php echo e($hearingAids->currentPage()); ?> of <?php echo e($hearingAids->lastPage()); ?></span>

        <?php if($hearingAids->hasMorePages()): ?>
            <a href="<?php echo e($hearingAids->nextPageUrl()); ?>">Next</a>
        <?php else: ?>
            <span class="disabled">Next</span>
        <?php endif; ?>
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
<?php /**PATH D:\fatmah friend\hearing-aids-app\resources\views/hearing-aids/index.blade.php ENDPATH**/ ?>