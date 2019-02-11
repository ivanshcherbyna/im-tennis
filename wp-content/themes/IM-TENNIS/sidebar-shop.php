<?php
/**
 * Created by PhpStorm.
 * User: ishcherbyna
 * Date: 04.02.2019
 * Time: 23:26
 */
?>
<div class='d-flex flex-wrap mb-2'><!--NEED TO COMPLEETE CODE... THIS IS HTML TEMPLATE... -->
    <span class="fiter-tab d-flex align-items-center">ANDRO <span class="fiter-tab-close ml-2"></span></span>
    <span class="fiter-tab d-flex align-items-center">ARMSTRONG <span class="fiter-tab-close ml-2"></span></span>
    <span class="fiter-tab d-flex align-items-center">Только товары в наличии <span class="fiter-tab-close ml-2"></span></span>
</div>
<form action="" class='filter-form'>
    <div class="col-12 ">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title panel-title-header">
                        Цена
                    </h4>
                </div>
                <div class="panel-body d-flex align-items-center justify-content-between filter-price mb-3">
                        От
                    <input type="number" min="0" max="80000" value='0' class='filter-price-input'>
                        до
                    <input type="number" min="0" max="80000" value='80000' class='filter-price-input'>
                        грн
                </div>
            </div>
        </div>
        <div class="panel-group">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title ">
                    <a data-toggle="collapse" href="#collapse1" class="panel-title-header d-flex justify-content-between align-items-center collapsed">Производитель<span
                         class='filter-arrow'></span></a>
                </h4>
            </div>
            <div id="collapse1" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul class='mb-3'>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_1" class="filter_checkbox ">
                                <label for="check_1" class='d-flex align-items-center'>ANDRO</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_2" class="filter_checkbox">
                                <label for="check_2" class='d-flex align-items-center'>ARMSTRONG</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_3" class="filter_checkbox">
                                <label for="check_3" class='d-flex align-items-center'>BOMB</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_4" class="filter_checkbox">
                                <label for="check_4" class='d-flex align-items-center'>BUTTERFLY</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_5" class="filter_checkbox">
                                <label for="check_5" class='d-flex align-items-center'>Der Materialspezialist</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_6" class="filter_checkbox">
                                <label for="check_6" class='d-flex align-items-center'>DHS</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_7" class="filter_checkbox">
                                <label for="check_7" class='d-flex align-items-center'>DINGO SWISS</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_8" class="filter_checkbox">
                                <label for="check_8" class='d-flex align-items-center'>DONIC</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_9" class="filter_checkbox">
                                <label for="check_9" class='d-flex align-items-center'>DR NEUBAUER </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_10" class="filter_checkbox">
                                <label for="check_10" class='d-flex align-items-center'>GAMBLER</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_11" class="filter_checkbox">
                                <label for="check_11" class='d-flex align-items-center'>ZIC </label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_12" class="filter_checkbox">
                                <label for="check_12" class='d-flex align-items-center'>GEWO</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_13" class="filter_checkbox">
                                <label for="check_13" class='d-flex align-items-center'>GLOBE</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_14" class="filter_checkbox">
                                <label for="check_14" class='d-flex align-items-center'>JOOLA</label>
                            </div>
                        </li>
                        <li>
                            <div class="checkbox">
                                <input type="checkbox" value="" id="check_15" class="filter_checkbox">
                                <label for="check_15" class='d-flex align-items-center'>KOKUTAKU</label>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title ">
                        <a data-toggle="collapse" href="#collapse2" class="panel-title-header d-flex justify-content-between align-items-center collapsed">Наличие<span
                             class='filter-arrow'></span></a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class='mb-3'>
                            <li>
                                <div class="checkbox">
                                    <input type="checkbox" value="" id="check_16" class="filter_checkbox ">
                                    <label for="check_16" class='d-flex align-items-center'>Только товары в наличии</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title  mb-2">
                        <a data-toggle="collapse" href="#collapse3" class="panel-title-header d-flex justify-content-between align-items-center collapsed">Тип
                            накладки<span class='filter-arrow'></span></a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul class='mb-3'>
                            <li>
                                <div class="checkbox">
                                    <input type="checkbox" value="" id="check_17" class="filter_checkbox ">
                                    <label for="check_17" class='d-flex align-items-center'>гладкая</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input type="checkbox" value="" id="check_18" class="filter_checkbox">
                                    <label for="check_18" class='d-flex align-items-center'>гладкая, тензор</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input type="checkbox" value="" id="check_19" class="filter_checkbox">
                                    <label for="check_19" class='d-flex align-items-center'>липучка</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input type="checkbox" value="" id="check_20" class="filter_checkbox">
                                    <label for="check_20" class='d-flex align-items-center'>липучка тюнингованная</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input type="checkbox" value="" id="check_21" class="filter_checkbox">
                                    <label for="check_21" class='d-flex align-items-center'>антиспин</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input type="checkbox" value="" id="check_22" class="filter_checkbox">
                                    <label for="check_22" class='d-flex align-items-center'>полуантиспин</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input type="checkbox" value="" id="check_23" class="filter_checkbox">
                                    <label for="check_23" class='d-flex align-items-center'>гибрид</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class='d-flex justify-content-center mt-4 mb-4'><input type='submit' class="filter-link" value='сбросить фильтр' /></div>
</form>