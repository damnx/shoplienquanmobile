<ul class="nav navbar-nav top-nav-info">
        <?php
            foreach ($menus as $key => $menu) {
                if ($menu['type'] == 'category')
                {
                    $link = '/'.$menu['alias'].'.html';
                }
                else
                {
                    $link = $menu['link'];
                }
                ?>
                <li><a href="<?=$link?>"><?=$menu['name']?></a></li>
                <?php
            }
        ?>
</ul>
