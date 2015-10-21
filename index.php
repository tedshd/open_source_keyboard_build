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

    html, body {
        position: relative;
        width: 100%;
        height: auto;
        min-height: 100%;
    }

    .h1 div, .h2 div, .h3 div, .h4 div, .h5 div {
        float: left;
        border: solid 7px #ddd;
        border-right: solid 7px #aaa;
        border-bottom: solid 7px #aaa;
        box-sizing: border-box;
        text-align: center;
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
        cursor: pointer;
    }
    .keycap_row div:hover {
        background: #ddd;
    }
</style>
</head>
<body>
    <div class="type_1">
        <div class="h5 keycap_row clearfix">
            <div id="code_192" class="vertical_centering keycap_1u">~</div>
            <div id="code_49" class="vertical_centering keycap_1u">1</div>
            <div id="code_50" class="vertical_centering keycap_1u">2</div>
            <div id="code_51" class="vertical_centering keycap_1u">3</div>
            <div id="code_52" class="vertical_centering keycap_1u">4</div>
            <div id="code_53" class="vertical_centering keycap_1u">5</div>
            <div id="code_54" class="vertical_centering keycap_1u">6</div>
            <div id="code_55" class="vertical_centering keycap_1u">7</div>
            <div id="code_56" class="vertical_centering keycap_1u">8</div>
            <div id="code_57" class="vertical_centering keycap_1u">9</div>
            <div id="code_48" class="vertical_centering keycap_1u">0</div>
            <div id="code_189" class="vertical_centering keycap_1u">-</div>
            <div id="code_187" class="vertical_centering keycap_1u">=</div>
            <div id="code_8" class="vertical_centering keycap_2u">BackSpace</div>
        </div>
        <div class="h4 keycap_row clearfix">
            <div id="code_9" class="vertical_centering keycap_1_5u">Tab</div>
            <div id="code_81" class="vertical_centering keycap_1u">Q</div>
            <div id="code_87" class="vertical_centering keycap_1u">W</div>
            <div id="code_69" class="vertical_centering keycap_1u">E</div>
            <div id="code_82" class="vertical_centering keycap_1u">R</div>
            <div id="code_84" class="vertical_centering keycap_1u">T</div>
            <div id="code_89" class="vertical_centering keycap_1u">Y</div>
            <div id="code_85" class="vertical_centering keycap_1u">U</div>
            <div id="code_73" class="vertical_centering keycap_1u">I</div>
            <div id="code_79" class="vertical_centering keycap_1u">O</div>
            <div id="code_80" class="vertical_centering keycap_1u">P</div>
            <div id="code_219" class="vertical_centering keycap_1u">[</div>
            <div id="code_221" class="vertical_centering keycap_1u">]</div>
            <div id="code_220" class="vertical_centering keycap_1_5u">\</div>
        </div>
        <div class="h3 keycap_row clearfix">
            <div id="code_20" class="vertical_centering keycap_1_75u">Caps Lock</div>
            <div id="code_65" class="vertical_centering keycap_1u">A</div>
            <div id="code_83" class="vertical_centering keycap_1u">S</div>
            <div id="code_68" class="vertical_centering keycap_1u">D</div>
            <div id="code_70" class="vertical_centering keycap_1u">F</div>
            <div id="code_71" class="vertical_centering keycap_1u">G</div>
            <div id="code_72" class="vertical_centering keycap_1u">H</div>
            <div id="code_74" class="vertical_centering keycap_1u">J</div>
            <div id="code_75" class="vertical_centering keycap_1u">K</div>
            <div id="code_76" class="vertical_centering keycap_1u">L</div>
            <div id="code_186" class="vertical_centering keycap_1u">;</div>
            <div id="code_222" class="vertical_centering keycap_1u">'</div>
            <div class="vertical_centering code_13 keycap_2_25u">Enter</div>
        </div>
        <div class="h2 keycap_row clearfix">
            <div class="vertical_centering code_16 keycap_2_25u">Shift</div>
            <div id="code_90" class="vertical_centering keycap_1u">Z</div>
            <div id="code_88" class="vertical_centering keycap_1u">X</div>
            <div id="code_67" class="vertical_centering keycap_1u">C</div>
            <div id="code_86" class="vertical_centering keycap_1u">V</div>
            <div id="code_66" class="vertical_centering keycap_1u">B</div>
            <div id="code_78" class="vertical_centering keycap_1u">N</div>
            <div id="code_77" class="vertical_centering keycap_1u">M</div>
            <div id="code_188" class="vertical_centering keycap_1u">,</div>
            <div id="code_190" class="vertical_centering keycap_1u">.</div>
            <div id="code_191" class="vertical_centering keycap_1u">/</div>
            <div class="vertical_centering code_16 keycap_2_75u">Shift</div>
        </div>
        <div class="h1 keycap_row clearfix">
            <div class="vertical_centering code_17 keycap_1_5u">Ctrl</div>
            <div class="vertical_centering code_91 keycap_1u">Win</div>
            <div class="vertical_centering code_18 keycap_1_25u">Alt</div>
            <div id="code_32" class="vertical_centering keycap_6_5u">Spacebar</div>
            <div class="vertical_centering code_18 keycap_1_25u">Alt</div>
            <div class="vertical_centering code_92 keycap_1u">Win</div>
            <div id="code_93" class="vertical_centering keycap_1u">Menu</div>
            <div class="vertical_centering code_17 keycap_1_5u">Ctrl</div>
        </div>
    </div>

    <br>

    <div class="type_2">
        <div class="h5 keycap_row clearfix">
            <div id="code_192" class="vertical_centering keycap_1u">~</div>
            <div id="code_49" class="vertical_centering keycap_1u">1</div>
            <div id="code_50" class="vertical_centering keycap_1u">2</div>
            <div id="code_51" class="vertical_centering keycap_1u">3</div>
            <div id="code_52" class="vertical_centering keycap_1u">4</div>
            <div id="code_53" class="vertical_centering keycap_1u">5</div>
            <div id="code_54" class="vertical_centering keycap_1u">6</div>
            <div id="code_55" class="vertical_centering keycap_1u">7</div>
            <div id="code_56" class="vertical_centering keycap_1u">8</div>
            <div id="code_57" class="vertical_centering keycap_1u">9</div>
            <div id="code_48" class="vertical_centering keycap_1u">0</div>
            <div id="code_189" class="vertical_centering keycap_1u">-</div>
            <div id="code_187" class="vertical_centering keycap_1u">=</div>
            <div id="code_8" class="vertical_centering keycap_2u">BackSpace</div>
        </div>
        <div class="h4 keycap_row clearfix">
            <div id="code_9" class="vertical_centering keycap_1_5u">Tab</div>
            <div id="code_81" class="vertical_centering keycap_1u">Q</div>
            <div id="code_87" class="vertical_centering keycap_1u">W</div>
            <div id="code_69" class="vertical_centering keycap_1u">E</div>
            <div id="code_82" class="vertical_centering keycap_1u">R</div>
            <div id="code_84" class="vertical_centering keycap_1u">T</div>
            <div id="code_89" class="vertical_centering keycap_1u">Y</div>
            <div id="code_85" class="vertical_centering keycap_1u">U</div>
            <div id="code_73" class="vertical_centering keycap_1u">I</div>
            <div id="code_79" class="vertical_centering keycap_1u">O</div>
            <div id="code_80" class="vertical_centering keycap_1u">P</div>
            <div id="code_219" class="vertical_centering keycap_1u">[</div>
            <div id="code_221" class="vertical_centering keycap_1u">]</div>
            <div id="code_220" class="vertical_centering keycap_1_5u">\</div>
        </div>
        <div class="h3 keycap_row clearfix">
            <div id="code_20" class="vertical_centering keycap_1_75u">Caps Lock</div>
            <div id="code_65" class="vertical_centering keycap_1u">A</div>
            <div id="code_83" class="vertical_centering keycap_1u">S</div>
            <div id="code_68" class="vertical_centering keycap_1u">D</div>
            <div id="code_70" class="vertical_centering keycap_1u">F</div>
            <div id="code_71" class="vertical_centering keycap_1u">G</div>
            <div id="code_72" class="vertical_centering keycap_1u">H</div>
            <div id="code_74" class="vertical_centering keycap_1u">J</div>
            <div id="code_75" class="vertical_centering keycap_1u">K</div>
            <div id="code_76" class="vertical_centering keycap_1u">L</div>
            <div id="code_186" class="vertical_centering keycap_1u">;</div>
            <div id="code_222" class="vertical_centering keycap_1u">'</div>
            <div class="vertical_centering code_13 keycap_2_25u">Enter</div>
        </div>
        <div class="h2 keycap_row clearfix">
            <div class="vertical_centering code_16 keycap_2_25u">Shift</div>
            <div id="code_90" class="vertical_centering keycap_1u">Z</div>
            <div id="code_88" class="vertical_centering keycap_1u">X</div>
            <div id="code_67" class="vertical_centering keycap_1u">C</div>
            <div id="code_86" class="vertical_centering keycap_1u">V</div>
            <div id="code_66" class="vertical_centering keycap_1u">B</div>
            <div id="code_78" class="vertical_centering keycap_1u">N</div>
            <div id="code_77" class="vertical_centering keycap_1u">M</div>
            <div id="code_188" class="vertical_centering keycap_1u">,</div>
            <div id="code_190" class="vertical_centering keycap_1u">.</div>
            <div id="code_191" class="vertical_centering keycap_1u">/</div>
            <div class="vertical_centering code_16 keycap_1_75u">Shift</div>
            <div class="vertical_centering code_192 keycap_1u">~</div>
        </div>
        <div class="h1 keycap_row clearfix">
            <div class="vertical_centering code_17 keycap_1_5u">Ctrl</div>
            <div class="vertical_centering code_91 keycap_1u">Win</div>
            <div class="vertical_centering code_18 keycap_1_25u">Alt</div>
            <div id="code_32" class="vertical_centering keycap_6_5u">Spacebar</div>
            <div class="vertical_centering code_18 keycap_1_25u">Alt</div>
            <div class="vertical_centering code_92 keycap_1u">Win</div>
            <div id="code_93" class="vertical_centering keycap_1u">Menu</div>
            <div class="vertical_centering code_17 keycap_1_5u">Ctrl</div>
        </div>
    </div>
     <div id="key_select" class="pop_up popup_hide">
        <div class="pop_up_close"></div>
        <?php
            include 'keys.php';
        ?>
    </div>
</body>
<script src="js/popup_view.js"></script>
<script>
    var keySelect = new popup();

    $('.keycap_row div').on('click', function (e) {
        console.log(e.target);
        keySelect.show(document.querySelector('#key_select'));
    });
</script>
</html>