<?php $b = $brand ?? null; ?>

<div class="field">
    <label for="name">Brand name</label>
    <input type="text" id="name" name="name" value="<?php echo e(old('name', optional($b)->name ?? '')); ?>">
</div>

<div class="field">
    <label for="description">Description (optional)</label>
    <textarea id="description" name="description" rows="4"><?php echo e(old('description', optional($b)->description ?? '')); ?></textarea>
</div>
<?php /**PATH D:\fatmah friend\hearing-aids-app\resources\views/admin/brands/_form.blade.php ENDPATH**/ ?>