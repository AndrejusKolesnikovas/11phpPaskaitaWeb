<!DOCTYPE html>
<html>
<body>
<?php for ($i = 0; $i <= 10; ++$i): ?>
    <?php if ($i % 2 === 0): ?>
        <strong><?php echo $i; ?></strong>
    <?php else: ?>
        <?php echo $i; ?>
    <?php endif; ?>

<?php endfor; ?>
</body>
</html>
