
        <main class="main">
            <section class="head">
                <h2 class="head__title">Таблица умножения</h2><?
                $m = ['Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'];
                ?>
                <?$day = date("d F")?>
                <?$month = date("n")-1?>
                <?$year = date("y")?>
                <p class="head__date"><?='Сегодня '.date('d').' '.$m[$month].' '.date('Y').' года';?></p>
            </section>
            <form action="" class="form" method="post">
                <label class="form__label">
                    <span class="form__text">Количество колонок</span>
                    <input type="text" class="form__input" name="col">
                </label>
                <label class="form__label">
                    <span class="form__text">Количество строк</span>
                    <input type="text" class="form__input" name="row">
                </label>
                <button class="form__btn">Отправить</button>
            </form>
            
            <?
                
                if(!empty($_POST)) {
                    if(empty($_POST['col'])) {
                        echo 'Колонки пустые <br>';
                    }
                    if(empty($_POST['row'])) {
                        echo 'Ряды пустые';
                    }
                    $col = $_POST['col'];
                    $row = $_POST['row'];
                }
            ?>

            <div class="table">
                <?for($i = 1; $i <= $row;$i++):?>
                    <div class="table__row">
                        <?for($x = 1; $x <= $col;$x++):?>
                            <div class="table__col"
                            <? if($x == $i):?>
                            style ="background:rgb(255, 67, 67);"
                            <?endif;?>>
                            <?= $x * $i?>
                            </div>
                        <?endfor;?>
                    </div>
                <?endfor;?>
            </div>
        </main>
