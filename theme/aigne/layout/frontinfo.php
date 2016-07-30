<?php 
/** 
 * Template to insert Frontpage (before users login) marketing or information blocks
 * 
 * @package    theme_aigne
 * @copyright  2013-2014 Franc Pombal (www.aigne.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *  
 * Follow this file like a Template to insert Flash movies, fixed images or language sensitive texts
 * Go to .../theme/aigne/style/aigne_style.css L#500 to customize the CSS.
 * Go to .../theme/aigne/lang/xx/theme_aigne.php to change the strings displayed 
 */

switch ($infobanner) {
    case 0:
        break;
    case 1:
?>
<div class="base_info">
    <div class="frontmsg" title="<?php echo get_string('frontmsgttl','theme_aigne'); ?>">
        <?php echo get_string('frontmsgtxt','theme_aigne'); ?>
    </div>
</div>
<?php
        break;
    case 2:
?>
<div class="large_info"  title="<?php echo get_string('banner1ttl','theme_aigne'); ?>">
    <!-- <marquee><?php echo get_string('banner1txt','theme_aigne'); ?></marquee> -->
</div>
<?php
        break;
    case 3:
?>
<div class="base_info">
    <div class="quadro1">
        <div class="quadro1_info" title="<?php echo get_string('quadro1ttl','theme_aigne'); ?>" >
            <OBJECT id="Flash1" width="100%" height="100%" title="<?php echo get_string('quadro1img','theme_aigne'); ?>" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000">
                <PARAM name="movie" value="<?php echo $wwwroot; ?>/theme/aigne/pix/carroussel/quadro1fla.swf">
                <PARAM name="quality" value="high">
                <PARAM name="swfversion" value="6.0.65.0">
                <param name="base" value="." />
                <param name="allowscriptaccess" value="sameDomain" />
                <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
                <PARAM name="expressinstall" value="Scripts/expressInstall.swf">
                <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                <!--[if !IE]>-->
                <OBJECT width="100%" height="100%" title="<?php echo get_string('quadro1img','theme_aigne'); ?>" data="<?php echo $wwwroot; ?>/theme/aigne/pix/carroussel/quadro1fla.swf" type="application/x-shockwave-flash">
                    <!--<![endif]-->
                    <PARAM name="quality" value="high">
                    <PARAM name="swfversion" value="6.0.65.0">
                    <PARAM name="expressinstall" value="Scripts/expressInstall.swf">
                    <param name="base" value="." />
                    <param name="allowscriptaccess" value="sameDomain" />
                    <PARAM name="wmode" value="transparent">
                    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                    <div>
                        <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                        <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
                    </div>
                    <!--[if !IE]>-->
                </OBJECT>
                <!--<![endif]-->
            </OBJECT>
        </div>
    </div>
    <div class="quadro2">
        <div class="quadro2_info" title="<?php echo get_string('quadro2ttl','theme_aigne'); ?>">
            <?php echo get_string('quadro2txt','theme_aigne'); ?>
        </div>
    </div>
    <div class="quadro3">
        <div class="quadro3_info" title="<?php echo get_string('quadro3ttl','theme_aigne'); ?>">
            <img src="<?php echo $OUTPUT->pix_url('carroussel/quadro3img', 'theme')?>" alt="<?php echo get_string('quadro3img','theme_aigne'); ?>">
        </div>
    </div>
</div>
<?php
        break;
    case 4:
?>
<div class="acordionh5">
    <ul>
        <li>
            <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco1', 'theme')?>" alt="<?php echo get_string('aco5alt1','theme_aigne'); ?>"/></a>
            <div class="foottxt"><a href="#"><?php echo get_string('aco5cap1','theme_aigne'); ?></a></div>
        </li>
        <li>
            <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco2', 'theme')?>" alt="<?php echo get_string('aco5alt2','theme_aigne'); ?>"/></a>
            <div class="foottxt"><a href="#"><?php echo get_string('aco5cap2','theme_aigne'); ?></a></div>
        </li>
        <li>
            <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco3', 'theme')?>" alt="<?php echo get_string('aco5alt3','theme_aigne'); ?>"/></a>
            <div class="foottxt"><a href="#"><?php echo get_string('aco5cap3','theme_aigne'); ?></a></div>
        </li>
        <li>
            <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco4', 'theme')?>" alt="<?php echo get_string('aco5alt4','theme_aigne'); ?>"/></a>
            <div class="foottxt"><a href="#"><?php echo get_string('aco5cap4','theme_aigne'); ?></a></div>
        </li>
        <li>
            <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco5', 'theme')?>" alt="<?php echo get_string('aco5alt5','theme_aigne'); ?>"/></a>
            <div class="foottxt"><a href="#"><?php echo get_string('aco5cap5','theme_aigne'); ?></a></div>
        </li>
    </ul>
</div>
<?php
        break;
    case 5:
?>
<link href="<?php echo $CFG->wwwroot ?>/theme/aigne/style/animation.css" rel="stylesheet" type="text/css" media="screen" />
<div class="sliderv5">
    <div id="mask">
        <ul>
            <li id="first" class="firstanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/01', 'theme')?>" alt="<?php echo get_string('sli5alt1','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('sli5cap1','theme_aigne'); ?></a></div>
            </li>
            <li id="second" class="secondanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/02', 'theme')?>" alt="<?php echo get_string('sli5alt2','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('sli5cap2','theme_aigne'); ?></a></div>
            </li>
            <li id="third" class="thirdanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/03', 'theme')?>" alt="<?php echo get_string('sli5alt3','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('sli5cap3','theme_aigne'); ?></a></div>
            </li>
            <li id="fourth" class="fourthanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/04', 'theme')?>" alt="<?php echo get_string('sli5alt4','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('sli5cap4','theme_aigne'); ?></a></div>
            </li>
            <li id="fifth" class="fifthanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/05', 'theme')?>" alt="<?php echo get_string('sli5alt5','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('sli5cap5','theme_aigne'); ?></a></div>
            </li>
        </ul>
    </div>
    <div class="progress-bar"></div>
</div>
<?php
        break;
    case 6:
?>
<link href="<?php echo $CFG->wwwroot ?>/theme/aigne/style/animation.css" rel="stylesheet" type="text/css" media="screen" />
<div class="sliderh5">
    <div id="mask">
        <ul>
            <li id="first" class="firstanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco1', 'theme')?>" alt="<?php echo get_string('aco5alt1','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('aco5cap1','theme_aigne'); ?></a></div>
            </li>
            <li id="second" class="secondanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco2', 'theme')?>" alt="<?php echo get_string('aco5alt2','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('aco5cap2','theme_aigne'); ?></a></div>
            </li>
            <li id="third" class="thirdanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco3', 'theme')?>" alt="<?php echo get_string('aco5alt3','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('aco5cap3','theme_aigne'); ?></a></div>
            </li>
            <li id="fourth" class="fourthanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco4', 'theme')?>" alt="<?php echo get_string('aco5alt4','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('aco5cap4','theme_aigne'); ?></a></div>
            </li>
            <li id="fifth" class="fifthanimation">
                <a href="#"><img src="<?php echo $OUTPUT->pix_url('carroussel/aco5', 'theme')?>" alt="<?php echo get_string('aco5alt5','theme_aigne'); ?>"/></a>
                <div class="tooltip"><a href="#"><?php echo get_string('aco5cap5','theme_aigne'); ?></a></div>
            </li>
        </ul>
    </div>
    <div class="progress-bar"></div>
</div>
<?php
        break;
    case 10:
        $newsinfourl = '/theme/aigne/layout/newsinfo.php';
/** Posibilidades de enlace:
 *  CATEGORÍA:                  <a href="<_php echo $CFG->wwwroot;_>/course/index.php?categoryid=25"
 *  CURSO                       <a href="<_php echo $CFG->wwwroot;_>/course/view.php?id=5"
 *  PÁGINA DE INFORMACIÓN:      <a href="<_php echo $CFG->wwwroot.$newsinfourl;_>?type=2"
 *  recuerde sustituir _ por ? 
 */
?>
<div class="acordion_aigne">
    <ul>
        <li>
    		<label for="button-1"><span><?php echo get_string('acoacap1','theme_aigne'); ?></span></label>
    		<input id="button-1" name="button-set" type="radio" />
    		<div id="labelico1" class="labelico"></div>
    		<div id="content1" class="content">
                 <div class="acoinfo"> 
<?php

// MODIFICADO POR ERROR _ 2015_10 //*
//include contact_form.php and instantiate
//*require_once('theme/aigne/layout/contact_form.php');
//*$mform = new contact_form();
 
//Form processing and displaying is done here
//*if ($mform->is_cancelled()) {
//*    redirect(get_login_url());
//*} else if ($fromform = $mform->get_data()) {
  //In this case you process validated data. $mform->get_data() returns data posted in form.
//*} else {
  // this branch is executed if the form is submitted but the data doesn't validate and the form should be redisplayed
  // or on the first display of the form.
 
  //Set default data (if any)
//*  $mform->set_data($toform);
  //displays the form
//*  $mform->display();
//*}

?>
                </div>
                <img src="<?php echo $OUTPUT->pix_url('carroussel/info1', 'theme')?>" alt="<?php echo get_string('acoaalt1','theme_aigne'); ?>" title="<?php echo get_string('acoaalt1','theme_aigne');?>" />
		    </div>
        </li>
        <li>
    		<label for="button-2"><span><?php echo get_string('acoacap2','theme_aigne'); ?></span></label>
    		<input id="button-2" name="button-set" type="radio" />
    		<div id="labelico2" class="labelico"></div>
    		<div id="content2" class="content">
                <div class="acoinfo"><?php echo get_string('acoainfo2','theme_aigne'); ?></div>
                <img src="<?php echo $OUTPUT->pix_url('carroussel/info2', 'theme')?>" alt="<?php echo get_string('acoaalt1','theme_aigne'); ?>"/>
    		</div>
        </li>
        <li>
    		<label for="button-3"><span><?php echo get_string('acoacap3','theme_aigne'); ?></span></label>
    		<input id="button-3" name="button-set" type="radio" />
    		<div id="labelico3" class="labelico"></div>
    		<div id="content3" class="content">
    		    <a href="<?php echo $CFG->wwwroot.$newsinfourl;?>?type=3" title="<?php echo get_string('moreinfo','theme_aigne');?>">
                <div class="acoinfo"><?php echo get_string('acoainfo3','theme_aigne'); ?></div>
                <img src="<?php echo $OUTPUT->pix_url('carroussel/info3', 'theme')?>" alt="<?php echo get_string('acoaalt1','theme_aigne'); ?>"/>
                <div class="tooltip"><?php echo get_string('moreinfo','theme_aigne'); ?></div>
                </a>
    		</div>
        </li>
        <li>
    		<label for="button-4"><span><?php echo get_string('acoacap4','theme_aigne'); ?></span></label>
    		<input id="button-4" name="button-set" type="radio" />
    		<div id="labelico4" class="labelico"></div>
    		<div id="content4" class="content">
    		    <a href="<?php echo $CFG->wwwroot.$newsinfourl;?>?type=4" title="<?php echo get_string('moreinfo','theme_aigne');?>">
                <div class="acoinfo"><?php echo get_string('acoainfo4','theme_aigne'); ?></div>
                <img src="<?php echo $OUTPUT->pix_url('carroussel/info4', 'theme')?>" alt="<?php echo get_string('acoaalt1','theme_aigne'); ?>"/>
                <div class="tooltip"><?php echo get_string('moreinfo','theme_aigne'); ?></div>
                </a>
    		</div>
        </li>
        <li>
    		<label for="button-5"><span><?php echo get_string('acoacap5','theme_aigne'); ?></span></label>
    		<input id="button-5" name="button-set" type="radio" checked />
    		<div id="labelico5" class="labelico"></div>
    		<div id="content5" class="content">
    		    <a href="<?php echo $CFG->wwwroot;?>/course/view.php?id=5" title="<?php echo get_string('moreinfo','theme_aigne');?>">
                <div class="acoinfo"><?php echo get_string('acoainfo5','theme_aigne'); ?></div>
                <img src="<?php echo $OUTPUT->pix_url('carroussel/info5', 'theme')?>" alt="<?php echo get_string('acoaalt1','theme_aigne'); ?>"/>
                <div class="tooltip"><?php echo get_string('moreinfo','theme_aigne'); ?></div>
                </a>
    		</div>
        </li>
    </ul>
</div>
<?php
        break;
    default:
        break;
}

?>

