<?php
/**
 *
 * @authors Ted Shiu (tedshd@gmail.com)
 * @date    2015-10-21 01:49:15
 *
 */
?>
<?php
$layout = $_GET['layout'];
$layout_name = $_GET['layout'];
if (!$layout_name) {
    $layout_name = 'poke';
}

function buildLayout($layout)
{
    switch ($layout) {
        case 'poke':
            include 'layout_type_1.php';
            break;
        case 'pure':
            include 'layout_type_2.php';
            break;
        default:
           include 'layout_type_1.php';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<title>GH_60</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="stylesheet" href="http://necolas.github.io/normalize.css/3.0.2/normalize.css">
<link rel="stylesheet" href="http://meyerweb.com/eric/tools/css/reset/reset200802.css">
<script src="https://code.jquery.com/jquery-2.1.1.js"></script>
<link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.indigo-pink.min.css">
<link rel="stylesheet" href="css/material.min.css">
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.5/material.min.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<style>
    .clearfix {
        *zoom: 1;
    }
    .clearfix:after {
        display: table;
        content: "";
        line-height: 0;
        clear: both;
    }

    /* text vertical center */
    /* area must display: inline-block & vertical-align: middle */
    .vertical_centering:before {
        content: '';
        display: inline-block;
        vertical-align: middle;
        height: 100%;
    }

    /* area vertical horizon center */
    /* add width & height */
    .v_h_centering {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        margin: auto;
    }

    /* ellipsis text */
    /* add width */
    .ellipsis {
        display: inline-block;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }

    .hide {
        display: none !important;
    }
    .hidden {
        visibility: hidden;
    }
    button {
        margin: 5px;
    }
    .heightlight:after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: solid 2px red;
        box-sizing: border-box;
    }

    html, body {
        position: relative;
        width: 100%;
        height: 100%;
        min-height: 100%;
        display: inline-block;
    }
    .layout_content {
        margin-top: 10px;
    }
    .keycap_1u {
        width: 72px;
        height: 72px;
    }
    .keycap_1_25u {
        width: 90px;
        height: 72px;
    }
    .keycap_1_5u {
        width: 108px;
        height: 72px;
    }
    .keycap_1_75u {
        width: 126px;
        height: 72px;
    }
    .keycap_2u {
        width: 144px;
        height: 72px;
    }
    .keycap_2_25u {
        width: 162px;
        height: 72px;
    }
    .keycap_2_75u {
        width: 198px;
        height: 72px;
    }
    .keycap_6_5u {
        width: 468px;
        height: 72px;
    }
    .keycap_7u {
        width: 504px;
        height: 72px;
    }
    .keycap_row div {
        position: relative;
        float: left;
        border: solid 7px #ddd;
        border-right: solid 7px #aaa;
        border-bottom: solid 7px #aaa;
        box-sizing: border-box;
        text-align: center;
        cursor: pointer;
        word-break: break-all;
    }
    .keycap_row div:hover {
        background: #ddd;
    }
</style>
</head>
<body>
    <!-- Simple header with scrollable tabs. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
            <!-- Title -->
            <span class="mdl-layout-title">
                <?echo "Layout " . $layout_name;?>
            </span>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Download</button>
        </div>
        <!-- Tabs -->
        <div class="mdl-layout__tab-bar mdl-js-ripple-effect">
            <a href="#scroll-tab-1" class="mdl-layout__tab is-active">Layer 1</a>
            <a href="#scroll-tab-2" class="mdl-layout__tab">Layer 2</a>
            <a href="#scroll-tab-3" class="mdl-layout__tab">Layer 3</a>
            <a href="#scroll-tab-4" class="mdl-layout__tab">Layer 4</a>
            <a href="#scroll-tab-5" class="mdl-layout__tab">Layer 5</a>
            <a href="#scroll-tab-6" class="mdl-layout__tab">Layer 6</a>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Layout List</span>
        <nav class="mdl-navigation">
            <a class="mdl-navigation__link" href="index.php?layout=poke">Layout Poke</a>
            <a class="mdl-navigation__link" href="index.php?layout=pure">Layout KBT Pure</a>
        </nav>
    </div>
    <main class="mdl-layout__content">
        <section class="mdl-layout__tab-panel is-active" id="scroll-tab-1">
            <div class="page-content">
                <div class="layout_content">
                <?php buildLayout($layout); ?>
                <br>
                <?php include 'keys.php'; ?>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-2">
            <div class="page-content">
                <div class="layout_content">
                <?php buildLayout($layout); ?>
                <br>
                <?php include 'keys.php'; ?>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-3">
            <div class="page-content">
                <div class="layout_content">
                <?php buildLayout($layout); ?>
                <br>
                <?php include 'keys.php'; ?>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-4">
            <div class="page-content">
                <div class="layout_content">
                <?php buildLayout($layout); ?>
                <br>
                <?php include 'keys.php'; ?>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-5">
            <div class="page-content">
                <div class="layout_content">
                <?php buildLayout($layout); ?>
                <br>
                <?php include 'keys.php'; ?>
                </div>
            </div>
        </section>
        <section class="mdl-layout__tab-panel" id="scroll-tab-6">
            <div class="page-content">
                <div class="layout_content">
                <?php buildLayout($layout); ?>
                <br>
                <?php include 'keys.php'; ?>
                </div>
            </div>
        </section>
    </main>
</div>

</body>
<script src="js/key_map.js"></script>
<script>
    var unFcous;
    $('body').on('click', function (e) {
        if (unFcous) {
            unFcous.removeClass('heightlight');
        }
    });
    $('.keycap_row div').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        if (unFcous) {
            unFcous.removeClass('heightlight');
        }
        unFcous = $(this);
        $(this).addClass('heightlight');
    });
    document.onkeydown = function (e) {
        console.log(e);
        if ($('.heightlight').length) {
            e.preventDefault();
            console.log(e.keyIdentifier);
            $('.heightlight span').html(KEY_MAP[e.keyCode][e.location]);
            unFcous.removeClass('heightlight');
        }
    };
    $('.keys button').on('click', function (e) {
        console.log(e);
        console.log(e.currentTarget);
        var val = e.currentTarget.innerText;
        if ($('.heightlight').length) {
            $('.heightlight span').html(val);
        }
    })
</script>
</html>