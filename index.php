<!DOCTYPE html>
<html>
	<head>
		<title>Веревки</title>
		<link rel="stylesheet" href="/style.css">
		<meta charset="utf-8">
		<link href="/assets/libs/bootstrap/css/bootstrap-grid.min.css" rel = "stylesheet">
		<script src = "/assets/libs/jquery/jquery-3.3.1.min.js" type = "text/javascript" ></script>
		<script src = "/assets/libs/jquery/jquery.js" type = "text/javascript" ></script>
		<script src = "/assets/js/tolink.js" type = "text/javascript" ></script>
	</head>
	<body>
		<div class="call_back" data-current = "0"><a class="fancybox-inline" style='text-decoration: none;'>Свяжитесь с нами.</a></div>

		<script>
			$(document).ready(function(){
			
			setTimeout(function(){
				setInterval(function(){
					$(".call_back").addClass("pulse");
					setTimeout(function(){$(".call_back").removeClass("pulse");},1500);
				}, 10000);
			},10000);

				$(".call_back").click(function(){
						$('#overlay').fadeIn(400, function(){ 
							$('.modal_msg') 
								.css('display', 'block') 
								.animate({opacity: 1, top: '47%'}, 200);
						});
		
						$('#modal_close, #overlay').click( function(){ 
							$('.modal_msg')
								.animate({opacity: 0, top: '40%'}, 200,  
									function(){ 
										$(this).css('display', 'none'); 
										$('#overlay').fadeOut(400); 
									});
						});
				});

				$(".sendBtn").click(function(){
						$.ajax({
							type: "post",
							url: "/controllers/orderForm.php",
							data: {someVerif: $(".hiddenInp").val(), name: $(".nameUser").val(), contactsUser: $(".contactsUser").val(), msg:$(".cbText").val()},
							success: function(data){
								if (!data[0]){
									$('.sendBtn').addClass("sendBtnHide").text("");
									$('.inputs').addClass("sendBtnHide");
									$('.callBackInput').addClass("sendBtnHide");
									$('.cbText').addClass("sendBtnHide");
									$('.go_to_cart').addClass("go_to_cartActive").text("Мы скоро свяжемся с вами!");
								}
								else {
									if (!data[1]){
										$(".nameUser").css("box-shadow","0px 0px 16px rgba(255,0,0,1)");
									}
									else{
										$(".nameUser").css("box-shadow","0px 0px 16px rgba(0,255,0,1)");
									}
									if (!data[2]){
										$(".contactsUser").css("box-shadow","0px 0px 16px rgba(255,0,0,1)");
									}
									else{
										$(".contactsUser").css("box-shadow","0px 0px 16px rgba(0,255,0,1)");
									}
									if (!data[3]){
										$(".cbText").css("box-shadow","0px 0px 16px rgba(255,0,0,1)");
									}
									else{
										$(".cbText").css("box-shadow","0px 0px 16px rgba(0,255,0,1)");
									}
								}
							},
							dataType:"json"
						});
				});
			});
		</script>
		<script>
			$(document).ready(function(){
				$('.menuIcon').click(function(){
					var currentActive = $('.menuIcon').data("currentActive");
					if (!currentActive){
						$('.menu').stop(true, true);
						$('.menu').show();
						$('.menu').animate({ opacity: 1}, 500);
						$('.menuIcon').addClass('active');
						$('.menuIcon').data("currentActive", 1)
					}
					else {
						$('.menu').stop(true, true);
						$('.menu').animate({ opacity: 0}, 500, function() {
																$('.menu').hide();
																});
						$('.menuIcon').removeClass('active');
						$('.menuIcon').data("currentActive", 0)
					}

				});

			});
		</script>
		<div class="mainBlock">
			<div class="welcomeBlock">
					<img class="menuIcon" data-currentActive="0" src="/assets/images/menu.png">
					<div class="menu">
						<p class="menuPoint"><a class="links" href="#ropesTypes">Наша продукция</a></p>
						<p class="menuPoint"><a class="links" href="#usingRope">Применение наших шнуров</a></p>
						<p class="menuPoint"><a class="links" href="#footer">Контакты</a></p>
					</div>

				<div class="togetherBlock">
					<div class="logoBlock">
						<img src="/assets/images/logo.png">
					</div>
					<div class="phonesBlock">
						<span>+7 (961) 298-12-92</span>
						<span>+7 (928) 187-12-28</span>
					</div>
				</div>

				<p class="downloadLink" href="#"><a>Скачать реквизиты<br>ООО «Траверс»</a></p>
				<p class="downloadLink link2" href="#"><a>Скачать прайс</a></p>
			</div>
			<div class="ourAdvantages">
				<div class="flexBox">
					<div class="col-md-3 col-sm-5  col-xs-5 singleAdv">
						<p><span><img class="car" src="/assets/images/iconCar.png"></span></p>
						<p class="description">Бесплатная доставка на первый заказ</p>
					</div>
					<div class="col-md-3 col-sm-5  col-xs-5  singleAdv">
						<p><span><img src="/assets/images/iconList.png"></span></p>
						<p class="description">Широкий ассортимент</p>
					</div>
					<div class="col-md-3 col-sm-5  col-xs-5  singleAdv">
						<p><span><img src="/assets/images/iconAward.png"></span></p>
						<p class="description">Лучшие цены</p>
					</div>
					<div class="col-md-3 col-sm-5  col-xs-5  singleAdv">
						<p><span><img src="/assets/images/iconPrice.png"></span></p>
						<p class="description">Гибкая система скидок</p>
					</div>
				</div>
			</div>

			<div id="ropesTypes" class="ropesTypes">
				<p class="header">НАША ПРОДУКЦИЯ</p>
				<div class="flexBox">
					<div class="col-md-2 col-sm-5  col-xs-5 singleRope">
						<p><span><img src="/assets/images/kruch.png"></span></p>
						<p class="description">Веревка<br>крученая</p>
					</div>
					<div class="col-md-2 col-sm-5  col-xs-5 singleRope">
						<p><span><img src="/assets/images/plet.png"></span></p>
						<p class="description">Веревка<br>плетеная</p>
					</div>
					<div class="col-md-2 col-sm-5  col-xs-5 singleRope">
						<p><span><img src="/assets/images/vyaz.png"></span></p>
						<p class="description">Веревка<br>вязаная</p>
					</div>
					<div class="col-md-2 col-sm-5  col-xs-5  singleRope">
						<p><span><img src="/assets/images/ropeKruch.png"></span></p>
						<p class="description">Нить<br>крученая</p>
					</div>
					<div class="col-md-2 col-sm-5  col-xs-5 singleRope">
						<p><span><img src="/assets/images/shpagat.png"></span></p>
						<p class="description">Шпагаты</p>
					</div>
					<div class="col-md-2 col-sm-5  col-xs-5 singleRope">
						<p><span><img src="/assets/images/fali.png"></span></p>
						<p class="description">Фалы</p>
					</div>
				</div>
			</div>
			<div class="individual">
				<p class="indHeader"><span>ПРОИЗВОДИМ ШНУРЫ НА ЗАКАЗ<br>ПО ИНДИВИДУАЛЬНЫМ<br>ХАРАКТЕРИСТИКАМ</span></p>
			</div>
			<div class="map">
				<img src="/assets/images/map.png">
			</div>


			<div id="usingRope" class="usingRopes">
				<p class="header">ПРИМЕНЕНИЕ НАШИХ ШНУРОВ</p>
				<div class="row">
					<div class="col-md-4 singleUsbl">
						<p><span><img src="/assets/images/garden.png"></span></p>
						<p class="description">Сад и огород</p>
					</div>
					<div class="col-md-4 singleUsbl">
						<p><span><img src="/assets/images/fishing.png"></span></p>
						<p class="description">Рыбалка</p>
					</div>
					<div class="col-md-4 singleUsbl">
						<p><span><img src="/assets/images/swing.png"></span></p>
						<p class="description">Качели</p>
					</div>
					<div class="col-md-4 singleUsbl">
						<p><span><img src="/assets/images/hoz.png"></span></p>
						<p class="description">Хозяйственно-бытовое назначение</p>
					</div>
					<div class="col-md-4 singleUsbl">
						<p><span><img src="/assets/images/gift.png"></span></p>
						<p class="description">Упаковка</p>
					</div>
					<div class="col-md-4 singleUsbl">
						<p><span><img src="/assets/images/krepej.png"></span></p>
						<p class="description">Крепеж</p>
					</div>
					
				</div>
			</div>

	
			<section class="googleMap"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2709.888353012423!2d38.93156261586206!3d47.21876682268136!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40e3fd49a52f1517%3A0xdaf9d65463abd8ce!2z0YPQuy4g0JvQtdGB0L3QsNGPINCR0LjRgNC20LAsIDIsINCi0LDQs9Cw0L3RgNC-0LMsINCg0L7RgdGC0L7QstGB0LrQsNGPLCAzNDc5MDU!5e0!3m2!1sru!2sru!4v1539113965985" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></section>
			<div class="modal_msg">
				<span id="modal_close" class="close"></span>
				<p class="go_to_cart">Свяжитесь с нами!</p>
				<div class="mainForm">
					<div class="inputs col-md-6">
						<input type="text" maxlength="256" name="someVerif" class="hiddenInp">
						<input type="text" class="nameUser callBackInput" placeholder="Как к вам обращаться?">
						<input type="text" class="contactsUser callBackInput" placeholder="Телефон или e-mail" >
					</div>
					<div class="col-md-6" align="center">
						<textarea class="cbText" placeholder = "Какие у вас есть вопросы?"></textarea>
					</div>
				</div>
				<div class="sendBtn">Отправить</div>
			</div>

<div id="overlay"></div>

			<div id = "footer" class="footer">
				<div class="content">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-3 footLogo">
							<img src = "/assets/images/logo.png">
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 infoTrav"> 
							<p class="nameComp">ООО «Траверс»</p>
							<p class="address">Г. Таганрог, ул. Лесная Биржа, 2</p>
							<img class="phonesBef" src="/assets/images/phones.png">
							<div class="phones"><p>+7 (961) 298-12-92</p><p>+7 (928) 187-12-28</p></div>
							<p class="email">traversprodagi@gmail.com</p>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-3  bills">
							<p class="nameBill">ИНН 6154104970</p>
							<p class="nameBill">КПП 615401001</p>
							<p class="nameBill">ОГРН 1066154101760</p>
							<p class="nameBill">ОКПО 97788686</p>
						</div>

					</div>
				</div>
			</div>
			<div class="endLine">
			</div>
		</div>
	</body>
</html>