<?php if(isset($_SESSION['message'])): ?>
    <div class="alert alert-success">
        <li class="font-18 text-primary" style="list-style: none;"><?php echo $_SESSION['message'] ?></li>

        <?php 
            unset($_SESSION['message']);
        ?>
    </div>
<?php endif; ?>    