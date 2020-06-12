<?php

error_reporting(0);
ini_set("display_errors", 0);
define("MAIN_DIR", "/home/xtreamcodes/");
define("IPTV_ROOT_PATH", "/var/www/html/");
define("IPTV_INCLUDES_PATH", "/var/www/html/includes/");
define("IPTV_TEMPLATES_PATH", "/var/www/html/templates/");
@ini_set("user_agent", "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0) Gecko/20100101 Firefox/9.0");
@ini_set("default_socket_timeout", 5);
define("IN_SCRIPT", true);
define("SOFTWARE", "iptv");
define("SCRIPT_VERSION", "2.9.2");
define("IPTV_PANEL_DIR", "/home/xtreamcodes/iptv_xtream_codes/");
define("BIN_PATH", "/home/xtreamcodes/iptv_xtream_codes/bin/");
define("FFMPEG_PATH", file_exists("/home/xtreamcodes/iptv_xtream_codes/bin/ffmpeg") ? "/home/xtreamcodes/iptv_xtream_codes/bin/ffmpeg" : "/usr/bin/ffmpeg");
define("FFPROBE_PATH", file_exists("/home/xtreamcodes/iptv_xtream_codes/bin/ffprobe") ? "/home/xtreamcodes/iptv_xtream_codes/bin/ffprobe" : "/usr/bin/ffprobe");
define("YOUTUBE_PATH", "/home/xtreamcodes/iptv_xtream_codes/bin/youtube");
define("STREAMS_PATH", "/home/xtreamcodes/iptv_xtream_codes/streams/");
define("MOVIES_IMAGES", "/home/xtreamcodes/iptv_xtream_codes/wwwdir/images/");
define("MOVIES_PATH", "/home/xtreamcodes/iptv_xtream_codes/movies/");
define("CREATED_CHANNELS", "/home/xtreamcodes/iptv_xtream_codes/created_channels/");
define("CRON_PATH", "/home/xtreamcodes/iptv_xtream_codes/crons/");
define("PHP_BIN", "/home/xtreamcodes/iptv_xtream_codes/php/bin/php");
define("ASYNC_DIR", "/home/xtreamcodes/iptv_xtream_codes/async_incs/");
define("TMP_DIR", "/home/xtreamcodes/iptv_xtream_codes/tmp/");
define("TOOLS_PATH", "/home/xtreamcodes/iptv_xtream_codes/tools/");
define("IPTV_CLIENT_AREA", "/home/xtreamcodes/iptv_xtream_codes/wwwdir/client_area/");
define("IPTV_CLIENT_AREA_TEMPLATES_PATH", "/home/xtreamcodes/iptv_xtream_codes/wwwdir/client_area/templates/");
define("TV_ARCHIVE", "/home/xtreamcodes/iptv_xtream_codes/tv_archive/");
define("DELAY_STREAM", "/home/xtreamcodes/iptv_xtream_codes/delay/");
define("SIGNALS_PATH", "/home/xtreamcodes/iptv_xtream_codes/signals/");
define("KEY_CRYPT", "dd2dbe5c8087454e7f3e341d728c3940");
define("FFMPEG_FONTS_PATH", "/home/xtreamcodes/iptv_xtream_codes/signals/free-sans.ttf");
define("CONFIG_CRYPT_KEY", "5709650b0d7806074842c6de575025b1");
define("RESTART_TAKE_CACHE", 5);
define("TOTAL_SAVES_DROP", 6);
define("CLOSE_OPEN_CONS_PATH", "/home/xtreamcodes/iptv_xtream_codes/tmp/opened_cons/");
define("ENIGMA2_PLUGIN_DIR", "/home/xtreamcodes/iptv_xtream_codes/wwwdir/images/enigma2/");
define("GEOIP2_FILENAME", "/home/xtreamcodes/iptv_xtream_codes/GeoLite2.mmdb");
define("CONFIG_FILE", "/home/xtreamcodes/iptv_xtream_codes/config");

if (!defined("USE_CACHE")) {
    define("USE_CACHE", true);
}

if (!defined("FETCH_BOUQUETS")) {
    define("FETCH_BOUQUETS", true);
}
define("CACHE_STREAMS", false);
define("CACHE_STREAMS_TIME", 10);
define("STREAM_TYPE", array("live", "series", "movie", "created_live", "radio_streams"));
require "/home/xtreamcodes/iptv_xtream_codes/xfirewall.php";
require "/var/www/html/includes/functions.php";
require "/var/www/html/includes/lib.php";
require "/var/www/html/includes/mysql.php";
require "/var/www/html/includes/streaming.php";
require "/var/www/html/includes/servers.php";
require "/var/www/html/includes/stream.php";
require "/var/www/html/langs/English.php";
$_INFO = array();
if (file_exists("/home/xtreamcodes/iptv_xtream_codes/config")) {
    $_INFO = json_decode(EAAB451Ef7a60C6D480E43B6c15A14A1(base64_decode(file_get_contents(CONFIG_FILE)), CONFIG_CRYPT_KEY), true);
    define("SERVER_ID", $_INFO["server_id"]);
    Aa68ccfd1bbccf10cfbb34c08495fb39:
    $f566700a43ee8e1f0412fe10fbdf03df = new ipTV_db($_INFO["db_user"], $_INFO["db_pass"], $_INFO["db_name"], $_INFO["host"], $_INFO["db_port"], empty($_INFO["pconnect"]) ? false : true, isset($f828fbd7943068a1cd53cba5fe86120c) ? true : false);
    A78bF8d35765be2408C50712ce7a43aD::$ipTV_db =& $f566700a43ee8e1f0412fe10fbdf03df;
    CD89785224751cCa8017139daf9E891e::$ipTV_db =& $f566700a43ee8e1f0412fe10fbdf03df;
    e3cF480c172E8B47FE10857C2a5Aeb48::$ipTV_db =& $f566700a43ee8e1f0412fe10fbdf03df;
    A78Bf8D35765be2408c50712CE7a43AD::fAB9232Faa11c27667E20D2B25c46266();
    include "/var/www/html/includes/geo/Reader.php";
    include "/var/www/html/includes/geo/Decoder.php";
    include "/var/www/html/includes/geo/Util.php";
    include "/var/www/html/includes/geo/Metadata.php";
    $D3dfbeed696b35ae7f2e1ad4fa3c7477 = array("clients_live.php", "clients_movie.php", "timeshift.php", "admin_live.php", "admin_movie.php", "xmltv.php", "panel_api.php", "enigma2.php", "portal.php", "get.php");
    if (!empty($argc)) {
        goto a43bb1697f64f066b6712f9c6d921f2a;
    }
    if (in_array(basename($_SERVER["SCRIPT_FILENAME"]), $D3dfbeed696b35ae7f2e1ad4fa3c7477)) {
        goto F6405eebae8611490e2cb2ce8940f711;
    }
    D9f93b7C177E377D0bBFe315eaeae505();
    F6405eebae8611490e2cb2ce8940f711:
    a43bb1697f64f066b6712f9c6d921f2a:
    // [PHPDeobfuscator] Implied script end
    return;
}
die("no config found");
