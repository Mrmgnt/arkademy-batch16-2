 -Soal No 1
  * Json
    Kegunaan JSON pada REST API adalah sebagai format untuk mengirim (sending) dan meminta     (requesting) data pada REST API. Selain JSON format data transfer bisa berupa XML (eXtensible Markup Language) dan plain text, tetapi format data JSON lebih populer karena berukuran ringan dan formatnya lebih mudah untuk dibaca dan dimengerti.

-Soal No 2

  * ● Format username: hanya boleh huruf besar dengan panjang tepat 7 karakter

      var is_username_valid = (username) => /^[a-z] [\w] {4,7}$/.test(username);

		console.log(validateUsername('SABRINA'));
  		console.log(validateUsername('RAZKI'));


* ● Format password: merupakan kombinasi huruf kecil, huruf besar, angka dan
    simbol "#" dengan panjang tepat 9-15 karakter         


          const regrexPassword = /(?=.*[#](?=.*)[A-Z])(?=.*[a-z]){8}/;
    	  return regrexPassword.test(input);

  		  console.log(validataPassword('#DirumahAj4'));

-Soal No 3
   
-soal no 4

-soal no 5
	// // input sesuai masukkan!! ( pilih masukkan )


	console.log(getCounts("hari apa saja saya bisa!")); 
	console.log(getCounts("cepat kerjakan!!!")); 

* -soal no 6

 - Import terlebih dahulu file Arkademy.sql kedalam database. untuk menjalankan, jalankan di localhost dan buka file index.php di browser.

  * -6a - buat database dan buat query untuk tampilan seperti gambar berikut..
 
	 Buatlah query untuk menghasilkan tampilan seperti ini :
     ![gambar(5)](https://github.com/Mrmgnt/arkademy-batch16-2/blob/master/soal6/6a.png)

  	select cashier.name AS cashier, product.name AS product, category.name AS category, product.price AS price
 	 FROM product
  	INNER JOIN category ON category.id = product.id_category
  	INNER JOIN cashier ON cashier.id = product.id_cashier

  * -6b -  sebuah tampilan Website menggunakan data statik dengan HTML, CSS, dan Bootstrap
{
    ![gambar(5)](https://github.com/Mrmgnt/arkademy-batch16-2/blob/master/soal6/ss1.png)
    * -tampilan untuk menambahkan data
    ![gambar(5)](https://github.com/Mrmgnt/arkademy-batch16-2/blob/master/soal6/ss2.png)
  




   
