<?if($_COOKIE['COVID_19_INFO'] != 'Y'):?>
<style>
.title_covid{
	text-align: center;
    font-size: 28px;
    font-weight: 600;
}
.covid-19_info{
	position: fixed;
    width:100%;
	height:100%;
    background: #000000e0;
    left: 0;
    top: 0;
    z-index: 1000;
    /*display: none;*/
    color:#000;
	z-index: 4444;
}
.covid-19_info_wrap{
	position: relative;
	padding: 15px;
	background: #fff;
    border: 2px solid #000;
    border-radius: 25px;
    width: 650px;
	/*height: 600px;*/
    display: inline-block;
	/*font-size: 25px;*/
	font-size: 16px;
}
.covid-19_info_close{
	position: absolute;
    right: 15px;
    top: 5px;
    font-size: 23px;
    color: #000;
    cursor:pointer;
}
.d_t{display: table;width:100%;height:100%;}
.d_t_c{display: table-cell;width:100%;height:100%; text-align: center; vertical-align: middle;text-align: center;}
@media (orientation: portrait){
	.title_covid{
		font-size: 55px;
    }
	.covid-19_info_wrap{
		font-size:42px;
		height:unset;
		width:95%;
	}
	.covid-19_info_close{
	right: 35px;
    font-size: 85px;
}
}
</style>
<div class="covid-19_info">
<div class="d_t">
<div class="d_t_c va_m">
	<div class="covid-19_info_wrap">
		<div class="title_covid">Уважаемые клиенты!</div><br>
		<p>Нашим главным приоритетом является безопасность наших клиентов и сотрудников.</p>
		<p>Центральный офис  и офисы региональных представителей компании Мартинес Имидж закрыты для посещения клиентов.</p>
		<p>Но наши менеджеры работают удаленно и принимают заказы.</p>
		<p>Доставку заказов осуществляют наши водители, которые обеспечены всеми необходимыми средствами защиты и дезинфекции и проходят регулярное тестирование.</p>
		<p>Мы ждем вас на наших бесплатных вебинарах, на которые можно записаться на сайте в разделе обучение <a style="color:#ff00a8;" href="https://amenity-pro.ru/study/">https://amenity-pro.ru/study/</a></p>
	<span class="covid-19_info_close">&#215;</span>
	</div>
</div>
	</div>
</div>
<?
setcookie('COVID_19_INFO', 'Y', time() + (3600 * 24),  '/', 'amenity-pro.ru');
?>
<script>
	$(document).ready(function(){
		// ($('.covid-19_info')).click(function(){
			$('.covid-19_info_close').click(function(){
			$('.covid-19_info').remove();
			});
	});

	$(document).keydown(function(e) {
		if (e.keyCode === 27) {
			e.stopPropagation();
			$('.covid-19_info').remove();
		}
	});

	$('.covid-19_info').click(function(e) {
			if ($(e.target).closest('.covid-19_info_wrap').length == 0) {
				$('.covid-19_info').remove();				
			}
		});	

</script>	
<?endif;?>
