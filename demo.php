<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DEMO BOOTSTRAP</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-them.min.css">
	<link rel="stylesheet" href="css/begin_css.css">
	
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12 wraper">
					<div class='logo'>
						<img src='img/logo_full.png' data-toggle="tooltip" title="CellphoneS" width="100%">
					</div>
					<div class='location'>
						<span style="border:1px solid #C6C6C6;padding:5px;float:left;height: 25px;border-right: none" data-toggle="tooltip" title="Chọn khu vực" class="glyphicon glyphicon-map-marker loct">
						</span>
						<select id="location-changer">
							<option value="#">Hồ Chí Minh   </option>
							<option value="#">Hà Nội   </option>
						</select>
					</div>
					<div class="search-form">
						<input id ='search' type="search" name='search' placeholder="Tìm kiếm sản phẩm...">
						<button type="submit" value="Tìm kiếm" data-toggle="tooltip" title="Tìm Kiếm" class="button btn-search glyphicon glyphicon-search">	
						</button>
					</div>
					<div class="lienhe">
						<p>Gọi mua hàng:<a herf="#"><span style="color: #ff0000;"><strong>1900.6480</strong></span></a></p>
						<p>Tư vẫn sửa chữa:<a herf="#"><span style="color: #ff0000;"><strong>1900.636.011</strong></span></p>
					</div>
					<!--Tạo NÚt Đăng nhập-->
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#dangnhap">Đăng Nhập </button>
					<div class="modal fade" id="dangnhap" role="dialog">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<p style="text-align: center;">Đăng Nhập</p>
								</div>
								<div class="modal-body">
									<form  class="form-horizontal" action="#" method="get" accept-charset="utf-8">
										<div class="form-group">
									      <label class="control-label col-sm-2" for="email">Email:</label>
									      <div class="col-sm-10">
									        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
									      </div>
									    </div>
									    <div class="form-group">
									      <label class="control-label col-sm-2" for="pwd">Password:</label>
									      <div class="col-sm-10">          
									        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
									      </div>
									    </div>
									    <div class="form-group">        
									      <div class="col-sm-offset-2 col-sm-10">
									        <div class="checkbox">
									          <label><input type="checkbox" name="remember"> Remember me</label>
									        </div>
									      </div>
									    </div>
									    <div class="form-group">        
									      <div class="col-sm-offset-2 col-sm-10">
									        <button type="submit" class="btn btn-default">Đăng nhập</button>
									      </div>
									    </div>
									</form>
								</div>
								<div class="modal-footer">
									 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

			</div>
		</div>
	</div><!--End header-->
	<div class="container"><!--TOP MENU-->
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-inverse">
				  <div class="container-fluid">
				   <div class="navbar-header visible-xs">
                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                              </button>
                              <a class="navbar-brand" href="#">Danh mục</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					    <div class="navbar-header">
					      <a class="navbar-brand active glyphicon glyphicon-home" data-toggle="tooltip" title="Trang chủ " href="#"></a>
					    </div>
					    <ul class="nav navbar-nav ">
					      <li class="dt"><a href="#">ĐIỆN THOẠI</a>
					      	<div class="sub-menu mn1">
						      <ul class="ds">
						      	<li class="sp"><a href="#">iPhone 7 Plus</a></li>
						      	<li class="sp"><a href="#">iPhone 7 </a></li>
						      	<li class="sp"><a href="#">iPhone 6s Plus</a></li>
						      	<li class="sp"><a href="#">iPhone 6s </a></li>
						      	<li class="sp"><a href="#">Samsung Galaxy s8 Plus</a></li>
						      	<li class="sp"><a href="#">Samsung Galaxy s8</a></li>
						      	<li class="sp"><a href="#">Nokia 8</a></li>
						      	<li class="sp"><a href="#">Bphone 2017</a></li>
						      </ul>
						    </div>
					      </li>
					      <li class="mtb"><a href="#">MÁY TÍNH BẢNG</a>
					      	<div class="sub-menu mn2">
						      <ul class="ds">
						      	<li class="sp"><a href="#">ipad Air</a></li>
						      	<li class="sp"><a href="#">ipad Pro </a></li>
						      	<li class="sp"><a href="#">ipad mini</a></li>
						      	<li class="sp"><a href="#">ipad 9.7inch </a></li>
						      	<li class="sp"><a href="#">Huawai</a></li>
						      	<li class="sp"><a href="#">Nokia N1</a></li>
						      	<li class="sp"><a href="#">Mipad 1</a></li>
						      	<li class="sp"><a href="#">Mipad 2</a></li>
						      </ul>
						    </div>
					      </li>
					      <li class="pk"><a href="#">PHỤ KIỆN</a>
					      	<div class="sub-menu mn3">
						      <ul class="ds">
						      	<li class="sp"><a href="#">Thiết bị đeo thông minh</a></li>
						      	<li class="sp"><a href="#">Sạc dự phòng </a></li>
						      	<li class="sp"><a href="#">Tai nghe</a></li>
						      	<li class="sp"><a href="#">iPhone 6s </a></li>
						      	<li class="sp"><a href="#">Loa </a></li>
						      	<li class="sp"><a href="#">Ốp lưng</a></li>
						      	<li class="sp"><a href="#">Thẻ nhớ</a></li>
						      	<li class="sp"><a href="#">Dán cường lực</a></li>
						      </ul>
						    </div>
					      </li>
					      <li><a href="#">TRẢ GÓP</a></li>
					      <li class="hc"><a href="#">HÀNG CŨ</a>
					      	<div class="sub-menu mn4">
						      <ul class="ds">
						      	<li class="sp"><a href="#">ipad </a></li>
						      	<li class="sp"><a href="#">iphone </a></li>
						      	<li class="sp"><a href="#">Samsung</a></li>
						      	<li class="sp"><a href="#">Nokia </a></li>
						      	<li class="sp"><a href="#">Sony</a></li>
						      	<li class="sp"><a href="#">LG</a></li>
						      	<li class="sp"><a href="#">Xiaomi</a></li>
						      	<li class="sp"><a href="#">Huawai</a></li>
						      </ul>
						    </div>
					      </li>
					      <li class="sv"><a href="#">SẮP VỀ</a>
					      	<div class="sub-menu mn5">
						      <ul class="ds">
						      	<li class="sp"><a href="#">Apple</a></li>
						      	<li class="sp"><a href="#">Samsung </a></li>
						      	<li class="sp"><a href="#">Asus</a></li>
						      	<li class="sp"><a href="#">Motorola </a></li> 
						      </ul>
						    </div>
					      </li>
					      <li class="sc"><a href="#">SỬA CHỮA</a>
					      	<div class="sub-menu mn6">
						      <ul class="ds">
						      	<li class="sp"><a href="#">iPhone 6s|iPhone 6s Plus</a></li>
						      	<li class="sp"><a href="#">Sony </a></li>
						      	<li class="sp"><a href="#">Samsung</a></li>
						      	<li class="sp"><a href="#">LG </a></li>
						      	<li class="sp"><a href="#">Xiaomi</a></li>
						      	<li class="sp"><a href="#">iPad</a></li>
						      	<li class="sp"><a href="#">Asus</a></li>
						      	<li class="sp"><a href="#">Vivo</a></li>
						      </ul>
						    </div>
					      </li>
					      <li><a href="#">KHUYẾN MÃI</a></li>
					      <li><a href="#">SMEMBER</a></li>
					      <li><a href="#">SFORUM</a></li>
					    </ul>
				    </div>
				  </div>
				</nav>
			</div>
		</div>
	</div><!--END TOP MENU-->
	<div class="container"><!--slide&banner-->
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-9 slidee">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
						    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						    <li data-target="#myCarousel" data-slide-to="1"></li>
						    <li data-target="#myCarousel" data-slide-to="2"></li>
						    <li data-target="#myCarousel" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
						    <div class="item active">
						      <img src="img/phone1.jpg" alt="">
						    </div>

						  <div class="item">
						      <img src="img/phon2.jpg" alt="">
						    </div>

						    <div class="item">
						      <img src="img/2.jpg" alt="">
						    </div>

						    <div class="item">
						      <img src="img/phone3.jpg" alt="">
						    </div>
						  </div>
						  </div>
					</div>
				<div class="col-md-3 qc">
					<div class="col-md-12 col-sm-6 qc1">
						<a href="#"><img src="img/s8.jpg" height="185" width="340"></a><br><br>
					</div>
					<div class="col-md-12 col-sm-6  qc2">
						<a href="#"><img src="img/km.jpg"   height="185" width="340"></a>
					</div>
				</div>
			</div>
		</div>
	</div><!--END slide&banner-->
	<div class="container"><!--sanpham-->
		<div class="row">
			<div class="col-md-12 hangsp1">
				<ul>
					<li><a href="#"><img src="img/7plus.jpg"></a></li>
					<li><a href="#"><img src="img/ipad.jpg"></a></li>
					<li><a href="#"><img src="img/7pl.jpg"></a></li>
				</ul>
			</div>
			<div class="col-md-12 hangsp2">
				<ul>
					<li><a href="#"><img src="img/vivo.jpg"></a></li>
					<li><a href="#"><img src="img/zenphone.jpg"></a></li>
					<li><a href="#"><img src="img/xiaomi.jpg"></a></li>
				</ul>
			</div>
		</div>
	</div><!--END sanpham-->
	<div class="container">
		<div class="row">
		<div class='col-md-12'>
			<div class="col-md-6 col-sm-12 col-xs-12"><!--điện thoại-->
				<div class="muc">
					<p>ĐIỆN THOẠI</p>
				</div>
				  <ul class="nav nav-tabs tab">
				    <li class="active"><a data-toggle="tab" href="#home0">Apple</a></li>
				    <li><a data-toggle="tab" href="#menu10">Samsung</a></li>
				    <li><a data-toggle="tab" href="#menu20">Sony</a></li>
				    <li><a data-toggle="tab" href="#menu30">OPPO</a></li>
				    <li><a data-toggle="tab" href="#menu40">Xiaomi</a></li>
				    <li><a data-toggle="tab" href="#menu50"><strong>More ></strong></a></li>
				  </ul>

				 <div class="tab-content">
				 	<div id="home0" class="tab-pane fade in active phone">
				 		<ul>
				 			<li><img src="img/i1.png" alt=""><p>iPhone 7plus fpt 128GB</p></li>
				 			<li><img src="img/i3.png" alt=""><p>iPhone 7 xách tay</p></li>
				 			<li><img src="img/i2.jpg" alt=""><p>iPhone 6s plus</p></li>
				 			<li><img src="img/i4.png" alt=""><p>iPhone 6plus</p></li>
				 			<li><img src="img/i5.jpg" alt=""><p>iPhone 8plus</p></li>
				 			<li><img src="img/i5.jpg" alt=""><p>iPhone 8</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu10" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/s1.jpg" alt=""><p>Samsung S8plus</p></li>
				 			<li><img src="img/s2.png" alt=""><p>Samsung S7 </p></li>
				 			<li><img src="img/s3.jpg" alt=""><p>Samsung Note7R</p></li>
				 			<li><img src="img/s4.jpg" alt=""><p>Samsung Note8</p></li>
				 			<li><img src="img/s5.jpg" alt=""><p>Samsung S6</p></li>
				 			<li><img src="img/s6.jpg" alt=""><p>Samsung c9</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu20" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/z1.jpg" alt=""><p>Sony XZ Premium</p></li>
				 			<li><img src="img/z2.png" alt=""><p>Sony XZs</p></li>
				 			<li><img src="img/z3.png" alt=""><p>Sony XA Utral</p></li>
				 			<li><img src="img/z4.png" alt=""><p>Sony XA1</p></li>
				 			<li><img src="img/z5.jpg" alt=""><p>Sony L1</p></li>
				 			<li><img src="img/z6.jpg" alt=""><p>Sony X</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu30" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/o1.png" alt=""><p>OPPO F3 Plus</p></li>
				 			<li><img src="img/o2.png" alt=""><p>OPPO F3 Plus</p></li>
				 			<li><img src="img/o3.jpg" alt=""><p>OPPO F3</p></li>
				 			<li><img src="img/o4.jpg" alt=""><p>OPPO F1s</p></li>
				 			<li><img src="img/o5.jpg" alt=""><p>OPPO F1 lite</p></li>
				 			<li><img src="img/o6.png" alt=""><p>OPPO A37</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu40" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/m1.jpg" alt=""><p>Xiaomi Mi6</p></li>
				 			<li><img src="img/m3.jpg" alt=""><p>Xiaomi Mi5X</p></li>
				 			<li><img src="img/m2.jpg" alt=""><p>Xiaomi Redmi Note 4</p></li>
				 			<li><img src="img/m4.png" alt=""><p>Xiaomi Redmi 4</p></li>
				 			<li><img src="img/m5.png" alt=""><p>Xiaomi Mi4</p></li>
				 			<li><img src="img/m5.png" alt=""><p>Xiaomi Mi4 fpt</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu50" class="tab-pane fade phone ">
				 		<ul>
				 			<li><img src="img/i1.png" alt=""><p>iPhone 7plus fpt 128GB</p></li>
				 			<li><img src="img/m1.jpg" alt=""><p>Xiaomi Mi6</p></li>
				 			<li><img src="img/o6.png" alt=""><p>OPPO A37</p></li>
				 			<li><img src="img/i4.png" alt=""><p>iPhone 6plus</p></li>
				 			<li><img src="img/z6.jpg" alt=""><p>Sony X</p></li>
				 			<li><img src="img/s1.jpg" alt=""><p>Samsung S8plus</p></li>
				 		</ul>
				 	</div>
				 </div>
			</div><!--END điện thoại-->
			<div class="col-md-6 col-sm-12 col-xs-12"><!-- máy tính bảng-->
				<div class="muc">
					<p>MÁY TÍNH BẢNG</p>
				</div>
				  <ul class="nav nav-tabs tab">
				    <li ><a data-toggle="tab" href="#home1">Apple</a></li>
				    <li class="active"><a data-toggle="tab" href="#menu11">Samsung</a></li>
				    <li><a data-toggle="tab" href="#menu21">Sony</a></li>
				    <li><a data-toggle="tab" href="#menu31">OPPO</a></li>
				    <li><a data-toggle="tab" href="#menu41">Xiaomi</a></li>
				    <li><a data-toggle="tab" href="#menu51"><strong>More ></strong></a></li>
				  </ul>

				 <div class="tab-content">
				 	<div id="home1" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/i1.png" alt=""><p>iPhone 7plus fpt 128GB</p></li>
				 			<li><img src="img/i3.png" alt=""><p>iPhone 7 xách tay</p></li>
				 			<li><img src="img/i2.jpg" alt=""><p>iPhone 6s plus</p></li>
				 			<li><img src="img/i4.png" alt=""><p>iPhone 6plus</p></li>
				 			<li><img src="img/i5.jpg" alt=""><p>iPhone 8plus</p></li>
				 			<li><img src="img/i5.jpg" alt=""><p>iPhone 8</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu11" class="tab-pane fade  in active phone">
				 		<ul>
				 			<li><img src="img/s1.jpg" alt=""><p>Samsung S8plus</p></li>
				 			<li><img src="img/s2.png" alt=""><p>Samsung S7 </p></li>
				 			<li><img src="img/s3.jpg" alt=""><p>Samsung Note7R</p></li>
				 			<li><img src="img/s4.jpg" alt=""><p>Samsung Note8</p></li>
				 			<li><img src="img/s5.jpg" alt=""><p>Samsung S6</p></li>
				 			<li><img src="img/s6.jpg" alt=""><p>Samsung c9</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu21" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/z1.jpg" alt=""><p>Sony XZ Premium</p></li>
				 			<li><img src="img/z2.png" alt=""><p>Sony XZs</p></li>
				 			<li><img src="img/z3.png" alt=""><p>Sony XA Utral</p></li>
				 			<li><img src="img/z4.png" alt=""><p>Sony XA1</p></li>
				 			<li><img src="img/z5.jpg" alt=""><p>Sony L1</p></li>
				 			<li><img src="img/z6.jpg" alt=""><p>Sony X</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu31" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/o1.png" alt=""><p>OPPO F3 Plus</p></li>
				 			<li><img src="img/o2.png" alt=""><p>OPPO F3 Plus</p></li>
				 			<li><img src="img/o3.jpg" alt=""><p>OPPO F3</p></li>
				 			<li><img src="img/o4.jpg" alt=""><p>OPPO F1s</p></li>
				 			<li><img src="img/o5.jpg" alt=""><p>OPPO F1 lite</p></li>
				 			<li><img src="img/o6.png" alt=""><p>OPPO A37</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu41" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/m1.jpg" alt=""><p>Xiaomi Mi6</p></li>
				 			<li><img src="img/m3.jpg" alt=""><p>Xiaomi Mi5X</p></li>
				 			<li><img src="img/m2.jpg" alt=""><p>Xiaomi Redmi Note 4</p></li>
				 			<li><img src="img/m4.png" alt=""><p>Xiaomi Redmi 4</p></li>
				 			<li><img src="img/m5.png" alt=""><p>Xiaomi Mi4</p></li>
				 			<li><img src="img/m5.png" alt=""><p>Xiaomi Mi4 fpt</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu51" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/i1.png" alt=""><p>iPhone 7plus fpt 128GB</p></li>
				 			<li><img src="img/m1.jpg" alt=""><p>Xiaomi Mi6</p></li>
				 			<li><img src="img/o6.png" alt=""><p>OPPO A37</p></li>
				 			<li><img src="img/i4.png" alt=""><p>iPhone 6plus</p></li>
				 			<li><img src="img/z6.jpg" alt=""><p>Sony X</p></li>
				 			<li><img src="img/s1.jpg" alt=""><p>Samsung S8plus</p></li>
				 		</ul>
				 	</div>
				 </div>
			</div><!--END máy tính bảng-->
			<div class="col-md-6 col-sm-12 col-xs-12"><!--hàng sắp về-->
				<div class="muc">
					<p>HÀNG SẮP VỀ</p>
				</div>
				  <ul class="nav nav-tabs tab">
				    <li ><a data-toggle="tab" href="#home2">Apple</a></li>
				    <li><a data-toggle="tab" href="#menu12">Samsung</a></li>
				    <li class="active"><a data-toggle="tab" href="#menu22">Sony</a></li>
				    <li><a data-toggle="tab" href="#menu32">OPPO</a></li>
				    <li><a data-toggle="tab" href="#menu42">Xiaomi</a></li>
				    <li><a data-toggle="tab" href="#menu52"><strong>More ></strong></a></li>
				  </ul>

				 <div class="tab-content">
				 	<div id="home2" class="tab-pane fade  phone">
				 		<ul>
				 			<li><img src="img/i1.png" alt=""><p>iPhone 7plus fpt 128GB</p></li>
				 			<li><img src="img/i3.png" alt=""><p>iPhone 7 xách tay</p></li>
				 			<li><img src="img/i2.jpg" alt=""><p>iPhone 6s plus</p></li>
				 			<li><img src="img/i4.png" alt=""><p>iPhone 6plus</p></li>
				 			<li><img src="img/i5.jpg" alt=""><p>iPhone 8plus</p></li>
				 			<li><img src="img/i5.jpg" alt=""><p>iPhone 8</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu12" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/s1.jpg" alt=""><p>Samsung S8plus</p></li>
				 			<li><img src="img/s2.png" alt=""><p>Samsung S7 </p></li>
				 			<li><img src="img/s3.jpg" alt=""><p>Samsung Note7R</p></li>
				 			<li><img src="img/s4.jpg" alt=""><p>Samsung Note8</p></li>
				 			<li><img src="img/s5.jpg" alt=""><p>Samsung S6</p></li>
				 			<li><img src="img/s6.jpg" alt=""><p>Samsung c9</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu22" class="tab-pane fade in active phone">
				 		<ul>
				 			<li><img src="img/z1.jpg" alt=""><p>Sony XZ Premium</p></li>
				 			<li><img src="img/z2.png" alt=""><p>Sony XZs</p></li>
				 			<li><img src="img/z3.png" alt=""><p>Sony XA Utral</p></li>
				 			<li><img src="img/z4.png" alt=""><p>Sony XA1</p></li>
				 			<li><img src="img/z5.jpg" alt=""><p>Sony L1</p></li>
				 			<li><img src="img/z6.jpg" alt=""><p>Sony X</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu32" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/o1.png" alt=""><p>OPPO F3 Plus</p></li>
				 			<li><img src="img/o2.png" alt=""><p>OPPO F3 Plus</p></li>
				 			<li><img src="img/o3.jpg" alt=""><p>OPPO F3</p></li>
				 			<li><img src="img/o4.jpg" alt=""><p>OPPO F1s</p></li>
				 			<li><img src="img/o5.jpg" alt=""><p>OPPO F1 lite</p></li>
				 			<li><img src="img/o6.png" alt=""><p>OPPO A37</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu42" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/m1.jpg" alt=""><p>Xiaomi Mi6</p></li>
				 			<li><img src="img/m3.jpg" alt=""><p>Xiaomi Mi5X</p></li>
				 			<li><img src="img/m2.jpg" alt=""><p>Xiaomi Redmi Note 4</p></li>
				 			<li><img src="img/m4.png" alt=""><p>Xiaomi Redmi 4</p></li>
				 			<li><img src="img/m5.png" alt=""><p>Xiaomi Mi4</p></li>
				 			<li><img src="img/m5.png" alt=""><p>Xiaomi Mi4 fpt</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu52" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/i1.png" alt=""><p>iPhone 7plus fpt 128GB</p></li>
				 			<li><img src="img/m1.jpg" alt=""><p>Xiaomi Mi6</p></li>
				 			<li><img src="img/o6.png" alt=""><p>OPPO A37</p></li>
				 			<li><img src="img/i4.png" alt=""><p>iPhone 6plus</p></li>
				 			<li><img src="img/z6.jpg" alt=""><p>Sony X</p></li>
				 			<li><img src="img/s1.jpg" alt=""><p>Samsung S8plus</p></li>
				 		</ul>
				 	</div>
				 </div>
			</div><!--END hàng sắp về-->
			<div class="col-md-6 col-sm-12 col-xs-12"><!--hàng cũ-->
				<div class="muc">
					<p>HÀNG CŨ</p>
					</div>
				  <ul class="nav nav-tabs tab">
				    <li><a data-toggle="tab" href="#home3">Apple</a></li>
				    <li><a data-toggle="tab" href="#menu13">Samsung</a></li>
				    <li><a data-toggle="tab" href="#menu23">Sony</a></li>
				    <li><a data-toggle="tab" href="#menu33">OPPO</a></li>
				    <li class="active"><a data-toggle="tab" href="#menu43">Xiaomi</a></li>
				    <li><a data-toggle="tab" href="#menu53"><strong>More ></strong></a></li>
				  </ul>

				 <div class="tab-content">
				 	<div id="home3" class="tab-pane fade  phone">
				 		<ul>
				 			<li><img src="img/i1.png" alt=""><p>iPhone 7plus fpt 128GB</p></li>
				 			<li><img src="img/i3.png" alt=""><p>iPhone 7 xách tay</p></li>
				 			<li><img src="img/i2.jpg" alt=""><p>iPhone 6s plus</p></li>
				 			<li><img src="img/i4.png" alt=""><p>iPhone 6plus</p></li>
				 			<li><img src="img/i5.jpg" alt=""><p>iPhone 8plus</p></li>
				 			<li><img src="img/i5.jpg" alt=""><p>iPhone 8</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu13" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/s1.jpg" alt=""><p>Samsung S8plus</p></li>
				 			<li><img src="img/s2.png" alt=""><p>Samsung S7 </p></li>
				 			<li><img src="img/s3.jpg" alt=""><p>Samsung Note7R</p></li>
				 			<li><img src="img/s4.jpg" alt=""><p>Samsung Note8</p></li>
				 			<li><img src="img/s5.jpg" alt=""><p>Samsung S6</p></li>
				 			<li><img src="img/s6.jpg" alt=""><p>Samsung c9</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu23" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/z1.jpg" alt=""><p>Sony XZ Premium</p></li>
				 			<li><img src="img/z2.png" alt=""><p>Sony XZs</p></li>
				 			<li><img src="img/z3.png" alt=""><p>Sony XA Utral</p></li>
				 			<li><img src="img/z4.png" alt=""><p>Sony XA1</p></li>
				 			<li><img src="img/z5.jpg" alt=""><p>Sony L1</p></li>
				 			<li><img src="img/z6.jpg" alt=""><p>Sony X</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu33" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/o1.png" alt=""><p>OPPO F3 Plus</p></li>
				 			<li><img src="img/o2.png" alt=""><p>OPPO F3 Plus</p></li>
				 			<li><img src="img/o3.jpg" alt=""><p>OPPO F3</p></li>
				 			<li><img src="img/o4.jpg" alt=""><p>OPPO F1s</p></li>
				 			<li><img src="img/o5.jpg" alt=""><p>OPPO F1 lite</p></li>
				 			<li><img src="img/o6.png" alt=""><p>OPPO A37</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu43" class="tab-pane fade in active phone">
				 		<ul>
				 			<li><img src="img/m1.jpg" alt=""><p>Xiaomi Mi6</p></li>
				 			<li><img src="img/m3.jpg" alt=""><p>Xiaomi Mi5X</p></li>
				 			<li><img src="img/m2.jpg" alt=""><p>Xiaomi Redmi Note 4</p></li>
				 			<li><img src="img/m4.png" alt=""><p>Xiaomi Redmi 4</p></li>
				 			<li><img src="img/m5.png" alt=""><p>Xiaomi Mi4</p></li>
				 			<li><img src="img/m5.png" alt=""><p>Xiaomi Mi4 fpt</p></li>
				 		</ul>
				 	</div>
				 	<div id="menu53" class="tab-pane fade phone">
				 		<ul>
				 			<li><img src="img/i1.png" alt=""><p>iPhone 7plus fpt 128GB</p></li>
				 			<li><img src="img/m1.jpg" alt=""><p>Xiaomi Mi6</p></li>
				 			<li><img src="img/o6.png" alt=""><p>OPPO A37</p></li>
				 			<li><img src="img/i4.png" alt=""><p>iPhone 6plus</p></li>
				 			<li><img src="img/z6.jpg" alt=""><p>Sony X</p></li>
				 			<li><img src="img/s1.jpg" alt=""><p>Samsung S8plus</p></li>
				 		</ul>
				 	</div>
				</div>
			</div><!--END hàng cũ-->
		</div>
	</div>
	</div>
	<div class="container"><!--footer-->
		<div class="row">
			<div class="col-md-4">
				<div class="tieude">
					<p>Thông tin liên lạc</p>
				</div>
				<ul>
					<li>Tư vấn khánh hàng: <strong>1900.6480</strong></li>
					<li>Khiếu nại, góp ý: <strong>028.7106.6123</strong></li>
					<li>Bảo hành, sửa chữa: <strong>1900.636.011</strong></li>
					<li>Thời gian phục vụ: 8h - 22h</li>
					<li>Email: <strong>cskh@cellphones.com.vn</strong></li>
				</ul>
			</div>
			<div class="col-md-4">
				<div class="tieude">
					<p>Thông tin hỗ trợ</p>
				</div>
				<div class="col-md-6 hotro">
					<ul>
						<li><a href="#">Giới thiệu</a></li>
						<li><a href="#">Smember</a></li>
						<li><a href="#">Bảo hành</a></li>
						<li><a href="#">Mua hàng từ xa</a></li>
						<li><a href="#">Tuyển dụng</a></li>
					</ul>
				</div>
				<div class="col-md-6 hotro">
					<ul>
						<li><a href="#">Bán hàng Doanh nghiệp</a></li>
						<li><a href="#">Kiểm tra bảo hành-sửa chữa</a></li>
						<li><a href="#">Kiểm tra thời hạn Bảo hành</a></li>
						<li><a href="#">Xem video đánh giá</a></li>
						<li><a href="#">Chính sách bảo mật</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4">
				<div class="tieude">
					<p>hệ thống cửa hàng</p>
				</div>
				<ul>
					<li data-toggle="tooltip" title="CellphoneS Quốc Lộ 50">A23/8, Quốc lộ 50 (Đối diện Đường số 10, đoạn giữa Bến xe quận 8 và nhà thờ Bình Hưng), H. Bình Chánh ĐT: 0287.1087.238</li>
					<li data-toggle="tooltip" title="CellphoneS 37-39 Võ Văn Ngân">37-39 Võ Văn Ngân, P. Linh Chiểu, Q. Thủ Đức ĐT: 0287.1097.939</li>
					<li data-toggle="tooltip" title="CellphoneS 125 Lê Văn Việt">125 Lê Văn Việt, P. Hiệp Phú, Q. 9 ĐT: 0287.1061.125</li>
					<li data-toggle="tooltip" title="CellphoneS 536 Xô Viết Nghệ Tĩnh">536 Xô Viết Nghệ Tĩnh, P. 25, Q. Bình Thạnh ĐT: 0287.1065.536</li>
					<li data-toggle="tooltip" title="CellphoneS 177 Khánh Hội">177 Khánh Hội, P. 3, Q. 4 ĐT: 0287.1067.171</li>
					<li data-toggle="tooltip" title="CellphoneS 157-159 Nguyễn Thị Minh Khai">157-159 Nguyễn Thị Minh Khai, P. Phạm Ngũ Lão, Q. 1 ĐT: 0287.1066.159</li>
					<li data-toggle="tooltip" title="CellphoneS 55B Trần Quang Khải">55B Trần Quang Khải, P. Tân Định, Q. 1 ĐT: 0287.108.3355</li>
				</ul>
			</div>
			<div class="col-md-12 footer">
				<p>CoppyRight 2017</p>
				<p>Build and Deverlop by NVT</p>
			</div>
		</div>
	</div><!--END footer-->
	<div id="2top" style="position: fixed; right: 15px;bottom: 20px; cursor: pointer;">
		<div class="panel panel-default">
			<div class="glyphicon glyphicon-chevron-up" style=" padding-left: 2px">
				
			</div>
		</div>
	</div>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script>
		$(document).ready(function(){
			$(".nav .dt").mouseover(function(){
				$(".mn1").css("display","block");
			});
			$(".nav .dt").mouseout(function(){
				$(".mn1").css("display","none");
			});
			$(".nav .mtb").mouseover(function(){
				$(".mn2").css("display","block");
			});
			$(".nav .mtb").mouseout(function(){
				$(".mn2").css("display","none");
			});
			$(".nav .pk").mouseover(function(){
				$(".mn3").css("display","block");
			});
			$(".nav .pk").mouseout(function(){
				$(".mn3").css("display","none");
			});
			$(".nav .hc").mouseover(function(){
				$(".mn4").css("display","block");
			});
			$(".nav .hc").mouseout(function(){
				$(".mn4").css("display","none");
			});
			$(".nav .sv").mouseover(function(){
				$(".mn5").css("display","block");
			});
			$(".nav .sv").mouseout(function(){
				$(".mn5").css("display","none");
			});
			$(".nav .sc").mouseover(function(){
				$(".mn6").css("display","block");
			});
			$(".nav .sc").mouseout(function(){
				$(".mn6").css("display","none");
			});
		});
	</script>
	<script>
		$(function(){
			$(window).scroll(function(){
			if($(this).scrollTop()>100){
				$('#2top').fadeIn();
			}
			else{
				$('#2top').fadeOut();
			}
			});
			$('#2top').click(function(){
				$('html,body').animate({scrollTop:0},500);
				return false;
			});
		});
	</script>
</body>
</html>