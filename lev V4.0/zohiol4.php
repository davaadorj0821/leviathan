<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">

	<title>Левиафан</title>
    <link rel="shortcut icon" href="img/logo/nom.png">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/test.css">
    
    <link rel="stylesheet" href="css/notification.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/slide.css">

    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/jvectormap/2.0.4/jquery-jvectormap.min.css'>


	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900,400italic,700italic,900italic|Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-header->
	<section>
	<header>
		<nav class="rad-navigation">
			<div class="rad-logo-container rad-nav-min ">
				<a  href="profile.html" ><img src="img/logo/nom.png"  width="60px" style="padding-top:5px"></a>
				<a href="#" class="rad-toggle-btn pull-right"><i class="fa fa-bars"></i></a>
			</div>
			<a href="#" class="rad-logo-hidden">Левиафан</a>
			<div class="rad-top-nav-container">
				<a href="" class="brand-icon"><i class="fa fa-recycle"></i></a>
				<ul class="pull-right links">
					
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-cog"></i></a>
						<ul class="rad-dropmenu-item rad-settings">
							<li class="rad-dropmenu-header"><a href="#">Settings</a></li>
							<li class="rad-notification-item text-left">
								<div class="pull-left"><i class="fa fa-link"></i></div>
								<div class="pull-right">
									<label class="rad-chk-pin pull-right">
										<input type="checkbox" /><span></span></label>
								</div>
								<div class="rad-notification-body">
									<div class="lg-text">Change to Flat Theme</div>
									<div class="sm-text">Flattify it</div>
								</div>
							</li>
							<li id="rad-color-opts" class="rad-notification-item text-left hide">
								<div class="pull-left"><i class="fa fa-puzzle-piece"></i></div>
								<div class="pull-right">
									<div class="rad-color-swatch">
										<label class="colors rad-bg-crimson rad-option-selected">
											<input type="radio" checked name="color" value="crimson" />
										</label>
										<label class="colors rad-bg-teal">
											<input type="radio" name="color" value="teal" />
										</label>
										<label class="colors rad-bg-purple">
											<input type="radio" name="color" value="purple">
										</label>
										<label class="colors rad-bg-orange">
											<input type="radio" name="color" value="orange" />
										</label>
										<label class="colors rad-bg-twitter">
											<input type="radio" name="color" value="twitter" />
										</label>
									</div>
								</div>
								<div class="rad-notification-body">
									<div class="lg-text">Choose a color</div>
									<div class="sm-text">Make it colorful</div>
								</div>
							</li>
						</ul>
					</li>
				</ul>
				<!-Шинэ мэдээ->
				<ul class="pull-right links">
					
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-newspaper-o"><span class="rad-menu-badge rad-bg-primary">23</span></i></a>
						<ul class="rad-dropmenu-item">
							<li class="rad-dropmenu-header"><a href="#">Шинэ мэдээ</a></li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-file-text-o fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Introduction to fetch()</div>
										<div class="sm-text">The fetch API</div>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-bitbucket fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Check your BitBucket</div>
										<div class="sm-text">Last Chance</div>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-google fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Google Account</div>
										<div class="sm-text">sathishlxg@gmail.com</div>
									</div>
								</a>
							</li>
							<li class="rad-dropmenu-footer"><a href="#">Дэлгэрэнгүй</a></li>
						</ul>
					</li>
					<!-Шинэ мэдээ->
					<!-Шинэчлэл->
					<li class="rad-dropdown"><a class="rad-menu-item" href="#"><i class="fa fa-bell-o"><span class="rad-menu-badge">49</span></i></a>
						<ul class="rad-dropmenu-item">
							<li class="rad-dropmenu-header"><a href="#">Шинэчлэл</a></li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-html5 fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Introduction to fetch()</div>
										<div class="sm-text">The fetch API</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 2 sec ago</em>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-bitbucket fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Check your BitBucket</div>
										<div class="sm-text">Last Chance</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 49 mins ago</em>
									</div>
								</a>
							</li>
							<li class="rad-notification-item text-left">
								<a class="rad-notification-content" href="#">
									<div class="pull-left"><i class="fa fa-google fa-2x"></i>
									</div>
									<div class="rad-notification-body">
										<div class="lg-text">Google Account</div>
										<div class="sm-text">sathishlxg@gmail.com</div>
										<em class="pull-right sm-text"><i class="fa fa-clock-o"></i> 2 days ago</em>
									</div>
								</a>
							</li>
							<li class="rad-dropmenu-footer"><a href="#">Дэлгэрэнгүй</a></li>
						</ul>
					</li>
					<!-Шинэчлэл->
				</ul>
				
			</div>
		</nav>
	</header>
