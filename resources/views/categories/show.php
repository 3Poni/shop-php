<div class="section">
    <!-- container -->
    <div class="container">
        <div class="row">
            <h1>Категория: "<?php echo $category['name']; ?>"</h1><br>
            <ul>
                <span><?php foreach ($items as $item) {
                        echo '<li><a href="/items/show/?id=' . $item['id'] . '">' . $item['name'] . '</a></li><br>';
                    } ?>
                </span>
            </ul>
        </div>
    </div>
</div>


