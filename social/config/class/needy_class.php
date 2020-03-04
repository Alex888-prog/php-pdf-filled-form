<?php

  class N{

    public static $e;
    public static $database;
    public static $DIR = "/social";
    public static $GMAIL = "YOUR_GMAIL";
    public static $GMAIL_PASSWORD = "GMAIL_PASSWORD";

    public static function _DB(){
      try {
        self::$database = new PDO('mysql:host=LOCALHOST;dbname=mentorminds_db;charset=utf8mb4', 'mentor_minds_usr', 'p.Py8]HUVF+r');
        self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $e = self::$e;
      } catch (PDOException $e) {
        echo $e->getMessage();
      }
      return self::$database;
    }

  }

?>
