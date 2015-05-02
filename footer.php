<div class="footer">
    <p>&copy; <?php echo $site_name."  ".date('Y'); ?> 
        <span class="pull-right">Runtime <?php
        $Runtime->Stop();
        echo $Runtime->SpendTime()."ms";
        ?>
        </span>
    </p>
</div>
