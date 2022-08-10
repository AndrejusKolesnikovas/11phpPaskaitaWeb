<?php
$randomNumber = rand(0, 10);
?>
<!DOCTYPE html>
<html>
<body>
<?php if ($randomNumber > 5): ?>
    <?php echo 'Number ' . $randomNumber . ' is higher than 5'; ?>
<?php else: ?>
    <?php echo 'Number ' . $randomNumber . ' is lower than 5'; ?>
<?php endif; ?>
</body>
</html>