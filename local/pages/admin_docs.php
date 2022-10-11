<?php
/**
 * Created by PhpStorm
 * Project: graviton
 * User:    mpak
 * Date:    10.10.2022
 * Time:    20:10
 */
/** @var CMain $APPLICATION */
/** @var CUser $USER */

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Graviton - Only for admin");
$APPLICATION->SetPageProperty('description', 'Graviton description');
$APPLICATION->SetPageProperty('keywords', 'Graviton keywords');

if (!$USER->IsAdmin()) {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/403.php";
    die();
}
$catalogIblock = \Library\Tools\CacheSelector::getIblockId('product', 'catalog');
$newsIblock = \Library\Tools\CacheSelector::getIblockId('news', 'content');
?>
    <main class="main">
        <section class="news-detail">
            <div class="l-default">
                <h1>Документация по админке</h1>
                <a name="top"></a>
                <ul>
                    <li>
                        <a class="admin-link" href="/admin-docs#catalog">Каталог</a>
                        <ul>
                            <li>
                                <a class="admin-link" href="/admin-docs#item">Свойства товаров</a>
                                <ul>
                                    <li><a class="admin-link" href="/admin-docs#item-card">Карточка в списке</a></li>
                                    <li><a class="admin-link" href="/admin-docs#item1">Первый экран</a></li>
                                    <li><a class="admin-link" href="/admin-docs#item2">Второй экран</a></li>
                                    <li><a class="admin-link" href="/admin-docs#item3">Третий экран</a></li>
                                    <li><a class="admin-link" href="/admin-docs#item4">Четвертый экран</a></li>
                                    <li><a class="admin-link" href="/admin-docs#item5">Пятый и шестой экраны</a></li>
                                    <li><a class="admin-link" href="/admin-docs#item7">Седьмой экран</a></li>
                                    <li><a class="admin-link" href="/admin-docs#item8">Восьмой экран</a></li>
                                    <li><a class="admin-link" href="/admin-docs#item9">Девятый экран</a></li>
                                </ul>
                            </li>
                            <li><a class="admin-link" href="/admin-docs#section">Разделы</a></li>
                        </ul>
                    </li>
                    <li><a class="admin-link" href="/admin-docs#news">Новости</a></li>
<!--                    <li><a class="admin-link" href="/admin-docs#events">События</a></li>-->
                </ul>

                <h2><a name="catalog">*</a> Каталог</h2>
                <div>
                    <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                    <h3><a name="item">-</a>Свойства товаров</h3>
                    <div>
                        <p>Все свойства товаров находятся на странице управления инфоблоком <a class="admin-link" target="_blank" href="/bitrix/admin/iblock_edit.php?type=catalog&lang=ru&ID=<?=$catalogIblock;?>&admin=Y">Товаров</a></p>
                        <p>Вкладка "Свойства"</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props.png"></p>
                        <p>Создать новое свойство можно в конце списка свойств, необходимо задать название свойства, выбрать тип из селектора, код свойства (латинский шрифт никаких пробелов, строго капслок и подчеркивания)</p>
                        <p><img src="/local/templates/main/img/admin/2022-10-10_21-32.png"></p>
                        <p>Здесь же можно редактировать значения для свойств в виде списка.</p>
                        <p>Справа есть кнопка с многоточием у каждого свойства. Там открывается попап с формой редактирования</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-popup.png"></p>
                        <p><img src="/local/templates/main/img/admin/iblock-props2.png"></p>
                        <p><a name="item-card">Поля для карточки товара в списке.</a></p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-preview.png"></p>
                        <p>Поля для полного описания товара - детальная страница.</p>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p><a name="item1">Первый экран</a>:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-detail-1.png"></p>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p><a name="item2">Второй экран</a>:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-detail-2.png"></p>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p><a name="item3">Третий экран</a>:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-detail-3.png"></p>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p><a name="item4">Четвертый экран</a>:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-detail-4.png"></p>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p><a name="item5">Пятый и шестой экраны</a>:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-detail-5-6.png"></p>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p><a name="item7">Седьмой экран</a>, Технические характеристики:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-detail-7.png"></p>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p><a name="item8">Восьмой экран</a>, Видео:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-detail-8.png"></p>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p><a name="item9">Девятый экран</a>, Файлы:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-detail-9.png"></p>
                    </div>
                    <h3><a name="section">-</a> Разделы</h3>
                    <div>
                        <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                        <p>Работа с разделами в Битрик-админке не так интуитивно понятна как с эелементами, что бы отредактировать раздел надо нажать на бургер кнопку:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-section.png"></p>
                        <p>Раздел первого уровня имеет среди значимых полей изображение для отображения в списке этих разделов на странице каталога:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-section-img.png"></p>
                        <p>Кроме того, описание раздела 1 уровня выводится внизу на стрице его дочерний разделов, а специальное свойство "Строка в фоне раздела" на первом экране как дочерних разделов так и их товаров:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-section-1.png"></p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-section-2.png"></p>
                        <p>Теперь про разделы 2 уровня. С картинкой точно так же как и с родительским разделом.</p>
                        <p>Есть поле "Подзаголовок" оно выводится над описением раздела ну и собственно - описание:</p>
                        <p><img src="/local/templates/main/img/admin/iblock-props-section-3.png"></p>
                    </div>
                    <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                </div>

                <h2><a name="news">*</a> Новости</h2>
                <div>
                    <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
                    <p><a class="admin-link" target="_blank" href="/bitrix/admin/iblock_list_admin.php?IBLOCK_ID=<?=$newsIblock;?>&type=content&lang=ru&find_section_section=0&SECTION_ID=0&admin=Y">Новости</a> могут быть разложены по разделам и разделы выводятся в списке новостей сверху справа</p>
                    <p>Важные поля влияющие на логику показа новостей: "Опубликовано" и "Показывать в слайдере"</p>
                    <p>Что бы новость показывалась в слайдере, в списке новостей, необходимо её опубликовать, то есть установить флаг: "Опубликовано".</p>
                    <p>Однако, Администраторы все равно могут видеть на фронте новости даже без публикации, что бы проверить отображение текста.</p>
                    <p>Что бы новость попала в слайдер необходимо устанавливать этот чекбокс: "Показывать в слайдере"</p>
                    <p>Сортировка новостей в списках осуществляется по полю Начало активности, от текущей даты в прошлое.</p>
                    <p><img src="/local/templates/main/img/admin/news-list.png"></p>
                </div>

<!--                <h2><a name="events">*</a> События</h2>-->
<!--                <div>-->
<!--                    <p><a href="/admin-docs#top">вверх</a></p>-->
<!--                </div>-->
                <p><a class="admin-link" href="/admin-docs#top">вверх</a></p>
            </div>
        </section>
    </main>
<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
