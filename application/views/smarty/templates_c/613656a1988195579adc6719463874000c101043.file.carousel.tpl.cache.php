<?php /* Smarty version Smarty-3.1.15, created on 2013-10-16 14:47:33
         compiled from "application\views\smarty\templates\carousel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1794525e7cf18b8a50-33041604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '613656a1988195579adc6719463874000c101043' => 
    array (
      0 => 'application\\views\\smarty\\templates\\carousel.tpl',
      1 => 1381927645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1794525e7cf18b8a50-33041604',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_525e7cf18bc8d6_10790820',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e7cf18bc8d6_10790820')) {function content_525e7cf18bc8d6_10790820($_smarty_tpl) {?><style>
.yonCarouselImg{
  width: auto;
  height: 225px;
  max-height: 225px;
}
</style>



<!--<div class="container" pull-right>-->
		<div id="slider" class="carousel slide">
			<div class="carousel-inner" align="center">
				<div class="item yonCarouselImg">
					<img class="yonCarouselImg" src="assets/img/jump.jpg">
				</div>
				
				<div class="active item yonCarouselImg">
					<img class="yonCarouselImg" src="assets/img/positivesign.jpg">					
				</div>
				<div class="item yonCarouselImg">
					<img class="yonCarouselImg" src="assets/img/baloons.jpg">
				</div>
                                <div class="item yonCarouselImg">
					<img class="yonCarouselImg" src="assets/img/thumbup.jpg">
				</div>	
			</div>								
		
	
			
			</div>
        <script>
		<!--Start off the carousel-->		
                window.onload = function() {                
			$('#slider').carousel({
			interval: 5000			
			})			
		};	
	</script>
                
<?php }} ?>
