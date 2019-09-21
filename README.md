# Bootcamp-Arkademy-Batch-12---4
Seleksi Bootcamp

Belum seluruhnya dipelajari

1. Buatlah sebuah method/function untuk me-return biodata asli Anda, dengan ketentuan sebagai berikut:
name (String)
age (Number)
address (String)
hobbies (Array)
is_married (Boolean)
list_school (Array of Object) with key name, year_in, year_out, and major (if any, if no set “null” )
skills (Array of Obj) with key skill_name and level (beginner, advanced, expert)
interest_in_coding (Boolean)
    Return value harus berformat JSON dan sesuai ketentuan di atas.
Pada readme sebutkan kegunaan JSON pada REST API.
Berikut adalah contoh dari JSON format: https://api.bukalapak.com/v2/products/f3vi.json


2. Pada sebuah form, terdapat 2 buah field yaitu: username dan password. Buatlah method/function untuk memvalidasi field-field tersebut, dengan requirement sebagai berikut:
● Disarankan menggunakan REGEX
● Format username: merupakan kombinasi dari huruf kecil dengan panjang 5-9 karakter. Username tidak boleh terdapat huruf besar / angka / karakter special.
● Format password: merupakan kombinasi dari huruf kecil, huruf besar minimal satu karakter, angka minimal satu karakter, dan karakter spesial minimal satu karakter dengan panjang password harus tepat 10 karakter tidak boleh kurang atau lebih.
Clue:
Peserta hanya diminta membuat function validasi, tidak perlu membuat form HTML.
Examples:
- is_username_valid(‘@wakwaw’)
    return false
-  is_username_valid(‘poEtri’)
    return false
-  is_username_valid(‘tiara’)
    return true
-  is_password_valid(‘p@ssW0rd99’)
    return true
-  is_password_valid(‘C0d3YourFuture!#’)
    return false


