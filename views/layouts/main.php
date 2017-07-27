<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <!--        <p class="pull-right">--><? //= Yii::powered() ?><!--</p>-->
    </div>
</footer>

<?php $this->endBody() ?>
</body>
<script src="html2canvas.js"></script>
<link href="https://fonts.googleapis.com/css?family=Artifika|Bellefair" rel="stylesheet">
<link rel="stylesheet" href="font-awesome/css/font-awesome.css">
<!--font-family: 'Bellefair', serif;-->
<!--font-family: 'Artifika', serif;-->
<script>
    $(document).ready(function () {
        $(".draggable").draggable({helper: "clone"});
//        $(".draggable").resizable();

        var zIndex = 999;

        $("#tabs").tabs().addClass("ui-tabs-vertical ui-helper-clearfix");
        $("#tabs li").removeClass("ui-corner-top").addClass("ui-corner-left");


        $("#droppable").droppable({
            drop: function (event, ui) {
                $(this)
                    .addClass("ui-state-highlight")
                    .find("p")
                    .html("Dropped!");
//                console.log($(ui.draggable).hasClass("cloned"));
                if (!$(ui.draggable).hasClass("cloned")) {
                    var newDraggable = $(ui.draggable).clone();
                    $(newDraggable).resizable({
                        aspectRatio: 16 / 16
                    });
                    $(newDraggable).draggable();
                    $(newDraggable).addClass("dropped");
                    $(newDraggable).addClass("cloned");
                    $(this).append(newDraggable);
                    $(newDraggable).mouseout(function () {
                        $(this).find('.icon-close').css({
                            'display': 'none'
                        });
                        $(this).removeClass("addBroder");
                    });
                    $(newDraggable).mouseover(function () {
                        if ($(this).hasClass("dropped")) {
                            $(this).find('.icon-close').css({
                                'display': 'block'
                            });
                            $(this).addClass("addBroder");
                        }
                    });
                    $(newDraggable).click(function () {
                        $(this).css({
                            'z-index': zIndex
                        });
                        zIndex++;
                    });
                    $(".icon-close", newDraggable).click(function (event) {
                        $(this).parent().remove()
                    });
                }
            }
        });


        $('.convert').click(function () {
            html2canvas($("#droppable"), {
                onrendered: function (canvas) {
                    console.log(canvas);
//                $("body").append(canvas);
                    window.location = canvas.toDataURL("image/png");

                },
                allowTaint: true
            });
        });

        function makeid() {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < 5; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
        }

        $('.addNewText').click(function () {
            var newId = makeid();
            $("#droppable").append("<div id='" + newId + "' class='text cloned'></div>");
            $("#" + newId).draggable();
            $("#" + newId).html('Edit Your text here');

            //clone text editor
            var newTextClone = $(".newText.original").clone();
            newTextClone.removeClass('original');
            newTextClone.attr('myid', newId);
            $("#text").append(newTextClone)

        });

        $(document).on('change', '.fonts', function () {
            var myId = $(this).parent().attr('myid');
            $('#' + myId).css("font-family", $(this).find(":selected").val());

        });

        $(document).on('change', '.fonts-size', function () {
            var myId = $(this).parent().attr('myid');

            $('#' + myId).css("font-size", $(this).find(":selected").val() + "px");
        });

        $(document).on('keyup', '.edittext', function () {
            var myId = $(this).parent().attr('myid');
            $("#" + myId).html($(this).val());
        });

        $(document).on('mouseover', '.text', function () {
            $(this).addClass("addBroder");
        });
        $(document).on('mouseout', '.text', function () {
            $(this).removeClass("addBroder");
        });

        $(document).on('mouseout', '.text', function () {
            $(this).css({
                'z-index': zIndex
            });
            zIndex++;
        });

        $(document).on('click', '.removetext', function () {
            var myId = $(this).parent().attr('myid');
            $("#" + myId).remove();
            $(this).parent().remove();
        });

        $(document).on('resize', '.ui-resizable', function(){
           var height = $(this).height();
           var width  = $(this).width();

//           console.log(width)

           $('.fa', this).css('font-size', height + "px");
           $('.fa', this).css('line-height', height + "px");

        });


    });


</script>
<style>
    .draggable{
        display: block;
        width: 20px;
    }

    .ui-tabs-vertical {
        width: 55em;
    }

    .ui-tabs-vertical .ui-tabs-nav {
        padding: .2em .1em .2em .2em;
        float: left;
        width: 12em;
    }

    .ui-tabs-vertical .ui-tabs-nav li {
        clear: left;
        width: 100%;
        border-bottom-width: 1px !important;
        border-right-width: 0 !important;
        margin: 0 -1px .2em 0;
    }

    .ui-tabs-vertical .ui-tabs-nav li a {
        display: block;
    }

    .ui-tabs-vertical .ui-tabs-nav li.ui-tabs-active {
        padding-bottom: 0;
        padding-right: .1em;
        border-right-width: 1px;
    }

    .ui-tabs-vertical .ui-tabs-panel {
        padding: 1em;
        float: right;
        width: 40em;
    }

    .newText.original {
        display: none;
    }

    #tabs {
        float: left;
        width: 100%;
    }

    #tabs ul {
        width: 100%;
        float: left;
        padding: 0;
        margin: 0;
    }

    #backgrounds {
        width: auto;
    }

    #text {
        width: 100%;
    }

    #text input, #text select {
        width: 100%;
    }

    #droppable {
        width: 800px;
        height: 800px;
        background: silver;
    }

    .icon {
        width: 100%;
        height: 100%;
    }

    .icon img {
        width: 100%;
        height: 100%;
        /*padding: 5px;*/
    }

    .icon-close {
        position: absolute;
        right: 0;
        top: 0;
        color: white;
        display: none;
    }

    .addBroder {
        border: dotted 1px black;
    }

    .icons {
        float: left;
        width: 20%;
    }

    .logomaker {
        float: right;
        width: 80%;
    }

    .cloned {
        position: relative;
    }

</style>
</html>
<?php $this->endPage() ?>
