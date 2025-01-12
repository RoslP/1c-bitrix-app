<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('О нас');
$APPLICATION->SetPageProperty('title','О нас | welcome');
?>
<div>
    <p>О нас текст</p>
    <p><?= $APPLICATION->GetProperty('description')?></p>
</div>
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>
