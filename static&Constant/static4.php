<?php
class Web {
    public static $title = "First Page";

    public static function getTitlePage() {
        echo "Nama Halaman ini adalah " . self::$title . ".";
    }
}

class OtherWeb {
    public function __construct() {
        Web::getTitlePage();
    }

    public function getTitle() {
        return Web::$title;
    }
}

$otherweb = new OtherWeb;
echo "<br>";
echo $otherweb->getTitle();
?>
