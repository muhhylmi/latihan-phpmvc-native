pertama 
siapkan file dan folder nya
file2 pertama index.php, controller dan App pada folder core
lakukan bootstrapping dengan require file class pada index.php dengan membuat init.php

kedua
membuat routing dengan mmbuat fungsi parseURL pada controller
melakukan konfigurasi / pembersihan url dengan htaccess


ketiga
membuat attribut untuk mengisi controller, metode, dan params default
membuat fungsi untuk mendapatkan controller yang diinginkan
membuat fungsi untuk mendapatkan methode dan params yang diinginkan
menjalankan methode dengan (call_user_func_array([$this->controller, $this->method], $this->params);
)