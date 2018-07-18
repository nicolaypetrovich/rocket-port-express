<section class="delivery wrapperbody" id="delivery">
    <div class="container">
        <div class="delivery__wrapper verybig-frame news__box">
            <?php
            $repeater .= '<div class="delivery__block"><div class="delivery__block_hat d-flex justify-content-between"><p class="red">Вид услуги</p><p class="red">Стоимость, руб.</p></div>';
            foreach ($content['repeater'] as $item1) {
                $repeater .= '<p class="delivery__block_title"><b>' . $item1['title'] . '</b></p>';
                $repeater .= '<div class="d-flex justify-content-between">';
                if ($item1['liststyle']) {
                    $class = '<div class="delivery__block__text d-flex flex-column ml15">';
                } else {
                    $class = '<div class="delivery__block__text delivery__list d-flex flex-column ml15">';
                };
                $repeater .= $class;
                foreach ($item1['repeater'] as $key1 => $val1) {
                    $repeater .= '<p>' . $val1['char'] . '</p>';
                }
                $repeater .= '</div>';
                $repeater .= '<div class="dellivery__block_price d-flex flex-column align-items-center">';
                foreach ($item1['repeater'] as $key2 => $val2) {
                    $repeater .= '<p>' . $val2['value'] . '</p>';
                }
                $repeater .= '</div>';
                $repeater .= '</div>';
            }
            $repeater .= '</div>';

            $content = $content['content'];
            $content = str_replace('%repeater%', $repeater, $content);
            echo $content;
            ?>
        </div>
    </div>
</section>
<section class="newsbuttons">
    <div class="newsbuttons__box">
        <a href="/tracking" class="newsbuttons__link">
            <img src="img/search-btn.jpg" alt="Отследить почтовое отправление">
        </a>
        <a href="/calculate" class="newsbuttons__link">
            <img src="img/calc-btn.jpg" alt="Расчитать тариф перевозки">
        </a>
    </div>
</section>