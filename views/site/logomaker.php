<?php
use yii\widgets\ActiveForm;
?>

<div class="icons">
    <div id="tabs">
        <ul>
            <li><a href="#background">Background</a></li>
            <li><a href="#vectors">Icons</a></li>
            <li><a href="#images">Images (vector)</a></li>
            <li><a href="#text">Text</a></li>
        </ul>
        <div id="background">
            <div class="transparentbg">Set backgrount to transparent</div>
            <input type="color" class="bg-colorpicker">
            <ul>
                <li>
                    <img class="bgimg" src="img/10-dithering-opt.jpg" alt="">
                </li>
                <li>
                    <img class="bgimg" src="img/2511289_GFurDeb_GScpebr.jpg" alt="">
                </li>
                <li>
                    <img class="bgimg" src="img/canberra_hero_image_JiMVvYU.jpg" alt="">
                </li>
                <li>
                    <img class="bgimg" src="img/embed2.jpg" alt="">
                </li>
            </ul>
        </div>
        <div id="images">
            <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

            <?= $form->field($model, 'imageFile')->fileInput() ?>

            <button>Submit</button>

            <?php ActiveForm::end() ?>

            <?php
            foreach ($vectos as $vector){
             ?>
                <div class="draggable">
                    <div class="icon">
                        <img src="vectors/<?=$vector?>" alt="">
                    </div>
                    <div class="icon-close">X</div>
                    <input type="color" class="colorpicker">
                </div>
            <?php
            }
            ?>


            <div class="draggable">
                <div class="icon">
                    <img src="vectors/OM6QGG0.jpg" alt="">
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <img src="vectors/987.jpg" alt="">
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <img src="vectors/preview.jpg" alt="">
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
        </div>
        <div id="vectors">
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-camera-retro fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-bath fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-address-book fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-bandcamp fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-thermometer-full fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-area-chart fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-anchor fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-assistive-listening-systems fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-battery-three-quarters fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-bullhorn fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-car fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-blind fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-cube fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-eye fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-gift fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-gamepad fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-glass fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-picture-o fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-life-ring fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-motorcycle fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-graduation-cap fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-television fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-hand-o-right fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-bicycle fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-pie-chart fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-facebook fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-vine fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-ambulance fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-stethoscope fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-wheelchair fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-glass fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-music fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-envelope-o fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-heart fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-user fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-film fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-search-plus fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
            <div class="draggable">
                <div class="icon">
                    <i class="fa fa-signal fa-lg"></i>
                </div>
                <div class="icon-close">X</div>
                <input type="color" class="colorpicker">
            </div>
        </div>
        <div id="text">
            <div class="addNewText">Add new text</div>


            <div class="newText original">
                <select class="fonts">
                    <option value="'Bellefair', serif">Bellefair</option>
                    <option value="'Artifika', serif">Artifika</option>
                </select>
                <div class="slider">
                    <div class="custom-handle ui-slider-handle"></div>
                </div>

                <input type="text" value="Enter Your text here" class="edittext">
                <div class="removetext">Remove</div>
            </div>
        </div>
    </div>
    <div class="convert">Preview and export as png or jpg</div>
</div>
<div class="logomaker">
    <div id="droppable"></div>
</div>


<div id="convert-popup">
    <div class="tojpg">To jpg</div>
    <div class="topng">To png</div>
</div>
<div class="overlay"></div>

<style>
    #convert-popup{
        display: none;
        background: black;
        position: fixed;
        width: 10%;
        /*height:2%;*/
        text-align: center;
        /*line-height: 200px;*/
        left: 45%;
        top: 49%;
        z-index: 999999;
        padding-bottom: 10px;
    }
    .overlay{
        display: none;
        position: fixed;
        background: rgba(144, 144, 144, 0.8);
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        z-index: 99999;
    }
    .tojpg, .topng{
        cursor: pointer;
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        width: 100%;
        margin-top: 10px;
    }
</style>

