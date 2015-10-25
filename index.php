<?php
/**
 *
 * @authors Ted Shiu (tedshd@gmail.com)
 * @date    2015-10-21 01:49:15
 *
 */
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
<link href="css/popup_view.css" rel="stylesheet">
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
        height: auto;
        min-height: 100%;
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
    <div class="type_1">
        <div class="h5 keycap_row clearfix">
            <div class="keycap keycap_1u">
                <span>~</span>
            </div>
            <div class="keycap keycap_1u">
                <span>1</span>
            </div>
            <div class="keycap keycap_1u">
                <span>2</span>
            </div>
            <div class="keycap keycap_1u">
                <span>3</span>
            </div>
            <div class="keycap keycap_1u">
                <span>4</span>
            </div>
            <div class="keycap keycap_1u">
                <span>5</span>
            </div>
            <div class="keycap keycap_1u">
                <span>6</span>
            </div>
            <div class="keycap keycap_1u">
                <span>7</span>
            </div>
            <div class="keycap keycap_1u">
                <span>8</span>
            </div>
            <div class="keycap keycap_1u">
                <span>9</span>
            </div>
            <div class="keycap keycap_1u">
                <span>0</span>
            </div>
            <div class="keycap keycap_1u">
                <span>-</span>
            </div>
            <div class="keycap keycap_1u">
                <span>=</span>
            </div>
            <div class="keycap keycap_2u">
                <span>BackSpace</span>
            </div>
        </div>
        <div class="h4 keycap_row clearfix">
            <div class="keycap keycap_1_5u">
                <span>Tab</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Q</span>
            </div>
            <div class="keycap keycap_1u">
                <span>W</span>
            </div>
            <div class="keycap keycap_1u">
                <span>E</span>
            </div>
            <div class="keycap keycap_1u">
                <span>R</span>
            </div>
            <div class="keycap keycap_1u">
                <span>T</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Y</span>
            </div>
            <div class="keycap keycap_1u">
                <span>U</span>
            </div>
            <div class="keycap keycap_1u">
                <span>I</span>
            </div>
            <div class="keycap keycap_1u">
                <span>O</span>
            </div>
            <div class="keycap keycap_1u">
                <span>P</span>
            </div>
            <div class="keycap keycap_1u">
                <span>[</span>
            </div>
            <div class="keycap keycap_1u">
                <span>]</span>
            </div>
            <div class="keycap keycap_1_5u">
                <span>\</span>
            </div>
        </div>
        <div class="h3 keycap_row clearfix">
            <div class="keycap keycap_1_75u">
                <span>Caps Lock</span>
            </div>
            <div class="keycap keycap_1u">
                <span>A</span>
            </div>
            <div class="keycap keycap_1u">
                <span>S</span>
            </div>
            <div class="keycap keycap_1u">
                <span>D</span>
            </div>
            <div class="keycap keycap_1u">
                <span>F</span>
            </div>
            <div class="keycap keycap_1u">
                <span>G</span>
            </div>
            <div class="keycap keycap_1u">
                <span>H</span>
            </div>
            <div class="keycap keycap_1u">
                <span>J</span>
            </div>
            <div class="keycap keycap_1u">
                <span>K</span>
            </div>
            <div class="keycap keycap_1u">
                <span>L</span>
            </div>
            <div class="keycap keycap_1u">
                <span>;</span>
            </div>
            <div class="keycap keycap_1u">
                <span>'</span>
            </div>
            <div class="keycap keycap_2_25u">
                <span>Enter</span>
            </div>
        </div>
        <div class="h2 keycap_row clearfix">
            <div class="keycap keycap_2_25u">
                <span>Shift</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Z</span>
            </div>
            <div class="keycap keycap_1u">
                <span>X</span>
            </div>
            <div class="keycap keycap_1u">
                <span>C</span>
            </div>
            <div class="keycap keycap_1u">
                <span>V</span>
            </div>
            <div class="keycap keycap_1u">
                <span>B</span>
            </div>
            <div class="keycap keycap_1u">
                <span>N</span>
            </div>
            <div class="keycap keycap_1u">
                <span>M</span>
            </div>
            <div class="keycap keycap_1u">
                <span>,</span>
            </div>
            <div class="keycap keycap_1u">
                <span>.</span>
            </div>
            <div class="keycap keycap_1u">
                <span>/</span>
            </div>
            <div class="keycap keycap_2_75u">
                <span>Shift</span>
            </div>
        </div>
        <div class="h1 keycap_row clearfix">
            <div class="keycap keycap_1_5u">
                <span>Ctrl</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Win</span>
            </div>
            <div class="keycap keycap_1_25u">
                <span>Alt</span>
            </div>
            <div class="keycap keycap_6_5u">
                <span>Spacebar</span>
            </div>
            <div class="keycap keycap_1_25u">
                <span>Alt</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Win</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Menu</span>
            </div>
            <div class="keycap keycap_1_5u">
                <span>Ctrl</span>
            </div>
        </div>
    </div>

    <br>

    <div class="type_2">
        <div class="h5 keycap_row clearfix">
            <div class="keycap keycap_1u">
                <span>~</span>
            </div>
            <div class="keycap keycap_1u">
                <span>1</span>
            </div>
            <div class="keycap keycap_1u">
                <span>2</span>
            </div>
            <div class="keycap keycap_1u">
                <span>3</span>
            </div>
            <div class="keycap keycap_1u">
                <span>4</span>
            </div>
            <div class="keycap keycap_1u">
                <span>5</span>
            </div>
            <div class="keycap keycap_1u">
                <span>6</span>
            </div>
            <div class="keycap keycap_1u">
                <span>7</span>
            </div>
            <div class="keycap keycap_1u">
                <span>8</span>
            </div>
            <div class="keycap keycap_1u">
                <span>9</span>
            </div>
            <div class="keycap keycap_1u">
                <span>0</span>
            </div>
            <div class="keycap keycap_1u">
                <span>-</span>
            </div>
            <div class="keycap keycap_1u">
                <span>=</span>
            </div>
            <div class="keycap keycap_2u">
                <span>BackSpace</span>
            </div>
        </div>
        <div class="h4 keycap_row clearfix">
            <div class="keycap keycap_1_5u">
                <span>Tab</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Q</span>
            </div>
            <div class="keycap keycap_1u">
                <span>W</span>
            </div>
            <div class="keycap keycap_1u">
                <span>E</span>
            </div>
            <div class="keycap keycap_1u">
                <span>R</span>
            </div>
            <div class="keycap keycap_1u">
                <span>T</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Y</span>
            </div>
            <div class="keycap keycap_1u">
                <span>U</span>
            </div>
            <div class="keycap keycap_1u">
                <span>I</span>
            </div>
            <div class="keycap keycap_1u">
                <span>O</span>
            </div>
            <div class="keycap keycap_1u">
                <span>P</span>
            </div>
            <div class="keycap keycap_1u">
                <span>[</span>
            </div>
            <div class="keycap keycap_1u">
                <span>]</span>
            </div>
            <div class="keycap keycap_1_5u">
                <span>\</span>
            </div>
        </div>
        <div class="h3 keycap_row clearfix">
            <div class="keycap keycap_1_75u">
                <span>Caps Lock</span>
            </div>
            <div class="keycap keycap_1u">
                <span>A</span>
            </div>
            <div class="keycap keycap_1u">
                <span>S</span>
            </div>
            <div class="keycap keycap_1u">
                <span>D</span>
            </div>
            <div class="keycap keycap_1u">
                <span>F</span>
            </div>
            <div class="keycap keycap_1u">
                <span>G</span>
            </div>
            <div class="keycap keycap_1u">
                <span>H</span>
            </div>
            <div class="keycap keycap_1u">
                <span>J</span>
            </div>
            <div class="keycap keycap_1u">
                <span>K</span>
            </div>
            <div class="keycap keycap_1u">
                <span>L</span>
            </div>
            <div class="keycap keycap_1u">
                <span>;</span>
            </div>
            <div class="keycap keycap_1u">
                <span>'</span>
            </div>
            <div class="keycap keycap_2_25u">
                <span>Enter</span>
            </div>
        </div>
        <div class="h2 keycap_row clearfix">
            <div class="keycap keycap_2_25u">
                <span>Shift</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Z</span>
            </div>
            <div class="keycap keycap_1u">
                <span>X</span>
            </div>
            <div class="keycap keycap_1u">
                <span>C</span>
            </div>
            <div class="keycap keycap_1u">
                <span>V</span>
            </div>
            <div class="keycap keycap_1u">
                <span>B</span>
            </div>
            <div class="keycap keycap_1u">
                <span>N</span>
            </div>
            <div class="keycap keycap_1u">
                <span>M</span>
            </div>
            <div class="keycap keycap_1u">
                <span>,</span>
            </div>
            <div class="keycap keycap_1u">
                <span>.</span>
            </div>
            <div class="keycap keycap_1u">
                <span>/</span>
            </div>
            <div class="keycap keycap_1_75u">
                <span>Shift</span>
            </div>
            <div class="keycap keycap_1u">
                <span>~</span>
            </div>
        </div>
        <div class="h1 keycap_row clearfix">
            <div class="keycap keycap_1_5u">
                <span>Ctrl</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Win</span>
            </div>
            <div class="keycap keycap_1_25u">
                <span>Alt</span>
            </div>
            <div class="keycap keycap_6_5u">
                <span>Spacebar</span>
            </div>
            <div class="keycap keycap_1_25u">
                <span>Alt</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Win</span>
            </div>
            <div class="keycap keycap_1u">
                <span>Menu</span>
            </div>
            <div class="keycap keycap_1_5u">
                <span>Ctrl</span>
            </div>
        </div>
    </div>
     <div id="key_select" class="pop_up popup_hide">
        <div class="pop_up_close"></div>
        <?php
            // include 'keys.php';
        ?>
    </div>
</body>
<!-- <script src="js/popup_view.js"></script> -->
<script src="js/key_map.js"></script>
<script>
    // var keySelect = new popup();
    var unFcous;
    $('body').on('click', function (e) {
        if (unFcous) {
            unFcous.removeClass('heightlight');
        }
    });
    $('.keycap_row div').on('click', function (e) {
        e.stopPropagation();
        e.preventDefault();
        console.log(e.target);
        if (unFcous) {
            unFcous.removeClass('heightlight');
        }
        unFcous = $(this);
        $(this).addClass('heightlight');
    //     keySelect.show(document.querySelector('#key_select'));
    });
    document.onkeydown = function(e) {
        console.log(e);
        if ($('.heightlight').length) {
            e.preventDefault();
            console.log(e.keyIdentifier);
            $('.heightlight span').html(KEY_MAP[e.keyCode][e.location]);
            unFcous.removeClass('heightlight');
            // KEY_MAP[e.keyCode][e.keyLocation]
        }
    };
</script>
</html>