</section>
<!-header->
<!-toggle menu->
<aside>
	<nav class="rad-sidebar rad-nav-min">
		<ul>
			<li>
				<a href="home.html" class="inbox">
					<i class="fa fa-star"><span class="icon-bg rad-bg-success"></span></i>
					<span class="rad-sidebar-item">Эхлэл</span>

				</a>
				
			</li>
			<li>
				<a href="zohiol1.html">
					<i class="fa fa-book">
						<span class="icon-bg rad-bg-danger"></span>
					</i>
					<span class="rad-sidebar-item">Тэнгэр газрын заагт</span>
				</a>
			</li>
			<li>
				<a href="zohiol2.html" class="snooz">
					<i class="fa fa-book"><span class="icon-bg rad-bg-primary">
					</span></i><span class="rad-sidebar-item">Хуйларч буй луу</span>
				</a>
			</li>
			<li>
				<a href="zohiol3.html" class="done">
					<i class="fa fa-book"><span class="icon-bg rad-bg-warning">
					</span></i><span class="rad-sidebar-item">Чөтгөр бурхдын домгууд</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-user"><span class="icon-bg rad-bg-violet"></span></i>
					<span class="rad-sidebar-item">Бидний тухай</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class="fa fa-phone-square"><span class="icon-bg rad-bg-contact"></span></i>
					<span class="rad-sidebar-item">Холбоо барих</span>
				</a>
			</li>
		</ul>
	</nav>
</aside>

<!-toggle menu->

		<ul class="cb-slideshow">
            <li><span>Image 01</span><div></div></li>
            <li><span>Image 02</span><div></div></li>
            <li><span>Image 03</span><div></div></li>
            <li><span>Image 04</span><div></div></li>
            <li><span>Image 05</span><div></div></li>
            <li><span>Image 06</span><div></div></li>
        </ul>
<!-background->

	<section class="rad-body-wrapper rad-nav-min">
		<div class="col-md-9 col-sm-9 col-xs-9">
		<div class="showback">
	<!-button->
		<a href="https://tselmegsite.wordpress.com/2016/05/10/tgz-2/" class="button button1">Өмнөх бүлэг</a>
		<a class="button button2">Дараагын бүлэг</a>

	<!-button->
    <h4> Чөтгөр бурхдын домгууд [23]-Аллага!</h4>
		<div >
			
  <input type="checkbox" class="read-more-state" id="post-1" />
			<p class="read-more-wrap">Еэ Зиюун зовнил нь сарнив. Тэр Ниэ Ли-ийн өгсөн [Есөн Эргэлдсэн Мөсөн Галт Шувууны Техник]-ыг гаргаж ирлээ.  [Есөн Эргэлдсэн Мөсөн Галт Шувууны Техник]-ын үнэ цэнэ үнэхээр төсөөлөшгүй бас Ниэ Ли түүнд үнэхээр ийм нандин бясалгалын техникийг өгөхийг хүслээ гэж үү?

Уур хилэн болон талархал аль аль нь, эдгээр 2 сэтгэл хөдлөлүүд түүний сэтгэл дотор холилдсон учир тайван байх боломжгүй байлаа.

