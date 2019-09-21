<!-- Pada sebuah form, terdapat 2 buah field yaitu: 
    username dan password. 
    Buatlah method/function untuk memvalidasi field-field tersebut, 
    dengan requirement sebagai berikut:
●       Disarankan menggunakan REGEX
●       Format username: 
        merupakan kombinasi dari huruf kecil dengan panjang 5-9 karakter. 
        Username tidak boleh terdapat huruf besar / angka / karakter special.
●       Format password: merupakan kombinasi dari huruf kecil, 
        huruf besar minimal satu karakter, 
        angka minimal satu karakter, 
        dan karakter spesial minimal satu karakter 
        dengan panjang password harus tepat 10 karakter tidak boleh kurang atau lebih.
Clue:
Peserta hanya diminta membuat function validasi, tidak perlu membuat form HTML.
Examples:
-        is_username_valid(‘@wakwaw’)
    return false
-        is_username_valid(‘poEtri’)
    return false
-        is_username_valid(‘tiara’)
    return true
-        is_password_valid(‘p@ssW0rd99’)
    return true
-        is_password_valid(‘C0d3YourFuture!#’)
    return false -->
    <!-- (.*[A-Z]*.) -->
    <!-- (.*[0-9]*.)(.*[#?!@$%^&*-_]*.) -->
<?php

$regex = "/^[a-z]{5,9}$/";
if (isset($_POST['submit'])) {
    if(preg_match($regex,$_POST['username'])){
        $is_username_Valid = "True";
    }else{
        $is_username_Valid = "False";
    }
    
}


$regexpassword = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[\w]).{10,10}$/";
if (isset($_POST['submit'])) {
    if(preg_match($regexpassword,$_POST['password'])){
        $is_password_Valid = "True";
    }else{
        $is_password_Valid = "False";
    }
    
}

?>



 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>REGEX</title>
 </head>
 <body>
<form method="post">
<input type="text" placeholder="username" name="username">
<input type="text" placeholder="password" name="password">
<button value="submit" name="submit">Validasi</button>
 </form>    
 <?= $is_username_Valid;?>
 <?= $is_password_Valid;?>

 <pre>
   ^ mulai
   $ selesai /end
   []
   + Apply ke Semua
   \s Spasi
   0-9 angka
   a-z huruf kecil
   \d allow semua digit atau angka
   \w allow semua karakter
   .  allow semua
   \. period
   {5} apply rule 5 karaakter
   {5,10} apply rule 5 - 10 karaakter
</pre>
</body>
</html>