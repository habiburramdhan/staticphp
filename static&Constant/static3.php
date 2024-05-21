<?php
class Web {
    public static $title = "First Page";

    public static function getTitlePage() {
        return "Nama Halaman ini adalah " . self::$title . "";
    }
}

class YourWeb extends Web {
    public static function getTitlePage() {
        return "Nama Halaman Depan ini adalah " . self::$title . "";
    }
}

echo Web::$title;
echo "<br>";
echo Web::getTitlePage();
echo "<br>";
echo YourWeb::getTitlePage();
echo "<br>";
echo Web::getTitlePage();
?>
