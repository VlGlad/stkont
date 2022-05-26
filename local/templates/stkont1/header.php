<?php if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)    die(); ?>

<?php
use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
?>

 <?php $APPLICATION->SetTitle('ST Kont'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?$APPLICATION->ShowTitle();?></title>
    <?$APPLICATION->ShowHead();?>
    <?
    $asset->addJs(SITE_TEMPLATE_PATH."/js/scripts.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/other.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/change_load_gif.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/jquery.maskedinput.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/jquery.fancybox.min.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/jquery-ui-1.8.19.custom.min.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/jquery.ui.touch-punch.min.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/slick.min.js");
    $asset->addJs(SITE_TEMPLATE_PATH."/js/remodal.min.js");

    //$asset->addJs(SITE_TEMPLATE_PATH.);
    $asset->addCss(SITE_TEMPLATE_PATH."/css/main.css");
    $asset->addCss(SITE_TEMPLATE_PATH."/css/ion.rangeSlider.css");
    $asset->addCss(SITE_TEMPLATE_PATH."/css/other.css");
    $asset->addCss(SITE_TEMPLATE_PATH."/css/custom_preloader_style.css");
    ?>
    
    <link type="image/png" rel="icon" href="<?=SITE_TEMPLATE_PATH?>/img/favicon.ico">
    <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

    <script>
        $('#price').draggable();
        $('#price-2').draggable();
        $('#price2').draggable();
        $('#price2-2').draggable();
    </script>

    
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/ion.rangeSlider.css">
    <link rel="stylesheet" href="/css/other.css"/>

</head>


<body>
    <?debug(SITE_TEMPLATE_PATH."/js/scripts.js");?>
    <div id="panel"><?$APPLICATION->ShowPanel();?></div>
    <div class="wrapper">
        <header class="header">
            <div class="container -flex -just-btw -center">
                <div class="header__side logo-side -flex -center">
                    <div class="header__toggler">
                        <span></span>
                    </div>
                    <a href="/" class="logo"><img src="<?=SITE_TEMPLATE_PATH?>/img/logo.svg" alt=""></a>
                    <div class="header__description">Продажа и обслуживание складской техники<a class="city" href="/filials"><?="</a> и&nbsp;"?>по&nbsp;всей&nbsp;России
                    </div>
                </div>
                <div class="header__side -flex -center">
                    <a class="header__telegram" target="_blank"  href="tg://resolve?domain=denis_gg" style="display:none;">Связаться в Telegram</a>
                    <a class="header__whatsapp" target="_blank" href="https://wa.me/+79266356955" style="display:none;">Связаться в Whatsapp</a>
                    <div class="header__contacts">
                        <a class="phone" href="tel:84951044557">8 (495) 104-45-57</a>
                        <div class="header__geo"><a href="/filials">Сменить филиал</a></div>
                    </div>
                </div>
            </div>
        </header>

        <div class="second-menu">
            <div class="second-menu-scroll">
                <div class="second-menu-close">
                    <span></span>
                </div>
                <div class="second-menu__city__content">
                    <div class="second-menu__city">
                        <div>Ваш город: <span></span></div><a href="/filials">Выбрать другой</a>
                    </div>
                </div>
                <ul class="second-menu-lvl-1">
                    <li>
                        <a class="<?=($url_segment == 'index')?'active':''?>" href="/">Главная</a>
                    </li>
                    <?/*?>
                    <li class="second-menu-li-1-opened">
                        <a class="<?=($url_segment == 'catalog')?'active':''?> catalog" href="<?=($city->url!='')?'/'.$city->url:''?>/catalog">Каталог</a>
                        <ul class="second-menu-lvl-2">
                            <li>
                                <a class="<?=($url_segment == 'shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/shtabelery#sub-categories">Штабелеры</a>
                                <ul class="second-menu-lvl-3">
                                    <li><a class="<?=($url_segment == 'shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/shtabelery-samohodnye#products">Штабелеры самоходные</a></li>
                                    <li><a class="<?=($url_segment == 'shtabelery-s-elektropodemom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/shtabelery-s-elektropodemom#products">Штабелеры с электроподъемом</a></li>
                                    <li><a class="<?=($url_segment == 'ruchnye-shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/ruchnye-shtabelery#products">Ручные штабелеры</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment == 'pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/pogruzchiki#sub-categories">Погрузчики</a>
                                <ul class="second-menu-lvl-3">
                                    <li><a class="<?=($url_segment == 'dizel-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/dizel-pogruzchiki#products">Дизельные погрузчики</a></li>
                                    <li><a class="<?=($url_segment == 'benz-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/benz-pogruzchiki#products">Бензиновые погрузчики</a></li>
                                    <li><a class="<?=($url_segment == 'elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/elektropogruzchiki#products">Электропогрузчики</a></li>
                                    <li><a class="<?=($url_segment == 'mini-elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/mini-elektropogruzchiki#products">Мини-электропогрузчики </a></li>
                                    <li><a class="<?=($url_segment == 'pogruzchiki-s-bokovym-zahvatom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/pogruzchiki-s-bokovym-zahvatom#products">Погрузчики с боковым захватом</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment == 'rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/rohli#sub-categories">Рохли</a>
                                <ul class="second-menu-lvl-3">
                                    <li><a class="<?=($url_segment == 'gidravlicheskie-telezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/gidravlicheskie-telezhki#products">Гидравлические тележки</a></li>
                                    <li><a class="<?=($url_segment == 'elektrotelezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/elektrotelezhki#products">Электророхли</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment == 'richtraki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/richtraki#sub-categories">Ричтраки</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=($city->url!='')?'/'.$city->url:''?>/manufacturer">Производители</a>
                        <ul class="second-menu-lvl-2">
                            <li>
                                <a class="<?=($url_segment_brand == 'lonking')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking#sub-categories">Lonking</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <a class="<?=($url_segment_brand == 'lonking/pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/pogruzchiki#sub-categories">Погрузчики Lonking </a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'lonking/dizel-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/dizel-pogruzchiki#products">Дизельные погрузчики Lonking</a></li>
                                            <li><a class="<?=($url_segment_brand == 'lonking/benz-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/benz-pogruzchiki#products">Бензиновые погрузчики Lonking</a></li>
                                            <li><a class="<?=($url_segment_brand == 'lonking/elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/elektropogruzchiki#products">Электрические погрузчики Lonking</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="<?=($url_segment_brand == 'lonking/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/shtabelery#sub-categories">Штабелеры Lonking </a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'lonking/shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/shtabelery-samohodnye#products">Самоходные штабелеры Lonking</a></li>
                                            <li><a class="<?=($url_segment_brand == 'lonking/shtabelery-s-elektropodemom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/shtabelery-s-elektropodemom#products">Штабелеры с электроподъемом Lonking</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'lonking/rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/rohli#sub-categories">Рохли Lonking </a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'lonking/gidravlicheskie-telezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/gidravlicheskie-telezhki#products">Гидравлические тележки Lonking</a></li>
                                            <li><a class="<?=($url_segment_brand == 'lonking/elektrotelezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/elektrotelezhki#products">Электророхли Lonking</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'goodsense')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense#sub-categories">Goodsense</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <a class="<?=($url_segment_brand == 'goodsense/pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/pogruzchiki#sub-categories">Погрузчики Goodsense </a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'goodsense/dizel-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/dizel-pogruzchiki#products">Дизельные погрузчики Goodsense</a></li>
                                            <li><a class="<?=($url_segment_brand == 'goodsense/benz-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/benz-pogruzchiki#products">Бензиновые погрузчики Goodsense</a></li>
                                            <li><a class="<?=($url_segment_brand == 'goodsense/elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/elektropogruzchiki#products">Электрические погрузчики Goodsense</a></li>
                                            <li><a class="<?=($url_segment_brand == 'goodsense/bolshegruznye-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/bolshegruznye-pogruzchiki#products">Большегрузные погрузчики Goodsense</a></li>
                                            <li><a class="<?=($url_segment_brand == 'goodsense/vnedorozhnye-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/vnedorozhnye-pogruzchiki#products">Внедорожные погрузчики Goodsense</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'goodsense/richtraki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/richtraki#products">Ричтраки Goodsense </a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'heli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli#sub-categories">CHL by Heli</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'heli/elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/elektropogruzchiki#products">Электропогрузчики CHL by Heli</a></li>
                                        </ul>
                                        <a class="<?=($url_segment_brand == 'heli/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/shtabelery#sub-categories">Штабелеры CHL by Heli</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'heli/shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/shtabelery-samohodnye#products">Самоходные штабелеры CHL by Heli</a></li>
                                            <li><a class="<?=($url_segment_brand == 'heli/shtabelery-s-protivovesom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/shtabelery-s-protivovesom#products">Штабелеры с противовесом CHL by Heli</a></li>
        <!--                                    <li><a class="--><?//=($url_segment_brand == 'heli/shtabelery-s-elektropodemom')?'active':''?><!--" href="--><?//=($city->url!='')?'/'.$city->url:''?><!--/b/heli/shtabelery-s-elektropodemom#products">Штабелеры с электроподъемом CHL by Heli</a></li>-->
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'heli/rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/rohli#sub-categories">Рохли CHL by Heli</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'heli/elektrotelezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/elektrotelezhki#products">Электророхли CHL by Heli</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'heli/richtraki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/richtraki#products">Ричтраки Heli</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'hc')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/hc#sub-categories">HC</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <a class="<?=($url_segment_brand == 'hc/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/hc/shtabelery#sub-categories">Штабелеры HC</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'hc/shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/hc/shtabelery-samohodnye#products">Самоходные штабелеры HC</a></li>
                                        </ul>
                                    </li>
        <!--                            <li><a class="--><?//=($url_segment_brand == 'hc/richtraki')?'active':''?><!--" href="--><?//=($city->url!='')?'/'.$city->url:''?><!--/b/hc/richtraki#products">Ричтраки HC</a></li>-->
        <!--                            <li><a class="--><?//=($url_segment_brand == 'hc/rohli')?'active':''?><!--" href="--><?//=($city->url!='')?'/'.$city->url:''?><!--/b/hc/rohli#products">Рохли HC</a></li>-->
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'noblelift')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift#sub-categories">NobleLift</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <a class="<?=($url_segment_brand == 'noblelift/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/shtabelery#sub-categories">Штабелеры NobleLift</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'noblelift/shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/shtabelery-samohodnye#products">Самоходные штабелеры NobleLift</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'noblelift/rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/rohli#sub-categories">Рохли NobleLift</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'noblelift/gidravlicheskie-telezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/gidravlicheskie-telezhki#products">Гидравлические тележки NobleLift</a></li>
                                            <li><a class="<?=($url_segment_brand == 'noblelift/elektrotelezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/elektrotelezhki#products">Электророхли NobleLift</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'noblelift/richtraki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/richtraki#products">Ричтраки NobleLift</a></li>
                                </ul>
                            </li>
                                                <li>
                                                    <a class="<?=($url_segment_brand == 'prolift')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/prolift">Prolift</a>
                                                    <ul class="second-menu-lvl-3">
                                                        <li><a class="<?=($url_segment_brand == 'prolift/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/prolift/shtabelery">Штабелеры Prolift</a>
                                                            <ul class="second-menu-lvl-4">
                                                                <li><a class="<?=($url_segment_brand == 'prolift/ruchnye-shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/prolift/ruchnye-shtabelery">Ручные штабелеры Prolift</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="<?=($url_segment_brand == 'prolift/rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/prolift/rohli">Рохли ProLift</a></li>
                                                    </ul>
                                                </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'mima')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/mima#sub-categories">Mima</a>
                                <ul class="second-menu-lvl-3">
                                    <li><a class="<?=($url_segment_brand == 'mima/pogruzchiki-s-bokovym-zahvatom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/mima/pogruzchiki-s-bokovym-zahvatom#products">Погрузчики Mima с боковым захватом</a></li>
                                </ul>
                            </li>
                            <!--                    <li>-->
                            <!--                        <a class="--><?//=($url_segment_brand == 'zowel')?'active':''?><!--" href="/--><?//=$city->url?><!--/b/zowel">Zowel</a>-->
                            <!--                        <ul class="second-menu-lvl-3">-->
                            <!--                            <li><a class="--><?//=($url_segment_brand == 'zowel/shtabelery')?'active':''?><!--" href="/--><?//=$city->url?><!--/b/zowel/shtabelery">Штабелеры Zowel</a></li>-->
                            <!--                        </ul>-->
                            <!--                    </li>-->
                        </ul>
                    </li><?*/?>
                    <li>
                        <a class="<?=($url_segment == 'lizing')?'active':''?>" href="/lizing">Техника в лизинг</a>
                    </li>
                    <li>
                        <a class="<?=($url_segment == 'clients')?'active':''?>" href="/clients">Наши клиенты</a>
                    </li>
                    <li>
                        <a class="<?=($url_segment == 'parts')?'active':''?>" href="/parts">Запчасти</a>
                    </li>
                    <li>
                        <a class="<?=($url_segment == 'contacts')?'active':''?>" href="/contacts">Контакты</a>
                    </li>
                    <li>
                        <a class="<?=($url_segment == 'sale')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/sale">Акции</a>
                    </li>
                </ul>
            </div>
        </div>
