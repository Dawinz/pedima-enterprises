<?php
$network_variant = $network_variant ?? 'bar';
$network_heading = $network_heading ?? true;
$network_filter = $network_filter ?? null;
$network_light = $network_light ?? false;
$ids = is_array($network_filter) ? $network_filter : $config['networks'];
$items = [];
foreach ($ids as $id) {
    if (isset($config['brands'][$id])) {
        $items[] = $config['brands'][$id];
    }
}
$row_class = 'network-row';
if ($network_variant === 'footer') {
    $row_class .= ' network-row-footer';
} elseif ($network_variant === 'inline') {
    $row_class .= ' network-row-inline';
}
$bar_class = 'network-bar';
if ($network_light) {
    $bar_class .= ' network-bar-light';
}
?>
<?php if ($network_variant === 'bar'): ?>
<div class="<?= htmlspecialchars($bar_class, ENT_QUOTES, 'UTF-8') ?>">
    <?php if ($network_heading): ?>
        <h2 data-sw="Tunafanya kazi na mitandao yote" data-en="We work with all networks">Tunafanya kazi na mitandao yote</h2>
    <?php endif; ?>
<?php endif; ?>
    <div class="<?= htmlspecialchars($row_class, ENT_QUOTES, 'UTF-8') ?>">
        <?php foreach ($items as $network): ?>
            <figure class="network-logo-card">
                <img
                    class="network-logo network-logo--<?= htmlspecialchars($network['shape'], ENT_QUOTES, 'UTF-8') ?>"
                    src="<?= htmlspecialchars($network['logo'], ENT_QUOTES, 'UTF-8') ?>"
                    alt="<?= htmlspecialchars($network['alt'], ENT_QUOTES, 'UTF-8') ?>"
                    width="<?= (int) $network['width'] ?>"
                    height="<?= (int) $network['height'] ?>"
                >
            </figure>
        <?php endforeach; ?>
    </div>
<?php if ($network_variant === 'bar'): ?>
</div>
<?php endif; ?>
<?php
unset($network_variant, $network_heading, $network_filter, $network_light, $items, $row_class, $bar_class, $ids);
?>
