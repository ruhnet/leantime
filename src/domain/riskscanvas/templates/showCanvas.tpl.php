<?php
/**
 * Template
 */
defined('RESTRICTED') or die('Restricted access');

$canvasName = 'risks';
?>

<?php require(ROOT.'/../src/domain/canvas/templates/showCanvasTop.inc.php'); ?>

    <?php if(count($this->get('allCanvas')) > 0) { ?>

        <div id="sortableCanvasKanban" class="sortableTicketList disabled">

            <div class="row" style="margin-left: 0px; margin-right: 0px" id="firstRow">
                <div class="column" style="width:50%">
				    <h4 class="widgettitle title-primary center"><?=$canvasTypes['risks_imp_low_pro_high']['title'] ?></h4>
                    <?php $elementName = 'risks_imp_low_pro_high'; require(ROOT.'/../src/domain/canvas/templates/element.inc.php'); ?>
                </div>
                <div class="column" style="width:50%">
				    <h4 class="widgettitle title-primary center"><?=$canvasTypes['risks_imp_high_pro_high']['title'] ?></h4>
                    <?php $elementName = 'risks_imp_high_pro_high'; require(ROOT.'/../src/domain/canvas/templates/element.inc.php'); ?>
                </div>
            </div>

            <div class="row" style="margin-left: 0px; margin-right: 0px" id="secondRow">
                <div class="column" style="width:50%">
				    <h4 class="widgettitle title-primary center"><?=$canvasTypes['risks_imp_low_pro_low']['title'] ?></h4>
                    <?php $elementName = 'risks_imp_low_pro_low'; require(ROOT.'/../src/domain/canvas/templates/element.inc.php'); ?>
                </div>
                <div class="column" style="width:50%">
				    <h4 class="widgettitle title-primary center"><?=$canvasTypes['risks_imp_high_pro_low']['title'] ?></h4>
                    <?php $elementName = 'risks_imp_high_pro_low'; require(ROOT.'/../src/domain/canvas/templates/element.inc.php'); ?>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    <?php } ?>

<?php require(ROOT.'/../src/domain/canvas/templates/showCanvasBottom.inc.php'); ?>
