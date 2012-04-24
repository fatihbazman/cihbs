### CIHBS - HMVC ve Twitter Bootstrap ile Olusturulmus CI Sablonu

CIHBS kisaltmasi, CodeIgniter Hmvc ve BootStrap kelimelerinin bas harfelrinden olusmaktadir. CodeIgniter 2.1 versiyonu ile hazirlaigim bu sablon, HMVC ile Twitter Bootstrap V2.0.2 arayüzünü içerir. Dizin yapisi asagidaki yapiya benzerdir:
			application/
				config/
				controllers/
					 auth.php
				modules/
					 dashboard/
						 controllers/
							 admin.php
							 dashboard.php
						 models/
							 dashboard.php
						 views/
							 admin/
								 index.php
								 form.php
					 welcome/
						  controllers/
							  admin.php
							  welcome.php
						  models/
							  welcome_model.php
						  views/
					 welcome_view.php
							 admin/
								 index.php
								 form.php
				  views/
					  layout_view.php
					  header_view.php
					  footer_view.php
					  meta_view.php
			  system/
			  index.php
	  
Bu yapida gördügünüz üzere, giris-çikis kontrolü application/controllers/auth.php dosyasi üzerinden saglanir. Her bir modül ise, application/modules dizini altinda kendi ismi ile MVC yapisina sahiptir.

Kullanicinin erisim yetkisi, controller dosyasinin construct modülünde kontrol edilir:

			function __construct() {

				parent::__construct();

				if(! $this->hmvc_auth->get('logged_in')) exit('Yetkili degilsiniz');
			}

Eger kullanicimizin rolü "admin" ise (veritabaninaki "role" tablosu degeri "a" ise), her controller dizini içindeki admin.php dosyasina erisilebilir. Admin kontrolü ise yine construct mödülünde kontrol edilir:


			function __construct()
			{
				parent::__construct();

				if(! $this->hmvc_auth->is_admin()) exit('Admin degilsiniz!');
				
			}

Yönetici paneline erisim için gerekli yönlendirmeler ise Application/config/routes.php dosyasindan yapilir:

			$route['(login|logout)'] = "auth/$1";

			$route['admin/([a-zA-Z_-]+)/(:any)'] = '$1/admin/$2';

			$route['admin/([a-zA-Z_-]+)'] = '$1/admin/index';

Twitter Bootstrap arayüzü de hem kullanim kolayligi, hem de estetik olmasi açisindan bu sablona giydirildi. Bu arayüz temel olarak 3 ana parçaya ayrildi: header, footer, meta view. Her controller dosyasinda bulunan render methodu ile controller'a özgü parçalar bir araya getirilip, ekrana bastirilmaktadir.

