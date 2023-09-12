
<?php if (isset($_SESSION['message'])): ?>
    <div class="msg <?php echo $_SESSION['type']; ?>">
        <li>
            <?php echo ($_SESSION['message']) ?>
        </li>
        <?php
        unset($_SESSION['type']);
        unset($_SESSION['message']);?>
    </div>
<?php endif; ?>