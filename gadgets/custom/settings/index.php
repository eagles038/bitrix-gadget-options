<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
if ($arParams['PERMISSION'] <= "R") die();
$MODULE_ID = "custom";
if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_REQUEST['agm-gadget'] == 'Y' && $_REQUEST['agm-gadget-id'] == $id) {
    //Номер телефона
    $PHONE_MAIN = $_REQUEST["PHONE_MAIN"];
    COption::RemoveOption($MODULE_ID, "PHONE_MAIN");
    if ($PHONE_MAIN) {
        COption::SetOptionString($MODULE_ID, "PHONE_MAIN", $PHONE_MAIN);
    }

    //Дополнительный номер телефона (для печати контактов)
    $PHONE_ADD = $_REQUEST["PHONE_ADD"];
    COption::RemoveOption($MODULE_ID, "PHONE_ADD");
    if ($PHONE_ADD) {
        COption::SetOptionString($MODULE_ID, "PHONE_ADD", $PHONE_ADD);
    }

    //Email
    $EMAIL_MAIN = $_REQUEST["EMAIL_MAIN"];
    COption::RemoveOption($MODULE_ID, "EMAIL_MAIN");
    if ($EMAIL_MAIN) {
        COption::SetOptionString($MODULE_ID, "EMAIL_MAIN", $EMAIL_MAIN);
    }

    //Копирайты
    $COPYRIGHTS = $_REQUEST["COPYRIGHTS"];
    COption::RemoveOption($MODULE_ID, "COPYRIGHTS");
    if ($COPYRIGHTS) {
        COption::SetOptionString($MODULE_ID, "COPYRIGHTS", $COPYRIGHTS);
    }

    //Копирайты
    $OFFERTA = $_REQUEST["OFFERTA"];
    COption::RemoveOption($MODULE_ID, "OFFERTA");
    if ($OFFERTA) {
        COption::SetOptionString($MODULE_ID, "OFFERTA", $OFFERTA);
    }

    //Адрес
    $ADDRESS_MAIN = $_REQUEST["ADDRESS_MAIN"];
    COption::RemoveOption($MODULE_ID, "ADDRESS_MAIN");
    if ($ADDRESS_MAIN) {
        COption::SetOptionString($MODULE_ID, "ADDRESS_MAIN", $ADDRESS_MAIN);
    }

    //VKONTAKTE
    $VKONTAKTE = $_REQUEST["VKONTAKTE"];
    COption::RemoveOption($MODULE_ID, "VKONTAKTE");
    if ($VKONTAKTE) {
        COption::SetOptionString($MODULE_ID, "VKONTAKTE", $VKONTAKTE);
    }

    //YouTube
    $YOUTUBE = $_REQUEST["YOUTUBE"];
    COption::RemoveOption($MODULE_ID, "YOUTUBE");
    if ($YOUTUBE) {
        COption::SetOptionString($MODULE_ID, "YOUTUBE", $YOUTUBE);
    }

    //Odnoklassniki
    $ODNOKLASSNIKI = $_REQUEST["ODNOKLASSNIKI"];
    COption::RemoveOption($MODULE_ID, "ODNOKLASSNIKI");
    if ($ODNOKLASSNIKI) {
        COption::SetOptionString($MODULE_ID, "ODNOKLASSNIKI", $ODNOKLASSNIKI);
    }

    //Twitter
    $TWITTER = $_REQUEST["TWITTER"];
    COption::RemoveOption($MODULE_ID, "TWITTER");
    if ($TWITTER) {
        COption::SetOptionString($MODULE_ID, "TWITTER", $TWITTER);
    }

    //TELEGRAM
    $TELEGRAM = $_REQUEST["TELEGRAM"];
    COption::RemoveOption($MODULE_ID, "TELEGRAM");
    if ($TELEGRAM) {
        COption::SetOptionString($MODULE_ID, "TELEGRAM", $TELEGRAM);
    }

    //WHATSAPP
    $WHATSAPP = $_REQUEST["WHATSAPP"];
    COption::RemoveOption($MODULE_ID, "WHATSAPP");
    if ($WHATSAPP) {
        COption::SetOptionString($MODULE_ID, "WHATSAPP", $WHATSAPP);
    }

    //Координаты в PDF
    $PDF_COORDINATES = $_REQUEST["PDF_COORDINATES"];
    COption::RemoveOption($MODULE_ID, "PDF_COORDINATES");
    if ($PDF_COORDINATES) {
        COption::SetOptionString($MODULE_ID, "PDF_COORDINATES", $PDF_COORDINATES);
    }

    //Количество дополнительных картинок в пдф
    $PDF_ADDPHOTOS = $_REQUEST["PDF_ADDPHOTOS"];
    COption::RemoveOption($MODULE_ID, "PDF_ADDPHOTOS");
    if ($PDF_ADDPHOTOS) {
        COption::SetOptionInt($MODULE_ID, "PDF_ADDPHOTOS", $PDF_ADDPHOTOS);
    }

    //Картинка на главной (Отзывы)
    if ($_REQUEST["REVIEWS_MAIN_IMAGE"]){
        $REVIEWS_MAIN_IMAGE_ID = $_REQUEST["REVIEWS_MAIN_IMAGE"];
        COption::RemoveOption($MODULE_ID, "REVIEWS_MAIN_IMAGE_ID");
        if ($REVIEWS_MAIN_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "REVIEWS_MAIN_IMAGE_ID", $REVIEWS_MAIN_IMAGE_ID);
        }
    }
    if (!$_REQUEST["REVIEWS_MAIN_IMAGE"] && !$_REQUEST["REVIEWS_MAIN_IMAGE_ID"]) {
        COption::RemoveOption($MODULE_ID, "REVIEWS_MAIN_IMAGE_ID");
    }

    //Картинка на главной (Хотите обсудить проект)
    if ($_REQUEST["CONSULT_MAIN_IMAGE"]){
        $CONSULT_MAIN_IMAGE_ID = $_REQUEST["CONSULT_MAIN_IMAGE"];
        COption::RemoveOption($MODULE_ID, "CONSULT_MAIN_IMAGE_ID");
        if ($CONSULT_MAIN_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "CONSULT_MAIN_IMAGE_ID", $CONSULT_MAIN_IMAGE_ID);
        }
    }
    if (!$_REQUEST["CONSULT_MAIN_IMAGE"] && !$_REQUEST["CONSULT_MAIN_IMAGE_ID"]) {
        COption::RemoveOption($MODULE_ID, "CONSULT_MAIN_IMAGE_ID");
    }
    //Картинка на главной (Хотите обсудить проект)
    if ($_REQUEST["CONSULT_MAIN_IMAGE2"]){
        $CONSULT_MAIN_IMAGE_ID2 = $_REQUEST["CONSULT_MAIN_IMAGE2"];
        COption::RemoveOption($MODULE_ID, "CONSULT_MAIN_IMAGE_ID2");
        if ($CONSULT_MAIN_IMAGE_ID2) {
            COption::SetOptionString($MODULE_ID, "CONSULT_MAIN_IMAGE_ID2", $CONSULT_MAIN_IMAGE_ID2);
        }
    }
    if (!$_REQUEST["CONSULT_MAIN_IMAGE2"] && !$_REQUEST["CONSULT_MAIN_IMAGE_ID2"]) {
        COption::RemoveOption($MODULE_ID, "CONSULT_MAIN_IMAGE_ID2");
    }

    //Ссылка на все объекты в блоке Хотите обсудить проект
    $CONSULT_MAIN_LINK = $_REQUEST["CONSULT_MAIN_LINK"];
    COption::RemoveOption($MODULE_ID, "CONSULT_MAIN_LINK");
    if ($CONSULT_MAIN_LINK) {
        COption::SetOptionString($MODULE_ID, "CONSULT_MAIN_LINK", $CONSULT_MAIN_LINK);
    }

    //Фон на странице о нас
    if ($_REQUEST["ABOUT_IMAGE"]){
        $ABOUT_IMAGE_ID = $_REQUEST["ABOUT_IMAGE"];
        COption::RemoveOption($MODULE_ID, "ABOUT_IMAGE_ID");
        if ($ABOUT_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "ABOUT_IMAGE_ID", $ABOUT_IMAGE_ID);
        }
    }
    if (!$_REQUEST["ABOUT_IMAGE"] && !$_REQUEST["ABOUT_IMAGE_ID"]) {
        COption::RemoveOption($MODULE_ID, "ABOUT_IMAGE_ID");
    }

    //Фото директора
    if ($_REQUEST["ABOUT_DIRECTOR_IMAGE"]){
        $ABOUT_DIRECTOR_IMAGE_ID = $_REQUEST["ABOUT_DIRECTOR_IMAGE"];
        COption::RemoveOption($MODULE_ID, "ABOUT_DIRECTOR_IMAGE_ID");
        if ($ABOUT_DIRECTOR_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "ABOUT_DIRECTOR_IMAGE_ID", $ABOUT_DIRECTOR_IMAGE_ID);
        }
    }
    if (!$_REQUEST["ABOUT_DIRECTOR_IMAGE"] && !$_REQUEST["ABOUT_DIRECTOR_IMAGE_ID"]) {
        COption::RemoveOption($MODULE_ID, "ABOUT_DIRECTOR_IMAGE_ID");
    }

    //Обложка видео/фото на странице О нас
    if ($_REQUEST["ABOUT_COVER_IMAGE"]){
        $ABOUT_COVER_IMAGE_ID = $_REQUEST["ABOUT_COVER_IMAGE"];
        COption::RemoveOption($MODULE_ID, "ABOUT_COVER_IMAGE_ID");
        if ($ABOUT_COVER_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "ABOUT_COVER_IMAGE_ID", $ABOUT_COVER_IMAGE_ID);
        }
    }
    if (!$_REQUEST["ABOUT_COVER_IMAGE"] && !$_REQUEST["ABOUT_COVER_IMAGE_ID"]) {
        COption::RemoveOption($MODULE_ID, "ABOUT_COVER_IMAGE_ID");
    }
    //Видео на странице О нас
    if ($_REQUEST["ABOUT_VIDEO_IMAGE"]){
        $ABOUT_VIDEO_IMAGE_ID = $_REQUEST["ABOUT_VIDEO_IMAGE"];
        COption::RemoveOption($MODULE_ID, "ABOUT_VIDEO_IMAGE_ID");
        if ($ABOUT_VIDEO_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "ABOUT_VIDEO_IMAGE_ID", $ABOUT_VIDEO_IMAGE_ID);
        }
    }
    if(!$_REQUEST["ABOUT_VIDEO_IMAGE"] && !$_REQUEST["ABOUT_VIDEO_IMAGE"]) {
        COption::RemoveOption($MODULE_ID, "ABOUT_VIDEO_IMAGE_ID");
    }
    //Видео на странице Услуги
    if ($_REQUEST["SERVICE_VIDEO_IMAGE"]){
        $SERVICE_VIDEO_IMAGE_ID = $_REQUEST["SERVICE_VIDEO_IMAGE"];
        COption::RemoveOption($MODULE_ID, "SERVICE_VIDEO_IMAGE_ID");
        if ($SERVICE_VIDEO_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "SERVICE_VIDEO_IMAGE_ID", $SERVICE_VIDEO_IMAGE_ID);
        }
    }
    if (!$_REQUEST["SERVICE_VIDEO_IMAGE"] && !$_REQUEST["SERVICE_VIDEO_IMAGE_ID"]) {
        COption::RemoveOption($MODULE_ID, "SERVICE_VIDEO_IMAGE_ID");
    }
    //Фото на странице Услуги
    if ($_REQUEST["SERVICE_PHOTO_IMAGE"]){
        $SERVICE_PHOTO_IMAGE_ID = $_REQUEST["SERVICE_PHOTO_IMAGE"];
        COption::RemoveOption($MODULE_ID, "SERVICE_PHOTO_IMAGE_ID");
        if ($SERVICE_PHOTO_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "SERVICE_PHOTO_IMAGE_ID", $SERVICE_PHOTO_IMAGE_ID);
        }
    }
    if (!$_REQUEST["SERVICE_PHOTO_IMAGE"] && !$_REQUEST["SERVICE_PHOTO_IMAGE_ID"]) {
        COption::RemoveOption($MODULE_ID, "SERVICE_PHOTO_IMAGE_ID");
    }

    //Фото на странице Услуги
    if ($_REQUEST["STEP_IMAGE"]){
        $STEP_IMAGE_ID = $_REQUEST["STEP_IMAGE"];
        COption::RemoveOption($MODULE_ID, "STEP_IMAGE_ID");
        if ($STEP_IMAGE_ID) {
            COption::SetOptionString($MODULE_ID, "STEP_IMAGE_ID", $STEP_IMAGE_ID);
        }
    }
    if (!$_REQUEST["STEP_IMAGE"] && !$_REQUEST["STEP_IMAGE_ID"]) {
        COption::RemoveOption($MODULE_ID, "STEP_IMAGE_ID");
    }
    //Видео на странице Услуги (yuotube)
    $YOUTUBE_SERVICE = $_REQUEST["YOUTUBE_SERVICE"];
    COption::RemoveOption($MODULE_ID, "YOUTUBE_SERVICE");
    if ($YOUTUBE_SERVICE) {
        COption::SetOptionString($MODULE_ID, "YOUTUBE_SERVICE", $YOUTUBE_SERVICE);
    }

    //Количество теговых категорий, отображаемых до кнопки Показать все
    $TAGS_CATEGORIES_QUANTITY = $_REQUEST["TAGS_CATEGORIES_QUANTITY"];
    COption::RemoveOption($MODULE_ID, "TAGS_CATEGORIES_QUANTITY");
    if ($TAGS_CATEGORIES_QUANTITY) {
        COption::SetOptionInt($MODULE_ID, "TAGS_CATEGORIES_QUANTITY", $TAGS_CATEGORIES_QUANTITY);
    }
}
$arResult = [];
$arResult['PHONE_MAIN'] = COption::GetOptionString($MODULE_ID, "PHONE_MAIN");
$arResult['PHONE_ADD'] = COption::GetOptionString($MODULE_ID, "PHONE_ADD");
$arResult['EMAIL_MAIN'] = COption::GetOptionString($MODULE_ID, "EMAIL_MAIN");
$arResult['COPYRIGHTS'] = COption::GetOptionString($MODULE_ID, "COPYRIGHTS");
$arResult['OFFERTA'] = COption::GetOptionString($MODULE_ID, "OFFERTA");
$arResult['ADDRESS_MAIN'] = COption::GetOptionString($MODULE_ID, "ADDRESS_MAIN");
$arResult['TAGS_CATEGORIES_QUANTITY'] = COption::GetOptionInt($MODULE_ID, "TAGS_CATEGORIES_QUANTITY");

