<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
            <li style="list-style: none;"><?php echo $error; ?></li>
        <?php endforeach; ?>
    </div>
<?php endif; ?>