<aside class="menu">
            <div class="menu__reviews">
                <span class="menu__reviews_span" data-href="https://proweb.uz/">
                    <i class="far fa-chevron-right"></i>
                </span>
                <span class="menu__reviews_text">Оставить озыв</span>
            </div>
            <ul class="menu__list">
                <?foreach($pages as $link => $value):?>
                <li>
                    <a href="/?route=<?= $link?>" class="menu__list-link <?= $link == $route ? 'active' : '' ?>">
                        <i class="<?= $value['icon']?>"></i>
                       <?= $value['name'] ?>
                    </a>
                </li>
                <?endforeach;?>
            </ul>
        </aside>