Удаан хугацааны дараа, Еэ Зиюун эцэст нь сэтгэл доторхи уур хилэнгээ таслан зогсоож [Есөн Эргэлдсэн Мөсөн Галт Шувууны Техник]-ээр дадлагажихдаа төвлөрөв.Түүний дотоод сэтгэл аажмаар тайвширч эхэллээ. Түүний сүнсний тойрон мөстсөн жавар шиг байж, болор тунгалаг энерги түүний биеийг тойрж эхлэв.

Еэ Зиюун-ы арьс хашийн гялбаан шиг болор тунгалаг болж, энгийн байдгаасаа илүү үзсгэлэнтэй болов. Тэнгэрээс бууж ирсэн шидэт дагина мэт.

<span class="read-more-target">Сүнсний хүчний тасралтгүй өссөлттэйгөөр, бохирдолууд нь түүий биеэс гадагшилав.  Бие нь хөлсөөр бүрхэгдэж, гэнэт цэнхэр гэрэл цацарч, тэд асар том цэнхэр бадамлянхуа шиг боллоо.

Еэ Зиюун гэнэт нүдээ нээв, түүний үзэсгэлэнт хүүхэн хараанууд эрдэнийн чулууднууд шиг л цэвэр тунгалаг байлаа. [Есөн Эргэлдсэн Мөсөн Галт Шувууны Техник]-ын хүч түүний санасаныг хол давсан байв. Тэр нэг одтой хүрэл зэрэглэлын заагт аль хэдийн дөхсөн  гэхдээ  [Есөн Эргэлдсэн Мөсөн Галт Шувууны Техник]-ээр дадлагажсаны дараа, тэр шууд л хил хязгаарыг эвдэн 1 одтой хүрэл зэрэглэлтэй болов.

Өөрийн бие дээрх наалдамхай байдлыг мэдрэв. Тэр нь туйлын тав тухгүй байсан ба Еэ Зиюун нэн даруй ванн-д орох ус бэлдүүлэхээр шивэгчинээ явуулав.

Халуун устай торхноос цэцгийн дэлбээний үнэр анхилна. Еэ Зиюун удаанаар хувцасаа тайлж өөрийн халуухан биеэ ил гаргав. Түүний цагаахан булбарай арьс хашийн барьмал гэлтэй.  [Есөн Эргэлдсэн Мөсөн Галт Шувууны Техник]-ээр дадлагажсаны дараа, Еэ Зиюун улам үзэсгэлэнтэй дур булаам болов. Тэр цэцэглэх насан дээрээ хүрээгүй ч түүний биеийн хөгжилийг аль хэдийн хангалттай сайн гэж авч үзэж болно.

Түүний гоёмсог шагай дэлбээн далайд оров. Халуун ус түүний биеийн бохирыг арилгах ба цэцгийн анхилам үнэр түүний биед шингэх мэдрэмж. Еэ Зиюун-ы сэтгэл санаа буцаад жаргалтай болон солигдов. Түүний нарийхан хуруунууд өөрийн толгор арьсаа илнэ. Өөрийн зүүн цээжин дээрх эрвээхэйн мэнгээ харахад, түүний сэтгэл тэвдэхээ больж чадсангүй.

Энэ эрвээхэйн дүрстэй мэнгэ түүнийг төрөхөд л байсан. Мэнгэндээ ялимгүй хүрнэ, тэр охидын хувьд цэцэглэх насандаа хүрээгүй ч түүний бяцхан өндөр цэгүүд нь аль хэдийн маш дур булаам харагдаж байв.

Тэгэхээр Ниэ Ли түүний мэнгийг өмнө нь харсан гэж үү?

Еэ Зиюун өөрийн сэтгэлээ тэвдэж байгааг мэдрэв. Хэрвээ Ниэ Ли үүнийг өмнө нь харсан бол, тэгээд бусдыг нь ч бас харсан гэсэн үг биш гэж үү?

Ердөө дараахан нь , гаднаас шажигнах дуу гарав.

