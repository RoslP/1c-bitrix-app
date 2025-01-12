<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (!empty($arResult)): ?>
    <div class="col-lg-7 col-md-7 col-sm-12">
        <div class="footer-nav white-text">
            <nav>
                <ul class="main-menu text-right">
                    <?php foreach ($arResult as $item): ?>
                        <li><a href="<?= $item['LINK'] ?>"
                               class="<?= $item['LINK'] === '/' ? 'mega-parent' : '' ?>"><?= $item['TEXT'] ?> </a></li>
                    <?php endforeach; ?>
                </ul>
            </nav>
        </div>
    </div>
<? endif; ?>