//Социальные сети
$arResult['VKONTAKTE'] = COption::GetOptionString($MODULE_ID, "VKONTAKTE");
$arResult['YOUTUBE'] = COption::GetOptionString($MODULE_ID, "YOUTUBE");
$arResult['ODNOKLASSNIKI'] = COption::GetOptionString($MODULE_ID, "ODNOKLASSNIKI");
$arResult['TWITTER'] = COption::GetOptionString($MODULE_ID, "TWITTER");
$arResult['TELEGRAM'] = COption::GetOptionString($MODULE_ID, "TELEGRAM");
$arResult['WHATSAPP'] = COption::GetOptionString($MODULE_ID, "WHATSAPP");

//PDF
$arResult['PDF_COORDINATES'] = COption::GetOptionString($MODULE_ID, "PDF_COORDINATES");
$arResult['PDF_ADDPHOTOS'] = COption::GetOptionInt($MODULE_ID, "PDF_ADDPHOTOS");

//Настройки на отдельных страницах
$arResult['REVIEWS_MAIN_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "REVIEWS_MAIN_IMAGE_ID");
$arResult['CONSULT_MAIN_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "CONSULT_MAIN_IMAGE_ID");
$arResult['CONSULT_MAIN_IMAGE_ID2'] = COption::GetOptionString($MODULE_ID, "CONSULT_MAIN_IMAGE_ID2");
$arResult['CONSULT_MAIN_LINK'] = COption::GetOptionString($MODULE_ID, "CONSULT_MAIN_LINK");
$arResult['ABOUT_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "ABOUT_IMAGE_ID");
$arResult['ABOUT_DIRECTOR_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "ABOUT_DIRECTOR_IMAGE_ID");
$arResult['ABOUT_COVER_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "ABOUT_COVER_IMAGE_ID");
$arResult['ABOUT_VIDEO_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "ABOUT_VIDEO_IMAGE_ID");
$arResult['SERVICE_VIDEO_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "SERVICE_VIDEO_IMAGE_ID");
$arResult['SERVICE_PHOTO_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "SERVICE_PHOTO_IMAGE_ID");
$arResult['STEP_IMAGE_ID'] = COption::GetOptionString($MODULE_ID, "STEP_IMAGE_ID");
$arResult['YOUTUBE_SERVICE'] = COption::GetOptionString($MODULE_ID, "YOUTUBE_SERVICE");

?>
<form action="" method="post">
    <input type="hidden" name="agm-gadget" value="Y">
    <input type="hidden" name="agm-gadget-id" value="<?=$id?>">
    <?=bitrix_sessid_post()?>
    <h3>Общие настройки сайта</h3>
    <table>
        <tr>
            <td class="adm-detail-content-cell-l">Номер телефона</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="PHONE_MAIN" value="<?php echo $arResult['PHONE_MAIN'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Дополнительный номер телефона (для печати)</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="PHONE_ADD" value="<?php echo $arResult['PHONE_ADD'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Email</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="EMAIL_MAIN" value="<?php echo $arResult['EMAIL_MAIN'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Copyrights</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="COPYRIGHTS" value="<?php echo $arResult['COPYRIGHTS'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Оферта в футере</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="OFFERTA" value="<?php echo $arResult['OFFERTA'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Адрес</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="ADDRESS_MAIN" value="<?php echo $arResult['ADDRESS_MAIN'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Количество теговых категорий, отображаемых до кнопки Показать все</td>
            <td class="adm-detail-content-cell-r"><input type="number" name="TAGS_CATEGORIES_QUANTITY" value="<?php echo $arResult['TAGS_CATEGORIES_QUANTITY'];?>" /></td>
        </tr>
    </table>
    <h3>Социальные сети</h3>
    <table>
        <tr>
            <td class="adm-detail-content-cell-l">VK</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="VKONTAKTE" value="<?php echo $arResult['VKONTAKTE'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">YouTube</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="YOUTUBE" value="<?php echo $arResult['YOUTUBE'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Odnoklassniki</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="ODNOKLASSNIKI" value="<?php echo $arResult['ODNOKLASSNIKI'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Twitter</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="TWITTER" value="<?php echo $arResult['TWITTER'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Telegram</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="TELEGRAM" value="<?php echo $arResult['TELEGRAM'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">WhatsApp</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="WHATSAPP" value="<?php echo $arResult['WHATSAPP'];?>" /></td>
        </tr>
    </table>
    <h3>PDF</h3>
    <table>
        <tr>
            <td class="adm-detail-content-cell-l">Координаты в PDF</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="PDF_COORDINATES" value="<?php echo $arResult['PDF_COORDINATES'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Количество дополнительных картинок в PDF</td>
            <td class="adm-detail-content-cell-r"><input type="number" name="PDF_ADDPHOTOS" value="<?php echo $arResult['PDF_ADDPHOTOS'];?>" /></td>
        </tr>
    </table>
    <h3>Настройки для отдельных страниц</h3>
    <table>
        <tr>
            <td class="adm-detail-content-cell-l">Фон в блоке Отзывы на главной</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="REVIEWS_MAIN_IMAGE_ID"  value="<?php echo $arResult['REVIEWS_MAIN_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"REVIEWS_MAIN_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Фон в блоке Хотите обсудить проект на главной</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="CONSULT_MAIN_IMAGE_ID"  value="<?php echo $arResult['CONSULT_MAIN_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"CONSULT_MAIN_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Картинка в блоке Хотите обсудить проект на главной</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="CONSULT_MAIN_IMAGE_ID2"  value="<?php echo $arResult['CONSULT_MAIN_IMAGE_ID2'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"CONSULT_MAIN_IMAGE2",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Ссылка Смотреть все объекты в блоке Хотите обсудить проект на главной</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="CONSULT_MAIN_LINK" value="<?php echo $arResult['CONSULT_MAIN_LINK'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Фон на странице О нас</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="ABOUT_IMAGE_ID"  value="<?php echo $arResult['ABOUT_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"ABOUT_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Фото директора на странице О нас</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="ABOUT_DIRECTOR_IMAGE_ID"  value="<?php echo $arResult['ABOUT_DIRECTOR_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"ABOUT_DIRECTOR_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Обложка для видео/картика на странице О нас</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="ABOUT_COVER_IMAGE_ID"  value="<?php echo $arResult['ABOUT_COVER_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"ABOUT_COVER_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Видео на странице О нас</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="ABOUT_VIDEO_IMAGE_ID"  value="<?php echo $arResult['ABOUT_VIDEO_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"ABOUT_VIDEO_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Видео/фото на странице Услуг</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="SERVICE_VIDEO_IMAGE_ID"  value="<?php echo $arResult['SERVICE_VIDEO_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"SERVICE_VIDEO_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Фото на странице Услуг</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="SERVICE_PHOTO_IMAGE_ID"  value="<?php echo $arResult['SERVICE_PHOTO_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"SERVICE_PHOTO_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l">Картинка в блоке Ход работы и оплата в проекте</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="STEP_IMAGE_ID"  value="<?php echo $arResult['STEP_IMAGE_ID'];?>" /></td>
        </tr>
        <tr>
            <td class="adm-detail-content-cell-l"></td>
            <td class="adm-detail-content-cell-r">
                <?$APPLICATION->IncludeComponent("bitrix:main.file.input", "",
                    array(
                        "INPUT_NAME"=>"STEP_IMAGE",
                        "MULTIPLE"=>"N",
                        "MODULE_ID"=>"main",
                        "MAX_FILE_SIZE"=>"",
                        "ALLOW_UPLOAD"=>"A",
                        "ALLOW_UPLOAD_EXT"=>""
                    ),
                    false
                );?>
            </td>
        </tr>
        <?/*
        <tr>
            <td class="adm-detail-content-cell-l">Видео на странице Услуг (Youtube)</td>
            <td class="adm-detail-content-cell-r"><input type="text" name="YOUTUBE_SERVICE" value="<?php echo $arResult['YOUTUBE_SERVICE'];?>" /></td>
        </tr>
        */?>
    </table>
    <input type="submit" value="Сохранить" class="adm-btn-save" />
</form>