“Хэн? Хэн сэм хараад байна?” Еэ Зиюун нэн даруй гараараа цээжээ нууж, зэвүүцсэн царай нүүрэндээ тодруулна. Ниэ Ли өөдгүй амьтан!

“Хатагтай, энэ би байна!” Үзэсгэлэнт шивэгчин хөшигний цаанаас гарч ирэв.

Энэ шивэгчин Шиао Диэ байв. Еэ Зиюун тайван амьсгаа авна, түүний царай үл ялиг халуу дүгэв. Ниэ Ли хараахан 1 одтой хүрэл зэрэглэд хүрээгүй, хэрхэн Хотын Даргын Гэр-ийн хүчтэй хамгаалалтийг эвдэж чадах билээ? Тэр хэтэрхий их хий хоосон зүйл төсөөлөөд байна! Тэгэхээр Ниэ Ли үнэндээ түүний мэнгийг хэрхэн харсан байх юм бол?

Намуухан шөнө.

2 дах өдөр, Нууцлаг Эрдэнэсийн Хэсэгт.

Энэ бол олон төрлийн хуяг дуулга, зэвсэг болон бичээсний хээний төрөлжсөн том дэлгүүо. Энэ дэлгүүр Гэгээн Оддын Сургуулиас хэдэн 100 метрийн зайд байрладаг.

“Эзээн, би энэ Дүрэлзэх галын хуягны багцийг мөн энэ Шатаж буй Уур хилэнгийн сэлэмийг авмаар байна!” Ниэ Ли, хүрэл хуяг болон хүрэл дуулгаруу заав.

“Энэ Дүрэлзэх галын хос багц нь 4 хэсгээс бүрдэнэ. Тус бүр хуяг, бээлий, урт ноосон өмд болон гутал нийлүүлээд тооцвол 500 чөтгөрийн зоос болно. Тэдгээр нь хүрэл зэрэглэлийн оргилууд, Дүрэлзэх галт чөтгөрийн араатний хайрсаар хийсэн. Хүрэл зэрэглэлийн чөтгөрийн араатнууд энэ хуягийг эвдлэх боломжгүй, бүр мөнгөн зэрэглэлийн чөтгөрийн араатнууд ч үүнийг эвдэлэхэд их хүчин чармайлт гаргана. Залуу Мастер та үүнийг авахдаа итгэлтэй байна уу?” Эзэн нь Ниэ Ли-г шинжиж буй байртай хэлэв.

“Мэдээж! Та намайг тоглож байна гэж бодоо юу?” Ниэ Ли цүнхээ шидэж, үргэлжлүүлэв “Энд 700.000 чөтгөрийн сүстэний картууд байгаа.”

“Мэдлэээ! Би таньд үүнийг түргэн боогоод өгье Залуу Мастер аа!” Тэр эзний нүднээс баяр хөөртэйгөөр гэрэл цацрана.

“Би одоо ч энэ хуяг мөн эдгээр хуйлмал бичээсийг хүсэж байна. Би бүгдийг хүсэж байна, надад тэдний бүгдийг боогоод өг. Бас энэ, энэ, энэ …” Их хэмжээний Нил Ягаан Манан өвс худалдсаны дараагаар, Ниэ Ли-ийн гарт асар их мөнгө орж ирсэн. Тиймээс эдгээр зүйлсийг хувалдаж авах нь ямар ч асуудалгүй.

Энэ залуу эзэн ямар супер гэр бүлд харьяалагддагийг мэдэхгүй ч, дэлгүүрийн эзний шүд инээмсэглэсэндээ бараг унах шахна. Ниэ Ли-ийн үрж буй зардалийн өгөөмөр сэтгэлийн улмаас нэг өдрийг дотор хэдэн сарынхаа борлуулалтыг хийчихлээ

