<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <h1>Konversi Mata Uang Rupiah ke Mata Uang Asing</h1>
  <?php
    class user {
      private $username;
      private $kota;
  
      public function __construct($username, $kota) {
        $this->username = $username;
        $this->kota = $kota;
      }
  
      public function setUsername($usernameBaru) {
        $this->username = $usernameBaru;
      }
  
      public function getUsername() {
        return $this->username;
      }
  
      public function setKota($kotaBaru) {
        $this->kota = $kotaBaru;
      }
  
      public function getKota() {
        return $this->kota;
      }
    }
    $data = new user("", "");
    if (isset($_POST['data'])) {
      $data->setUsername($_POST['username']);
      $data->setKota($_POST['kota']);
      echo "Selamat datang " . $data->getUsername() . " dari " . $data->getKota() . " dalam program konversi mata uang dari Rupiah ke mata uang asing.";
    }
  ?>
  <form method="post">
    <input type="text" placeholder="Jumlah" name="jumlah">
    Konversi ke
    <select name="kurs">
      <option value="usd">Dolar Amerika</option>
      <option value="gbp">Poundsterling</option>
      <option value="eur">Euro</option>
      <option value="jpy">Yen</option>
    </select>
    <button type="submit" name="submit">Submit</button>
  </form>
  <?php
    function USD($jumlah) {
      echo "Hasil konversi dari Rupiah ke Dolar Amerika adalah $ " . round($jumlah / 14442.70, 2);
    }
    function GBP($jumlah) {
      echo "Hasil konversi dari Rupiah ke Poundsterling adalah £ " . round($jumlah / 19954.76, 2);
    }
    function EUR($jumlah) {
      echo "Hasil konversi dari Rupiah ke Euro adalah € " . round($jumlah / 17360.05, 2);
    }
    function JPY($jumlah) {
      echo "Hasil konversi dari Rupiah ke Yen adalah ¥ " . round($jumlah / 132.84, 2);
    }
    if (isset($_POST['submit'])) {
      $jumlah = $_POST["jumlah"];
      $kurs = $_POST["kurs"];
      if ($kurs == "usd") {
        USD($jumlah);
      }
      if ($kurs == "gbp") {
        GBP($jumlah);
      }
      if ($kurs == "eur") {
        EUR($jumlah);
      }
      if ($kurs == "jpy") {
        JPY($jumlah);
      }
    }
  ?>
</body>
</html>