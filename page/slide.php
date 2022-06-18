
        <main class="main">
            <section class="head">
                <h2 class="head__title">Слайдер</h2><?
                $m = ['Января','Февраля','Марта','Апреля','Мая','Июня','Июля','Августа','Сентября','Октября','Ноября','Декабря'];
                ?>
                <?$day = date("d F")?>
                <?$month = date("n")-1?>
                <?$year = date("y")?>
                <p class="head__date"><?='Сегодня '.date('d').' '.$m[$month].' '.date('Y').' года';?></p>
            </section>
            <div class="slider">
                <div class="slider__line">
                    <img src="../img/1.jpg" alt="" class="slider__img">
                    <img src="../img/2.jpg" alt="" class="slider__img">
                    <img src="../img/3.jpg" alt="" class="slider__img">
                </div>
                <div class="slider__controls">
                    <button class="slider__prev slider__btn"><i class="far fa-chevron-left"></i></button>
                    <button class="slider__next slider__btn"><i class="far fa-chevron-right"></i></button>
                </div>
            </div>
        </main>
