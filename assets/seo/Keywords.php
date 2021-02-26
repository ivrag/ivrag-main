<?php class Keywords {
    private $keywords;

    public function __construct() {
        $file = dirname('keywords.txt');
        chmod($file, 0777);
        $kwdFile = fopen($file, "r");
        $kwdContent = fread($kwdFile, filesize($file));
        fclose($kwdFile);
        $kwdArray = explode("\n", $kwdContent);
        $i = 0;
        $str = '';
        foreach ($kwdArray as $value) {
            if ($i < count($kwdArray) - 1) {
                $str .= trim($value) . ', ';
            } else {
                $str .= trim($value);
            }
            $i++;
        }
        $this->keywords = $str;
        echo $this->keywords;
    }
}

new Keywords();