Ниэ Ли түүнчлэн 5-6 куб метр зайтай Орон Зайн бөгж авсан ба бүх зүйлсээ Орон зайн бөгжинд байрлуулав. Дүрэлзэх галын хослолын хувьд, тэр шууд л бие дээрээ өмсчихөв. Энэ Дүрэлзэх галын хослол маш хөнгөн, цамцныхаа дотуур өмсөхөд энэ нь харагдахгүй хучигдана.

“Би өнөөдөр Шиао Нинг-ийн мөнгийг эргүүлж өгөхөөр ангируу очно!” Ниэ Ли хэсэг зуур бодоод өөртөө хэлэв. Тэгээд тэр сургуулийн зүг алхалаа.

Ниэ Ли-ийг сургуулийн булан тойроод алхаж байхад гэнэт хэсэг хүмүүс түүний урд гарч ирэв.

“Хогийн амьтан, бид эцэст нь чамайг барьлаа!” Шэн Юуэ хүйтнээр инээгээд Ниэ Ли-г харав. Шэн Юуэ-ийн ард зогсох зургаан туслах нь ч мөн Ниэ Ли-г тохуурхсан байдалтай харлаа. Ниэ Ли аль хэдийн Шэн Юуэ болон түүний бүлэг өөрийг нь дагаад байгааг мэдэж байв. Тэр зориудаар бөглүү газарлуу Шэн Юуэ болон түүний бүлэг түүнийг хаахыг хүлээхээр явав. Ниэ Ли үл мэдэгдэм инээмсэглэнэ, дараагийн удаа та нараар хэрхэн даажигнахыг хар л даа!

“Та нар юу хүсээв?” Ниэ Ли айсан дүр үзүүлнэ.

“Хогийн амьтан, эцэст нь чи айдсыг мэдлээ. Хог гэж, би эдгээр бүх өдрүүдэд чамтай золгүйтлээ. Өнөөдөр чи өөрөө өөрийн үхлээ эрлээ! Түүнийг өршөөлгүйгээр зод!” Шэн Юуэ уурсан хэлэв.

Шэн Юуэ-ийн туслахууд яг л өлсөглөн бар хоолруугаа дайрч буй мэт Ниэ Ли-ийн зүг дайрлаа.

“Түүнийг цохь, Түүнийг мөлхөж чадахгүй болох хүртэл нь өршөөлгүйгээр зод!” Шэн Юуэ хэрцгий бөгөөд тааламжтай инээмсэглэлийг нүүрэндээ тодруулна.

“Энд битгий ир, Би хариугаа авах болно шүү!” Ниэ Ли  бултаж байх зуураа сүнсний хүчээ ашиглан орилов, “Алуурчин! Ариун Гэр бүл намайг алах гэж байна!” Ариун гэр бүлийн нэрийг хиртүүлэх сайхан боломж олдлоо, Ниэ Ли мэдээж ийм боломжийг алдахгүй.

Ниэ Ли нууц сүснсний техникийг хэрэглэж, түүний дуу аянга шиг л цуурайтсан учир бусдынх нь хэнгэрэг хагарах шахав.

“Хог гэж, наад хогынхоо амыг тагла! Хурдал түүнийг чимээгүй болго!” Ниэ Ли-ийн орилохыг сонссон, Шэн Юуэ-ийг царай хуу татагдах шахав. Хог гэж, Ниэ Ли-ийн орилооныг Гэгээн Оддын Сургууль тэр чигтээ сонсох нь. Бүр нядуулж буй гахайнаас ч долоон дор!

Банг Банг Банг!

Шэн Юуэ-ийн туслахуудын дайралт бороон дусал шиг Ниэ Ли-ийн бие дээр унав. Тэдгээр зургаан туслахууд дотор, гурав нь  1 одтой хүрэл зэрэглэл бусад нь 2 одтой хүрэл зэрэглэлйнх байв. Баруун талаас, тэднээс хэдэн нударга ирж Ниэ Ли-г цохиж унагаав. Гэхдээ хэдэн цохилтын дараа, Ниэ Ли хариу дайрах чадваргүй болов. Түүний чарлаан сургуулийн хэдэн барилгуудын хооронд нааш цааш чангаар цуурайтав.

