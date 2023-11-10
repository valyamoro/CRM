<form action="" method="POST">
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="email">
    </div>
    <button type="submit" name="login" value="1" class="btn btn-primary">Получить бесплатно</button>
</form>
<?php if(!empty($_SESSION['errors'])): ?>
    <?php echo '<p class="msg"> ' . nl2br($_SESSION['errors']) . ' </p>'; ?>
    <?php unset($_SESSION['errors']); ?>
<?php endif; ?>