<?php
//dont forget to switch off this one
define('DEBUG_MODE', true);
if (DEBUG_MODE) {
    error_reporting(-1);
    ini_set("display_errors", 1);
} else {
    error_reporting(0);
    ini_set("display_errors", 0);
}
define('MAIN_DIR', "/home/xtreamcodes/");
define('IPTV_ROOT_PATH', str_replace('\\', '/', dirname(__FILE__)) . '/');
define('IPTV_INCLUDES_PATH', IPTV_ROOT_PATH . 'includes' . '/');
define('IPTV_TEMPLATES_PATH', IPTV_ROOT_PATH . 'templates' . '/');
@ini_set("user_agent", "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:9.0) Gecko/20100101 Firefox/9.0");
@ini_set("default_socket_timeout", 5);
define("IN_SCRIPT", true);
define("SOFTWARE", "p-codes");
define("SCRIPT_VERSION", "1.0.0");
define("IPTV_PANEL_DIR", MAIN_DIR . "iptv_xtream_codes/");
define("BIN_PATH", IPTV_PANEL_DIR . "bin/");
define("FFMPEG_PATH", file_exists(BIN_PATH . "ffmpeg") ? BIN_PATH . "ffmpeg" : "/usr/bin/ffmpeg");
define("FFPROBE_PATH", file_exists(BIN_PATH . "ffprobe") ? BIN_PATH . "ffprobe" : "/usr/bin/ffprobe");
define("YOUTUBE_PATH", BIN_PATH . "youtube");
define("STREAMS_PATH", IPTV_PANEL_DIR . "streams/");
define("MOVIES_IMAGES", IPTV_PANEL_DIR . "wwwdir/images/");
define("MOVIES_PATH", IPTV_PANEL_DIR . "movies/");
define("CREATED_CHANNELS", IPTV_PANEL_DIR . "created_channels/");
define("CRON_PATH", IPTV_PANEL_DIR . "crons/");
define("PHP_BIN", IPTV_PANEL_DIR . "php/bin/php");
define("ASYNC_DIR", IPTV_PANEL_DIR . "async_incs/");
define("TMP_DIR", IPTV_PANEL_DIR . "tmp/");
define("TOOLS_PATH", IPTV_PANEL_DIR . "tools/");
define("IPTV_CLIENT_AREA", IPTV_PANEL_DIR . "wwwdir/client_area/");
define("IPTV_CLIENT_AREA_TEMPLATES_PATH", IPTV_CLIENT_AREA . "templates/");
define("TV_ARCHIVE", IPTV_PANEL_DIR . "tv_archive/");
define("DELAY_STREAM", IPTV_PANEL_DIR . "delay/");
define("SIGNALS_PATH", IPTV_PANEL_DIR . "signals/");
define("KEY_CRYPT", "dd2dbe5c8087454e7f3e341d728c3940");
define("FFMPEG_FONTS_PATH", IPTV_PANEL_DIR . "signals/free-sans.ttf");
define("CONFIG_CRYPT_KEY", "5709650b0d7806074842c6de575025b1");
define("RESTART_TAKE_CACHE", 5);
define("TOTAL_SAVES_DROP", 6);
define("CLOSE_OPEN_CONS_PATH", TMP_DIR . "opened_cons/");
define("ENIGMA2_PLUGIN_DIR", IPTV_PANEL_DIR . "wwwdir/images/enigma2/");
define("GEOIP2_FILENAME", IPTV_PANEL_DIR . "GeoLite2.mmdb");
define("CONFIG_FILE", IPTV_PANEL_DIR . "config");

if (!defined("USE_CACHE")) {
    define("USE_CACHE", true);
}

if (!defined("FETCH_BOUQUETS")) {
    define("FETCH_BOUQUETS", true);
}
define("CACHE_STREAMS", false);
define("CACHE_STREAMS_TIME", 10);
define("STREAM_TYPE", array("live", "series", "movie", "created_live", "radio_streams"));
require IPTV_PANEL_DIR . "xfirewall.php";
require IPTV_INCLUDES_PATH . "functions.php";
require IPTV_INCLUDES_PATH . "lib.php";
require IPTV_INCLUDES_PATH . "mysql.php";
require IPTV_INCLUDES_PATH . "streaming.php";
require IPTV_INCLUDES_PATH . "servers.php";
require IPTV_INCLUDES_PATH . "stream.php";
require IPTV_ROOT_PATH . "langs/English.php";

$_INFO = array();
if (file_exists(CONFIG_FILE)) {
    $_INFO = json_decode(EAAB451Ef7a60C6D480E43B6c15A14A1(base64_decode(file_get_contents(CONFIG_FILE)), CONFIG_CRYPT_KEY), true);
    define("SERVER_ID", $_INFO["server_id"]);
} else {
    die("no config found");
}

$ipTV_db = new ipTV_db($_INFO["db_user"], $_INFO["db_pass"], $_INFO["db_name"], $_INFO["host"], $_INFO["db_port"], empty($_INFO["pconnect"]) ? false : true, isset($f828fbd7943068a1cd53cba5fe86120c) ? true : false);
A78bF8d35765be2408C50712ce7a43aD::$ipTV_db = &$ipTV_db;
CD89785224751cCa8017139daf9E891e::$ipTV_db = &$ipTV_db;
e3cF480c172E8B47FE10857C2a5Aeb48::$ipTV_db = &$ipTV_db;
A78Bf8D35765be2408c50712CE7a43AD::fAB9232Faa11c27667E20D2B25c46266();
include IPTV_INCLUDES_PATH . "geo/Reader.php";
include IPTV_INCLUDES_PATH . "geo/Decoder.php";
include IPTV_INCLUDES_PATH . "geo/Util.php";
include IPTV_INCLUDES_PATH . "geo/Metadata.php";
$whiteListFiles = array("clients_live.php", "clients_movie.php", "timeshift.php", "admin_live.php", "admin_movie.php", "xmltv.php", "panel_api.php", "enigma2.php", "portal.php", "get.php");
if (empty($argc)) {
    if (!n_array(basename($_SERVER["SCRIPT_FILENAME"]), $whiteListFiles)) {
        checkFlood();
    }
}