“Алуурчин! Ариун Гэр бүл намайг алах гэж байна!”

Түүний дуу хоолойны нэвтрэх хүч сургуулийн барилгуудыг амархан доргиов. Яаравчлан,  Гэгээн Оддын сургууль бүхэлдээ үүнд сандарч мөн олон тооны хүмүүс цонхоор шагайж, юу болж буйг харахыг хүслээ.

Нэг харалтаар л, тэд Ниэ Ли-г зургаан хүмүүс тойрон зодож мөн тэдний ард Ариун гэр бүлийн Шэн Юуэ зогсохыг харав.

“Энэ Ниэ Ли биш гэж үү?”

“Би Ниэ Ли-г Ариун гэр бүлийг доромжилсон гэж сонссон!”

“Би Ниэ Ли-г <<Улаан Туяаны Бичээсний Хээг>> номноос хулгайлсаныг илчилсэн учир, Ариун Гэр бүл түүнийг тонилгохыг төлөвлөж байгаа гэж сонссон!”

“Ариун Гэр бүлийнхэн үнэхээр мунхаг хүмүүс юм, үнэнгээсээ Гэгээн Оддын Сургуульд сурагчийг алахыг оролдоо!”

“Хурдал үүнийг Захиралд мэдэгд!”

Сурагчид тэдний талаар ярилцаж эхэллээ, бүр Ниэ Ли-иг үзэн яддаг байсан хүмүүс ч түүнийг өрөвдөв. Хэдэн язгууртан хүүхдүүдыг оролцуулсан. Бүгд Шэн Юуэ-ийн арганд дургүйцэж байлаа. Энэ бол Гэгээн Оддын сурууль, Ариун Гэр бүл жинхээсээ хэн нэгнийг энд алахыг зүрхэллээ гэж үү? Энэ хууль бус биш гэж үү?

Ниэ Ли урд байгаа Шэн Юуэ-лүү хараад, амныхаа буланг өргөв. Шэн Юуэ бол түүнтэй тоглоход арай л туршалагүйднэ!

Зургаан хүнээр тойруулсан байхдаа, Ниэ Ли Шэн Юуэ-ийн туслахуудын дайралт Дүрэлзэх галын хуягруу ирэхээр хурдан хөдөлгөөнөө ашиглана. Тэд Ниэ Ли-г гэмтээх боломжгүй байсанаас гадна бүр тэд өөрсдийн хүчтэй дайралтынхаа нөлөөнд өөрсдийн гара мэдээ алдтал гэмтээв. Тэдний гарны яснууд цууралтын эцэст хүрсэн юм шиг л мэдрэгдэнэ.

Бултаж байх зуураа, Ниэ Ли нууцаар Шэн Юуэ-ийн туслахуудын биелүү нударгаа явуулж байсан учир тэд өвдөлтөндөө ярвайна. Нарийнаар ярьвал, Ниэ Ли-ийн одоогийн хүчтэйгээр, тэр 1 болон 2 одтой хүрэл зэрэглэлийн тулаанчидаас хохирол амсах боломжгүй. Гэхдээ Ниэ Ли-ий нударга бага зэрэг хачин, түүний зөөлхөн цохилт нь л саваагаар толгой дээр цохиж байгаагаас илүү өвтгөдөг.

“Хог гэж, мунхагуудын цуглуулга! Та нар ч гэсэн тулалддагүй** юу?” Шэн Юуэ барьхирав. Олон хүмүүсийн хараан дор, Шэн Юуэ өөрийн жинхэнэ царайгаа ил гарсныг мэдэрлээ. Удаан хугацааны дараагаар зөвхөн эдгээр зургаан туслахуудаар Ниэ Ли-г зодуулах боломжгүй боллоо, гэхдээ Ниэ Ли-ийн чарлаан чангарсаар л байв.                                                                  [ОТ: жинхэнэ утга нь “Та нар ч гэсэн иддэг** үү?”гэхдээ.. засварлагч бага зэрэг хошигнохыг санал болгосон юм  xD]

