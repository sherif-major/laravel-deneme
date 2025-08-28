# rehber projesi

## db tanımları

### birimler
- id 
- birim_adi
- konusu

### unvanlar
- id
- unvan_adi

## iş listesi

- önce adminer ile rehber veritabanı oluşturulacak.
- .env dosyasına veritabanı bilgileri eklenecek.
- model, migration, controller, route oluşturulacak.
- Örnek promt: bu tablolar için controller hazırla. model binding kullan. rest api için. try gibi hata kontrolleri olmasın.CRUD işlemlerini yerine getirebilsin. api.php dosyasına route tanımları yapılır.  
- bootstrap/app.php dosyasına api satırı eklenecek.
- api.php dosyasına route tanımları yapılır.  
- bootstrap/app.php dosyasına api satırı eklenecek.
- rest client ile test edilecek.
- örnek promt: https://marketplace.windsurf.com/extension/humao/rest-client sayfasındaki bilgilere göre projemin api-test dosyasına istekler yazılacak. 

- şimdi php artisan migrate komutu ile tablolar oluşacak.

``λ php artisan route:list

  GET|HEAD        / .............................................................................................................
  GET|HEAD        api/birimler ........................................................... birimler.index › BirimController@index
  POST            api/birimler ........................................................... birimler.store › BirimController@store
  GET|HEAD        api/birimler/{birimler} .................................................. birimler.show › BirimController@show
  PUT|PATCH       api/birimler/{birimler} .............................................. birimler.update › BirimController@update
  DELETE          api/birimler/{birimler} ............................................ birimler.destroy › BirimController@destroy
  GET|HEAD        api/unvanlar ........................................................... unvanlar.index › UnvanController@index
  POST            api/unvanlar ........................................................... unvanlar.store › UnvanController@store
  GET|HEAD        api/unvanlar/{unvanlar} .................................................. unvanlar.show › UnvanController@show
  PUT|PATCH       api/unvanlar/{unvanlar} .............................................. unvanlar.update › UnvanController@update
  DELETE          api/unvanlar/{unvanlar} ............................................ unvanlar.destroy › UnvanController@destroy
  GET|HEAD        storage/{path} .................................................................................. storage.local
  GET|HEAD        up ............................................................................................................

                                                                                                              Showing [13] routes``
- laravel projemiz hazır. başlatmak için php artisan serve komutunu kullanabilirsiniz.
- projeyi başlattıktan sonra api-test.http dosyasını açıp istekleri test edebilirsiniz.  
- git.env dosyasının adını .env olarak değiştirin.
- database tanımları .env dosyasına eklenecek.
- composer install komutu ile composer.json dosyasındaki paketler yüklenir. 
- ``php artisan route:list`` komutu ile route listesi kontrol edilir.   
- ``php artisan migrate`` komutu ile tablolar oluşur. 
- ``php artisan serve`` komutu ile projeyi başlatır. 