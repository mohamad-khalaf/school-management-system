<div class="breadcrumbs-area">
    <h3> <?php echo lang($current_page);?></h3>
    <ul>
        
        <li>
            <a href="index.php"> <?php echo lang($home_page);?> </a>
        </li>

        <?php if ($parent_page != "") : ?>
            <li>
                <?php echo lang($parent_page) ?>
            </li>
        <?php endif; ?>

        <li> 
            <?php echo lang($current_page);?> 
        </li>

    </ul>
</div>
