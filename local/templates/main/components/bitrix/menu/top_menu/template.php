<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?// if (!empty($arResult)): ?>
<!--    <ul class="left-menu">-->
<!---->
<!--        --><?//
//        foreach ($arResult as $arItem):
//            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
//                continue;
//            ?>
<!--            --><?// if ($arItem["SELECTED"]): ?>
<!--            <li><a href="--><?php //= $arItem["LINK"] ?><!--" class="selected">--><?php //= $arItem["TEXT"] ?><!--</a></li>-->
<!--        --><?// else: ?>
<!--            <li><a href="--><?php //= $arItem["LINK"] ?><!--">--><?php //= $arItem["TEXT"] ?><!--</a></li>-->
<!--        --><?// endif ?>
<!---->
<!--        --><?// endforeach ?>
<!---->
<!--    </ul>-->
<?// endif ?>

<?php if (!empty($arResult)): ?>
    <?php foreach ($arResult as $item): ?>
        <div class="header-main-menu hidden-xs">
            <nav id="primary-menu">
                <ul class="main-menu text-right">
                    <li><a href="<?= $item['LINK']  ?>" style="<?=$item['SELECTED']?'color:red':''?>"><?= $item['TEXT'] ?> </a></li>
                </ul>
            </nav>
        </div>
    <?php endforeach; ?>
<? endif; ?>

<!--dropdown menu-->
<!--<!-- Меню (основное) -->
<!---->
<!--<span class="indicator"><i class="fa fa-angle-down"></i></span></a>-->
<!--<ul class="dropdown">-->
<!--    <li>-->
<!--        <a href="services_landing.html">Лендинг</a>-->
<!--    </li>-->
<!--    <li>-->
<!--        <a href="services_online_shop.html">Интернет-магазин</a>-->
<!--    </li>-->
<!--</ul>-->