Ниэ Ли зөвхөн өөртөө тусламж ирэн чарласан бол зүгээр, гэхдээ Ниэ Ли Ариун гэр бүлийнхийг аллага үйлдэж байна хэмээн ориллоо. Энэ нь Ариун гэр бүлийнхнийг гэмт хэрэгтнүүд шиг шатаж байхад, тэдэн дээр бохир ус цацсантай ялгаагүй.

Шэн Юуэ үүнээс болоод галзуурч байв. Яг одоо тэр зогсож чадахгүй.

“Түүнийг зод, хайр найргүйгээр зод!” Шэн Юуэ бархирав.

Шэн Юуэ-ийн туслахууд гомдолоор дүүрнэ. Тэд аль хэдийн хангалттай хичээсэн. Гэхдээ Ниэ Ли-рүү яаж ч дайрсан хамаагүй, тэр гэмтэл авахгүй, харин тэд Ниэ Ли-д зодуулсандаа яс нь тарж байлаа. Ниэ Ли-ийн цохилт зөөлхөн мэдрэгдэнэ, гэхдээ энэ нь хүчээр дүүрэн, тэднийг хүнд хөх няцтай болтол нь цохино.

“Та нар юу хийж байгаа юм?” удалгүй уянгалаг хоолой сонстов. Нарийнхан галбираар хучигдсан, энэ бол Шиао Нииг.

Шиао Нинг Ниэ Ли-ийн урд хамгаалахаар зогсон, Шэн Юуэ болон түүний бүлэгрүү хилэгнэн харлаа. Цэнхэр гэрэл түүний биенээс цацарна, тэр аль хэдийн 1 одтой хүрэл зэрэглэлийн чөтгөрийн сүнстэн болсон. Түүний гар Цэнхэр Саран Чинжаал*ыг барьж, ямар ч үед дайрахад бэлэн байлаа.

“Шэн Юуэ, чи арай л хэтэрхий байна.” Өөр нэг уянгалаг хоолой сонстов. Нөгөө талаас үзэсгэлэнт нарийхан галбираар хучигдсан, энэ бол Еэ Зиюун. Тэр Шэн Юуэ-рүү хилэгнэн ширтэж хэлэв, “Шэн Юуэ, Би хэзээ ч чамайг ийм төрлийн хүн гэж бодсонгүй!”

“Ниэ Ли, чи зүгээр үү?” Шиао Нинг болон Еэ Зиюун хоёул зэрэг Ниэ Ли-рүү харав.

Еэ Зиюун-ыг Ниэ Ли-г анхаарч байхыг харсан, Шиао Нинг-ийн царай царцаж, толгойгоо шидлэв.

Еэ Зиюун ч мөн бага зэрэг эвгүй болж, толгойгоо Шэн Юуэ-ийн зүг эргүүлэв.

“Зиюун, чи буруу ойлгочихлоо, энэ чиний бодож байгаа шиг зүйл биш!” Шэн Юуэ тайлбарлахыг хичээв. Ниэ Ли-ийн царайнд үл мэдэг элэглэл тодрохыг харсан, тэр юу болсоныг ойлгов. Ниэ Ли түүнийг мангартуулж! Шэн Юуэ Ниэ Ли-ийн зүг заагаад, “Энэ бол энэ хог биднээр оролдсон хэрэг, тэр үүний ард байгаа!”

“Шэн Юуэ, чи хэнийг тэнэгтүүлэхийг хичээгээд байгаа юм?” Шиао Нинг уурлав.” Чиний олсон шалтаг чинь хэтэрхий учир дутагталтай биш гэж үү?”

