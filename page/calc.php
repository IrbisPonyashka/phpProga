
        <main class="main">
            <section class="head">
                <h2 class="head__title">Таблица умножения</h2>
                <?
                $m = ['Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'];
                ?>
                <?$day = date("d F")?>
                <?$month = date("n")-1?>
                <?$year = date("y")?>
                <p class="head__date"><?='Сегодня '.date('d').' '.$m[$month].' '.date('Y').' года';?></p>
            </section>
            <form action="" class="form" method="post">
                <label class="form__label">
                    <span class="form__text">Число 1</span>
                    <input type="text" class="form__input" name="one" data-type="number">
                </label>
                <div class="form__mySelect">
                    <div class="form__select">
                        <div class="form__select-name">Выбирите знак</div>
                        <div class="form__select-option">
                            
                        </div>
                    </div>
                    <select name="symbol">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">*</option>
                        <option value="/">/</option>
                    </select>
                </div>
                <label class="form__label">
                    <span class="form__text">Число 2</span>
                    <input type="text" class="form__input" name="two" data-type="number"> 
                </label>
                <button class="form__btn">Посчитать</button>
                <?
                    $one = $_POST['one'];
                    $two = $_POST['two'];
                    $symbol = $_POST['symbol'];
                    $result = 0;

                    if($symbol == '+'){
                        echo ' Сумма : ' . ($one + $two);
                    }else if($symbol == '-'){
                        echo ' Разность : ' . ($one - $two);
                    }else if($symbol == '*'){
                        echo (' Произведение: ' . $one * $two);
                    }else if($symbol == '/'){
                        echo (' Частное: ' . $one / $two);
                    }
                
                ?>  
            </form>
        </main>
                   

