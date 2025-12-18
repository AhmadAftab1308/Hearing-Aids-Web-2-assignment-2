<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['value' => 0]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['value' => 0]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $value = (int) $value;
    $value = max(0, min(5, $value));
?>

<span class="stars" aria-label="<?php echo e($value); ?> out of 5 stars">
    <?php for($i = 1; $i <= 5; $i++): ?>
        <?php if($i <= $value): ?>
            ★
        <?php else: ?>
            <span class="star-empty">★</span>
        <?php endif; ?>
    <?php endfor; ?>
</span>
<?php /**PATH D:\fatmah friend\hearing-aids-app\resources\views/components/stars.blade.php ENDPATH**/ ?>