Энэ үед, Ниэ Ли-ийн царай ямар ч гэмгүй харагдана. Ниэ Ли Шэн Юуэ-д шударга загинан хэлэв “Би танай Ариун Гэр бүлийг доромжилсоноо хүлээн зөвшөөрч байна, гэхдээ та нар арай л хэтрүүллээ. Үнэхээр сургуульд хэн нэгнийг алахыг хүслээ гэж үү? Чи Гэгээн Одды Сургуулыг юу гэж  бодоов? Миний гэр бүлийг танайхтай харьцуулашгүй ч би чамаас өршөөл ирэхгүй. Ариун гэр бүлийн авир хэр хол явахыг харья л даа! Би, Ниэ Ли бахархаж байна, чи намайг алсан байсан ч хорон санаат та нарт бууж өгөх нь миний хувьд боломжгүй!”

Ниэ Ли-ий шударга үгсээс болж Шэн Юуэ уурандаа багтрах дөхнө.

Ниэ Ли-ийн үгийг сонссон, Шиао Нинг болон Еэ Зиюун, түүнийг бахдангуй харахаа больж чадсангүй. Мөн Шио Нинг-ийн сэтгэл Ниэ Ли-г гэсэн бишрэлээр дүүрч байлаа.

“Би ч бас, Ариун гэр бүлд бууж өгөхгүй!” Шиао Нинг нууцхан бодов. Тэр Ариун гэр бүлд үзэн ядалтаар дүүрэн байв! Түүний харж байгаагаар, Ариун гэр бүл үргэлж олиггүй зэвүүн амьтад байсан. Зүгээр л түүнийг Шэн Фэй-тэй хүчээр гэрлүүлэх гээд байгаагаас харж болно!

</span></p>
<label for="post-1" class="read-more-trigger"></label>
		</div>
		</div>
					 
  </div>
  
	
<!-background->
<!-notification->

<section id="main-content">
          <section class="wrapper">
		<div class="col-md-3 col-sm-3 col-xs-3 ds">
			<!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>Ном 1 – Тэнгэр газрын заагт</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">1 хэсэг : Эх үрийн холбоо</a>
                      		</p>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">2 хэсэг : Засврын ертөнц</a>
                      		</p>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">3 хэсэг : Хоёр жилийн дараа сургуульд орсон нь</a>
                      		</p>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">4 хэсэг : Тэнгэрийн сургууль</a>
                      		</p>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">5 хэсэг : Хичээлийн анхны өдөр</a>
                      		</p>
                      </div>
                      <!-- 6th Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">6 хэсэг : Найзууд</a>
                      		</p>
                      </div>
                      <!-- 7th Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">7 хэсэг : Даалгавар</a>
                      		</p>
                      </div>
                      <!-- 8th Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">8 хэсэг : Номын сан</a>
                      		</p>
                      </div>
                      <!-- 9th Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">9 хэсэг : Сарай багшийн гэнэтийн бэлэг!</a>
                      		</p>
                      </div>
                      <!-- 10th Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">10 хэсэг : Замналууд</a>
                      		</p>
                      </div>
                      <!-- 11th Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">11 хэсэг : Тэнгэрийн сургуулийн тэмцээн</a>
                      		</p>
                      </div>
                      <!-- 12th Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">12 хэсэг : Үхлийн бурхдын номын сан</a>
                      		</p>
                      </div>
                      <!-- 13th Action -->
                      <div class="desc">
                      		<p>
                      		   <a href="#">13 хэсэг : Нөмрөг</a>
                      		</p>
                      </div>
					
                    
		</div>
	</section>
</section>
	
<!-notification->
<!-footer->

<!-footer->
<!-script->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js'></script>
<script src='http://code.jquery.com/ui/1.11.4/jquery-ui.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.3/jquery.slimscroll.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lodash.js/3.8.0/lodash.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.5/d3.min.js'></script>
<script src='http://jvectormap.com/js/jquery-jvectormap-2.0.3.min.js'></script>
<script src='http://jvectormap.com/js/jquery-jvectormap-world-mill-en.js'></script>


        <script src="js/index.js"></script>
        <script type="text/javascript" src="js/slide.js"></script>
<!-script->

</body>
</html>