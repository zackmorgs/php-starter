<nav id="main_nav">
    <div id="nav_bar">
        <a href="index.php">
            <img id="logo" src="icon.png" alt="logo">
        </a>
    </div>
    <ul id="nav_list">
        <?php $nav_items = [
            [
                'url' => 'index.php', 
                'label' => 'Home'
            ],
            [
                'url' => 'about.php', 
                'label' => 'About'
            ],
            [
                'url' => 'contact.php', 
                'label' => 'Contact'
            ]
        ]; ?>
        <?php for ($i=0; $i < count($nav_items); $i++) { ?>
            <li class="nav_list_item">
                <a href="<?php echo $nav_items[$i]['url']; ?>">
                    <?php echo $nav_items[$i]['label']; ?>
                </a>
            </li>
        <?php } ?>
    </ul>
</nav>