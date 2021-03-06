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
                    <div class="header__description">?????????????? ?? ???????????????????????? ?????????????????? ??????????????<a class="city" href="/filials"><?="</a> ??&nbsp;"?>????&nbsp;????????&nbsp;????????????
                    </div>
                </div>
                <div class="header__side -flex -center">
                    <a class="header__telegram" target="_blank"  href="tg://resolve?domain=denis_gg" style="display:none;">?????????????????? ?? Telegram</a>
                    <a class="header__whatsapp" target="_blank" href="https://wa.me/+79266356955" style="display:none;">?????????????????? ?? Whatsapp</a>
                    <div class="header__contacts">
                        <a class="phone" href="tel:84951044557">8 (495) 104-45-57</a>
                        <div class="header__geo"><a href="/filials">?????????????? ????????????</a></div>
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
                        <div>?????? ??????????: <span></span></div><a href="/filials">?????????????? ????????????</a>
                    </div>
                </div>
                <ul class="second-menu-lvl-1">
                    <li>
                        <a class="<?=($url_segment == 'index')?'active':''?>" href="/">??????????????</a>
                    </li>
                    <?/*?>
                    <li class="second-menu-li-1-opened">
                        <a class="<?=($url_segment == 'catalog')?'active':''?> catalog" href="<?=($city->url!='')?'/'.$city->url:''?>/catalog">??????????????</a>
                        <ul class="second-menu-lvl-2">
                            <li>
                                <a class="<?=($url_segment == 'shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/shtabelery#sub-categories">??????????????????</a>
                                <ul class="second-menu-lvl-3">
                                    <li><a class="<?=($url_segment == 'shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/shtabelery-samohodnye#products">?????????????????? ????????????????????</a></li>
                                    <li><a class="<?=($url_segment == 'shtabelery-s-elektropodemom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/shtabelery-s-elektropodemom#products">?????????????????? ?? ??????????????????????????????</a></li>
                                    <li><a class="<?=($url_segment == 'ruchnye-shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/ruchnye-shtabelery#products">???????????? ??????????????????</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment == 'pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/pogruzchiki#sub-categories">????????????????????</a>
                                <ul class="second-menu-lvl-3">
                                    <li><a class="<?=($url_segment == 'dizel-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/dizel-pogruzchiki#products">?????????????????? ????????????????????</a></li>
                                    <li><a class="<?=($url_segment == 'benz-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/benz-pogruzchiki#products">???????????????????? ????????????????????</a></li>
                                    <li><a class="<?=($url_segment == 'elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/elektropogruzchiki#products">??????????????????????????????????</a></li>
                                    <li><a class="<?=($url_segment == 'mini-elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/mini-elektropogruzchiki#products">????????-?????????????????????????????????? </a></li>
                                    <li><a class="<?=($url_segment == 'pogruzchiki-s-bokovym-zahvatom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/pogruzchiki-s-bokovym-zahvatom#products">???????????????????? ?? ?????????????? ????????????????</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment == 'rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/rohli#sub-categories">??????????</a>
                                <ul class="second-menu-lvl-3">
                                    <li><a class="<?=($url_segment == 'gidravlicheskie-telezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/gidravlicheskie-telezhki#products">???????????????????????????? ??????????????</a></li>
                                    <li><a class="<?=($url_segment == 'elektrotelezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/elektrotelezhki#products">????????????????????????</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment == 'richtraki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/c/richtraki#sub-categories">????????????????</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=($city->url!='')?'/'.$city->url:''?>/manufacturer">??????????????????????????</a>
                        <ul class="second-menu-lvl-2">
                            <li>
                                <a class="<?=($url_segment_brand == 'lonking')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking#sub-categories">Lonking</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <a class="<?=($url_segment_brand == 'lonking/pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/pogruzchiki#sub-categories">???????????????????? Lonking </a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'lonking/dizel-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/dizel-pogruzchiki#products">?????????????????? ???????????????????? Lonking</a></li>
                                            <li><a class="<?=($url_segment_brand == 'lonking/benz-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/benz-pogruzchiki#products">???????????????????? ???????????????????? Lonking</a></li>
                                            <li><a class="<?=($url_segment_brand == 'lonking/elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/elektropogruzchiki#products">?????????????????????????? ???????????????????? Lonking</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="<?=($url_segment_brand == 'lonking/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/shtabelery#sub-categories">?????????????????? Lonking </a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'lonking/shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/shtabelery-samohodnye#products">???????????????????? ?????????????????? Lonking</a></li>
                                            <li><a class="<?=($url_segment_brand == 'lonking/shtabelery-s-elektropodemom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/shtabelery-s-elektropodemom#products">?????????????????? ?? ?????????????????????????????? Lonking</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'lonking/rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/rohli#sub-categories">?????????? Lonking </a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'lonking/gidravlicheskie-telezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/gidravlicheskie-telezhki#products">???????????????????????????? ?????????????? Lonking</a></li>
                                            <li><a class="<?=($url_segment_brand == 'lonking/elektrotelezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/lonking/elektrotelezhki#products">???????????????????????? Lonking</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'goodsense')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense#sub-categories">Goodsense</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <a class="<?=($url_segment_brand == 'goodsense/pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/pogruzchiki#sub-categories">???????????????????? Goodsense </a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'goodsense/dizel-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/dizel-pogruzchiki#products">?????????????????? ???????????????????? Goodsense</a></li>
                                            <li><a class="<?=($url_segment_brand == 'goodsense/benz-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/benz-pogruzchiki#products">???????????????????? ???????????????????? Goodsense</a></li>
                                            <li><a class="<?=($url_segment_brand == 'goodsense/elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/elektropogruzchiki#products">?????????????????????????? ???????????????????? Goodsense</a></li>
                                            <li><a class="<?=($url_segment_brand == 'goodsense/bolshegruznye-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/bolshegruznye-pogruzchiki#products">?????????????????????????? ???????????????????? Goodsense</a></li>
                                            <li><a class="<?=($url_segment_brand == 'goodsense/vnedorozhnye-pogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/vnedorozhnye-pogruzchiki#products">?????????????????????? ???????????????????? Goodsense</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'goodsense/richtraki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/goodsense/richtraki#products">???????????????? Goodsense </a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'heli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli#sub-categories">CHL by Heli</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'heli/elektropogruzchiki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/elektropogruzchiki#products">?????????????????????????????????? CHL by Heli</a></li>
                                        </ul>
                                        <a class="<?=($url_segment_brand == 'heli/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/shtabelery#sub-categories">?????????????????? CHL by Heli</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'heli/shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/shtabelery-samohodnye#products">???????????????????? ?????????????????? CHL by Heli</a></li>
                                            <li><a class="<?=($url_segment_brand == 'heli/shtabelery-s-protivovesom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/shtabelery-s-protivovesom#products">?????????????????? ?? ???????????????????????? CHL by Heli</a></li>
        <!--                                    <li><a class="--><?//=($url_segment_brand == 'heli/shtabelery-s-elektropodemom')?'active':''?><!--" href="--><?//=($city->url!='')?'/'.$city->url:''?><!--/b/heli/shtabelery-s-elektropodemom#products">?????????????????? ?? ?????????????????????????????? CHL by Heli</a></li>-->
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'heli/rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/rohli#sub-categories">?????????? CHL by Heli</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'heli/elektrotelezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/elektrotelezhki#products">???????????????????????? CHL by Heli</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'heli/richtraki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/heli/richtraki#products">???????????????? Heli</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'hc')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/hc#sub-categories">HC</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <a class="<?=($url_segment_brand == 'hc/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/hc/shtabelery#sub-categories">?????????????????? HC</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'hc/shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/hc/shtabelery-samohodnye#products">???????????????????? ?????????????????? HC</a></li>
                                        </ul>
                                    </li>
        <!--                            <li><a class="--><?//=($url_segment_brand == 'hc/richtraki')?'active':''?><!--" href="--><?//=($city->url!='')?'/'.$city->url:''?><!--/b/hc/richtraki#products">???????????????? HC</a></li>-->
        <!--                            <li><a class="--><?//=($url_segment_brand == 'hc/rohli')?'active':''?><!--" href="--><?//=($city->url!='')?'/'.$city->url:''?><!--/b/hc/rohli#products">?????????? HC</a></li>-->
                                </ul>
                            </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'noblelift')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift#sub-categories">NobleLift</a>
                                <ul class="second-menu-lvl-3">
                                    <li>
                                        <a class="<?=($url_segment_brand == 'noblelift/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/shtabelery#sub-categories">?????????????????? NobleLift</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'noblelift/shtabelery-samohodnye')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/shtabelery-samohodnye#products">???????????????????? ?????????????????? NobleLift</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'noblelift/rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/rohli#sub-categories">?????????? NobleLift</a>
                                        <ul class="second-menu-lvl-4">
                                            <li><a class="<?=($url_segment_brand == 'noblelift/gidravlicheskie-telezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/gidravlicheskie-telezhki#products">???????????????????????????? ?????????????? NobleLift</a></li>
                                            <li><a class="<?=($url_segment_brand == 'noblelift/elektrotelezhki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/elektrotelezhki#products">???????????????????????? NobleLift</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="<?=($url_segment_brand == 'noblelift/richtraki')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/noblelift/richtraki#products">???????????????? NobleLift</a></li>
                                </ul>
                            </li>
                                                <li>
                                                    <a class="<?=($url_segment_brand == 'prolift')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/prolift">Prolift</a>
                                                    <ul class="second-menu-lvl-3">
                                                        <li><a class="<?=($url_segment_brand == 'prolift/shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/prolift/shtabelery">?????????????????? Prolift</a>
                                                            <ul class="second-menu-lvl-4">
                                                                <li><a class="<?=($url_segment_brand == 'prolift/ruchnye-shtabelery')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/prolift/ruchnye-shtabelery">???????????? ?????????????????? Prolift</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="<?=($url_segment_brand == 'prolift/rohli')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/prolift/rohli">?????????? ProLift</a></li>
                                                    </ul>
                                                </li>
                            <li>
                                <a class="<?=($url_segment_brand == 'mima')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/mima#sub-categories">Mima</a>
                                <ul class="second-menu-lvl-3">
                                    <li><a class="<?=($url_segment_brand == 'mima/pogruzchiki-s-bokovym-zahvatom')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/b/mima/pogruzchiki-s-bokovym-zahvatom#products">???????????????????? Mima ?? ?????????????? ????????????????</a></li>
                                </ul>
                            </li>
                            <!--                    <li>-->
                            <!--                        <a class="--><?//=($url_segment_brand == 'zowel')?'active':''?><!--" href="/--><?//=$city->url?><!--/b/zowel">Zowel</a>-->
                            <!--                        <ul class="second-menu-lvl-3">-->
                            <!--                            <li><a class="--><?//=($url_segment_brand == 'zowel/shtabelery')?'active':''?><!--" href="/--><?//=$city->url?><!--/b/zowel/shtabelery">?????????????????? Zowel</a></li>-->
                            <!--                        </ul>-->
                            <!--                    </li>-->
                        </ul>
                    </li><?*/?>
                    <li>
                        <a class="<?=($url_segment == 'lizing')?'active':''?>" href="/lizing">?????????????? ?? ????????????</a>
                    </li>
                    <li>
                        <a class="<?=($url_segment == 'clients')?'active':''?>" href="/clients">???????? ??????????????</a>
                    </li>
                    <li>
                        <a class="<?=($url_segment == 'parts')?'active':''?>" href="/parts">????????????????</a>
                    </li>
                    <li>
                        <a class="<?=($url_segment == 'contacts')?'active':''?>" href="/contacts">????????????????</a>
                    </li>
                    <li>
                        <a class="<?=($url_segment == 'sale')?'active':''?>" href="<?=($city->url!='')?'/'.$city->url:''?>/sale">??????????</a>
                    </li>
                </ul>
            </div>
        </div>
