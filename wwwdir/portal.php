<?php

require "./init.php";
include "./langs/mag_langs.php";
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
@header("Content-type: text/javascript");
$f429d0e47085017e3f1e415952e44cba = CD89785224751Cca8017139DaF9E891E::E1F75a50F74A8f4e2129ba474f45D670();
$f34a0094f9db3be3b99dd1eb1e9a3b6d = !empty($_REQUEST["type"]) ? $_REQUEST["type"] : null;
$A60fc3238902ec8f309d806e5a28e0f7 = !empty($_REQUEST["action"]) ? $_REQUEST["action"] : null;
$b25b89525a979cf56e2fd295b28327b8 = !empty($_REQUEST["sn"]) ? $_REQUEST["sn"] : null;
$d8ba920e2a1ba9839322c2bca0a7a741 = !empty($_REQUEST["stb_type"]) ? $_REQUEST["stb_type"] : null;
$bad0c96fedbc6eccfe927016a4dc3cd6 = !empty($_REQUEST["mac"]) ? $_REQUEST["mac"] : $_COOKIE["mac"];
$fca2439385f041f384419649ca2471d6 = !empty($_REQUEST["ver"]) ? $_REQUEST["ver"] : null;
$D4f195af96a237479546fa1dccf6173a = !empty($_SERVER["HTTP_X_USER_AGENT"]) ? $_SERVER["HTTP_X_USER_AGENT"] : null;
$be29ac67a4314fc9435deb1462cae967 = !empty($_REQUEST["image_version"]) ? $_REQUEST["image_version"] : null;
$a0bdfe2058b3579da2b71ebf929871e2 = !empty($_REQUEST["device_id"]) ? $_REQUEST["device_id"] : null;
$Ba644b1066f7c673215de30d5ce5e62c = !empty($_REQUEST["device_id2"]) ? $_REQUEST["device_id2"] : null;
$B71eec623f2edcac610184525828cc2d = !empty($_REQUEST["hw_version"]) ? $_REQUEST["hw_version"] : null;
$be4275c3d5887706bcf4db19dc01637e = !empty($_REQUEST["gmode"]) ? intval($_REQUEST["gmode"]) : null;
$F7af965c868ad940b4c181abc987875f = false;
$A6dde9bd7afc06231a1481ec56fd5768 = A78bf8D35765be2408C50712Ce7A43ad::$settings["enable_debug_stalker"] == 1 ? true : false;
$E4e8dc642ae3bbc84730dc5ef74fd8d6 = array();
if (!($E4e8dc642ae3bbc84730dc5ef74fd8d6 = b9361cDf8f8f200F06F546758512060C($b25b89525a979cf56e2fd295b28327b8, $bad0c96fedbc6eccfe927016a4dc3cd6, $fca2439385f041f384419649ca2471d6, $d8ba920e2a1ba9839322c2bca0a7a741, $be29ac67a4314fc9435deb1462cae967, $a0bdfe2058b3579da2b71ebf929871e2, $Ba644b1066f7c673215de30d5ce5e62c, $B71eec623f2edcac610184525828cc2d, $f429d0e47085017e3f1e415952e44cba, $A6dde9bd7afc06231a1481ec56fd5768, $f34a0094f9db3be3b99dd1eb1e9a3b6d, $A60fc3238902ec8f309d806e5a28e0f7))) {
    goto C7eed61aa525d2eb6bb42ae1cf0cfccc;
}
$F7af965c868ad940b4c181abc987875f = true;
ini_set("memory_limit", -1);
C7eed61aa525d2eb6bb42ae1cf0cfccc:
if (!($f34a0094f9db3be3b99dd1eb1e9a3b6d == "stb" && $A60fc3238902ec8f309d806e5a28e0f7 == "handshake")) {
    if (empty($E4e8dc642ae3bbc84730dc5ef74fd8d6["locale"]) && !empty($_COOKIE["locale"])) {
        $E4e8dc642ae3bbc84730dc5ef74fd8d6["locale"] = $_COOKIE["locale"];
        goto c9256749b7b7713dc54b61cf9b2e9364;
    }
    $E4e8dc642ae3bbc84730dc5ef74fd8d6["locale"] = "en_GB.utf8";
    c9256749b7b7713dc54b61cf9b2e9364:
    $ab89a8139ba29c2512fec1f508f96810 = array();
    $Acbe482ea62dee218013e22b65162a3f = array("id" => $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"], "name" => $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"], "sname" => '', "pass" => '', "parent_password" => "0000", "bright" => "200", "contrast" => "127", "saturation" => "127", "video_out" => '', "volume" => "70", "playback_buffer_bytes" => "0", "playback_buffer_size" => "0", "audio_out" => "1", "mac" => $bad0c96fedbc6eccfe927016a4dc3cd6, "ip" => $f429d0e47085017e3f1e415952e44cba, "ls" => '', "version" => '', "lang" => '', "locale" => $E4e8dc642ae3bbc84730dc5ef74fd8d6["locale"], "city_id" => "0", "hd" => "1", "main_notify" => "1", "fav_itv_on" => "0", "now_playing_start" => "2018-02-18 17:33:43", "now_playing_type" => "1", "now_playing_content" => "Test channel", "additional_services_on" => "1", "time_last_play_tv" => "0000-00-00 00:00:00", "time_last_play_video" => "0000-00-00 00:00:00", "operator_id" => "0", "storage_name" => '', "hd_content" => "0", "image_version" => "undefined", "last_change_status" => "0000-00-00 00:00:00", "last_start" => "2018-02-18 17:33:38", "last_active" => "2018-02-18 17:33:43", "keep_alive" => "2018-02-18 17:33:43", "screensaver_delay" => "10", "phone" => '', "fname" => '', "login" => '', "password" => '', "stb_type" => '', "num_banks" => "0", "tariff_plan_id" => "0", "comment" => null, "now_playing_link_id" => "0", "now_playing_streamer_id" => "0", "just_started" => "1", "last_watchdog" => "2018-02-18 17:33:39", "created" => "2018-02-18 14:40:12", "plasma_saving" => "0", "ts_enabled" => "0", "ts_enable_icon" => "1", "ts_path" => '', "ts_max_length" => "3600", "ts_buffer_use" => "cyclic", "ts_action_on_exit" => "no_save", "ts_delay" => "on_pause", "video_clock" => "Off", "verified" => "0", "hdmi_event_reaction" => 1, "pri_audio_lang" => '', "sec_audio_lang" => '', "pri_subtitle_lang" => '', "sec_subtitle_lang" => '', "subtitle_color" => "16777215", "subtitle_size" => "20", "show_after_loading" => '', "play_in_preview_by_ok" => null, "hw_version" => "undefined", "openweathermap_city_id" => "0", "theme" => '', "settings_password" => "0000", "expire_billing_date" => "0000-00-00 00:00:00", "reseller_id" => null, "account_balance" => '', "client_type" => "STB", "hw_version_2" => "62", "blocked" => "0", "units" => "metric", "tariff_expired_date" => null, "tariff_id_instead_expired" => null, "activation_code_auto_issue" => "1", "last_itv_id" => 0, "updated" => array("id" => "1", "uid" => "1", "anec" => "0", "vclub" => "0"), "rtsp_type" => "4", "rtsp_flags" => "0", "stb_lang" => "en", "display_menu_after_loading" => '', "record_max_length" => 180, "web_proxy_host" => '', "web_proxy_port" => '', "web_proxy_user" => '', "web_proxy_pass" => '', "web_proxy_exclude_list" => '', "demo_video_url" => '', "tv_quality_filter" => '', "is_moderator" => false, "timeslot_ratio" => 0.33333333333333, "timeslot" => 40, "kinopoisk_rating" => "1", "enable_tariff_plans" => '', "strict_stb_type_check" => '', "cas_type" => 0, "cas_params" => null, "cas_web_params" => null, "cas_additional_params" => array(), "cas_hw_descrambling" => 0, "cas_ini_file" => '', "logarithm_volume_control" => '', "allow_subscription_from_stb" => "1", "deny_720p_gmode_on_mag200" => "1", "enable_arrow_keys_setpos" => "1", "show_purchased_filter" => '', "timezone_diff" => 0, "enable_connection_problem_indication" => "1", "invert_channel_switch_direction" => '', "play_in_preview_only_by_ok" => false, "enable_stream_error_logging" => '', "always_enabled_subtitles" => A78BF8D35765bE2408c50712CE7A43Ad::$settings["always_enabled_subtitles"] == 1 ? "1" : '', "enable_service_button" => '', "enable_setting_access_by_pass" => '', "tv_archive_continued" => '', "plasma_saving_timeout" => "600", "show_tv_only_hd_filter_option" => '', "tv_playback_retry_limit" => "0", "fading_tv_retry_timeout" => "1", "epg_update_time_range" => 0.6, "store_auth_data_on_stb" => false, "account_page_by_password" => '', "tester" => false, "enable_stream_losses_logging" => '', "external_payment_page_url" => '', "max_local_recordings" => "10", "tv_channel_default_aspect" => "fit", "default_led_level" => "10", "standby_led_level" => "90", "show_version_in_main_menu" => "1", "disable_youtube_for_mag200" => "1", "auth_access" => false, "epg_data_block_period_for_stb" => "5", "standby_on_hdmi_off" => "1", "force_ch_link_check" => '', "stb_ntp_server" => "pool.ntp.org", "overwrite_stb_ntp_server" => '', "hide_tv_genres_in_fullscreen" => null, "advert" => null);
    $f636a7ecab05fca43624a8178337cef1["get_locales"]["English"] = "en_GB.utf8";
    $f636a7ecab05fca43624a8178337cef1["get_locales"]["\xce\x95\xce\xbb\xce\xbb\xce\xb7\xce\xbd\xce\xb9\xce\xba\xce\xac"] = "el_GR.utf8";
    $ab89a8139ba29c2512fec1f508f96810["get_years"] = array("js" => array(array("id" => "*", "title" => "*"), array("id" => "1937", "title" => "1937"), array("id" => "1940", "title" => "1940"), array("id" => "1941", "title" => "1941"), array("id" => "1951", "title" => "1951"), array("id" => "1953", "title" => "1953"), array("id" => "1955", "title" => "1955"), array("id" => "1961", "title" => "1961"), array("id" => "1964", "title" => "1964"), array("id" => "1970", "title" => "1970"), array("id" => "1983", "title" => "1983"), array("id" => "1986", "title" => "1986"), array("id" => "1990", "title" => "1990"), array("id" => "1992", "title" => "1992"), array("id" => "1994", "title" => "1994"), array("id" => "1994/1998/2004", "title" => "1994/1998/2004"), array("id" => "1995", "title" => "1995"), array("id" => "1995/1999/2010", "title" => "1995/1999/2010"), array("id" => "1996", "title" => "1996"), array("id" => "1998", "title" => "1998"), array("id" => "1999", "title" => "1999"), array("id" => "2000", "title" => "2000"), array("id" => "2001", "title" => "2001"), array("id" => "2002", "title" => "2002"), array("id" => "2003", "title" => "2003"), array("id" => "2004", "title" => "2004"), array("id" => "2005", "title" => "2005"), array("id" => "2006", "title" => "2006"), array("id" => "2007", "title" => "2007"), array("id" => "2008", "title" => "2008"), array("id" => "2009", "title" => "2009"), array("id" => "2010", "title" => "2010"), array("id" => "2011", "title" => "2011"), array("id" => "2012", "title" => "2012"), array("id" => "2013", "title" => "2013"), array("id" => "2013", "title" => "2013"), array("id" => "2014", "title" => "2014"), array("id" => "2015", "title" => "2015"), array("id" => "2016", "title" => "2016"), array("id" => "2017", "title" => "2017")));
    $ab89a8139ba29c2512fec1f508f96810["get_abc"] = array("js" => array(array("id" => "*", "title" => "*"), array("id" => "A", "title" => "A"), array("id" => "B", "title" => "B"), array("id" => "C", "title" => "C"), array("id" => "D", "title" => "D"), array("id" => "E", "title" => "E"), array("id" => "F", "title" => "F"), array("id" => "G", "title" => "G"), array("id" => "H", "title" => "H"), array("id" => "I", "title" => "I"), array("id" => "G", "title" => "G"), array("id" => "K", "title" => "K"), array("id" => "L", "title" => "L"), array("id" => "M", "title" => "M"), array("id" => "N", "title" => "N"), array("id" => "O", "title" => "O"), array("id" => "P", "title" => "P"), array("id" => "Q", "title" => "Q"), array("id" => "R", "title" => "R"), array("id" => "S", "title" => "S"), array("id" => "T", "title" => "T"), array("id" => "U", "title" => "U"), array("id" => "V", "title" => "V"), array("id" => "W", "title" => "W"), array("id" => "X", "title" => "X"), array("id" => "W", "title" => "W"), array("id" => "Z", "title" => "Z")));
    $fadb655b1efb9a22103bc37699dce015 = empty(a78bF8d35765be2408c50712CE7a43Ad::$settings["stalker_theme"]) ? "default" : a78Bf8d35765BE2408c50712Ce7a43aD::$settings["stalker_theme"];
    $f95e0a5add97031d044e07d3f4aaba72 = empty($_COOKIE["timezone"]) || $_COOKIE["timezone"] == "undefined" ? A78BF8D35765BE2408C50712CE7A43aD::$settings["default_timezone"] : $_COOKIE["timezone"];
    if (!($F7af965c868ad940b4c181abc987875f && !$A6dde9bd7afc06231a1481ec56fd5768)) {
        goto A3d69980ad06094899ddc06912723293;
    }
    A1c6b49ec4F49777516666e14316D4B7($E4e8dc642ae3bbc84730dc5ef74fd8d6["token"]);
    A3d69980ad06094899ddc06912723293:
    switch ($f34a0094f9db3be3b99dd1eb1e9a3b6d) {
        case "stb":
            switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                case "get_ad":
                    die(json_encode(array("js" => array())));
                case "get_storages":
                    die(json_encode(array("js" => array())));
                case "get_profile":
                    $A6f4ecc798bcb285eee6efb4467c6708 = $F7af965c868ad940b4c181abc987875f ? array_merge($Acbe482ea62dee218013e22b65162a3f, $E4e8dc642ae3bbc84730dc5ef74fd8d6["get_profile_vars"]) : $Acbe482ea62dee218013e22b65162a3f;
                    $A6f4ecc798bcb285eee6efb4467c6708["status"] = intval(!$F7af965c868ad940b4c181abc987875f);
                    $A6f4ecc798bcb285eee6efb4467c6708["update_url"] = empty(A78bF8D35765be2408c50712Ce7a43AD::$settings["update_url"]) ? '' : a78Bf8d35765BE2408C50712cE7a43aD::$settings["update_url"];
                    $A6f4ecc798bcb285eee6efb4467c6708["test_download_url"] = empty(A78BF8d35765bE2408C50712cE7a43AD::$settings["test_download_url"]) ? '' : a78bf8d35765bE2408c50712cE7a43Ad::$settings["test_download_url"];
                    $A6f4ecc798bcb285eee6efb4467c6708["default_timezone"] = a78bF8D35765Be2408c50712cE7A43ad::$settings["default_timezone"];
                    $A6f4ecc798bcb285eee6efb4467c6708["default_locale"] = A78BF8D35765BE2408C50712Ce7A43AD::$settings["default_locale"];
                    $A6f4ecc798bcb285eee6efb4467c6708["allowed_stb_types"] = A78BF8D35765bE2408c50712ce7a43Ad::$settings["allowed_stb_types"];
                    $A6f4ecc798bcb285eee6efb4467c6708["allowed_stb_types_for_local_recording"] = a78BF8D35765bE2408c50712ce7A43ad::$settings["allowed_stb_types"];
                    $A6f4ecc798bcb285eee6efb4467c6708["storages"] = array();
                    $A6f4ecc798bcb285eee6efb4467c6708["tv_channel_default_aspect"] = empty(a78bf8d35765be2408c50712CE7a43AD::$settings["tv_channel_default_aspect"]) ? "fit" : A78bf8d35765be2408C50712CE7A43AD::$settings["tv_channel_default_aspect"];
                    $A6f4ecc798bcb285eee6efb4467c6708["playback_limit"] = empty(A78Bf8D35765bE2408c50712ce7A43Ad::$settings["playback_limit"]) ? false : intval(a78bF8D35765BE2408C50712cE7A43aD::$settings["playback_limit"]);
                    if (!empty($A6f4ecc798bcb285eee6efb4467c6708["playback_limit"])) {
                        goto F4c9194e89b3086c329487a4a9fcf7f1;
                    }
                    $A6f4ecc798bcb285eee6efb4467c6708["enable_playback_limit"] = false;
                    F4c9194e89b3086c329487a4a9fcf7f1:
                    $A6f4ecc798bcb285eee6efb4467c6708["show_tv_channel_logo"] = empty(a78BF8D35765be2408c50712CE7A43Ad::$settings["show_tv_channel_logo"]) ? false : true;
                    $A6f4ecc798bcb285eee6efb4467c6708["show_channel_logo_in_preview"] = empty(A78bF8d35765BE2408C50712Ce7A43aD::$settings["show_channel_logo_in_preview"]) ? false : true;
                    $A6f4ecc798bcb285eee6efb4467c6708["enable_connection_problem_indication"] = empty(A78bf8D35765be2408c50712ce7A43AD::$settings["enable_connection_problem_indication"]) ? false : true;
                    $A6f4ecc798bcb285eee6efb4467c6708["hls_fast_start"] = "1";
                    $A6f4ecc798bcb285eee6efb4467c6708["check_ssl_certificate"] = 0;
                    $A6f4ecc798bcb285eee6efb4467c6708["enable_buffering_indication"] = 1;
                    $A6f4ecc798bcb285eee6efb4467c6708["watchdog_timeout"] = mt_rand(80, 120);
                    if (!(empty($A6f4ecc798bcb285eee6efb4467c6708["aspect"]) && A78bF8D35765bE2408C50712Ce7a43ad::$StreamingServers[SERVER_ID]["server_protocol"] == "https")) {
                        goto d6657ca29b4743848d9853dab3d9f58b;
                    }
                    $A6f4ecc798bcb285eee6efb4467c6708["aspect"] = "16";
                    d6657ca29b4743848d9853dab3d9f58b:
                    die(json_encode(array("js" => $A6f4ecc798bcb285eee6efb4467c6708), JSON_PARTIAL_OUTPUT_ON_ERROR));
                case "get_localization":
                    die(json_encode(array("js" => $D2b2ff0086dc5578693175fa65e7a22a[$E4e8dc642ae3bbc84730dc5ef74fd8d6["locale"]])));
                case "log":
                    die(json_encode(array("js" => true)));
                case "get_modules":
                    $F39dfb610c58d8a2365eb0db08648621 = array("all_modules" => array("media_browser", "tv", "vclub", "sclub", "radio", "apps", "youtube", "dvb", "tv_archive", "time_shift", "time_shift_local", "epg.reminder", "epg.recorder", "epg", "epg.simple", "audioclub", "downloads_dialog", "downloads", "karaoke", "weather.current", "widget.audio", "widget.radio", "records", "remotepvr", "pvr_local", "settings.parent", "settings.localization", "settings.update", "settings.playback", "settings.common", "settings.network_status", "settings", "course.nbu", "weather.day", "cityinfo", "horoscope", "anecdote", "game.mastermind", "account", "demo", "infoportal", "internet", "service_management", "logout", "account_menu"), "switchable_modules" => array("sclub", "vlub", "karaoke", "cityinfo", "horoscope", "anecdote", "game.mastermind"), "disabled_modules" => array("weather.current", "weather.day", "cityinfo", "karaoke", "game.mastermind", "records", "downloads", "remotepvr", "service_management", "settings.update", "settings.common", "audioclub", "course.nbu", "infoportal", "demo", "widget.audio", "widget.radio"), "restricted_modules" => array(), "template" => $fadb655b1efb9a22103bc37699dce015, "launcher_url" => '', "launcher_profile_url" => "http://193.235.147.182:80//stalker_portal//server/api/launcher_profile.php");
                    die(json_encode(array("js" => $F39dfb610c58d8a2365eb0db08648621)));
            }
            F4337843c40c571f7e6fd827e432a439:
            goto ebf808d83276b57f07dd2675ca43d2a8;
        case "watchdog":
            $ipTV_db->query("UPDATE `mag_devices` SET `last_watchdog` = '%d' WHERE `mag_id` = '%d'", time(), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
            switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                case "get_events":
                    $ipTV_db->query("SELECT * FROM `mag_events` WHERE `mag_device_id` = '%d' AND `status` = 0 ORDER BY `id` ASC LIMIT 1", $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                    $d76067cf9572f7a6691c85c12faf2a29 = array("data" => array("msgs" => 0, "additional_services_on" => 1));
                    if (!($ipTV_db->D1e5Ce3b87Bb868B9E6EFD39Aa355A4f() > 0)) {
                        goto C566d77fdbf14fb2b93ac41a868d6385;
                    }
                    $d8846db162701bfd0863836727234c28 = $ipTV_db->F1ED191D78470660edFf4a007696BC1f();
                    $ipTV_db->query("SELECT count(*) FROM `mag_events` WHERE `mag_device_id` = '%d' AND `status` = 0 ", $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                    $A047ccc36dd93060cfe0876b17cde44d = $ipTV_db->B98Ce8b3899e362093173CC5eb4146B9();
                    $d76067cf9572f7a6691c85c12faf2a29 = array("data" => array("msgs" => $A047ccc36dd93060cfe0876b17cde44d, "id" => $d8846db162701bfd0863836727234c28["id"], "event" => $d8846db162701bfd0863836727234c28["event"], "need_confirm" => $d8846db162701bfd0863836727234c28["need_confirm"], "msg" => $d8846db162701bfd0863836727234c28["msg"], "reboot_after_ok" => $d8846db162701bfd0863836727234c28["reboot_after_ok"], "auto_hide_timeout" => $d8846db162701bfd0863836727234c28["auto_hide_timeout"], "send_time" => date("d-m-Y H:i:s", $d8846db162701bfd0863836727234c28["send_time"]), "additional_services_on" => $d8846db162701bfd0863836727234c28["additional_services_on"], "updated" => array("anec" => $d8846db162701bfd0863836727234c28["anec"], "vclub" => $d8846db162701bfd0863836727234c28["vclub"])));
                    $a733b4acb800bcb524c36282bfd66041 = array("reboot", "reload_portal", "play_channel", "cut_off");
                    if (!in_array($d8846db162701bfd0863836727234c28["event"], $a733b4acb800bcb524c36282bfd66041)) {
                        goto e6acdfd723b9b99962d60422b28e2466;
                    }
                    $ipTV_db->query("UPDATE `mag_events` SET `status` = 1 WHERE `id` = '%d'", $d8846db162701bfd0863836727234c28["id"]);
                    e6acdfd723b9b99962d60422b28e2466:
                    C566d77fdbf14fb2b93ac41a868d6385:
                    die(json_encode(array("js" => $d76067cf9572f7a6691c85c12faf2a29), JSON_PARTIAL_OUTPUT_ON_ERROR));
                case "confirm_event":
                    if (empty(A78bF8d35765Be2408c50712CE7a43ad::$request["event_active_id"])) {
                        goto a790d8329516f53cff657b67d4b1d58f;
                    }
                    $b46d56fec05467fa8cb18d269ea00983 = A78bF8d35765be2408C50712ce7A43ad::$request["event_active_id"];
                    $ipTV_db->query("UPDATE `mag_events` SET `status` = 1 WHERE `id` = '%d'", $b46d56fec05467fa8cb18d269ea00983);
                    if (!($ipTV_db->E872bE457a7f493d774179C6Bdf95B46() > 0)) {
                        a790d8329516f53cff657b67d4b1d58f:
                        goto B9df9ef42385d60aa925a6b85b2641c4;
                    }
                    die(json_encode(array("js" => array("data" => "ok"))));
            }
            B9df9ef42385d60aa925a6b85b2641c4:
    }
    ebf808d83276b57f07dd2675ca43d2a8:
    if ($F7af965c868ad940b4c181abc987875f) {
        $C3e422ab460a153e3477de0ff483d9e7 = !empty($E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_player"]) ? $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_player"] . " " : "ffmpeg ";
        switch ($f34a0094f9db3be3b99dd1eb1e9a3b6d) {
            case "stb":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_preload_images":
                        $C370fbca7449b2b4b2e363169656ee17 = is_numeric($be4275c3d5887706bcf4db19dc01637e) ? "i_" . $be4275c3d5887706bcf4db19dc01637e : "i";
                        $c4be797e5512579c392d632772cbd10b = array("template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/loading.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_6_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/ico_info.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_pass_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_info.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_menu_act.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_2_cloudy.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_sidepanel.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_search.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/v_menu_1a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/loading_bg.gif", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_11_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table_act01.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_11_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/tv_table.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/vol_1.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_prev_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_8_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_youtube.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_4_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/tv_table_arrows.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_9_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_10_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/1x1.gif", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_karaoke.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_video.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table05.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table_act02.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/tv_table_separator.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_icons.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_btn.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_5_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_audio.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_7_hail.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table_act05.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_9_snow.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/v_menu_4.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_3_pasmurno.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/low_q.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_setting.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_context_borders.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/input_episode_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table_act04.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_hor_bg3.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/black85.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/pause_btn.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/ico_error26.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/input_episode.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/epg_red_mark.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_sidepanel_act.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_3_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_pass_input.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_bg2.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/osd_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/epg_orange_mark.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_mb.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/ears_arrow_l.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/hr_filminfo.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_rec.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_account.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_icon_rec.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_hor_left.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table04.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_player.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_search_act2.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/input_channel_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_12_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_9_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_android.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_hor_right.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_quality.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table02.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/bg2.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_1_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/osd_line_pos.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/input_channel.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_7_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/arr_right.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_radio.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/ico_confirm.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/osd_btn.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/osd_time.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_menu.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/volume_off.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/btn2.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_internet.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/volume_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_1_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/v_menu_2b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_3_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_4_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_255_NA.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_1_sun_cl.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_10_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/25alfa_20.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table_act06.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/input.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/tv_table_focus.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/skip.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/epg_green_mark.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_vert_cell.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_1_moon_cl.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/modal_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_4_short_rain.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/ears_arrow_r.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_default.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/osd_line.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table07.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_usb.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_context_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_sidepanel_r.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_2_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/v_menu_1b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table03.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table_act03.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table01.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_dm.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_5_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_6_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_sidepanel_l.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_sidepanel_line.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_tv.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_table06.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_scroll_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_8_rain_swon.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_scroll.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/v_menu_2a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/v_menu_5.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_2_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_10_heavy_snow.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/aspect_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_0_moon.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/volume_bar.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/v_menu_3.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_hor_bg1.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_12_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_ex.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_sidepanel_arr.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mb_icon_scrambled.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/ico_alert.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_ico_apps.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/input_act.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/ears.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_8_a.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/mm_hor_bg2.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/arr_left.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/horoscope_menu_button_1_7_b.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/footer_search_act.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_0_sun.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_6_lightning.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/osd_rec.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/tv_prev_bg.png", "template/{$fadb655b1efb9a22103bc37699dce015}/{$C370fbca7449b2b4b2e363169656ee17}/_5_rain.png");
                        die(json_encode(array("js" => $c4be797e5512579c392d632772cbd10b)));
                    case "get_settings_profile":
                        $ipTV_db->query("SELECT * FROM `mag_devices` WHERE `mag_id` = '%d'", $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        $Ad51a25e8830a754308d0fcf7239425b = $ipTV_db->f1eD191D78470660EDFF4a007696bC1f();
                        $Ba14412cc90b8eefb2a5a78fae3ffa84 = array("js" => array("modules" => array(array("name" => "lock"), array("name" => "lang"), array("name" => "update"), array("name" => "net_info", "sub" => array(array("name" => "wired"), array("name" => "pppoe", "sub" => array(array("name" => "dhcp"), array("name" => "dhcp_manual"), array("name" => "disable"))), array("name" => "wireless"), array("name" => "speed"))), array("name" => "video"), array("name" => "audio"), array("name" => "net", "sub" => array(array("name" => "ethernet", "sub" => array(array("name" => "dhcp"), array("name" => "dhcp_manual"), array("name" => "manual"), array("name" => "no_ip"))), array("name" => "pppoe", "sub" => array(array("name" => "dhcp"), array("name" => "dhcp_manual"), array("name" => "disable"))), array("name" => "wifi", "sub" => array(array("name" => "dhcp"), array("name" => "dhcp_manual"), array("name" => "manual"))), array("name" => "speed"))), array("name" => "advanced"), array("name" => "dev_info"), array("name" => "reload"), array("name" => "internal_portal"), array("name" => "reboot"))));
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["parent_password"] = $Ad51a25e8830a754308d0fcf7239425b["parent_password"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["update_url"] = a78BF8d35765be2408C50712cE7A43AD::$settings["update_url"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["test_download_url"] = A78bf8d35765bE2408c50712CE7a43aD::$settings["test_download_url"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["playback_buffer_size"] = $Ad51a25e8830a754308d0fcf7239425b["playback_buffer_size"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["screensaver_delay"] = $Ad51a25e8830a754308d0fcf7239425b["screensaver_delay"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["plasma_saving"] = $Ad51a25e8830a754308d0fcf7239425b["plasma_saving"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["spdif_mode"] = $Ad51a25e8830a754308d0fcf7239425b["spdif_mode"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["ts_enabled"] = $Ad51a25e8830a754308d0fcf7239425b["ts_enabled"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["ts_enable_icon"] = $Ad51a25e8830a754308d0fcf7239425b["ts_enable_icon"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["ts_path"] = $Ad51a25e8830a754308d0fcf7239425b["ts_path"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["ts_max_length"] = $Ad51a25e8830a754308d0fcf7239425b["ts_max_length"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["ts_buffer_use"] = $Ad51a25e8830a754308d0fcf7239425b["ts_buffer_use"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["ts_action_on_exit"] = $Ad51a25e8830a754308d0fcf7239425b["ts_action_on_exit"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["ts_delay"] = $Ad51a25e8830a754308d0fcf7239425b["ts_delay"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["hdmi_event_reaction"] = $Ad51a25e8830a754308d0fcf7239425b["hdmi_event_reaction"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["pri_audio_lang"] = $Acbe482ea62dee218013e22b65162a3f["pri_audio_lang"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["show_after_loading"] = $Ad51a25e8830a754308d0fcf7239425b["show_after_loading"];
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["sec_audio_lang"] = $Acbe482ea62dee218013e22b65162a3f["sec_audio_lang"];
                        if (A78BF8D35765bE2408C50712cE7A43aD::$settings["always_enabled_subtitles"] == 1) {
                            $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["pri_subtitle_lang"] = $Acbe482ea62dee218013e22b65162a3f["pri_subtitle_lang"];
                            $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["sec_subtitle_lang"] = $Acbe482ea62dee218013e22b65162a3f["sec_subtitle_lang"];
                            goto Cb5421566a8e5a7d10dc37d8f7d91588;
                        }
                        $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["pri_subtitle_lang"] = $Ba14412cc90b8eefb2a5a78fae3ffa84["js"]["sec_subtitle_lang"] = '';
                        Cb5421566a8e5a7d10dc37d8f7d91588:
                        die(json_encode($Ba14412cc90b8eefb2a5a78fae3ffa84));
                    case "get_locales":
                        $ipTV_db->query("SELECT `locale` FROM `mag_devices` WHERE `mag_id` = '%d'", $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        $Da49f0440d38d30deabb4d3fa41d1ae7 = $ipTV_db->f1Ed191d78470660EDFF4A007696BC1F();
                        $output = array();
                        foreach ($f636a7ecab05fca43624a8178337cef1["get_locales"] as $a151dae784c52c6ba073f125d1949afe => $C8028ababe676a3ab15fe53b7a4cc161) {
                            $F9c9bf468e4737faebeca1de82c8ca0b = $Da49f0440d38d30deabb4d3fa41d1ae7["locale"] == $C8028ababe676a3ab15fe53b7a4cc161 ? 1 : 0;
                            $output[] = array("label" => $a151dae784c52c6ba073f125d1949afe, "value" => $C8028ababe676a3ab15fe53b7a4cc161, "selected" => $F9c9bf468e4737faebeca1de82c8ca0b);
                        }
                        die(json_encode(array("js" => $output)));
                    case "get_countries":
                        die(json_encode(array("js" => array())));
                    case "get_timezones":
                        $A77d90c75b404413dc008921f0c45418 = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
                        $output = array();
                        foreach ($A77d90c75b404413dc008921f0c45418 as $F452bdee727ee4eb46f405cf1c973026) {
                            $F9c9bf468e4737faebeca1de82c8ca0b = $f95e0a5add97031d044e07d3f4aaba72 == $F452bdee727ee4eb46f405cf1c973026 ? 1 : 0;
                            $output[] = array("label" => $F452bdee727ee4eb46f405cf1c973026, "value" => $F452bdee727ee4eb46f405cf1c973026, "selected" => $F9c9bf468e4737faebeca1de82c8ca0b);
                        }
                        die(json_encode(array("js" => $output)));
                    case "get_cities":
                        die(json_encode(array("js" => array())));
                    case "search_cities":
                        die(json_encode(array("js" => array())));
                    case "get_tv_aspects":
                        if (!empty($E4e8dc642ae3bbc84730dc5ef74fd8d6["aspect"])) {
                            die($E4e8dc642ae3bbc84730dc5ef74fd8d6["aspect"]);
                        }
                        die(json_encode($E4e8dc642ae3bbc84730dc5ef74fd8d6["aspect"]));
                    case "set_volume":
                        $b6fbc6940572a4b6179d85a9eede771e = A78bF8d35765Be2408C50712Ce7A43aD::$request["vol"];
                        if (empty($b6fbc6940572a4b6179d85a9eede771e)) {
                            goto e264d2c182d72c198a91254d3c832718;
                        }
                        $ipTV_db->query("UPDATE `mag_devices` SET `volume` = '%d' WHERE `mag_id` = '%d'", $b6fbc6940572a4b6179d85a9eede771e, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        if (!($ipTV_db->E872Be457a7F493d774179C6bDF95B46() > 0)) {
                            e264d2c182d72c198a91254d3c832718:
                            goto Ecac346de387f5dea41c5d0624df85e5;
                        }
                        die(json_encode(array("data" => true)));
                    case "set_aspect":
                        $A7386eca40c08bf499c3668f497f7653 = a78bF8D35765be2408c50712CE7A43ad::$request["ch_id"];
                        $e452199ba3dab31b943dff58d34047da = A78Bf8d35765be2408c50712cE7A43aD::$request["aspect"];
                        $d8e3d66bf231000bd757e5923159fa8f = $E4e8dc642ae3bbc84730dc5ef74fd8d6["aspect"];
                        if (empty($d8e3d66bf231000bd757e5923159fa8f)) {
                            $ipTV_db->query("UPDATE `mag_devices` SET `aspect` = '%s' WHERE mag_id = '%d'", json_encode(array("js" => array($A7386eca40c08bf499c3668f497f7653 => $e452199ba3dab31b943dff58d34047da))), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                            goto D3242f373fa2c882897f4ad5a559354b;
                        }
                        $d8e3d66bf231000bd757e5923159fa8f = json_decode($d8e3d66bf231000bd757e5923159fa8f, true);
                        $d8e3d66bf231000bd757e5923159fa8f["js"][$A7386eca40c08bf499c3668f497f7653] = $e452199ba3dab31b943dff58d34047da;
                        $ipTV_db->query("UPDATE `mag_devices` SET `aspect` = '%s' WHERE mag_id = '%d'", json_encode($d8e3d66bf231000bd757e5923159fa8f), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        D3242f373fa2c882897f4ad5a559354b:
                        die(json_encode(array("js" => true)));
                    case "set_stream_error":
                        die(json_encode(array("js" => true)));
                    case "set_screensaver_delay":
                        if (empty($_SERVER["HTTP_COOKIE"])) {
                            goto bfd6760b47ba09e01f041f9a1e41532d;
                        }
                        $e50b36bfbe1ab40a7b84a3ac6d827159 = intval($_REQUEST["screensaver_delay"]);
                        $ipTV_db->query("UPDATE `mag_devices` SET `screensaver_delay` = '%d' WHERE `mag_id` = '%d'", $e50b36bfbe1ab40a7b84a3ac6d827159, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        bfd6760b47ba09e01f041f9a1e41532d:
                        die(json_encode(array("js" => true)));
                    case "set_playback_buffer":
                        if (empty($_SERVER["HTTP_COOKIE"])) {
                            goto e59cb6f4177f63a1cd5718df7f988db7;
                        }
                        $B4089f477d0edfc15e3d8d962a07aadf = intval($_REQUEST["playback_buffer_bytes"]);
                        $db581b3169d84efa33b6e6b040e5af09 = intval($_REQUEST["playback_buffer_size"]);
                        $ipTV_db->query("UPDATE `mag_devices` SET `playback_buffer_bytes` = '%d' , `playback_buffer_size` = '%d' WHERE `mag_id` = '%d'", $B4089f477d0edfc15e3d8d962a07aadf, $db581b3169d84efa33b6e6b040e5af09, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        e59cb6f4177f63a1cd5718df7f988db7:
                        die(json_encode(array("js" => true)));
                    case "set_plasma_saving":
                        $e720f242f850f63f3ca7da204d441fab = intval($_REQUEST["plasma_saving"]);
                        $ipTV_db->query("UPDATE `mag_devices` SET `plasma_saving` = '%d' WHERE `mag_id` = '%d'", $e720f242f850f63f3ca7da204d441fab, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        die(json_encode(array("js" => true)));
                    case "set_parent_password":
                        if (isset($_REQUEST["parent_password"]) && isset($_REQUEST["pass"]) && isset($_REQUEST["repeat_pass"]) && $_REQUEST["pass"] == $_REQUEST["repeat_pass"]) {
                            $ipTV_db->query("UPDATE `mag_devices` SET `parent_password` = '%s' WHERE `mag_id` = '%d'", $_REQUEST["pass"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                            die(json_encode(array("js" => true)));
                        }
                        die(json_encode(array("js" => true)));
                    case "set_locale":
                        if (empty(a78Bf8D35765bE2408c50712CE7a43AD::$request["locale"])) {
                            goto e4cb5690288a85c75bd7275738b9b10a;
                        }
                        $ipTV_db->query("UPDATE `mag_devices` SET `locale` = '%s' WHERE `mag_id` = '%d'", a78bF8d35765Be2408C50712ce7A43aD::$request["locale"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        e4cb5690288a85c75bd7275738b9b10a:
                        die(json_encode(array("js" => array())));
                    case "set_hdmi_reaction":
                        if (!(!empty($_SERVER["HTTP_COOKIE"]) && isset($_REQUEST["data"]))) {
                            goto e1b5fcf1ea444113aca82fca96eb8a44;
                        }
                        $E9ca6897602dd4c8870714b6f8ec2e04 = $_REQUEST["data"];
                        $ipTV_db->query("UPDATE `mag_devices` SET `hdmi_event_reaction` = '%s' WHERE `mag_id` = '%d'", $E9ca6897602dd4c8870714b6f8ec2e04, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        e1b5fcf1ea444113aca82fca96eb8a44:
                        die(json_encode(array("js" => true)));
                }
                Ecac346de387f5dea41c5d0624df85e5:
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "audioclub":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_categories":
                        $output = array();
                        $output["js"] = array();
                        $bf8123e7819ab3cf51f138a1f50b5826 = B303F4b9BCFa8D2ffC2ae41c5D2aA387("movie");
                        if (!(A78Bf8D35765bE2408c50712ce7a43AD::$settings["show_all_category_mag"] == 1)) {
                            goto F8a3eb5c3b696d6d8f7497bed0fcd9e0;
                        }
                        $output["js"][] = array("id" => "*", "title" => "All", "alias" => "*", "censored" => 0);
                        F8a3eb5c3b696d6d8f7497bed0fcd9e0:
                        foreach ($bf8123e7819ab3cf51f138a1f50b5826[0] as $B51a7e937f03bda1f1e77ebf1bb5a96e => $f539cddc66ac9616d9c856aecf6efb62) {
                            $output["js"][] = array("id" => $f539cddc66ac9616d9c856aecf6efb62["id"], "title" => $f539cddc66ac9616d9c856aecf6efb62["category_name"], "alias" => $f539cddc66ac9616d9c856aecf6efb62["category_name"], "censored" => stristr($f539cddc66ac9616d9c856aecf6efb62["category_name"], "adults") ? 1 : 0);
                        }
                        die(json_encode($output));
                }
                B14a75dacaf384d5475be34ddd553d41:
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "itv":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "create_link":
                        $bad7a63b7a82143384411c956ca1302b = a78bf8d35765Be2408c50712ce7A43aD::$request["cmd"];
                        $D3c32abd0d3bffc3578aff155e22d728 = "http://localhost/ch/";
                        list($ba85d77d367dcebfcc2a3db9e83bb581, $Faefd94a7363d43fe709e5aaa80f5fc7) = explode("_", substr($bad7a63b7a82143384411c956ca1302b, strpos($bad7a63b7a82143384411c956ca1302b, $D3c32abd0d3bffc3578aff155e22d728) + strlen($D3c32abd0d3bffc3578aff155e22d728)));
                        if (empty($Faefd94a7363d43fe709e5aaa80f5fc7)) {
                            $Cd2953f76721ad9589ab3d88c42b62b9 = a78Bf8D35765Be2408c50712CE7a43AD::e5182E3AFA58Ac7Ec5d69d56b28819cd();
                            $ipTV_db->query("UPDATE `users` SET `play_token` = '%s' WHERE `id` = '%d'", $Cd2953f76721ad9589ab3d88c42b62b9 . ":" . (time() + 10) . ":" . $ba85d77d367dcebfcc2a3db9e83bb581, $E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"]);
                            if (!file_exists("TMP_DIRnew_rewrite") || A78BF8D35765be2408c50712cE7A43aD::$settings["mag_container"] == "m3u8") {
                                $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . a78BF8d35765bE2408C50712Ce7A43ad::$StreamingServers[SERVER_ID]["site_url"] . "live/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$ba85d77d367dcebfcc2a3db9e83bb581}." . a78bF8D35765be2408c50712Ce7A43AD::$settings["mag_container"] . "?play_token=" . $Cd2953f76721ad9589ab3d88c42b62b9;
                                goto D37353af964e14c6c5bfd7e6387559d2;
                            }
                            $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . a78bf8D35765Be2408c50712Ce7a43AD::$StreamingServers[SERVER_ID]["site_url"] . "{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$ba85d77d367dcebfcc2a3db9e83bb581}?play_token={$Cd2953f76721ad9589ab3d88c42b62b9}";
                            D37353af964e14c6c5bfd7e6387559d2:
                            goto B7e8ce6460c3b867bb1cf05c8bbb00a2;
                        }
                        $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . $Faefd94a7363d43fe709e5aaa80f5fc7;
                        B7e8ce6460c3b867bb1cf05c8bbb00a2:
                        die(json_encode(array("js" => array("id" => $ba85d77d367dcebfcc2a3db9e83bb581, "cmd" => $F809fc2dad1887c28d3b55d1feaab6f8), "streamer_id" => 0, "link_id" => 0, "load" => 0, "error" => '')));
                    case "set_claim":
                        if (!(!empty(A78BF8d35765BE2408C50712cE7a43aD::$request["id"]) && !empty(A78bf8D35765bE2408C50712Ce7a43ad::$request["real_type"]))) {
                            goto Bbb938aad3d419e86239483aaaf72201;
                        }
                        $b3c28ce8f38cc88b3954fadda9ca6553 = intval(a78bF8d35765Be2408C50712CE7A43aD::$request["id"]);
                        $efcae6886919c2c7cc23cdd89cd7c056 = a78bf8D35765be2408C50712cE7A43aD::$request["real_type"];
                        $e309bb80a71b96ca2c0ff856446be219 = date("Y-m-d H:i:s");
                        $ipTV_db->query("INSERT INTO `mag_claims` (`stream_id`,`mag_id`,`real_type`,`date`) VALUES('%d','%d','%s','%s')", $b3c28ce8f38cc88b3954fadda9ca6553, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"], $efcae6886919c2c7cc23cdd89cd7c056, $e309bb80a71b96ca2c0ff856446be219);
                        Bbb938aad3d419e86239483aaaf72201:
                        echo json_encode(array("js" => true));
                        die;
                    case "set_fav":
                        $d570fd4b0baf3fb34898da3935354f80 = empty($_REQUEST["fav_ch"]) ? '' : $_REQUEST["fav_ch"];
                        $d570fd4b0baf3fb34898da3935354f80 = array_filter(array_map("intval", explode(",", $d570fd4b0baf3fb34898da3935354f80)));
                        $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["live"] = $d570fd4b0baf3fb34898da3935354f80;
                        $ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        die(json_encode(array("js" => true)));
                    case "get_fav_ids":
                        echo json_encode(array("js" => $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["live"]));
                        die;
                    case "get_all_channels":
                        die(eca2A16cfbd94b2b895bCBc43EBd6e3d(null, true));
                    case "get_ordered_list":
                        $B3703321da72313bacab05a2780df82e = !empty($_REQUEST["fav"]) ? 1 : null;
                        $a89c4f9c310eccb6c695b9ddbb4f698b = !empty($_REQUEST["sortby"]) ? $_REQUEST["sortby"] : null;
                        $c8cfef85abbd40fe21f8ec737b50463c = empty($_REQUEST["genre"]) || !is_numeric($_REQUEST["genre"]) ? null : intval($_REQUEST["genre"]);
                        die(eca2a16CfBd94B2B895BcBC43eBD6E3D($c8cfef85abbd40fe21f8ec737b50463c, false, $B3703321da72313bacab05a2780df82e, $a89c4f9c310eccb6c695b9ddbb4f698b));
                    case "get_all_fav_channels":
                        $c8cfef85abbd40fe21f8ec737b50463c = empty($_REQUEST["genre"]) || !is_numeric($_REQUEST["genre"]) ? null : intval($_REQUEST["genre"]);
                        die(ecA2a16cfBD94b2b895BCbC43EBD6E3D($c8cfef85abbd40fe21f8ec737b50463c, true, 1));
                    case "get_epg_info":
                        $aa9e4071844cf08595f5a0d39f136cba = empty($_REQUEST["period"]) || !is_numeric($_REQUEST["period"]) ? 3 : intval($_REQUEST["period"]);
                        $D465fc5085f41251c6fa7c77b8333b0f = c10FD9F04D9c5bAF2F685664A4Da5E9A($E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"], array("live", "created_live"));
                        $C1037d0090aa4e7d78973574b5b0c906 = array("js" => array());
                        $C1037d0090aa4e7d78973574b5b0c906["js"]["data"] = array();
                        $fc504d0185065e8ba8f4f217b7aba6e8 = A78bf8D35765BE2408c50712ce7A43aD::b7A3b5fa503D2609667A9ccB4E370Bb5($f95e0a5add97031d044e07d3f4aaba72);
                        foreach ($D465fc5085f41251c6fa7c77b8333b0f["streams"] as $e2ed3b44381d63b5ea576aae3e88df98 => $c3a18c26bfa971a25d2e6ada870ff735) {
                            if (!empty($c3a18c26bfa971a25d2e6ada870ff735["channel_id"])) {
                                if (file_exists(TMP_DIR . "epg_info_{$c3a18c26bfa971a25d2e6ada870ff735["id"]}_stalker")) {
                                    $A4a19971c78a0cf0fc5b24bf655fa5dc = json_decode(file_get_contents(TMP_DIR . "epg_info_{$c3a18c26bfa971a25d2e6ada870ff735["id"]}_stalker"), true);
                                    goto E5c609bd6336e6831afd2f6f80944bfe;
                                }
                                $ipTV_db->query("SELECT *,UNIX_TIMESTAMP(start) as start_timestamp, UNIX_TIMESTAMP(end) as stop_timestamp FROM `epg_data` WHERE `start` >= '%s' AND `end` <= '%s' AND `channel_id` = '%s' ORDER BY `start` ASC LIMIT 10", date("Y-m-d H:i:00"), date("Y-m-d H:i:00", strtotime("+{$aa9e4071844cf08595f5a0d39f136cba} hours")), $c3a18c26bfa971a25d2e6ada870ff735["channel_id"]);
                                $A4a19971c78a0cf0fc5b24bf655fa5dc = $ipTV_db->C126fd559932f625CDf6098d86c63880();
                                file_put_contents(TMP_DIR . "epg_info_{$c3a18c26bfa971a25d2e6ada870ff735["id"]}_stalker", json_encode($A4a19971c78a0cf0fc5b24bf655fa5dc));
                                E5c609bd6336e6831afd2f6f80944bfe:
                                if (empty($A4a19971c78a0cf0fc5b24bf655fa5dc)) {
                                    goto affc1a1df20e8a4e78e4ced6f533d009;
                                }
                                $C48e0083a9caa391609a3c645a2ec889 = 0;
                                Efe8605ad4469ab8b571a2ec18427318:
                                if (!($C48e0083a9caa391609a3c645a2ec889 < count($A4a19971c78a0cf0fc5b24bf655fa5dc))) {
                                    affc1a1df20e8a4e78e4ced6f533d009:
                                    goto B94d6ac9969e3a5748fbd452dab80fec;
                                }
                                $A73d5129dfb465fd94f3e09e9b179de0 = new DateTime($A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["start"]);
                                $A73d5129dfb465fd94f3e09e9b179de0->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                                $cdd6af41b10abec2ff03fe043f3df1cf = new DateTime($A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["end"]);
                                $cdd6af41b10abec2ff03fe043f3df1cf->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["id"] = $A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["id"];
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["ch_id"] = $c3a18c26bfa971a25d2e6ada870ff735["id"];
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["time"] = $A73d5129dfb465fd94f3e09e9b179de0->format("Y-m-d H:i:s");
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["time_to"] = $cdd6af41b10abec2ff03fe043f3df1cf->format("Y-m-d H:i:s");
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["duration"] = $A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"] - $A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["stop_timestamp"];
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["name"] = base64_decode($A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["title"]);
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["descr"] = base64_decode($A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["description"]);
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["real_id"] = $c3a18c26bfa971a25d2e6ada870ff735["id"] . "_" . $A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"];
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["category"] = '';
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["director"] = '';
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["actor"] = '';
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"] = $A73d5129dfb465fd94f3e09e9b179de0->getTimestamp();
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["stop_timestamp"] = $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp();
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["t_time"] = $A73d5129dfb465fd94f3e09e9b179de0->format("H:i");
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["t_time_to"] = $cdd6af41b10abec2ff03fe043f3df1cf->format("H:i");
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["display_duration"] = $A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"] - $A4a19971c78a0cf0fc5b24bf655fa5dc[$C48e0083a9caa391609a3c645a2ec889]["stop_timestamp"];
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["larr"] = 0;
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["rarr"] = 0;
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["mark_rec"] = 0;
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["mark_memo"] = 0;
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["mark_archive"] = 0;
                                $C1037d0090aa4e7d78973574b5b0c906["js"]["data"][$c3a18c26bfa971a25d2e6ada870ff735["id"]][$C48e0083a9caa391609a3c645a2ec889]["on_date"] = $A73d5129dfb465fd94f3e09e9b179de0->format("l d.m.Y");
                                $C48e0083a9caa391609a3c645a2ec889++;
                                goto Efe8605ad4469ab8b571a2ec18427318;
                            }
                            B94d6ac9969e3a5748fbd452dab80fec:
                        }
                        die(json_encode($C1037d0090aa4e7d78973574b5b0c906, JSON_PARTIAL_OUTPUT_ON_ERROR));
                    case "set_fav_status":
                        die(json_encode(array("js" => array())));
                    case "get_short_epg":
                        if (empty($_REQUEST["ch_id"])) {
                            goto E8bbdfc138a4e32605170171e3223e7e;
                        }
                        $A7386eca40c08bf499c3668f497f7653 = $_REQUEST["ch_id"];
                        $C1037d0090aa4e7d78973574b5b0c906 = array("js" => array());
                        if (file_exists(TMP_DIR . "epg_{$A7386eca40c08bf499c3668f497f7653}_stalker")) {
                            $fae8d113c9c337189077bc9a21138e1c = json_decode(file_get_contents(TMP_DIR . "epg_{$A7386eca40c08bf499c3668f497f7653}_stalker"), true);
                            goto d1b0b82efd7f5b4014ea2c90ac023daf;
                        }
                        $fae8d113c9c337189077bc9a21138e1c = array();
                        $ipTV_db->query("SELECT `channel_id`,`epg_id` FROM `streams` WHERE `id` = '%d' AND epg_id IS NOT NULL", $A7386eca40c08bf499c3668f497f7653);
                        if (!($ipTV_db->D1e5Ce3B87BB868b9e6efd39AA355a4F() > 0)) {
                            goto c22e6e9fb7028e89a1cf12a21cfde20e;
                        }
                        $faca5f1c4c9dec5b739d7a905876b0cd = $ipTV_db->F1eD191D78470660EdfF4A007696bC1f();
                        $ipTV_db->fC53e22aE7ee3BB881cd95fB606914f0("SELECT *,UNIX_TIMESTAMP(start) as start_timestamp, UNIX_TIMESTAMP(end) as stop_timestamp  FROM `epg_data` WHERE `epg_id` = '{$faca5f1c4c9dec5b739d7a905876b0cd["epg_id"]}' AND `channel_id` = '" . $ipTV_db->escape($faca5f1c4c9dec5b739d7a905876b0cd["channel_id"]) . "' AND ('" . date("Y-m-d H:i:00") . "' BETWEEN `start` AND `end` OR `start` >= '" . date("Y-m-d H:i:00") . "') ORDER BY `start` LIMIT 4");
                        if (!($ipTV_db->D1E5CE3B87Bb868B9E6EFD39aA355A4f() > 0)) {
                            goto D64070166cca0384cfbc27aca47268b3;
                        }
                        $fae8d113c9c337189077bc9a21138e1c = $ipTV_db->C126fd559932F625cDF6098D86c63880();
                        D64070166cca0384cfbc27aca47268b3:
                        c22e6e9fb7028e89a1cf12a21cfde20e:
                        file_put_contents(TMP_DIR . "epg_{$A7386eca40c08bf499c3668f497f7653}_stalker", json_encode($fae8d113c9c337189077bc9a21138e1c));
                        d1b0b82efd7f5b4014ea2c90ac023daf:
                        if (empty($fae8d113c9c337189077bc9a21138e1c)) {
                            goto e440107e3c5d62c29b0ffe4f24f3ff03;
                        }
                        $fc504d0185065e8ba8f4f217b7aba6e8 = a78bf8D35765be2408c50712Ce7a43AD::b7a3B5FA503D2609667A9CCb4e370bb5($f95e0a5add97031d044e07d3f4aaba72);
                        $C48e0083a9caa391609a3c645a2ec889 = 0;
                        Cbe729c6cd29f19a001104345f98ca72:
                        if (!($C48e0083a9caa391609a3c645a2ec889 < count($fae8d113c9c337189077bc9a21138e1c))) {
                            e440107e3c5d62c29b0ffe4f24f3ff03:
                            E8bbdfc138a4e32605170171e3223e7e:
                            die(json_encode($C1037d0090aa4e7d78973574b5b0c906, JSON_PARTIAL_OUTPUT_ON_ERROR));
                        }
                        $A73d5129dfb465fd94f3e09e9b179de0 = new DateTime($fae8d113c9c337189077bc9a21138e1c[$C48e0083a9caa391609a3c645a2ec889]["start"]);
                        $A73d5129dfb465fd94f3e09e9b179de0->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                        $cdd6af41b10abec2ff03fe043f3df1cf = new DateTime($fae8d113c9c337189077bc9a21138e1c[$C48e0083a9caa391609a3c645a2ec889]["end"]);
                        $cdd6af41b10abec2ff03fe043f3df1cf->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["id"] = $fae8d113c9c337189077bc9a21138e1c[$C48e0083a9caa391609a3c645a2ec889]["id"];
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["ch_id"] = $A7386eca40c08bf499c3668f497f7653;
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["correct"] = $A73d5129dfb465fd94f3e09e9b179de0->format("Y-m-d H:i:s");
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["time"] = $A73d5129dfb465fd94f3e09e9b179de0->format("Y-m-d H:i:s");
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["time_to"] = $cdd6af41b10abec2ff03fe043f3df1cf->format("Y-m-d H:i:s");
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["duration"] = $fae8d113c9c337189077bc9a21138e1c[$C48e0083a9caa391609a3c645a2ec889]["stop_timestamp"] - $fae8d113c9c337189077bc9a21138e1c[$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"];
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["name"] = base64_decode($fae8d113c9c337189077bc9a21138e1c[$C48e0083a9caa391609a3c645a2ec889]["title"]);
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["descr"] = base64_decode($fae8d113c9c337189077bc9a21138e1c[$C48e0083a9caa391609a3c645a2ec889]["description"]);
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["real_id"] = $A7386eca40c08bf499c3668f497f7653 . "_" . $fae8d113c9c337189077bc9a21138e1c[$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"];
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["category"] = '';
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["director"] = '';
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["actor"] = '';
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"] = $A73d5129dfb465fd94f3e09e9b179de0->getTimestamp();
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["stop_timestamp"] = $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp();
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["t_time"] = $A73d5129dfb465fd94f3e09e9b179de0->format("H:i");
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["t_time_to"] = $cdd6af41b10abec2ff03fe043f3df1cf->format("H:i");
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["mark_memo"] = 0;
                        $C1037d0090aa4e7d78973574b5b0c906["js"][$C48e0083a9caa391609a3c645a2ec889]["mark_archive"] = 0;
                        $C48e0083a9caa391609a3c645a2ec889++;
                        goto Cbe729c6cd29f19a001104345f98ca72;
                    case "set_played":
                        die(json_encode(array("js" => true)));
                    case "set_last_id":
                        $A7386eca40c08bf499c3668f497f7653 = intval($_REQUEST["id"]);
                        if (!($A7386eca40c08bf499c3668f497f7653 > 0)) {
                            goto E46e858a8864c1be948f5d0ce6d6c553;
                        }
                        $ipTV_db->query("UPDATE `mag_devices` SET `last_itv_id` = '%d' WHERE `mag_id` = '%d'", $A7386eca40c08bf499c3668f497f7653, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        E46e858a8864c1be948f5d0ce6d6c553:
                        die(json_encode(array("js" => true)));
                    case "get_genres":
                        $output = array();
                        $F413fb4a34e3e65ab00d750206ac1bc3 = 1;
                        $F93ee1f4357cf2c3676871a1bc44af65 = b303F4B9BCFA8d2FFc2Ae41C5d2aa387("live");
                        if (!(A78Bf8d35765Be2408C50712ce7A43aD::$settings["show_all_category_mag"] == 1)) {
                            goto f5fe2eb52830f7596fc16572ab9fc6cc;
                        }
                        $output["js"][] = array("id" => "*", "title" => "All", "alias" => "All", "active_sub" => true, "censored" => 0);
                        f5fe2eb52830f7596fc16572ab9fc6cc:
                        foreach ($F93ee1f4357cf2c3676871a1bc44af65 as $b10d12e0226d30efcf0ab5f1cb845a0a => $F444052f6fa1f23fa68ffcaea6bde218) {
                            if (cD89785224751cCa8017139Daf9E891E::bc358DB57d4903bFDdF6652560FAE708($b10d12e0226d30efcf0ab5f1cb845a0a, $E4e8dc642ae3bbc84730dc5ef74fd8d6["bouquet"])) {
                                $output["js"][] = array("id" => $F444052f6fa1f23fa68ffcaea6bde218["id"], "title" => $F444052f6fa1f23fa68ffcaea6bde218["category_name"], "modified" => '', "number" => $F413fb4a34e3e65ab00d750206ac1bc3++, "alias" => mb_strtolower($F444052f6fa1f23fa68ffcaea6bde218["category_name"]), "censored" => stristr($F444052f6fa1f23fa68ffcaea6bde218["category_name"], "adults") ? 1 : 0);
                                goto f3f57ecc207b50f1443f6f5ac5f34fd5;
                            }
                            f3f57ecc207b50f1443f6f5ac5f34fd5:
                        }
                        die(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                }
                E8da1b21c6e4c7da825d9cd0d097f431:
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "remote_pvr":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "start_record_on_stb":
                        die(json_encode(array("js" => true)));
                    case "stop_record_on_stb":
                        die(json_encode(array("js" => true)));
                    case "get_active_recordings":
                        die(json_encode(array("js" => array())));
                }
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "media_favorites":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_all":
                        die(json_encode(array("js" => '')));
                }
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "tvreminder":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_all_active":
                        die(json_encode(array("js" => array())));
                }
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "vod":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "set_claim":
                        if (!(!empty(a78Bf8d35765be2408C50712cE7a43ad::$request["id"]) && !empty(A78Bf8d35765Be2408C50712CE7A43aD::$request["real_type"]))) {
                            goto Efd67095e4927cd2d8314c269eabacc2;
                        }
                        $b3c28ce8f38cc88b3954fadda9ca6553 = intval(A78Bf8d35765be2408C50712ce7a43ad::$request["id"]);
                        $efcae6886919c2c7cc23cdd89cd7c056 = a78BF8d35765be2408c50712CE7a43AD::$request["real_type"];
                        $e309bb80a71b96ca2c0ff856446be219 = date("Y-m-d H:i:s");
                        $ipTV_db->query("INSERT INTO `mag_claims` (`stream_id`,`mag_id`,`real_type`,`date`) VALUES('%d','%d','%s','%s')", $b3c28ce8f38cc88b3954fadda9ca6553, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"], $efcae6886919c2c7cc23cdd89cd7c056, $e309bb80a71b96ca2c0ff856446be219);
                        Efd67095e4927cd2d8314c269eabacc2:
                        echo json_encode(array("js" => true));
                        die;
                    case "set_not_ended":
                        die(json_encode(array("js" => true)));
                    case "del_link":
                        die(json_encode(array("js" => true)));
                    case "set_fav":
                        if (empty($_REQUEST["video_id"])) {
                            goto D4fa1c9f3b77c7d2b85cfa7a2cd13501;
                        }
                        $f40e5c22ccecc0f85b94fa5eb4f609ef = intval($_REQUEST["video_id"]);
                        if (in_array($f40e5c22ccecc0f85b94fa5eb4f609ef, $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["movie"])) {
                            goto C7836a3ad60b16c3e29ade2ce95c8e05;
                        }
                        $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["movie"][] = $f40e5c22ccecc0f85b94fa5eb4f609ef;
                        C7836a3ad60b16c3e29ade2ce95c8e05:
                        $ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        D4fa1c9f3b77c7d2b85cfa7a2cd13501:
                        die(json_encode(array("js" => true)));
                    case "del_fav":
                        if (empty($_REQUEST["video_id"])) {
                            die(json_encode(array("js" => true)));
                        }
                        $f40e5c22ccecc0f85b94fa5eb4f609ef = intval($_REQUEST["video_id"]);
                        foreach ($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["movie"] as $E7cca48cfca85fc445419a32d7d8f973 => $C5805ed257c09a3079ad7fa87c6d5bb2) {
                            if (!($C5805ed257c09a3079ad7fa87c6d5bb2 == $f40e5c22ccecc0f85b94fa5eb4f609ef)) {
                            }
                            unset($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["movie"][$E7cca48cfca85fc445419a32d7d8f973]);
                            goto bceb0f86fcd4f8f3a8f1a0ede4463b34;
                        }
                        bceb0f86fcd4f8f3a8f1a0ede4463b34:
                        $ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        goto Dac4f8484f2fdf107c10f7705ebe4cd0;
                    case "get_categories":
                        $output = array();
                        $output["js"] = array();
                        $bf8123e7819ab3cf51f138a1f50b5826 = b303f4b9bCFA8d2FFC2aE41c5d2Aa387("movie");
                        $F88f39f6dd753f755da2ba80e581e1fb = array_column($a8df9f055e91a1e9240230b69af85555["channels"], "category_id");
                        if (!(A78bF8d35765Be2408C50712ce7a43Ad::$settings["show_all_category_mag"] == 1)) {
                            goto f4af41ff6e824cc89feb20123cf04d5d;
                        }
                        $output["js"][] = array("id" => "*", "title" => "All", "alias" => "*", "censored" => 0);
                        f4af41ff6e824cc89feb20123cf04d5d:
                        foreach ($bf8123e7819ab3cf51f138a1f50b5826 as $B51a7e937f03bda1f1e77ebf1bb5a96e => $f539cddc66ac9616d9c856aecf6efb62) {
                            if (cd89785224751CCA8017139dAf9E891e::BC358Db57d4903BfDdF6652560fAe708($B51a7e937f03bda1f1e77ebf1bb5a96e, $E4e8dc642ae3bbc84730dc5ef74fd8d6["bouquet"])) {
                                $output["js"][] = array("id" => $f539cddc66ac9616d9c856aecf6efb62["id"], "title" => $f539cddc66ac9616d9c856aecf6efb62["category_name"], "alias" => $f539cddc66ac9616d9c856aecf6efb62["category_name"], "censored" => stristr($f539cddc66ac9616d9c856aecf6efb62["category_name"], "adults") ? 1 : 0);
                                goto E568da78cc50c34e4bb511c62559bfca;
                            }
                            E568da78cc50c34e4bb511c62559bfca:
                        }
                        die(json_encode($output));
                    case "get_genres_by_category_alias":
                        $output = array();
                        $output["js"][] = array("id" => "*", "title" => "*");
                        die(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                    case "get_years":
                        die(json_encode($ab89a8139ba29c2512fec1f508f96810["get_years"]));
                    case "get_ordered_list":
                        $d623cb8e6629e10f288da34e620b78b9 = !empty(a78bf8d35765BE2408c50712CE7A43ad::$request["category"]) && is_numeric(A78BF8D35765BE2408C50712cE7A43ad::$request["category"]) ? A78bF8d35765Be2408C50712ce7A43aD::$request["category"] : null;
                        $B3703321da72313bacab05a2780df82e = !empty($_REQUEST["fav"]) ? 1 : null;
                        $a89c4f9c310eccb6c695b9ddbb4f698b = !empty($_REQUEST["sortby"]) ? $_REQUEST["sortby"] : "added";
                        $Afd5f79d62d4622597818545a5cf00d1 = !empty($_REQUEST["search"]) ? $_REQUEST["search"] : null;
                        $c15ec50152cce77fa3e1f8d41d4792db = array();
                        $c15ec50152cce77fa3e1f8d41d4792db["abc"] = !empty(A78Bf8D35765Be2408c50712CE7a43Ad::$request["abc"]) ? A78BF8d35765bE2408C50712cE7A43aD::$request["abc"] : "*";
                        $c15ec50152cce77fa3e1f8d41d4792db["genre"] = !empty(A78bF8d35765BE2408c50712Ce7A43ad::$request["genre"]) ? a78bf8D35765Be2408c50712ce7a43ad::$request["genre"] : "*";
                        $c15ec50152cce77fa3e1f8d41d4792db["years"] = !empty(A78bF8d35765BE2408C50712Ce7a43ad::$request["years"]) ? a78bf8d35765be2408c50712cE7A43Ad::$request["years"] : "*";
                        die(a4977163C2c5a8cc74F19596F616Aeee($d623cb8e6629e10f288da34e620b78b9, $B3703321da72313bacab05a2780df82e, $a89c4f9c310eccb6c695b9ddbb4f698b, $Afd5f79d62d4622597818545a5cf00d1, $c15ec50152cce77fa3e1f8d41d4792db));
                    case "create_link":
                        $bad7a63b7a82143384411c956ca1302b = a78bF8D35765bE2408c50712Ce7A43AD::$request["cmd"];
                        $deff942ee62f1e5c2c16d11aee464729 = !empty(a78bF8D35765Be2408c50712cE7a43AD::$request["series"]) ? (int) a78BF8D35765be2408c50712Ce7A43ad::$request["series"] : 0;
                        $error = '';
                        if (!stristr($bad7a63b7a82143384411c956ca1302b, "/media/")) {
                            $bad7a63b7a82143384411c956ca1302b = json_decode(base64_decode($bad7a63b7a82143384411c956ca1302b), true);
                            goto b2bef7597f1026fad6ab69eafd99fe6d;
                        }
                        $bad7a63b7a82143384411c956ca1302b = array("series_data" => $bad7a63b7a82143384411c956ca1302b, "type" => "series");
                        b2bef7597f1026fad6ab69eafd99fe6d:
                        $Cd2953f76721ad9589ab3d88c42b62b9 = a78bF8d35765be2408c50712CE7a43Ad::e5182E3afa58ac7Ec5d69d56b28819cD();
                        switch ($bad7a63b7a82143384411c956ca1302b["type"]) {
                            case "movie":
                                if (!empty($bad7a63b7a82143384411c956ca1302b["stream_source"])) {
                                    $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . json_decode($bad7a63b7a82143384411c956ca1302b["stream_source"], true)[0];
                                    goto C4abfa4ea916a138566e90672cbbf952;
                                }
                                $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . a78bF8d35765be2408c50712ce7a43AD::$StreamingServers[SERVER_ID]["site_url"] . "{$bad7a63b7a82143384411c956ca1302b["type"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$bad7a63b7a82143384411c956ca1302b["stream_id"]}." . dC53AE228Df72d4c140fDA7fd5e7E0be($bad7a63b7a82143384411c956ca1302b["target_container"], true) . "?play_token=" . $Cd2953f76721ad9589ab3d88c42b62b9;
                                C4abfa4ea916a138566e90672cbbf952:
                                goto d466d48dfd010d649d5007f74cf52f94;
                            case "series":
                                if (empty($bad7a63b7a82143384411c956ca1302b["series_data"])) {
                                    goto e8f958ab10816fb1d72076df9120101b;
                                }
                                list($bad7a63b7a82143384411c956ca1302b["series_id"], $bad7a63b7a82143384411c956ca1302b["season_num"]) = explode(":", basename($bad7a63b7a82143384411c956ca1302b["series_data"], ".mpg"));
                                e8f958ab10816fb1d72076df9120101b:
                                $ipTV_db->query("SELECT t1.stream_id,if(t2.direct_source = 1 AND t2.redirect_stream = 0,t2.stream_source,NULL) as stream_source,t2.target_container FROM `series_episodes` t1 INNER JOIN `streams` t2 ON t2.id = t1.stream_id WHERE t1.`sort` = '%d' AND t1.`series_id` = '%d' AND t1.`season_num` = '%d' LIMIT 1", $deff942ee62f1e5c2c16d11aee464729, $bad7a63b7a82143384411c956ca1302b["series_id"], $bad7a63b7a82143384411c956ca1302b["season_num"]);
                                if ($ipTV_db->D1E5ce3B87bB868B9E6eFD39AA355A4f() > 0) {
                                    $c72d66b481d02f854f0bef67db92a547 = $ipTV_db->F1Ed191d78470660EDff4a007696Bc1f();
                                    $bad7a63b7a82143384411c956ca1302b["stream_id"] = $c72d66b481d02f854f0bef67db92a547["stream_id"];
                                    if (!empty($c72d66b481d02f854f0bef67db92a547["stream_source"])) {
                                        $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . json_decode($c72d66b481d02f854f0bef67db92a547["stream_source"], true)[0];
                                        goto A48aa25c0ab205218e204ab0d4e83b5a;
                                    }
                                    $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . A78bF8D35765BE2408c50712Ce7a43ad::$StreamingServers[SERVER_ID]["site_url"] . "{$bad7a63b7a82143384411c956ca1302b["type"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$bad7a63b7a82143384411c956ca1302b["stream_id"]}." . DC53AE228DF72D4c140fDA7fD5e7E0be($c72d66b481d02f854f0bef67db92a547["target_container"], true) . "?play_token=" . $Cd2953f76721ad9589ab3d88c42b62b9;
                                    A48aa25c0ab205218e204ab0d4e83b5a:
                                    goto e62463fc48e2fa648f25274e6ad549e3;
                                }
                                $error = "player_file_missing";
                                e62463fc48e2fa648f25274e6ad549e3:
                                goto d466d48dfd010d649d5007f74cf52f94;
                        }
                        d466d48dfd010d649d5007f74cf52f94:
                        $ipTV_db->query("UPDATE `users` SET `play_token` = '%s' WHERE `id` = '%d'", $Cd2953f76721ad9589ab3d88c42b62b9 . ":" . strtotime("+5 hours") . ":" . $bad7a63b7a82143384411c956ca1302b["stream_id"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"]);
                        $output = array("js" => array("id" => $bad7a63b7a82143384411c956ca1302b["stream_id"], "cmd" => $F809fc2dad1887c28d3b55d1feaab6f8, "load" => '', "subtitles" => array(), "error" => $error));
                        die(json_encode($output));
                    case "log":
                        die(json_encode(array("js" => 1)));
                    case "get_abc":
                        die(json_encode($ab89a8139ba29c2512fec1f508f96810["get_abc"]));
                }
                Dac4f8484f2fdf107c10f7705ebe4cd0:
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "series":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "set_claim":
                        if (!(!empty(a78BF8d35765BE2408C50712Ce7A43AD::$request["id"]) && !empty(a78BF8D35765be2408C50712cE7a43ad::$request["real_type"]))) {
                            goto d98b9a90a3f60cbb28e5dc1310548089;
                        }
                        $b3c28ce8f38cc88b3954fadda9ca6553 = intval(A78bF8d35765bE2408C50712ce7A43AD::$request["id"]);
                        $efcae6886919c2c7cc23cdd89cd7c056 = a78bf8D35765be2408c50712ce7a43aD::$request["real_type"];
                        $e309bb80a71b96ca2c0ff856446be219 = date("Y-m-d H:i:s");
                        $ipTV_db->query("INSERT INTO `mag_claims` (`stream_id`,`mag_id`,`real_type`,`date`) VALUES('%d','%d','%s','%s')", $b3c28ce8f38cc88b3954fadda9ca6553, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"], $efcae6886919c2c7cc23cdd89cd7c056, $e309bb80a71b96ca2c0ff856446be219);
                        d98b9a90a3f60cbb28e5dc1310548089:
                        echo json_encode(array("js" => true));
                        die;
                    case "set_not_ended":
                        die(json_encode(array("js" => true)));
                    case "del_link":
                        die(json_encode(array("js" => true)));
                    case "set_fav":
                        if (empty($_REQUEST["video_id"])) {
                            goto B8b447b7a45861bb82ee326ffeab5030;
                        }
                        $f40e5c22ccecc0f85b94fa5eb4f609ef = intval($_REQUEST["video_id"]);
                        if (in_array($f40e5c22ccecc0f85b94fa5eb4f609ef, $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["series"])) {
                            goto bb0c4095f8ba4cc273ec48ebee9a5f9e;
                        }
                        $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["series"][] = $f40e5c22ccecc0f85b94fa5eb4f609ef;
                        bb0c4095f8ba4cc273ec48ebee9a5f9e:
                        $ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        B8b447b7a45861bb82ee326ffeab5030:
                        die(json_encode(array("js" => true)));
                    case "del_fav":
                        if (empty($_REQUEST["video_id"])) {
                            die(json_encode(array("js" => true)));
                        }
                        $f40e5c22ccecc0f85b94fa5eb4f609ef = intval($_REQUEST["video_id"]);
                        foreach ($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["series"] as $E7cca48cfca85fc445419a32d7d8f973 => $C5805ed257c09a3079ad7fa87c6d5bb2) {
                            if (!($C5805ed257c09a3079ad7fa87c6d5bb2 == $f40e5c22ccecc0f85b94fa5eb4f609ef)) {
                            }
                            unset($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["series"][$E7cca48cfca85fc445419a32d7d8f973]);
                            goto D72bb8c2289b5525cc4c8e084de5b081;
                        }
                        D72bb8c2289b5525cc4c8e084de5b081:
                        $ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        goto F924d7a4b1600ada34e5dba7d9b06597;
                    case "get_categories":
                        $output = array();
                        $output["js"] = array();
                        $bf8123e7819ab3cf51f138a1f50b5826 = B303F4B9bCFa8d2FFC2ae41C5D2AA387("series");
                        if (!(a78bf8d35765be2408C50712CE7A43aD::$settings["show_all_category_mag"] == 1)) {
                            goto a12fe1af09bd7b6babbb0f965aeb311e;
                        }
                        $output["js"][] = array("id" => "*", "title" => "All", "alias" => "*", "censored" => 0);
                        a12fe1af09bd7b6babbb0f965aeb311e:
                        foreach ($bf8123e7819ab3cf51f138a1f50b5826 as $B51a7e937f03bda1f1e77ebf1bb5a96e => $f539cddc66ac9616d9c856aecf6efb62) {
                            $output["js"][] = array("id" => $f539cddc66ac9616d9c856aecf6efb62["id"], "title" => $f539cddc66ac9616d9c856aecf6efb62["category_name"], "alias" => $f539cddc66ac9616d9c856aecf6efb62["category_name"], "censored" => stristr($f539cddc66ac9616d9c856aecf6efb62["category_name"], "adults") ? 1 : 0);
                        }
                        die(json_encode($output));
                    case "get_genres_by_category_alias":
                        $output = array();
                        $output["js"][] = array("id" => "*", "title" => "*");
                        die(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                    case "get_years":
                        die(json_encode($ab89a8139ba29c2512fec1f508f96810["get_years"]));
                    case "get_ordered_list":
                        $d623cb8e6629e10f288da34e620b78b9 = !empty(a78Bf8d35765BE2408c50712cE7a43aD::$request["category"]) && is_numeric(a78Bf8D35765BE2408C50712CE7a43aD::$request["category"]) ? A78bF8D35765Be2408C50712Ce7A43Ad::$request["category"] : null;
                        $B3703321da72313bacab05a2780df82e = !empty($_REQUEST["fav"]) ? 1 : null;
                        $a89c4f9c310eccb6c695b9ddbb4f698b = !empty($_REQUEST["sortby"]) ? $_REQUEST["sortby"] : "added";
                        $Afd5f79d62d4622597818545a5cf00d1 = !empty($_REQUEST["search"]) ? $_REQUEST["search"] : null;
                        $F7a698ce7b4f23bcbf193a6ae14b046e = !empty($_REQUEST["movie_id"]) ? (int) $_REQUEST["movie_id"] : null;
                        $c15ec50152cce77fa3e1f8d41d4792db = array();
                        $c15ec50152cce77fa3e1f8d41d4792db["abc"] = !empty(A78bf8d35765BE2408c50712cE7A43aD::$request["abc"]) ? a78bf8D35765bE2408C50712Ce7a43ad::$request["abc"] : "*";
                        $c15ec50152cce77fa3e1f8d41d4792db["genre"] = !empty(a78Bf8D35765be2408c50712ce7A43ad::$request["genre"]) ? a78Bf8d35765BE2408c50712Ce7a43Ad::$request["genre"] : "*";
                        $c15ec50152cce77fa3e1f8d41d4792db["years"] = !empty(a78Bf8d35765be2408c50712ce7a43ad::$request["years"]) ? A78bf8D35765bE2408C50712Ce7A43ad::$request["years"] : "*";
                        die(e9967fBb02A1eBf83F92f22e140AEBF9($F7a698ce7b4f23bcbf193a6ae14b046e, $d623cb8e6629e10f288da34e620b78b9, $B3703321da72313bacab05a2780df82e, $a89c4f9c310eccb6c695b9ddbb4f698b, $Afd5f79d62d4622597818545a5cf00d1, $c15ec50152cce77fa3e1f8d41d4792db));
                    case "log":
                        die(json_encode(array("js" => 1)));
                    case "get_abc":
                        die(json_encode($ab89a8139ba29c2512fec1f508f96810["get_abc"]));
                }
                F924d7a4b1600ada34e5dba7d9b06597:
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "downloads":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "save":
                        die(json_encode(array("js" => true)));
                    case "get_all":
                        die(json_encode(array("js" => "\"\"")));
                    case "get_all":
                        die(json_encode(array("js" => true)));
                }
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "weatherco":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_current":
                        die(json_encode(array("js" => false)));
                }
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "course":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_data":
                        die(json_encode(array("js" => true)));
                }
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "account_info":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_terms_info":
                        die(json_encode(array("js" => true)));
                    case "get_payment_info":
                        die(json_encode(array("js" => true)));
                    case "get_main_info":
                        if (empty($E4e8dc642ae3bbc84730dc5ef74fd8d6["exp_date"])) {
                            $be24df3d43b7c72e96a81de919724a70 = $A22f04f5efe932bdb34320e92642825a["unlimited"];
                            goto f27bc8f7d078c0fbab390117225270ad;
                        }
                        $be24df3d43b7c72e96a81de919724a70 = date("F j, Y, g:i a", $E4e8dc642ae3bbc84730dc5ef74fd8d6["exp_date"]);
                        f27bc8f7d078c0fbab390117225270ad:
                        die(json_encode(array("js" => array("mac" => $bad0c96fedbc6eccfe927016a4dc3cd6, "phone" => $be24df3d43b7c72e96a81de919724a70))));
                    case "get_demo_video_parts":
                        die(json_encode(array("js" => true)));
                    case "get_agreement_info":
                        die(json_encode(array("js" => true)));
                }
                a8e68e14dbe3cc6f0f5f820f9700fa77:
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "radio":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_ordered_list":
                        $B3703321da72313bacab05a2780df82e = !empty($_REQUEST["fav"]) ? 1 : null;
                        $a89c4f9c310eccb6c695b9ddbb4f698b = !empty($_REQUEST["sortby"]) ? $_REQUEST["sortby"] : "added";
                        die(c22100704F3f8811F51506Fb1AB116da(null, $B3703321da72313bacab05a2780df82e, $a89c4f9c310eccb6c695b9ddbb4f698b));
                    case "get_all_fav_radio":
                        die(c22100704F3F8811f51506fb1Ab116DA(null, 1, null));
                    case "set_fav":
                        $a828b07e8eaa2884b37ec1b6ac498cbc = empty($_REQUEST["fav_radio"]) ? '' : $_REQUEST["fav_radio"];
                        $a828b07e8eaa2884b37ec1b6ac498cbc = array_filter(array_map("intval", explode(",", $a828b07e8eaa2884b37ec1b6ac498cbc)));
                        $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["radio_streams"] = $a828b07e8eaa2884b37ec1b6ac498cbc;
                        $ipTV_db->query("UPDATE `mag_devices` SET `fav_channels` = '%s' WHERE `mag_id` = '%d'", json_encode($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]), $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
                        die(json_encode(array("js" => true)));
                    case "get_fav_ids":
                        die(json_encode(array("js" => $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["radio_streams"])));
                }
                d2cc588c3497b2eee7622b3d24754f7c:
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "tv_archive":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_next_part_url":
                        if (empty(a78BF8d35765BE2408C50712Ce7A43ad::$request["id"])) {
                            goto a16d967179d9e3d7a2844cbca6bd3109;
                        }
                        $b3c28ce8f38cc88b3954fadda9ca6553 = a78Bf8d35765bE2408C50712ce7a43Ad::$request["id"];
                        $ba85d77d367dcebfcc2a3db9e83bb581 = substr($b3c28ce8f38cc88b3954fadda9ca6553, 0, strpos($b3c28ce8f38cc88b3954fadda9ca6553, "_"));
                        $e309bb80a71b96ca2c0ff856446be219 = substr($b3c28ce8f38cc88b3954fadda9ca6553, strpos($b3c28ce8f38cc88b3954fadda9ca6553, "_") + 1);
                        $ipTV_db->query("SELECT\n                                      t2.*\n                                    FROM\n                                      `streams` t1\n                                    INNER JOIN\n                                      `epg_data` t2\n                                    ON\n                                      t2.channel_id = t1.channel_id AND t2.epg_id = t1.epg_id\n                                    WHERE\n                                      t1.id = '%d'\n                                      AND t2.`start` > '%s' ORDER BY t2.start ASC limit 1;", $ba85d77d367dcebfcc2a3db9e83bb581, $e309bb80a71b96ca2c0ff856446be219);
                        if (!($ipTV_db->d1e5CE3B87bb868B9e6efd39aa355a4F() > 0)) {
                            a16d967179d9e3d7a2844cbca6bd3109:
                            die(json_encode(array("js" => false)));
                        }
                        $c72d66b481d02f854f0bef67db92a547 = $ipTV_db->f1eD191D78470660eDfF4A007696bc1f();
                        $d63483f71b465511492459c030579e0e = date("Y-m-d:H-i", strtotime($c72d66b481d02f854f0bef67db92a547["start"]));
                        $fd08711a26bab44719872c7fff1f2dfb = intval((strtotime($c72d66b481d02f854f0bef67db92a547["end"]) - strtotime($c72d66b481d02f854f0bef67db92a547["start"])) / 60);
                        $E4416ae8f96620daee43ac43f9515200 = base64_decode($c72d66b481d02f854f0bef67db92a547["title"]);
                        $e3539ad64f4d9fc6c2e465986c622369 = $C3e422ab460a153e3477de0ff483d9e7 . A78Bf8d35765BE2408C50712CE7A43aD::$StreamingServers[SERVER_ID]["site_url"] . "timeshift/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$fd08711a26bab44719872c7fff1f2dfb}/{$d63483f71b465511492459c030579e0e}/{$ba85d77d367dcebfcc2a3db9e83bb581}.ts?&osd_title={$E4416ae8f96620daee43ac43f9515200}";
                        die(json_encode(array("js" => $e3539ad64f4d9fc6c2e465986c622369)));
                    case "create_link":
                        $bad7a63b7a82143384411c956ca1302b = empty($_REQUEST["cmd"]) ? '' : $_REQUEST["cmd"];
                        list($E2b08d0d6a74fb4e054587ee7c572a9f, $ba85d77d367dcebfcc2a3db9e83bb581) = explode("_", pathinfo($bad7a63b7a82143384411c956ca1302b)["filename"]);
                        $ipTV_db->query("SELECT t2.tv_archive_server_id,t1.start,t1.end,t2.id as stream_id\n                                    FROM epg_data t1\n                                    INNER JOIN `streams` t2 ON t2.id = '%d'\n                                    WHERE t1.id = '%d' AND t2.tv_archive_server_id IS NOT NULL", $ba85d77d367dcebfcc2a3db9e83bb581, $E2b08d0d6a74fb4e054587ee7c572a9f);
                        if (!($ipTV_db->d1E5cE3B87Bb868B9e6eFD39AA355A4F() > 0)) {
                            goto Cdd115c344d963c5ce3782b4c64b12fb;
                        }
                        $c72d66b481d02f854f0bef67db92a547 = $ipTV_db->f1eD191D78470660eDff4A007696bC1F();
                        $d63483f71b465511492459c030579e0e = date("Y-m-d:H-i", strtotime($c72d66b481d02f854f0bef67db92a547["start"]));
                        $fd08711a26bab44719872c7fff1f2dfb = intval((strtotime($c72d66b481d02f854f0bef67db92a547["end"]) - strtotime($c72d66b481d02f854f0bef67db92a547["start"])) / 60);
                        $Cd2953f76721ad9589ab3d88c42b62b9 = a78bF8D35765be2408c50712Ce7a43aD::E5182E3AFA58aC7ec5D69d56B28819CD();
                        $ipTV_db->query("UPDATE `users` SET `play_token` = '%s' WHERE `id` = '%d'", $Cd2953f76721ad9589ab3d88c42b62b9 . ":" . strtotime("+5 hours") . ":" . $ba85d77d367dcebfcc2a3db9e83bb581, $E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"]);
                        $e3539ad64f4d9fc6c2e465986c622369 = $C3e422ab460a153e3477de0ff483d9e7 . a78Bf8d35765Be2408c50712CE7a43ad::$StreamingServers[SERVER_ID]["site_url"] . "timeshift/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$fd08711a26bab44719872c7fff1f2dfb}/{$d63483f71b465511492459c030579e0e}/{$c72d66b481d02f854f0bef67db92a547["stream_id"]}.ts?play_token={$Cd2953f76721ad9589ab3d88c42b62b9}";
                        $output["js"] = array("id" => 0, "cmd" => $e3539ad64f4d9fc6c2e465986c622369, "storage_id" => '', "load" => 0, "error" => '', "download_cmd" => $e3539ad64f4d9fc6c2e465986c622369, "to_file" => '');
                        die(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                    case "get_link_for_channel":
                        $output = array();
                        $A7386eca40c08bf499c3668f497f7653 = !empty($_REQUEST["ch_id"]) ? intval($_REQUEST["ch_id"]) : 0;
                        $start = date("Ymd-H");
                        $e3539ad64f4d9fc6c2e465986c622369 = $C3e422ab460a153e3477de0ff483d9e7 . A78Bf8d35765bE2408C50712Ce7a43ad::$StreamingServers[SERVER_ID]["site_url"] . "timeshifts/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/60/{$A7386eca40c08bf499c3668f497f7653}/{$start}.ts position:" . (intval(date("i")) * 60 + intval(date("s"))) . " media_len:" . (intval(date("H")) * 3600 + intval(date("i")) * 60 + intval(date("s")));
                        $output["js"] = array("id" => 0, "cmd" => $e3539ad64f4d9fc6c2e465986c622369, "storage_id" => '', "load" => 0, "error" => '');
                        die(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                    case "set_played_timeshift":
                        die(json_encode(array("js" => true)));
                    case "set_played":
                        die(json_encode(array("js" => true)));
                    case "update_played_timeshift_end_time":
                        die(json_encode(array("js" => true)));
                }
                Cdd115c344d963c5ce3782b4c64b12fb:
                goto Bdf631e6e65b5b6395ce39e535105025;
            case "epg":
                switch ($A60fc3238902ec8f309d806e5a28e0f7) {
                    case "get_week":
                        $Baee0c34e5755f1cfaa4159ea7e8702e = -16;
                        $C48e0083a9caa391609a3c645a2ec889 = 0;
                        $E42fe0abca3971a7cdea25259fa394a6 = array();
                        $D79233cfa579ef72705a7b46e93931a9 = strtotime(date("Y-m-d"));
                        Cd94960334dd6329471afcf9a386b54c:
                        if (!true) {
                            die(json_encode($E42fe0abca3971a7cdea25259fa394a6));
                        }
                        $b301ce8cde6092fd3b68a9e120668bee = $D79233cfa579ef72705a7b46e93931a9 + $Baee0c34e5755f1cfaa4159ea7e8702e * 86400;
                        $E42fe0abca3971a7cdea25259fa394a6["js"][$C48e0083a9caa391609a3c645a2ec889]["f_human"] = date("D d F", $b301ce8cde6092fd3b68a9e120668bee);
                        $E42fe0abca3971a7cdea25259fa394a6["js"][$C48e0083a9caa391609a3c645a2ec889]["f_mysql"] = date("Y-m-d", $b301ce8cde6092fd3b68a9e120668bee);
                        $E42fe0abca3971a7cdea25259fa394a6["js"][$C48e0083a9caa391609a3c645a2ec889]["today"] = $Baee0c34e5755f1cfaa4159ea7e8702e == 0 ? 1 : 0;
                        $Baee0c34e5755f1cfaa4159ea7e8702e++;
                        $C48e0083a9caa391609a3c645a2ec889++;
                        goto Cd94960334dd6329471afcf9a386b54c;
                    case "get_data_table":
                        die(json_encode(array("js" => a495131B1CF27A42fE0B0130e0ca3811()), JSON_PARTIAL_OUTPUT_ON_ERROR));
                    case "get_simple_data_table":
                        if (!(!empty($_REQUEST["ch_id"]) && !empty($_REQUEST["date"]))) {
                            die;
                        }
                        $A7386eca40c08bf499c3668f497f7653 = $_REQUEST["ch_id"];
                        $e858a910ee73be3fcdb2d830280bb7d7 = $_REQUEST["date"];
                        $Efbabdfbd20db2470efbf8a713287c36 = intval($_REQUEST["p"]);
                        $c49477c19b27e562d36d18bc56a6ba8b = 10;
                        $B720277fbc7d475b171528f01c76b143 = false;
                        $ipTV_db->query("SELECT `tv_archive_duration`,`channel_id`,`epg_id` FROM `streams` WHERE `id` = '%d' AND epg_id IS NOT NULL", $A7386eca40c08bf499c3668f497f7653);
                        $b8fec948178730cb33571f551f1c12e8 = array();
                        $e4e9636f31489a09d3147a77b368eb6b = 0;
                        $D088deb147a371571653966bc924f301 = 0;
                        if (!($ipTV_db->d1E5Ce3b87bB868b9e6eFd39aA355A4f() > 0)) {
                            goto Bf328b43cc74de88d791278f4439796c;
                        }
                        $Cb52bcec44c66c3338fb465d14935a95 = $ipTV_db->F1eD191d78470660Edff4A007696BC1f();
                        $ipTV_db->query("SELECT *,UNIX_TIMESTAMP(start) as start_timestamp,UNIX_TIMESTAMP(end) as stop_timestamp FROM `epg_data` WHERE `epg_id` = '%d' AND `channel_id` = '%s' AND `start` >= '%s' AND `start` <= '%s' ORDER BY `start` ASC", $Cb52bcec44c66c3338fb465d14935a95["epg_id"], $Cb52bcec44c66c3338fb465d14935a95["channel_id"], $e858a910ee73be3fcdb2d830280bb7d7 . " 00:00:00", $e858a910ee73be3fcdb2d830280bb7d7 . " 23:59:59");
                        if (!($ipTV_db->D1e5ce3b87BB868b9E6EfD39aa355a4F() > 0)) {
                            goto feaaab887402bbd3cbe0c382ecb1a472;
                        }
                        $b8fec948178730cb33571f551f1c12e8 = $ipTV_db->c126fD559932F625cDF6098D86C63880();
                        foreach ($b8fec948178730cb33571f551f1c12e8 as $E7cca48cfca85fc445419a32d7d8f973 => $faca5f1c4c9dec5b739d7a905876b0cd) {
                            if (!($faca5f1c4c9dec5b739d7a905876b0cd["start_timestamp"] <= time() && $faca5f1c4c9dec5b739d7a905876b0cd["stop_timestamp"] >= time())) {
                            }
                            $D088deb147a371571653966bc924f301 = $E7cca48cfca85fc445419a32d7d8f973 + 1;
                            goto F136a3882a19ff1b9093db63b2c5c037;
                        }
                        F136a3882a19ff1b9093db63b2c5c037:
                        feaaab887402bbd3cbe0c382ecb1a472:
                        Bf328b43cc74de88d791278f4439796c:
                        if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                            goto c882958b43090672ea6d66200c52ff09;
                        }
                        $B720277fbc7d475b171528f01c76b143 = true;
                        $Efbabdfbd20db2470efbf8a713287c36 = ceil($D088deb147a371571653966bc924f301 / $c49477c19b27e562d36d18bc56a6ba8b);
                        if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                            goto b0a68310b2f632519b343f2988440096;
                        }
                        $Efbabdfbd20db2470efbf8a713287c36 = 1;
                        b0a68310b2f632519b343f2988440096:
                        if (!($e858a910ee73be3fcdb2d830280bb7d7 != date("Y-m-d"))) {
                            goto dc8027bd82f8063f53215cd897ab1732;
                        }
                        $Efbabdfbd20db2470efbf8a713287c36 = 1;
                        $B720277fbc7d475b171528f01c76b143 = false;
                        dc8027bd82f8063f53215cd897ab1732:
                        c882958b43090672ea6d66200c52ff09:
                        $c81046da85315ba6f88258146eb675e8 = array_slice($b8fec948178730cb33571f551f1c12e8, 0 * $c49477c19b27e562d36d18bc56a6ba8b, $c49477c19b27e562d36d18bc56a6ba8b);
                        $d76067cf9572f7a6691c85c12faf2a29 = array();
                        $fc504d0185065e8ba8f4f217b7aba6e8 = A78Bf8d35765Be2408C50712ce7a43aD::b7A3B5fA503D2609667A9Ccb4e370bb5($f95e0a5add97031d044e07d3f4aaba72);
                        $C48e0083a9caa391609a3c645a2ec889 = 0;
                        E6a58c7ccdbd87bb9cd04c0cc76a03fb:
                        if (!($C48e0083a9caa391609a3c645a2ec889 < count($c81046da85315ba6f88258146eb675e8))) {
                            if ($B720277fbc7d475b171528f01c76b143) {
                                $a5059501c38fcd5e6e2e3af8e53670bb = $Efbabdfbd20db2470efbf8a713287c36;
                                $ca959924790f641d3f5e6f3eda4ee518 = $D088deb147a371571653966bc924f301 - 0 * $c49477c19b27e562d36d18bc56a6ba8b;
                                goto b508630dce958b65367c6d396a6e32a2;
                            }
                            $a5059501c38fcd5e6e2e3af8e53670bb = 0;
                            $ca959924790f641d3f5e6f3eda4ee518 = 0;
                            b508630dce958b65367c6d396a6e32a2:
                            $output = array();
                            $output["js"]["cur_page"] = $a5059501c38fcd5e6e2e3af8e53670bb;
                            $output["js"]["selected_item"] = $ca959924790f641d3f5e6f3eda4ee518;
                            $output["js"]["total_items"] = count($b8fec948178730cb33571f551f1c12e8);
                            $output["js"]["max_page_items"] = $c49477c19b27e562d36d18bc56a6ba8b;
                            $output["js"]["data"] = $d76067cf9572f7a6691c85c12faf2a29;
                            die(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                        }
                        $F20a3d0e0b9a0bf63a0bd3e44254eb8b = 0;
                        if (!($c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["stop_timestamp"] >= time())) {
                            goto F7dae80791a92783a140721dd05c3585;
                        }
                        $F20a3d0e0b9a0bf63a0bd3e44254eb8b = 1;
                        F7dae80791a92783a140721dd05c3585:
                        $A73d5129dfb465fd94f3e09e9b179de0 = new DateTime($c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["start"]);
                        $A73d5129dfb465fd94f3e09e9b179de0->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                        $cdd6af41b10abec2ff03fe043f3df1cf = new DateTime($c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["end"]);
                        $cdd6af41b10abec2ff03fe043f3df1cf->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["id"] = $c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["id"] . "_" . $A7386eca40c08bf499c3668f497f7653;
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["ch_id"] = $A7386eca40c08bf499c3668f497f7653;
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["time"] = $A73d5129dfb465fd94f3e09e9b179de0->format("Y-m-d H:i:s");
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["time_to"] = $cdd6af41b10abec2ff03fe043f3df1cf->format("Y-m-d H:i:s");
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["duration"] = $c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["stop_timestamp"] - $c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"];
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["name"] = base64_decode($c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["title"]);
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["descr"] = base64_decode($c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["description"]);
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["real_id"] = $A7386eca40c08bf499c3668f497f7653 . "_" . $c81046da85315ba6f88258146eb675e8[$C48e0083a9caa391609a3c645a2ec889]["start"];
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["category"] = '';
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["director"] = '';
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["actor"] = '';
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["start_timestamp"] = $A73d5129dfb465fd94f3e09e9b179de0->getTimestamp();
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["stop_timestamp"] = $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp();
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["t_time"] = $A73d5129dfb465fd94f3e09e9b179de0->format("H:i");
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["t_time_to"] = $cdd6af41b10abec2ff03fe043f3df1cf->format("H:i");
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["open"] = $F20a3d0e0b9a0bf63a0bd3e44254eb8b;
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["mark_memo"] = 0;
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["mark_rec"] = 0;
                        $d76067cf9572f7a6691c85c12faf2a29[$C48e0083a9caa391609a3c645a2ec889]["mark_archive"] = !empty($Cb52bcec44c66c3338fb465d14935a95["tv_archive_duration"]) && time() > $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp() && strtotime("-{$Cb52bcec44c66c3338fb465d14935a95["tv_archive_duration"]} days") <= $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp() ? 1 : 0;
                        $C48e0083a9caa391609a3c645a2ec889++;
                        goto E6a58c7ccdbd87bb9cd04c0cc76a03fb;
                    case "get_all_program_for_ch":
                        $output = array();
                        $output["js"] = array();
                        $A7386eca40c08bf499c3668f497f7653 = empty($_REQUEST["ch_id"]) ? 0 : intval($_REQUEST["ch_id"]);
                        $ipTV_db->query("SELECT `tv_archive_duration`,`channel_id`,`epg_id` FROM `streams` WHERE `id` = '%d' AND epg_id IS NOT NULL", $A7386eca40c08bf499c3668f497f7653);
                        if (!($ipTV_db->D1e5CE3b87Bb868b9e6EfD39aa355a4f() > 0)) {
                            goto eb7a78edfb1e4f4078867be5c705db7c;
                        }
                        $Cb52bcec44c66c3338fb465d14935a95 = $ipTV_db->f1ED191d78470660eDFF4A007696bC1F();
                        $ipTV_db->query("SELECT *,UNIX_TIMESTAMP(start) as start_timestamp,UNIX_TIMESTAMP(end) as stop_timestamp FROM `epg_data` WHERE `epg_id` = '%d' AND `channel_id` = '%s' AND `start` >= '%s' ORDER BY `start` ASC", $Cb52bcec44c66c3338fb465d14935a95["epg_id"], $Cb52bcec44c66c3338fb465d14935a95["channel_id"], date("Y-m-d 00:00:00"));
                        if (!($ipTV_db->D1e5Ce3b87bB868b9e6EFd39aA355a4f() > 0)) {
                            goto c5a347fd5a4674001e1109a1ee311790;
                        }
                        $fc504d0185065e8ba8f4f217b7aba6e8 = a78Bf8D35765bE2408c50712cE7A43ad::B7A3b5FA503D2609667A9CCB4e370BB5($f95e0a5add97031d044e07d3f4aaba72);
                        foreach ($ipTV_db->c126fD559932F625cdf6098d86c63880() as $c72d66b481d02f854f0bef67db92a547) {
                            $A73d5129dfb465fd94f3e09e9b179de0 = new DateTime($c72d66b481d02f854f0bef67db92a547["start"]);
                            $A73d5129dfb465fd94f3e09e9b179de0->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                            $cdd6af41b10abec2ff03fe043f3df1cf = new DateTime($c72d66b481d02f854f0bef67db92a547["end"]);
                            $cdd6af41b10abec2ff03fe043f3df1cf->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                            $output["js"][] = array("start_timestamp" => $A73d5129dfb465fd94f3e09e9b179de0->getTimestamp(), "stop_timestamp" => $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp(), "name" => base64_decode($c72d66b481d02f854f0bef67db92a547["title"]));
                        }
                        c5a347fd5a4674001e1109a1ee311790:
                        eb7a78edfb1e4f4078867be5c705db7c:
                        die(json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR));
                }
                E4679d1146cee00aa4ec2f8f79098999:
                goto Bdf631e6e65b5b6395ce39e535105025;
        }
        Bdf631e6e65b5b6395ce39e535105025:
        function a4977163c2c5a8CC74F19596F616AEeE($Fe9028a70727ba5f6b7129f9352b020c = null, $B3703321da72313bacab05a2780df82e = null, $ac85ad47d31a0b7f8a0379f91cfc10f4 = null, $a06f7bfbee524373fb837e654c47359d = null, $c15ec50152cce77fa3e1f8d41d4792db = array())
        {
            global $E4e8dc642ae3bbc84730dc5ef74fd8d6, $C3e422ab460a153e3477de0ff483d9e7, $A22f04f5efe932bdb34320e92642825a;
            $Efbabdfbd20db2470efbf8a713287c36 = !empty(a78Bf8D35765Be2408c50712ce7a43Ad::$request["p"]) ? a78BF8d35765bE2408c50712ce7A43ad::$request["p"] : 0;
            $c49477c19b27e562d36d18bc56a6ba8b = 14;
            $B720277fbc7d475b171528f01c76b143 = false;
            $D465fc5085f41251c6fa7c77b8333b0f = c10Fd9F04D9C5BAF2F685664A4Da5E9A($E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"], array("movie"), $Fe9028a70727ba5f6b7129f9352b020c, $B3703321da72313bacab05a2780df82e, $ac85ad47d31a0b7f8a0379f91cfc10f4, $a06f7bfbee524373fb837e654c47359d, $c15ec50152cce77fa3e1f8d41d4792db);
            $A029b77634bf5f67a52c7d5b31aed706 = count($D465fc5085f41251c6fa7c77b8333b0f["streams"]);
            $D088deb147a371571653966bc924f301 = 0;
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto b46ffedba48b57e8a2ad962f570be194;
            }
            $B720277fbc7d475b171528f01c76b143 = true;
            $Efbabdfbd20db2470efbf8a713287c36 = ceil($D088deb147a371571653966bc924f301 / $c49477c19b27e562d36d18bc56a6ba8b);
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto F0e74f2ed4d2546cfa992b3a46021bff;
            }
            $Efbabdfbd20db2470efbf8a713287c36 = 1;
            F0e74f2ed4d2546cfa992b3a46021bff:
            b46ffedba48b57e8a2ad962f570be194:
            $D465fc5085f41251c6fa7c77b8333b0f = array_slice($D465fc5085f41251c6fa7c77b8333b0f["streams"], 0 * $c49477c19b27e562d36d18bc56a6ba8b, $c49477c19b27e562d36d18bc56a6ba8b);
            $D0b48d0a5773acd261b061496a380231 = array();
            foreach ($D465fc5085f41251c6fa7c77b8333b0f as $b7c504f559ac034e87cb43d0e37e3a75) {
                if (!(!is_null($B3703321da72313bacab05a2780df82e) && $B3703321da72313bacab05a2780df82e == 1)) {
                    goto d37842e3e32745491246221e12fb3753;
                }
                if (in_array($b7c504f559ac034e87cb43d0e37e3a75["id"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["movie"])) {
                    d37842e3e32745491246221e12fb3753:
                    $movie_properties = a78bF8D35765bE2408C50712CE7a43AD::cAdeb9125b2E81B183688842C5AC3ad7($b7c504f559ac034e87cb43d0e37e3a75["id"]);
                    $a9e3b114a3c003a754cbc0f56c02d468 = array("type" => "movie", "stream_id" => $b7c504f559ac034e87cb43d0e37e3a75["id"], "stream_source" => $b7c504f559ac034e87cb43d0e37e3a75["stream_source"], "target_container" => $b7c504f559ac034e87cb43d0e37e3a75["target_container"]);
                    $B59151d85f274ca985dc4d70be11dfc2 = date("m");
                    $Ebc8eb6db758ae15cc58eaf554c34860 = date("d");
                    $C60437cfc485aff3cca4e18e5e9c79cc = date("Y");
                    if ($b7c504f559ac034e87cb43d0e37e3a75["added"] > mktime(0, 0, 0, $B59151d85f274ca985dc4d70be11dfc2, $Ebc8eb6db758ae15cc58eaf554c34860, $C60437cfc485aff3cca4e18e5e9c79cc)) {
                        $Af9e1f0f55679a31aacca521a9413b32 = "today";
                        $bdc1336bc6a87307f9e50c2a74537914 = $A22f04f5efe932bdb34320e92642825a["today"];
                        goto f65ee49db615e7c0c8051bfb670dd3a9;
                    }
                    if ($b7c504f559ac034e87cb43d0e37e3a75["added"] > mktime(0, 0, 0, $B59151d85f274ca985dc4d70be11dfc2, $Ebc8eb6db758ae15cc58eaf554c34860 - 1, $C60437cfc485aff3cca4e18e5e9c79cc)) {
                        $Af9e1f0f55679a31aacca521a9413b32 = "yesterday";
                        $bdc1336bc6a87307f9e50c2a74537914 = $A22f04f5efe932bdb34320e92642825a["yesterday"];
                        goto f65ee49db615e7c0c8051bfb670dd3a9;
                    }
                    if ($b7c504f559ac034e87cb43d0e37e3a75["added"] > mktime(0, 0, 0, $B59151d85f274ca985dc4d70be11dfc2, $Ebc8eb6db758ae15cc58eaf554c34860 - 7, $C60437cfc485aff3cca4e18e5e9c79cc)) {
                        $Af9e1f0f55679a31aacca521a9413b32 = "week_and_more";
                        $bdc1336bc6a87307f9e50c2a74537914 = $A22f04f5efe932bdb34320e92642825a["last_week"];
                        goto B7e9f1f14a4bfb2acc136c9aaf511a95;
                    }
                    $Af9e1f0f55679a31aacca521a9413b32 = "week_and_more";
                    $bdc1336bc6a87307f9e50c2a74537914 = date("F", $b7c504f559ac034e87cb43d0e37e3a75["added"]) . " " . date("Y", $b7c504f559ac034e87cb43d0e37e3a75["added"]);
                    B7e9f1f14a4bfb2acc136c9aaf511a95:
                    f65ee49db615e7c0c8051bfb670dd3a9:
                    $fd08711a26bab44719872c7fff1f2dfb = isset($movie_properties["duration_secs"]) ? $movie_properties["duration_secs"] : 60;
                    $D0b48d0a5773acd261b061496a380231[] = array("id" => $b7c504f559ac034e87cb43d0e37e3a75["id"], "owner" => '', "name" => $b7c504f559ac034e87cb43d0e37e3a75["stream_display_name"], "old_name" => '', "o_name" => $b7c504f559ac034e87cb43d0e37e3a75["stream_display_name"], "fname" => '', "description" => empty($movie_properties["plot"]) ? "N/A" : $movie_properties["plot"], "pic" => '', "cost" => 0, "time" => intval($fd08711a26bab44719872c7fff1f2dfb / 60), "file" => '', "path" => str_replace(" ", "_", $b7c504f559ac034e87cb43d0e37e3a75["stream_display_name"]), "protocol" => '', "rtsp_url" => '', "censored" => $b7c504f559ac034e87cb43d0e37e3a75["is_adult"], "series" => array(), "volume_correction" => 0, "category_id" => $b7c504f559ac034e87cb43d0e37e3a75["category_id"], "genre_id" => 0, "genre_id_1" => 0, "genre_id_2" => 0, "genre_id_3" => 0, "hd" => 1, "genre_id_4" => 0, "cat_genre_id_1" => $b7c504f559ac034e87cb43d0e37e3a75["category_id"], "cat_genre_id_2" => 0, "cat_genre_id_3" => 0, "cat_genre_id_4" => 0, "director" => empty($movie_properties["director"]) ? "N/A" : $movie_properties["director"], "actors" => empty($movie_properties["cast"]) ? "N/A" : $movie_properties["cast"], "year" => empty($movie_properties["releasedate"]) ? "N/A" : $movie_properties["releasedate"], "accessed" => 1, "status" => 1, "disable_for_hd_devices" => 0, "added" => date("Y-m-d H:i:s", $b7c504f559ac034e87cb43d0e37e3a75["added"]), "count" => 0, "count_first_0_5" => 0, "count_second_0_5" => 0, "vote_sound_good" => 0, "vote_sound_bad" => 0, "vote_video_good" => 0, "vote_video_bad" => 0, "rate" => '', "last_rate_update" => '', "last_played" => '', "for_sd_stb" => 0, "rating_imdb" => empty($movie_properties["rating"]) ? "N/A" : $movie_properties["rating"], "rating_count_imdb" => '', "rating_last_update" => "0000-00-00 00:00:00", "age" => "12+", "high_quality" => 0, "rating_kinopoisk" => empty($movie_properties["rating"]) ? "N/A" : $movie_properties["rating"], "comments" => '', "low_quality" => 0, "is_series" => 0, "year_end" => 0, "autocomplete_provider" => "imdb", "screenshots" => '', "is_movie" => 1, "lock" => $b7c504f559ac034e87cb43d0e37e3a75["is_adult"], "fav" => in_array($b7c504f559ac034e87cb43d0e37e3a75["id"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["movie"]) ? 1 : 0, "for_rent" => 0, "screenshot_uri" => empty($movie_properties["movie_image"]) ? '' : $movie_properties["movie_image"], "genres_str" => empty($movie_properties["genre"]) ? "N/A" : $movie_properties["genre"], "cmd" => base64_encode(json_encode($a9e3b114a3c003a754cbc0f56c02d468, JSON_PARTIAL_OUTPUT_ON_ERROR)), $Af9e1f0f55679a31aacca521a9413b32 => $bdc1336bc6a87307f9e50c2a74537914, "has_files" => 0);
                    goto Edc7f0701578ae0aa38ee8b44bb7c477;
                }
                --$A029b77634bf5f67a52c7d5b31aed706;
                Edc7f0701578ae0aa38ee8b44bb7c477:
            }
            if ($B720277fbc7d475b171528f01c76b143) {
                $a5059501c38fcd5e6e2e3af8e53670bb = $Efbabdfbd20db2470efbf8a713287c36;
                $ca959924790f641d3f5e6f3eda4ee518 = $D088deb147a371571653966bc924f301 - ($Efbabdfbd20db2470efbf8a713287c36 - 1) * $c49477c19b27e562d36d18bc56a6ba8b;
                goto Dd783506aab188abe5d2065ddb692920;
            }
            $a5059501c38fcd5e6e2e3af8e53670bb = 0;
            $ca959924790f641d3f5e6f3eda4ee518 = 0;
            Dd783506aab188abe5d2065ddb692920:
            $output = array("js" => array("total_items" => $A029b77634bf5f67a52c7d5b31aed706, "max_page_items" => $c49477c19b27e562d36d18bc56a6ba8b, "selected_item" => $ca959924790f641d3f5e6f3eda4ee518, "cur_page" => $a5059501c38fcd5e6e2e3af8e53670bb, "data" => $D0b48d0a5773acd261b061496a380231));
            return json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
        }
        function EfbbCCe59aAbcEb0b973f0Ba1a94d948($acb1d10773fb0d1b6ac8cf2c16ecf1b5, $B3703321da72313bacab05a2780df82e = null, $ac85ad47d31a0b7f8a0379f91cfc10f4 = null, $a06f7bfbee524373fb837e654c47359d = null, $c15ec50152cce77fa3e1f8d41d4792db = array())
        {
            global $ipTV_db;
            $ipTV_db->query("SELECT * FROM `series_episodes` t1 INNER JOIN `streams` t2 ON t2.id=t1.stream_id WHERE t1.series_id = '%d' ORDER BY t1.season_num DESC, t1.sort ASC", $acb1d10773fb0d1b6ac8cf2c16ecf1b5);
            $cc69dbb0749cadc4d6c0543ba360c09d = $ipTV_db->C126Fd559932f625CDf6098d86c63880(true, "season_num", false);
            return $cc69dbb0749cadc4d6c0543ba360c09d;
        }
        function e9967FbB02A1eBF83f92f22E140aEBf9($F7a698ce7b4f23bcbf193a6ae14b046e = null, $Fe9028a70727ba5f6b7129f9352b020c = null, $B3703321da72313bacab05a2780df82e = null, $ac85ad47d31a0b7f8a0379f91cfc10f4 = null, $a06f7bfbee524373fb837e654c47359d = null, $c15ec50152cce77fa3e1f8d41d4792db = array())
        {
            global $E4e8dc642ae3bbc84730dc5ef74fd8d6, $C3e422ab460a153e3477de0ff483d9e7, $A22f04f5efe932bdb34320e92642825a, $ipTV_db;
            $Efbabdfbd20db2470efbf8a713287c36 = !empty(a78bF8D35765BE2408c50712ce7a43AD::$request["p"]) ? A78BF8D35765BE2408C50712Ce7A43AD::$request["p"] : 0;
            $c49477c19b27e562d36d18bc56a6ba8b = 14;
            $B720277fbc7d475b171528f01c76b143 = false;
            if (empty($F7a698ce7b4f23bcbf193a6ae14b046e)) {
                $Fc0cf310dd1b2294ab167a0658937ab5 = eA44215481573d77C59D844454c19797($E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"], $Fe9028a70727ba5f6b7129f9352b020c, $B3703321da72313bacab05a2780df82e, $ac85ad47d31a0b7f8a0379f91cfc10f4, $a06f7bfbee524373fb837e654c47359d, $c15ec50152cce77fa3e1f8d41d4792db);
                goto c70567f672be539be7e2801de05679e7;
            }
            $Fc0cf310dd1b2294ab167a0658937ab5 = eFBbCCe59AaBcEb0b973F0Ba1A94D948($F7a698ce7b4f23bcbf193a6ae14b046e, $B3703321da72313bacab05a2780df82e, $ac85ad47d31a0b7f8a0379f91cfc10f4, $a06f7bfbee524373fb837e654c47359d, $c15ec50152cce77fa3e1f8d41d4792db);
            $ipTV_db->query("SELECT * FROM `series` WHERE `id` = '%d'", $F7a698ce7b4f23bcbf193a6ae14b046e);
            $A0766c7ec9b7cbc336d730454514b34f = $ipTV_db->F1eD191d78470660EdFF4A007696bc1F();
            c70567f672be539be7e2801de05679e7:
            $A029b77634bf5f67a52c7d5b31aed706 = count($Fc0cf310dd1b2294ab167a0658937ab5);
            $D088deb147a371571653966bc924f301 = 0;
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto A077bf5c0c2bf75474a785c2f5a252f8;
            }
            $B720277fbc7d475b171528f01c76b143 = true;
            $Efbabdfbd20db2470efbf8a713287c36 = ceil($D088deb147a371571653966bc924f301 / $c49477c19b27e562d36d18bc56a6ba8b);
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto C377be6ab7712aaa603fd99303f3964e;
            }
            $Efbabdfbd20db2470efbf8a713287c36 = 1;
            C377be6ab7712aaa603fd99303f3964e:
            A077bf5c0c2bf75474a785c2f5a252f8:
            $Fc0cf310dd1b2294ab167a0658937ab5 = array_slice($Fc0cf310dd1b2294ab167a0658937ab5, 0 * $c49477c19b27e562d36d18bc56a6ba8b, $c49477c19b27e562d36d18bc56a6ba8b, true);
            $D0b48d0a5773acd261b061496a380231 = array();
            foreach ($Fc0cf310dd1b2294ab167a0658937ab5 as $E7cca48cfca85fc445419a32d7d8f973 => $b7c504f559ac034e87cb43d0e37e3a75) {
                if (!(!is_null($B3703321da72313bacab05a2780df82e) && $B3703321da72313bacab05a2780df82e == 1 && empty($F7a698ce7b4f23bcbf193a6ae14b046e))) {
                    goto eab9259ff4cb3201303de06b9d945152;
                }
                if (in_array($b7c504f559ac034e87cb43d0e37e3a75["id"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["series"])) {
                    eab9259ff4cb3201303de06b9d945152:
                    if (!empty($A0766c7ec9b7cbc336d730454514b34f)) {
                        $d66f371f212188b56889e732be18574e = $A0766c7ec9b7cbc336d730454514b34f;
                        $Bb2aa338b4f24748194863e13511a725 = 0;
                        foreach ($b7c504f559ac034e87cb43d0e37e3a75 as $Eb16297b6431c4849004e993b69db954) {
                            if (!($Eb16297b6431c4849004e993b69db954["added"] > $Bb2aa338b4f24748194863e13511a725)) {
                                goto D4ae5a4dd1be4a70fae4ae7de1b66e3f;
                            }
                            $Bb2aa338b4f24748194863e13511a725 = $Eb16297b6431c4849004e993b69db954["added"];
                            D4ae5a4dd1be4a70fae4ae7de1b66e3f:
                        }
                        goto a84861a8bfd663161990a8c60ed34d13;
                    }
                    $d66f371f212188b56889e732be18574e = $b7c504f559ac034e87cb43d0e37e3a75;
                    $Bb2aa338b4f24748194863e13511a725 = $b7c504f559ac034e87cb43d0e37e3a75["last_modified"];
                    a84861a8bfd663161990a8c60ed34d13:
                    $a9e3b114a3c003a754cbc0f56c02d468 = array("type" => "series", "series_id" => $F7a698ce7b4f23bcbf193a6ae14b046e, "season_num" => $E7cca48cfca85fc445419a32d7d8f973);
                    $B59151d85f274ca985dc4d70be11dfc2 = date("m");
                    $Ebc8eb6db758ae15cc58eaf554c34860 = date("d");
                    $C60437cfc485aff3cca4e18e5e9c79cc = date("Y");
                    if ($Bb2aa338b4f24748194863e13511a725 > mktime(0, 0, 0, $B59151d85f274ca985dc4d70be11dfc2, $Ebc8eb6db758ae15cc58eaf554c34860, $C60437cfc485aff3cca4e18e5e9c79cc)) {
                        $Af9e1f0f55679a31aacca521a9413b32 = "today";
                        $bdc1336bc6a87307f9e50c2a74537914 = $A22f04f5efe932bdb34320e92642825a["today"];
                        goto fdd5c4249c9c2fdec3d844f7f6dc7937;
                    }
                    if ($Bb2aa338b4f24748194863e13511a725 > mktime(0, 0, 0, $B59151d85f274ca985dc4d70be11dfc2, $Ebc8eb6db758ae15cc58eaf554c34860 - 1, $C60437cfc485aff3cca4e18e5e9c79cc)) {
                        $Af9e1f0f55679a31aacca521a9413b32 = "yesterday";
                        $bdc1336bc6a87307f9e50c2a74537914 = $A22f04f5efe932bdb34320e92642825a["yesterday"];
                        goto fdd5c4249c9c2fdec3d844f7f6dc7937;
                    }
                    if ($Bb2aa338b4f24748194863e13511a725 > mktime(0, 0, 0, $B59151d85f274ca985dc4d70be11dfc2, $Ebc8eb6db758ae15cc58eaf554c34860 - 7, $C60437cfc485aff3cca4e18e5e9c79cc)) {
                        $Af9e1f0f55679a31aacca521a9413b32 = "week_and_more";
                        $bdc1336bc6a87307f9e50c2a74537914 = $A22f04f5efe932bdb34320e92642825a["last_week"];
                        goto f1dae4731b1f467b694b1f1883c8b231;
                    }
                    $Af9e1f0f55679a31aacca521a9413b32 = "week_and_more";
                    $bdc1336bc6a87307f9e50c2a74537914 = date("F", $Bb2aa338b4f24748194863e13511a725) . " " . date("Y", $Bb2aa338b4f24748194863e13511a725);
                    f1dae4731b1f467b694b1f1883c8b231:
                    fdd5c4249c9c2fdec3d844f7f6dc7937:
                    if (!empty($A0766c7ec9b7cbc336d730454514b34f)) {
                        if ($E7cca48cfca85fc445419a32d7d8f973 == 0) {
                            $E4416ae8f96620daee43ac43f9515200 = $A22f04f5efe932bdb34320e92642825a["specials"];
                            goto d4000bb21bc7f19d2c0819b56a4855b2;
                        }
                        $E4416ae8f96620daee43ac43f9515200 = $A22f04f5efe932bdb34320e92642825a["season"] . " " . $E7cca48cfca85fc445419a32d7d8f973;
                        d4000bb21bc7f19d2c0819b56a4855b2:
                        goto F0c35b5a9ee174c8dc7019c4449c6c51;
                    }
                    $E4416ae8f96620daee43ac43f9515200 = $b7c504f559ac034e87cb43d0e37e3a75["title"];
                    F0c35b5a9ee174c8dc7019c4449c6c51:
                    $D0b48d0a5773acd261b061496a380231[] = array("id" => empty($F7a698ce7b4f23bcbf193a6ae14b046e) ? $d66f371f212188b56889e732be18574e["id"] : $d66f371f212188b56889e732be18574e["id"] . ":" . $E7cca48cfca85fc445419a32d7d8f973, "owner" => '', "name" => $E4416ae8f96620daee43ac43f9515200, "old_name" => '', "o_name" => $E4416ae8f96620daee43ac43f9515200, "fname" => '', "description" => empty($d66f371f212188b56889e732be18574e["plot"]) ? "N/A" : $d66f371f212188b56889e732be18574e["plot"], "pic" => '', "cost" => 0, "time" => "N/a", "file" => '', "path" => str_replace(" ", "_", $d66f371f212188b56889e732be18574e["title"]), "protocol" => '', "rtsp_url" => '', "censored" => 0, "series" => !empty($A0766c7ec9b7cbc336d730454514b34f) ? range(1, count($b7c504f559ac034e87cb43d0e37e3a75)) : array(), "volume_correction" => 0, "category_id" => $d66f371f212188b56889e732be18574e["category_id"], "genre_id" => 0, "genre_id_1" => 0, "genre_id_2" => 0, "genre_id_3" => 0, "hd" => 1, "genre_id_4" => 0, "cat_genre_id_1" => $d66f371f212188b56889e732be18574e["category_id"], "cat_genre_id_2" => 0, "cat_genre_id_3" => 0, "cat_genre_id_4" => 0, "director" => empty($d66f371f212188b56889e732be18574e["director"]) ? "N/A" : $d66f371f212188b56889e732be18574e["director"], "actors" => empty($d66f371f212188b56889e732be18574e["cast"]) ? "N/A" : $d66f371f212188b56889e732be18574e["cast"], "year" => empty($d66f371f212188b56889e732be18574e["releaseDate"]) ? "N/A" : $d66f371f212188b56889e732be18574e["releaseDate"], "accessed" => 1, "status" => 1, "disable_for_hd_devices" => 0, "added" => date("Y-m-d H:i:s", $Bb2aa338b4f24748194863e13511a725), "count" => 0, "count_first_0_5" => 0, "count_second_0_5" => 0, "vote_sound_good" => 0, "vote_sound_bad" => 0, "vote_video_good" => 0, "vote_video_bad" => 0, "rate" => '', "last_rate_update" => '', "last_played" => '', "for_sd_stb" => 0, "rating_imdb" => empty($d66f371f212188b56889e732be18574e["rating"]) ? "N/A" : $d66f371f212188b56889e732be18574e["rating"], "rating_count_imdb" => '', "rating_last_update" => "0000-00-00 00:00:00", "age" => "12+", "high_quality" => 0, "rating_kinopoisk" => empty($d66f371f212188b56889e732be18574e["rating"]) ? "N/A" : $d66f371f212188b56889e732be18574e["rating"], "comments" => '', "low_quality" => 0, "is_series" => 1, "year_end" => 0, "autocomplete_provider" => "imdb", "screenshots" => '', "is_movie" => 1, "lock" => 0, "fav" => empty($F7a698ce7b4f23bcbf193a6ae14b046e) && in_array($d66f371f212188b56889e732be18574e["id"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["series"]) ? 1 : 0, "for_rent" => 0, "screenshot_uri" => empty($d66f371f212188b56889e732be18574e["cover"]) ? '' : $d66f371f212188b56889e732be18574e["cover"], "genres_str" => empty($d66f371f212188b56889e732be18574e["genre"]) ? "N/A" : $d66f371f212188b56889e732be18574e["genre"], "cmd" => !empty($A0766c7ec9b7cbc336d730454514b34f) ? base64_encode(json_encode($a9e3b114a3c003a754cbc0f56c02d468, JSON_PARTIAL_OUTPUT_ON_ERROR)) : '', $Af9e1f0f55679a31aacca521a9413b32 => $bdc1336bc6a87307f9e50c2a74537914, "has_files" => empty($F7a698ce7b4f23bcbf193a6ae14b046e) ? 1 : 0);
                    goto B8f26a0a8af45e9b09beb2f0fe3f5cb4;
                }
                --$A029b77634bf5f67a52c7d5b31aed706;
                B8f26a0a8af45e9b09beb2f0fe3f5cb4:
            }
            if ($B720277fbc7d475b171528f01c76b143) {
                $a5059501c38fcd5e6e2e3af8e53670bb = $Efbabdfbd20db2470efbf8a713287c36;
                $ca959924790f641d3f5e6f3eda4ee518 = $D088deb147a371571653966bc924f301 - ($Efbabdfbd20db2470efbf8a713287c36 - 1) * $c49477c19b27e562d36d18bc56a6ba8b;
                goto bb9e7dc411f42487020011a4a42dfc40;
            }
            $a5059501c38fcd5e6e2e3af8e53670bb = 0;
            $ca959924790f641d3f5e6f3eda4ee518 = 0;
            bb9e7dc411f42487020011a4a42dfc40:
            $output = array("js" => array("total_items" => $A029b77634bf5f67a52c7d5b31aed706, "max_page_items" => $c49477c19b27e562d36d18bc56a6ba8b, "selected_item" => $ca959924790f641d3f5e6f3eda4ee518, "cur_page" => $a5059501c38fcd5e6e2e3af8e53670bb, "data" => $D0b48d0a5773acd261b061496a380231));
            return json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
        }
        function EA44215481573D77c59D844454c19797($E38668abaa324e464e266fb7b7e784b1, $Fe9028a70727ba5f6b7129f9352b020c = null, $B3703321da72313bacab05a2780df82e = null, $ac85ad47d31a0b7f8a0379f91cfc10f4 = null, $a06f7bfbee524373fb837e654c47359d = null, $c15ec50152cce77fa3e1f8d41d4792db = array())
        {
            global $E4e8dc642ae3bbc84730dc5ef74fd8d6, $ipTV_db;
            $a8df9f055e91a1e9240230b69af85555 = Cd89785224751ccA8017139DaF9e891e::E5550592aA298dD1d5EE59CdcE063A12($E38668abaa324e464e266fb7b7e784b1, null, null, true);
            $deff942ee62f1e5c2c16d11aee464729 = a78bF8d35765be2408C50712cE7A43ad::dCa7aa6Db7C4CE371e41571A19Bce930();
            $Cc88d22d55f69d2409f5c72665474b50 = array();
            foreach ($deff942ee62f1e5c2c16d11aee464729 as $acb1d10773fb0d1b6ac8cf2c16ecf1b5 => $a62676726d339eb8ed6d6c13795402f9) {
                if (in_array($acb1d10773fb0d1b6ac8cf2c16ecf1b5, $a8df9f055e91a1e9240230b69af85555["series_ids"])) {
                    if (!(!empty($Fe9028a70727ba5f6b7129f9352b020c) && $a62676726d339eb8ed6d6c13795402f9["category_id"] != $Fe9028a70727ba5f6b7129f9352b020c)) {
                        if (!(!empty($a06f7bfbee524373fb837e654c47359d) && !stristr($a62676726d339eb8ed6d6c13795402f9["title"], $a06f7bfbee524373fb837e654c47359d))) {
                            if (!(!empty($c15ec50152cce77fa3e1f8d41d4792db["abc"]) && $c15ec50152cce77fa3e1f8d41d4792db["abc"] != "*" && strtoupper(substr($a62676726d339eb8ed6d6c13795402f9["title"], 0, 1)) != $c15ec50152cce77fa3e1f8d41d4792db["abc"])) {
                                if (!(!empty($c15ec50152cce77fa3e1f8d41d4792db["genre"]) && $c15ec50152cce77fa3e1f8d41d4792db["genre"] != "*" && $a62676726d339eb8ed6d6c13795402f9["category_id"] != $c15ec50152cce77fa3e1f8d41d4792db["genre"])) {
                                    if (!(!empty($c15ec50152cce77fa3e1f8d41d4792db["years"]) && $c15ec50152cce77fa3e1f8d41d4792db["years"] != "*" && $a62676726d339eb8ed6d6c13795402f9["releaseDate"] != $c15ec50152cce77fa3e1f8d41d4792db["years"])) {
                                        if (!(!empty($B3703321da72313bacab05a2780df82e) && !in_array($acb1d10773fb0d1b6ac8cf2c16ecf1b5, $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["series"]))) {
                                            $Cc88d22d55f69d2409f5c72665474b50[$acb1d10773fb0d1b6ac8cf2c16ecf1b5] = $a62676726d339eb8ed6d6c13795402f9;
                                            goto d540d201a82cbbe517b2949bcc4d6f11;
                                        }
                                        goto Ad909b30674c9c4252b70a41405d9ecb;
                                    }
                                    goto Ad909b30674c9c4252b70a41405d9ecb;
                                }
                                goto Ad909b30674c9c4252b70a41405d9ecb;
                            }
                            goto Ad909b30674c9c4252b70a41405d9ecb;
                        }
                        goto Ad909b30674c9c4252b70a41405d9ecb;
                    }
                    goto Ad909b30674c9c4252b70a41405d9ecb;
                }
                d540d201a82cbbe517b2949bcc4d6f11:
                Ad909b30674c9c4252b70a41405d9ecb:
            }
            switch ($ac85ad47d31a0b7f8a0379f91cfc10f4) {
                case "name":
                    uasort($Cc88d22d55f69d2409f5c72665474b50, "sortArrayStreamName");
                    goto aac0c4deea37092b4dd72e90188f901a;
                case "top":
                    uasort($Cc88d22d55f69d2409f5c72665474b50, "sortArrayStreamRating");
                    goto aac0c4deea37092b4dd72e90188f901a;
                case "rating":
                    uasort($Cc88d22d55f69d2409f5c72665474b50, "sortArrayStreamRating");
                    goto aac0c4deea37092b4dd72e90188f901a;
                case "added":
                    uasort($Cc88d22d55f69d2409f5c72665474b50, "sortArrayStreamAdded");
                    goto aac0c4deea37092b4dd72e90188f901a;
                case "number":
                    uasort($Cc88d22d55f69d2409f5c72665474b50, "sortArrayStreamNumber");
                    goto aac0c4deea37092b4dd72e90188f901a;
            }
            aac0c4deea37092b4dd72e90188f901a:
            return $Cc88d22d55f69d2409f5c72665474b50;
        }
        function C10fd9f04D9C5bAF2F685664A4Da5e9A($E38668abaa324e464e266fb7b7e784b1, $e3a76043abaf369f5e7250f23baaf1bb = array(), $Fe9028a70727ba5f6b7129f9352b020c = null, $B3703321da72313bacab05a2780df82e = null, $ac85ad47d31a0b7f8a0379f91cfc10f4 = null, $a06f7bfbee524373fb837e654c47359d = null, $c15ec50152cce77fa3e1f8d41d4792db = array())
        {
            global $E4e8dc642ae3bbc84730dc5ef74fd8d6;
            $a8df9f055e91a1e9240230b69af85555 = CD89785224751ccA8017139Daf9E891e::E5550592AA298Dd1D5ee59cdcE063A12($E38668abaa324e464e266fb7b7e784b1, null, null, true, true, false, $e3a76043abaf369f5e7250f23baaf1bb, true);
            $D465fc5085f41251c6fa7c77b8333b0f = array();
            $D465fc5085f41251c6fa7c77b8333b0f["streams"] = array();
            if (empty($a8df9f055e91a1e9240230b69af85555)) {
                goto F9802a5c0a8c15ba4ffdd10b4a389e27;
            }
            $E7cca48cfca85fc445419a32d7d8f973 = 1;
            foreach ($a8df9f055e91a1e9240230b69af85555["channels"] as $c3a18c26bfa971a25d2e6ada870ff735) {
                $c3a18c26bfa971a25d2e6ada870ff735["number"] = a78BF8d35765bE2408c50712cE7a43aD::$settings["channel_number_type"] == "bouquet" ? $E7cca48cfca85fc445419a32d7d8f973++ : (string) $c3a18c26bfa971a25d2e6ada870ff735["number"];
                if (!(!empty($Fe9028a70727ba5f6b7129f9352b020c) && $c3a18c26bfa971a25d2e6ada870ff735["category_id"] != $Fe9028a70727ba5f6b7129f9352b020c)) {
                    if (!(empty($Fe9028a70727ba5f6b7129f9352b020c) && $c3a18c26bfa971a25d2e6ada870ff735["is_adult"] == 1)) {
                        if (!(!empty($a06f7bfbee524373fb837e654c47359d) && !stristr($c3a18c26bfa971a25d2e6ada870ff735["stream_display_name"], $a06f7bfbee524373fb837e654c47359d))) {
                            if (!(!empty($c15ec50152cce77fa3e1f8d41d4792db["abc"]) && $c15ec50152cce77fa3e1f8d41d4792db["abc"] != "*" && strtoupper(substr($c3a18c26bfa971a25d2e6ada870ff735["stream_display_name"], 0, 1)) != $c15ec50152cce77fa3e1f8d41d4792db["abc"])) {
                                if (!(!empty($c15ec50152cce77fa3e1f8d41d4792db["genre"]) && $c15ec50152cce77fa3e1f8d41d4792db["genre"] != "*" && $c3a18c26bfa971a25d2e6ada870ff735["category_id"] != $c15ec50152cce77fa3e1f8d41d4792db["genre"])) {
                                    if (empty($B3703321da72313bacab05a2780df82e)) {
                                        goto Edaf11fc5e90924b81c1de958551ca3c;
                                    }
                                    $A2b796e1bb70296d4bed8ce34ce5691b = false;
                                    foreach ($e3a76043abaf369f5e7250f23baaf1bb as $a28758c1ab974badfc544e11aaf19a57) {
                                        if (!(!empty($E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"][$a28758c1ab974badfc544e11aaf19a57]) && in_array($c3a18c26bfa971a25d2e6ada870ff735["id"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"][$a28758c1ab974badfc544e11aaf19a57]))) {
                                        }
                                        $A2b796e1bb70296d4bed8ce34ce5691b = true;
                                        goto D6b9dac654179aebfa790b8e4f3af76b;
                                    }
                                    D6b9dac654179aebfa790b8e4f3af76b:
                                    if ($A2b796e1bb70296d4bed8ce34ce5691b) {
                                        Edaf11fc5e90924b81c1de958551ca3c:
                                        $D465fc5085f41251c6fa7c77b8333b0f["streams"][$c3a18c26bfa971a25d2e6ada870ff735["id"]] = $c3a18c26bfa971a25d2e6ada870ff735;
                                        goto ecf45e2514ec08a0457f81fc04ef2001;
                                    }
                                    goto b6e5fa8af33c39d44ff4fe3ac79fa256;
                                }
                                goto b6e5fa8af33c39d44ff4fe3ac79fa256;
                            }
                            goto b6e5fa8af33c39d44ff4fe3ac79fa256;
                        }
                        goto b6e5fa8af33c39d44ff4fe3ac79fa256;
                    }
                    goto b6e5fa8af33c39d44ff4fe3ac79fa256;
                }
                ecf45e2514ec08a0457f81fc04ef2001:
                b6e5fa8af33c39d44ff4fe3ac79fa256:
            }
            switch ($ac85ad47d31a0b7f8a0379f91cfc10f4) {
                case "name":
                    uasort($D465fc5085f41251c6fa7c77b8333b0f["streams"], "sortArrayStreamName");
                    goto a514f8f816b1573421074c279dd42aa6;
                case "top":
                    uasort($D465fc5085f41251c6fa7c77b8333b0f["streams"], "sortArrayStreamRating");
                    goto a514f8f816b1573421074c279dd42aa6;
                case "rating":
                    uasort($D465fc5085f41251c6fa7c77b8333b0f["streams"], "sortArrayStreamRating");
                    goto a514f8f816b1573421074c279dd42aa6;
                case "added":
                    uasort($D465fc5085f41251c6fa7c77b8333b0f["streams"], "sortArrayStreamAdded");
                    goto a514f8f816b1573421074c279dd42aa6;
                case "number":
                    uasort($D465fc5085f41251c6fa7c77b8333b0f["streams"], "sortArrayStreamNumber");
                    goto a514f8f816b1573421074c279dd42aa6;
            }
            a514f8f816b1573421074c279dd42aa6:
            F9802a5c0a8c15ba4ffdd10b4a389e27:
            return $D465fc5085f41251c6fa7c77b8333b0f;
        }
        function sortArrayStreamRating($D099d64305e0e1b9f20300f1ef51f8a7, $E28f7a505c062145e6df747991c0a2d3)
        {
            if (isset($D099d64305e0e1b9f20300f1ef51f8a7["rating"])) {
                goto E3437fc4bde258bfdb2b5df655ceded4;
            }
            if (!(!isset($D099d64305e0e1b9f20300f1ef51f8a7["movie_propeties"]) || !isset($E28f7a505c062145e6df747991c0a2d3["movie_propeties"]))) {
                if (!is_array($D099d64305e0e1b9f20300f1ef51f8a7["movie_propeties"])) {
                    $D099d64305e0e1b9f20300f1ef51f8a7 = json_decode($D099d64305e0e1b9f20300f1ef51f8a7["movie_propeties"], true);
                    goto b7e42d1570c86531f3454d54c34b462d;
                }
                $D099d64305e0e1b9f20300f1ef51f8a7 = $D099d64305e0e1b9f20300f1ef51f8a7["movie_propeties"];
                b7e42d1570c86531f3454d54c34b462d:
                if (!is_array($E28f7a505c062145e6df747991c0a2d3["movie_propeties"])) {
                    $E28f7a505c062145e6df747991c0a2d3 = json_decode($E28f7a505c062145e6df747991c0a2d3["movie_propeties"], true);
                    goto ad205c7b8ddb2d40b7e8fafec3cb1ced;
                }
                $E28f7a505c062145e6df747991c0a2d3 = $E28f7a505c062145e6df747991c0a2d3["movie_propeties"];
                ad205c7b8ddb2d40b7e8fafec3cb1ced:
                E3437fc4bde258bfdb2b5df655ceded4:
                if (!($D099d64305e0e1b9f20300f1ef51f8a7["rating"] == $E28f7a505c062145e6df747991c0a2d3["rating"])) {
                    return $D099d64305e0e1b9f20300f1ef51f8a7["rating"] > $E28f7a505c062145e6df747991c0a2d3["rating"] ? -1 : 1;
                }
                return 0;
            }
            return 0;
        }
        function sortArrayStreamAdded($D099d64305e0e1b9f20300f1ef51f8a7, $E28f7a505c062145e6df747991c0a2d3)
        {
            $D1b6d9c2569072aa396504ac4b7cb71b = isset($D099d64305e0e1b9f20300f1ef51f8a7["added"]) ? "added" : "last_modified";
            if (is_numeric($D099d64305e0e1b9f20300f1ef51f8a7[$D1b6d9c2569072aa396504ac4b7cb71b])) {
                goto e1402db50d26205798e3db502c3fd67e;
            }
            $D099d64305e0e1b9f20300f1ef51f8a7[$D1b6d9c2569072aa396504ac4b7cb71b] = strtotime($D099d64305e0e1b9f20300f1ef51f8a7["added"]);
            e1402db50d26205798e3db502c3fd67e:
            if (is_numeric($E28f7a505c062145e6df747991c0a2d3[$D1b6d9c2569072aa396504ac4b7cb71b])) {
                goto f01316977455ee414c48a5a23741d144;
            }
            $E28f7a505c062145e6df747991c0a2d3[$D1b6d9c2569072aa396504ac4b7cb71b] = strtotime($E28f7a505c062145e6df747991c0a2d3[$D1b6d9c2569072aa396504ac4b7cb71b]);
            f01316977455ee414c48a5a23741d144:
            if (!($D099d64305e0e1b9f20300f1ef51f8a7[$D1b6d9c2569072aa396504ac4b7cb71b] == $E28f7a505c062145e6df747991c0a2d3[$D1b6d9c2569072aa396504ac4b7cb71b])) {
                return $D099d64305e0e1b9f20300f1ef51f8a7[$D1b6d9c2569072aa396504ac4b7cb71b] > $E28f7a505c062145e6df747991c0a2d3[$D1b6d9c2569072aa396504ac4b7cb71b] ? -1 : 1;
            }
            return 0;
        }
        function sortArrayStreamNumber($D099d64305e0e1b9f20300f1ef51f8a7, $E28f7a505c062145e6df747991c0a2d3)
        {
            if (!($D099d64305e0e1b9f20300f1ef51f8a7["number"] == $E28f7a505c062145e6df747991c0a2d3["number"])) {
                return $D099d64305e0e1b9f20300f1ef51f8a7["number"] < $E28f7a505c062145e6df747991c0a2d3["number"] ? -1 : 1;
            }
            return 0;
        }
        function sortArrayStreamName($D099d64305e0e1b9f20300f1ef51f8a7, $E28f7a505c062145e6df747991c0a2d3)
        {
            $D1b6d9c2569072aa396504ac4b7cb71b = isset($D099d64305e0e1b9f20300f1ef51f8a7["stream_display_name"]) ? "stream_display_name" : "title";
            return strcmp($D099d64305e0e1b9f20300f1ef51f8a7[$D1b6d9c2569072aa396504ac4b7cb71b], $E28f7a505c062145e6df747991c0a2d3[$D1b6d9c2569072aa396504ac4b7cb71b]);
        }
        function C22100704F3F8811f51506Fb1ab116da($Fe9028a70727ba5f6b7129f9352b020c = null, $B3703321da72313bacab05a2780df82e = null, $ac85ad47d31a0b7f8a0379f91cfc10f4 = null)
        {
            global $E4e8dc642ae3bbc84730dc5ef74fd8d6, $C3e422ab460a153e3477de0ff483d9e7, $ipTV_db;
            $Efbabdfbd20db2470efbf8a713287c36 = isset($_REQUEST["p"]) ? intval($_REQUEST["p"]) : 0;
            $c49477c19b27e562d36d18bc56a6ba8b = 14;
            $B720277fbc7d475b171528f01c76b143 = false;
            $D465fc5085f41251c6fa7c77b8333b0f = c10fd9f04D9C5BaF2f685664A4da5E9a($E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"], array("radio_streams"), $Fe9028a70727ba5f6b7129f9352b020c, $B3703321da72313bacab05a2780df82e, $ac85ad47d31a0b7f8a0379f91cfc10f4);
            $A029b77634bf5f67a52c7d5b31aed706 = count($D465fc5085f41251c6fa7c77b8333b0f["streams"]);
            $D088deb147a371571653966bc924f301 = 0;
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto E56a383fb10bc8b22998e00b523f71ec;
            }
            $B720277fbc7d475b171528f01c76b143 = true;
            $Efbabdfbd20db2470efbf8a713287c36 = ceil($D088deb147a371571653966bc924f301 / $c49477c19b27e562d36d18bc56a6ba8b);
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto dda69c94c5d437bf0337a2be5ca928bd;
            }
            $Efbabdfbd20db2470efbf8a713287c36 = 1;
            dda69c94c5d437bf0337a2be5ca928bd:
            E56a383fb10bc8b22998e00b523f71ec:
            $D465fc5085f41251c6fa7c77b8333b0f = array_slice($D465fc5085f41251c6fa7c77b8333b0f["streams"], 0 * $c49477c19b27e562d36d18bc56a6ba8b, $c49477c19b27e562d36d18bc56a6ba8b);
            $D0b48d0a5773acd261b061496a380231 = array();
            $C48e0083a9caa391609a3c645a2ec889 = 1;
            foreach ($D465fc5085f41251c6fa7c77b8333b0f as $e2ed3b44381d63b5ea576aae3e88df98 => $c3a18c26bfa971a25d2e6ada870ff735) {
                if (A78BF8d35765be2408c50712Ce7a43aD::$settings["mag_security"] == 0) {
                    if (!empty($c3a18c26bfa971a25d2e6ada870ff735["stream_source"])) {
                        $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . json_decode($c3a18c26bfa971a25d2e6ada870ff735["stream_source"], true)[0];
                        goto Bf59381fae2f4661326ba5c54d8aea25;
                    }
                    if (!file_exists("TMP_DIRnew_rewrite") || a78Bf8D35765BE2408c50712cE7a43Ad::$settings["mag_container"] == "m3u8") {
                        $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . A78bF8D35765be2408C50712Ce7A43Ad::$StreamingServers[SERVER_ID]["site_url"] . "live/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}." . A78bF8d35765BE2408C50712cE7A43Ad::$settings["mag_container"];
                        goto D4f76a56d256ef3c51d2af4579b07d0b;
                    }
                    $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . A78BF8d35765be2408C50712cE7A43Ad::$StreamingServers[SERVER_ID]["site_url"] . "{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}";
                    D4f76a56d256ef3c51d2af4579b07d0b:
                    Bf59381fae2f4661326ba5c54d8aea25:
                    $A924ba2fdd81aee087d60b59ecc7cb97 = 0;
                    goto a6798655cdb6fa506e4ac5a1ff44e822;
                }
                if (!empty($c3a18c26bfa971a25d2e6ada870ff735["stream_source"])) {
                    $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . "http://localhost/ch/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}_" . json_decode($c3a18c26bfa971a25d2e6ada870ff735["stream_source"], true)[0];
                    goto deb29e48685e9b3c37916eaa07b5161e;
                }
                $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . "http://localhost/ch/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}_";
                deb29e48685e9b3c37916eaa07b5161e:
                $A924ba2fdd81aee087d60b59ecc7cb97 = 1;
                a6798655cdb6fa506e4ac5a1ff44e822:
                $D0b48d0a5773acd261b061496a380231[] = array("id" => $c3a18c26bfa971a25d2e6ada870ff735["id"], "name" => $c3a18c26bfa971a25d2e6ada870ff735["stream_display_name"], "number" => $C48e0083a9caa391609a3c645a2ec889++, "cmd" => $F809fc2dad1887c28d3b55d1feaab6f8, "count" => 0, "open" => 1, "use_http_tmp_link" => "1", "status" => 1, "volume_correction" => 0, "fav" => in_array($c3a18c26bfa971a25d2e6ada870ff735["id"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["radio_streams"]) ? 1 : 0);
            }
            if ($B720277fbc7d475b171528f01c76b143) {
                $a5059501c38fcd5e6e2e3af8e53670bb = $Efbabdfbd20db2470efbf8a713287c36;
                $ca959924790f641d3f5e6f3eda4ee518 = $D088deb147a371571653966bc924f301 - ($Efbabdfbd20db2470efbf8a713287c36 - 1) * $c49477c19b27e562d36d18bc56a6ba8b;
                goto a59f5b9b4f38afc4b42b2057898d9802;
            }
            $a5059501c38fcd5e6e2e3af8e53670bb = 0;
            $ca959924790f641d3f5e6f3eda4ee518 = 0;
            a59f5b9b4f38afc4b42b2057898d9802:
            $output = array("js" => array("total_items" => $A029b77634bf5f67a52c7d5b31aed706, "max_page_items" => $c49477c19b27e562d36d18bc56a6ba8b, "selected_item" => $ca959924790f641d3f5e6f3eda4ee518, "cur_page" => $a5059501c38fcd5e6e2e3af8e53670bb, "data" => $D0b48d0a5773acd261b061496a380231));
            return json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
        }
        function eca2a16CFBd94b2b895BcbC43eBd6e3d($Fe9028a70727ba5f6b7129f9352b020c = null, $F720b54e951bfeddce930cfae655a2ca = false, $B3703321da72313bacab05a2780df82e = null, $ac85ad47d31a0b7f8a0379f91cfc10f4 = null)
        {
            global $E4e8dc642ae3bbc84730dc5ef74fd8d6, $C3e422ab460a153e3477de0ff483d9e7, $ipTV_db;
            $Efbabdfbd20db2470efbf8a713287c36 = isset($_REQUEST["p"]) ? intval($_REQUEST["p"]) : 0;
            $c49477c19b27e562d36d18bc56a6ba8b = 14;
            $B720277fbc7d475b171528f01c76b143 = false;
            $D088deb147a371571653966bc924f301 = 0;
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto d13e22c86a512e5c96f202215d3e47bd;
            }
            $B720277fbc7d475b171528f01c76b143 = true;
            $Efbabdfbd20db2470efbf8a713287c36 = ceil($D088deb147a371571653966bc924f301 / $c49477c19b27e562d36d18bc56a6ba8b);
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto e648d307fd5c35724dd68d7d2adb2fa3;
            }
            $Efbabdfbd20db2470efbf8a713287c36 = 1;
            e648d307fd5c35724dd68d7d2adb2fa3:
            d13e22c86a512e5c96f202215d3e47bd:
            $D465fc5085f41251c6fa7c77b8333b0f = c10FD9F04D9C5BAF2f685664a4dA5E9a($E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"], array("live", "created_live"), $Fe9028a70727ba5f6b7129f9352b020c, $B3703321da72313bacab05a2780df82e, $ac85ad47d31a0b7f8a0379f91cfc10f4);
            if (!($B720277fbc7d475b171528f01c76b143 && array_key_exists($E4e8dc642ae3bbc84730dc5ef74fd8d6["last_itv_id"], $D465fc5085f41251c6fa7c77b8333b0f["streams"]))) {
                goto aa0249a10d8dc7d33464a774c36a7ad3;
            }
            $D088deb147a371571653966bc924f301 = array_search($E4e8dc642ae3bbc84730dc5ef74fd8d6["last_itv_id"], array_keys($D465fc5085f41251c6fa7c77b8333b0f["streams"])) + 1;
            $Efbabdfbd20db2470efbf8a713287c36 = $D088deb147a371571653966bc924f301 / $c49477c19b27e562d36d18bc56a6ba8b;
            if (!is_float($Efbabdfbd20db2470efbf8a713287c36)) {
                goto f78c3c289ad6884b6c83d422fbc28c80;
            }
            $Efbabdfbd20db2470efbf8a713287c36 = ceil($Efbabdfbd20db2470efbf8a713287c36);
            f78c3c289ad6884b6c83d422fbc28c80:
            if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                goto b68d19304a81720867ad0a28512e0bb6;
            }
            $Efbabdfbd20db2470efbf8a713287c36 = 1;
            b68d19304a81720867ad0a28512e0bb6:
            aa0249a10d8dc7d33464a774c36a7ad3:
            $A029b77634bf5f67a52c7d5b31aed706 = count($D465fc5085f41251c6fa7c77b8333b0f["streams"]);
            if (!$F720b54e951bfeddce930cfae655a2ca) {
                $D465fc5085f41251c6fa7c77b8333b0f = array_slice($D465fc5085f41251c6fa7c77b8333b0f["streams"], 0 * $c49477c19b27e562d36d18bc56a6ba8b, $c49477c19b27e562d36d18bc56a6ba8b);
                goto d0e49e0abb457d28a2df371bbd7d88c0;
            }
            $D465fc5085f41251c6fa7c77b8333b0f = $D465fc5085f41251c6fa7c77b8333b0f["streams"];
            d0e49e0abb457d28a2df371bbd7d88c0:
            $Adf01d0d1116712a679b41ad78bb22bd = '';
            $D0b48d0a5773acd261b061496a380231 = array();
            $C48e0083a9caa391609a3c645a2ec889 = 1;
            foreach ($D465fc5085f41251c6fa7c77b8333b0f as $e2ed3b44381d63b5ea576aae3e88df98 => $c3a18c26bfa971a25d2e6ada870ff735) {
                if (A78BF8D35765Be2408c50712ce7a43AD::$settings["mag_security"] == 0) {
                    if (!empty($c3a18c26bfa971a25d2e6ada870ff735["stream_source"])) {
                        $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . json_decode($c3a18c26bfa971a25d2e6ada870ff735["stream_source"], true)[0];
                        goto cdfc322cc8cd8d099882aa3f277781a0;
                    }
                    if (!file_exists("TMP_DIRnew_rewrite") || A78bF8D35765be2408C50712CE7A43Ad::$settings["mag_container"] == "m3u8") {
                        $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . a78bf8d35765BE2408c50712Ce7a43aD::$StreamingServers[SERVER_ID]["site_url"] . "live/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}." . A78bf8D35765be2408c50712Ce7A43Ad::$settings["mag_container"];
                        goto D39ff79be584c1983aa401f4086cd417;
                    }
                    $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . a78Bf8D35765BE2408C50712CE7a43AD::$StreamingServers[SERVER_ID]["site_url"] . "{$E4e8dc642ae3bbc84730dc5ef74fd8d6["username"]}/{$E4e8dc642ae3bbc84730dc5ef74fd8d6["password"]}/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}";
                    D39ff79be584c1983aa401f4086cd417:
                    cdfc322cc8cd8d099882aa3f277781a0:
                    $A924ba2fdd81aee087d60b59ecc7cb97 = 0;
                    goto F04c999e0c27ca484450e2351604cbef;
                }
                if (!empty($c3a18c26bfa971a25d2e6ada870ff735["stream_source"])) {
                    $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . "http://localhost/ch/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}_" . json_decode($c3a18c26bfa971a25d2e6ada870ff735["stream_source"], true)[0];
                    goto b6af46411fb7cddf427c75711f3a1eda;
                }
                $F809fc2dad1887c28d3b55d1feaab6f8 = $C3e422ab460a153e3477de0ff483d9e7 . "http://localhost/ch/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}_";
                b6af46411fb7cddf427c75711f3a1eda:
                $A924ba2fdd81aee087d60b59ecc7cb97 = 1;
                F04c999e0c27ca484450e2351604cbef:
                $D0b48d0a5773acd261b061496a380231[] = array("id" => $c3a18c26bfa971a25d2e6ada870ff735["id"], "name" => $c3a18c26bfa971a25d2e6ada870ff735["stream_display_name"], "number" => (string) $c3a18c26bfa971a25d2e6ada870ff735["number"], "censored" => $c3a18c26bfa971a25d2e6ada870ff735["is_adult"] == 1 ? "1" : '', "cmd" => $F809fc2dad1887c28d3b55d1feaab6f8, "cost" => "0", "count" => "0", "status" => 1, "hd" => 0, "tv_genre_id" => $c3a18c26bfa971a25d2e6ada870ff735["category_id"], "base_ch" => "1", "hd" => "0", "xmltv_id" => !empty($c3a18c26bfa971a25d2e6ada870ff735["channel_id"]) ? $c3a18c26bfa971a25d2e6ada870ff735["channel_id"] : '', "service_id" => '', "bonus_ch" => "0", "volume_correction" => "0", "mc_cmd" => '', "enable_tv_archive" => $c3a18c26bfa971a25d2e6ada870ff735["tv_archive_duration"] > 0 ? 1 : 0, "wowza_tmp_link" => "0", "wowza_dvr" => "0", "use_http_tmp_link" => "1", "monitoring_status" => "1", "enable_monitoring" => "0", "enable_wowza_load_balancing" => "0", "cmd_1" => '', "cmd_2" => '', "cmd_3" => '', "logo" => $c3a18c26bfa971a25d2e6ada870ff735["stream_icon"], "correct_time" => "0", "nimble_dvr" => "0", "allow_pvr" => (int) $c3a18c26bfa971a25d2e6ada870ff735["allow_record"], "allow_local_pvr" => (int) $c3a18c26bfa971a25d2e6ada870ff735["allow_record"], "allow_remote_pvr" => 0, "modified" => '', "allow_local_timeshift" => "1", "nginx_secure_link" => "1", "tv_archive_duration" => $c3a18c26bfa971a25d2e6ada870ff735["tv_archive_duration"] > 0 ? $c3a18c26bfa971a25d2e6ada870ff735["tv_archive_duration"] * 24 : 0, "locked" => 0, "lock" => $c3a18c26bfa971a25d2e6ada870ff735["is_adult"], "fav" => in_array($c3a18c26bfa971a25d2e6ada870ff735["id"], $E4e8dc642ae3bbc84730dc5ef74fd8d6["fav_channels"]["live"]) ? 1 : 0, "archive" => $c3a18c26bfa971a25d2e6ada870ff735["tv_archive_duration"] > 0 ? 1 : 0, "genres_str" => '', "cur_playing" => "[No channel info]", "epg" => array(), "open" => 1, "cmds" => array(array("id" => (string) $c3a18c26bfa971a25d2e6ada870ff735["id"], "ch_id" => (string) $c3a18c26bfa971a25d2e6ada870ff735["id"], "priority" => "0", "url" => $C3e422ab460a153e3477de0ff483d9e7 . "http : //localhost/ch/{$c3a18c26bfa971a25d2e6ada870ff735["id"]}_{$Faefd94a7363d43fe709e5aaa80f5fc7}", "status" => "1", "use_http_tmp_link" => "1", "wowza_tmp_link" => "0", "user_agent_filter" => '', "use_load_balancing" => "0", "changed" => '', "enable_monitoring" => "0", "enable_balancer_monitoring" => "0", "nginx_secure_link" => "1", "flussonic_tmp_link" => "0")), "use_load_balancing" => 0, "pvr" => (int) $c3a18c26bfa971a25d2e6ada870ff735["allow_record"]);
            }
            if ($B720277fbc7d475b171528f01c76b143) {
                $a5059501c38fcd5e6e2e3af8e53670bb = $Efbabdfbd20db2470efbf8a713287c36;
                $ca959924790f641d3f5e6f3eda4ee518 = $D088deb147a371571653966bc924f301 - ($Efbabdfbd20db2470efbf8a713287c36 - 1) * $c49477c19b27e562d36d18bc56a6ba8b;
                goto E6432c6601700cd124598101069d20f3;
            }
            $a5059501c38fcd5e6e2e3af8e53670bb = 0;
            $ca959924790f641d3f5e6f3eda4ee518 = 0;
            E6432c6601700cd124598101069d20f3:
            $output = array("js" => array("total_items" => $A029b77634bf5f67a52c7d5b31aed706, "max_page_items" => $c49477c19b27e562d36d18bc56a6ba8b, "selected_item" => $ca959924790f641d3f5e6f3eda4ee518, "cur_page" => $F720b54e951bfeddce930cfae655a2ca ? 0 : $a5059501c38fcd5e6e2e3af8e53670bb, "data" => $D0b48d0a5773acd261b061496a380231));
            return json_encode($output, JSON_PARTIAL_OUTPUT_ON_ERROR);
        }
        function a495131b1Cf27A42FE0b0130e0ca3811()
        {
            global $E4e8dc642ae3bbc84730dc5ef74fd8d6, $ipTV_db, $f95e0a5add97031d044e07d3f4aaba72;
            $Efbabdfbd20db2470efbf8a713287c36 = intval($_REQUEST["p"]);
            $A7386eca40c08bf499c3668f497f7653 = intval($_REQUEST["ch_id"]);
            $fe87c97d62462243262415f4e8ce6dff = $_REQUEST["from"];
            $A8a420612fa712276a0eb930ea0851bd = $_REQUEST["to"];
            $B720277fbc7d475b171528f01c76b143 = false;
            $c49477c19b27e562d36d18bc56a6ba8b = 10;
            $D465fc5085f41251c6fa7c77b8333b0f = c10FD9f04D9c5BAf2F685664a4da5e9A($E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"], array("live", "created_live"));
            $b0a1fdde69b67339eeb698da0607deec = array_keys($D465fc5085f41251c6fa7c77b8333b0f["streams"]);
            $E471a1bc618bb0e4cb827cfcd0cebc3f = array_values($D465fc5085f41251c6fa7c77b8333b0f["streams"]);
            $Ca2bb2fe66c8878b3e489481fe3974e5 = array();
            $a113f783668d5d6789bc22204c25f196 = null;
            $ipTV_db->query("SELECT * FROM `streams` WHERE `id` = '%d'", $A7386eca40c08bf499c3668f497f7653);
            $channel = $ipTV_db->f1ED191d78470660eDFF4a007696BC1F();
            if (!empty($channel)) {
                goto d24394a34d4ed2b89ebf114c536e31c1;
            }
            foreach ($Ca2bb2fe66c8878b3e489481fe3974e5 as $Aa3e2acc198cbf5c95a97876f3c375d2) {
                if (!($Aa3e2acc198cbf5c95a97876f3c375d2["id"] == $A7386eca40c08bf499c3668f497f7653)) {
                }
                $channel = $Aa3e2acc198cbf5c95a97876f3c375d2;
                goto ddb8254cb5183455ce72a5597bdbf3fa;
            }
            ddb8254cb5183455ce72a5597bdbf3fa:
            $C48e0083a9caa391609a3c645a2ec889 = 0;
            E542d611d3578608d2dbd6eeecdc2f10:
            if (!($C48e0083a9caa391609a3c645a2ec889 < count($Ca2bb2fe66c8878b3e489481fe3974e5))) {
                if (!($a113f783668d5d6789bc22204c25f196 != null)) {
                    goto ab400b3a9c991690692216a2259ff4ac;
                }
                $a113f783668d5d6789bc22204c25f196++;
                ab400b3a9c991690692216a2259ff4ac:
                d24394a34d4ed2b89ebf114c536e31c1:
                $f2b426ba5f68ce31fe12b710e83b952f = count($b0a1fdde69b67339eeb698da0607deec);
                $cbdeb7d574ad2119d3990006199532d9 = $f2b426ba5f68ce31fe12b710e83b952f;
                $f2b426ba5f68ce31fe12b710e83b952f += count($Ca2bb2fe66c8878b3e489481fe3974e5);
                $D088deb147a371571653966bc924f301 = array_search($channel["id"], $b0a1fdde69b67339eeb698da0607deec);
                $D088deb147a371571653966bc924f301 += $a113f783668d5d6789bc22204c25f196;
                if (!($D088deb147a371571653966bc924f301 === false)) {
                    goto d39feaf9ed0aceaefdb1f555829cd53d;
                }
                $D088deb147a371571653966bc924f301 = 0;
                d39feaf9ed0aceaefdb1f555829cd53d:
                if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                    goto B97a5927f448e1f1ee43719d9902db6b;
                }
                $B720277fbc7d475b171528f01c76b143 = true;
                $Efbabdfbd20db2470efbf8a713287c36 = ceil($D088deb147a371571653966bc924f301 / $c49477c19b27e562d36d18bc56a6ba8b);
                if (!($Efbabdfbd20db2470efbf8a713287c36 == 0)) {
                    goto F7a17ce70ad8148e65a9d997075d2b61;
                }
                $Efbabdfbd20db2470efbf8a713287c36 == 1;
                F7a17ce70ad8148e65a9d997075d2b61:
                B97a5927f448e1f1ee43719d9902db6b:
                $D088deb147a371571653966bc924f301 -= ($Efbabdfbd20db2470efbf8a713287c36 - 1) * $c49477c19b27e562d36d18bc56a6ba8b;
                $dfef93968eb59d220abd4361e4ce446e = array_slice($E471a1bc618bb0e4cb827cfcd0cebc3f, ($Efbabdfbd20db2470efbf8a713287c36 - 1) * $c49477c19b27e562d36d18bc56a6ba8b, $c49477c19b27e562d36d18bc56a6ba8b);
                $Dfbc6a6dffa4d1aa00c5bbca849f7e6e = ceil($cbdeb7d574ad2119d3990006199532d9 / $c49477c19b27e562d36d18bc56a6ba8b);
                if (!(count($dfef93968eb59d220abd4361e4ce446e) < $c49477c19b27e562d36d18bc56a6ba8b)) {
                    goto Bc32c5e3aa15f85365066a82cc237295;
                }
                if ($Efbabdfbd20db2470efbf8a713287c36 == $Dfbc6a6dffa4d1aa00c5bbca849f7e6e) {
                    $C7a6d4fc19c5ddaabd1daa2cc9a45802 = $c49477c19b27e562d36d18bc56a6ba8b - $cbdeb7d574ad2119d3990006199532d9 % $c49477c19b27e562d36d18bc56a6ba8b;
                    goto bd2e7577c6c2b7475eb0a1e879fa0a0b;
                }
                $C7a6d4fc19c5ddaabd1daa2cc9a45802 = $c49477c19b27e562d36d18bc56a6ba8b;
                bd2e7577c6c2b7475eb0a1e879fa0a0b:
                if ($Efbabdfbd20db2470efbf8a713287c36 > $Dfbc6a6dffa4d1aa00c5bbca849f7e6e) {
                    $e4e72bb489d78c1cdd9e255c14789ae6 = ($Efbabdfbd20db2470efbf8a713287c36 - $Dfbc6a6dffa4d1aa00c5bbca849f7e6e - 1) * $c49477c19b27e562d36d18bc56a6ba8b + ($c49477c19b27e562d36d18bc56a6ba8b - $cbdeb7d574ad2119d3990006199532d9 % $c49477c19b27e562d36d18bc56a6ba8b);
                    goto fd9c3f1b7ee99898feb2d5f41ac8f200;
                }
                $e4e72bb489d78c1cdd9e255c14789ae6 = 0;
                fd9c3f1b7ee99898feb2d5f41ac8f200:
                if (!isset($_REQUEST["p"])) {
                    goto c581cece966a261be893630c5143aba2;
                }
                $Ca2bb2fe66c8878b3e489481fe3974e5 = array_splice($Ca2bb2fe66c8878b3e489481fe3974e5, $e4e72bb489d78c1cdd9e255c14789ae6, $C7a6d4fc19c5ddaabd1daa2cc9a45802);
                c581cece966a261be893630c5143aba2:
                $dfef93968eb59d220abd4361e4ce446e = array_merge($dfef93968eb59d220abd4361e4ce446e, $Ca2bb2fe66c8878b3e489481fe3974e5);
                Bc32c5e3aa15f85365066a82cc237295:
                $ad1359e38aec1cdc4b12d4caa5c6a07b = array();
                $C48e0083a9caa391609a3c645a2ec889 = 0;
                ce6a54f5693be5654a83943b7ddbeb7d:
                if (!($C48e0083a9caa391609a3c645a2ec889 < count($dfef93968eb59d220abd4361e4ce446e))) {
                    if (empty($ad1359e38aec1cdc4b12d4caa5c6a07b)) {
                        goto Ec58b065d78f1e6d5e9756e7e49997c5;
                    }
                    $ipTV_db->query("\n                SELECT t1.id as stream_id,t2.*\n                FROM `streams` t1\n                LEFT JOIN `epg_data` t2 ON t1.channel_id = t2.channel_id AND t2.`start` >= '%s' AND t2.`end` <= '%s'\n                WHERE t1.id IN(" . implode(",", $ad1359e38aec1cdc4b12d4caa5c6a07b) . ")", $fe87c97d62462243262415f4e8ce6dff, $A8a420612fa712276a0eb930ea0851bd);
                    $B19c567b52ac313a398520f481cd96cf = $ipTV_db->C126FD559932F625cDF6098D86C63880(true, "stream_id");
                    $C2eef5835abdc711ef2e0b2a24dc4e46 = array();
                    $C48e0083a9caa391609a3c645a2ec889 = 0;
                    $output = array();
                    $E7cca48cfca85fc445419a32d7d8f973 = 0;
                    foreach ($ad1359e38aec1cdc4b12d4caa5c6a07b as $ba85d77d367dcebfcc2a3db9e83bb581) {
                        $channel = $D465fc5085f41251c6fa7c77b8333b0f["streams"][$ba85d77d367dcebfcc2a3db9e83bb581];
                        $C2eef5835abdc711ef2e0b2a24dc4e46[$E7cca48cfca85fc445419a32d7d8f973] = array("ch_id" => $ba85d77d367dcebfcc2a3db9e83bb581, "name" => $channel["stream_display_name"], "number" => (string) $C48e0083a9caa391609a3c645a2ec889++, "ch_type" => isset($channel["type"]) && $channel["type"] == "dvb" ? "dvb" : "iptv", "dvb_id" => isset($channel["type"]) && $channel["type"] == "dvb" ? $channel["dvb_id"] : null, "epg_container" => 1);
                        $c6c36d00461aef002a957744bd1e76ba = array();
                        $c97380115b87cab8ab8756181e254283 = 0;
                        $fc504d0185065e8ba8f4f217b7aba6e8 = A78BF8D35765BE2408C50712cE7a43ad::b7a3b5Fa503D2609667a9cCb4e370Bb5($f95e0a5add97031d044e07d3f4aaba72);
                        foreach (C39Ed4eaD88ed7C28C7c17f4FbB37669($B19c567b52ac313a398520f481cd96cf, "stream_id", $ba85d77d367dcebfcc2a3db9e83bb581) as $C1037d0090aa4e7d78973574b5b0c906) {
                            if (empty($C1037d0090aa4e7d78973574b5b0c906["epg_id"])) {
                                goto E6aaf01dadd1f32ad965096611d661d4;
                            }
                            $A73d5129dfb465fd94f3e09e9b179de0 = new DateTime($C1037d0090aa4e7d78973574b5b0c906["start"]);
                            $A73d5129dfb465fd94f3e09e9b179de0->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                            $cdd6af41b10abec2ff03fe043f3df1cf = new DateTime($C1037d0090aa4e7d78973574b5b0c906["end"]);
                            $cdd6af41b10abec2ff03fe043f3df1cf->modify("{$fc504d0185065e8ba8f4f217b7aba6e8} seconds");
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["id"] = $C1037d0090aa4e7d78973574b5b0c906["id"];
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["ch_id"] = $C1037d0090aa4e7d78973574b5b0c906["stream_id"];
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["time"] = $A73d5129dfb465fd94f3e09e9b179de0->format("Y-m-d H:i:s");
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["time_to"] = $cdd6af41b10abec2ff03fe043f3df1cf->format("Y-m-d H:i:s");
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["duration"] = $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp() - $A73d5129dfb465fd94f3e09e9b179de0->getTimestamp();
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["name"] = base64_decode($C1037d0090aa4e7d78973574b5b0c906["title"]);
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["descr"] = base64_decode($C1037d0090aa4e7d78973574b5b0c906["description"]);
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["real_id"] = $C1037d0090aa4e7d78973574b5b0c906["stream_id"] . "_" . $A73d5129dfb465fd94f3e09e9b179de0->getTimestamp();
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["category"] = '';
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["director"] = '';
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["actor"] = '';
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["start_timestamp"] = $A73d5129dfb465fd94f3e09e9b179de0->getTimestamp();
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["stop_timestamp"] = $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp();
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["t_time"] = $A73d5129dfb465fd94f3e09e9b179de0->format("h:i A");
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["t_time_to"] = $cdd6af41b10abec2ff03fe043f3df1cf->format("h:i A");
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["display_duration"] = $cdd6af41b10abec2ff03fe043f3df1cf->getTimestamp() - $A73d5129dfb465fd94f3e09e9b179de0->getTimestamp();
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["larr"] = 0;
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["rarr"] = 0;
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["mark_rec"] = 0;
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["mark_memo"] = 0;
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283]["mark_archive"] = 0;
                            $c6c36d00461aef002a957744bd1e76ba[$c97380115b87cab8ab8756181e254283++]["on_date"] = $A73d5129dfb465fd94f3e09e9b179de0->format("l d.m.Y");
                            E6aaf01dadd1f32ad965096611d661d4:
                        }
                        $C2eef5835abdc711ef2e0b2a24dc4e46[$E7cca48cfca85fc445419a32d7d8f973++]["epg"] = $c6c36d00461aef002a957744bd1e76ba;
                    }
                    Ec58b065d78f1e6d5e9756e7e49997c5:
                    $c1ad71f0f4fe12fbcc576c49b2049826 = array();
                    $f1fc5d24f1db86cf16bb36e1d52f0a09 = strtotime($fe87c97d62462243262415f4e8ce6dff);
                    $d3f6506a5568d51e1627328e174f306a = strtotime($A8a420612fa712276a0eb930ea0851bd);
                    $c1ad71f0f4fe12fbcc576c49b2049826[] = date("H:i", $f1fc5d24f1db86cf16bb36e1d52f0a09);
                    $c1ad71f0f4fe12fbcc576c49b2049826[] = date("H:i", $f1fc5d24f1db86cf16bb36e1d52f0a09 + 1800);
                    $c1ad71f0f4fe12fbcc576c49b2049826[] = date("H:i", $f1fc5d24f1db86cf16bb36e1d52f0a09 + 3600);
                    $c1ad71f0f4fe12fbcc576c49b2049826[] = date("H:i", $f1fc5d24f1db86cf16bb36e1d52f0a09 + 5400);
                    if (!in_array($A7386eca40c08bf499c3668f497f7653, $ad1359e38aec1cdc4b12d4caa5c6a07b)) {
                        $D088deb147a371571653966bc924f301 = 0;
                        $Efbabdfbd20db2470efbf8a713287c36 = 0;
                        goto Bee313535ecd9e4f978a4ce648eef2eb;
                    }
                    $D088deb147a371571653966bc924f301 = array_search($A7386eca40c08bf499c3668f497f7653, $ad1359e38aec1cdc4b12d4caa5c6a07b) + 1;
                    Bee313535ecd9e4f978a4ce648eef2eb:
                    return array("total_items" => $f2b426ba5f68ce31fe12b710e83b952f, "max_page_items" => $c49477c19b27e562d36d18bc56a6ba8b, "cur_page" => $Efbabdfbd20db2470efbf8a713287c36, "selected_item" => $D088deb147a371571653966bc924f301, "time_marks" => $c1ad71f0f4fe12fbcc576c49b2049826, "from_ts" => $f1fc5d24f1db86cf16bb36e1d52f0a09, "to_ts" => $d3f6506a5568d51e1627328e174f306a, "data" => $C2eef5835abdc711ef2e0b2a24dc4e46);
                }
                $ad1359e38aec1cdc4b12d4caa5c6a07b[] = $dfef93968eb59d220abd4361e4ce446e[$C48e0083a9caa391609a3c645a2ec889]["id"];
                $C48e0083a9caa391609a3c645a2ec889++;
                goto ce6a54f5693be5654a83943b7ddbeb7d;
            }
            if (!($Ca2bb2fe66c8878b3e489481fe3974e5[$C48e0083a9caa391609a3c645a2ec889]["id"] == $A7386eca40c08bf499c3668f497f7653)) {
                goto E0fe2f5e36350dcd9f6d2670233dd9f4;
            }
            $channel = $Ca2bb2fe66c8878b3e489481fe3974e5[$C48e0083a9caa391609a3c645a2ec889];
            $a113f783668d5d6789bc22204c25f196 = $C48e0083a9caa391609a3c645a2ec889;
            E0fe2f5e36350dcd9f6d2670233dd9f4:
            $C48e0083a9caa391609a3c645a2ec889++;
            goto E542d611d3578608d2dbd6eeecdc2f10;
        }
        function A1c6b49ec4F49777516666E14316d4B7($Aacb752351b5de80f12830c2026b757e)
        {
            if (!empty($Aacb752351b5de80f12830c2026b757e)) {
                if (function_exists("getallheaders")) {
                    $Ccea43217aa47fe5576ce138dd8ef8c5 = getallheaders();
                    goto E36ca6243104588a4df519db6e9266d6;
                }
                $Ccea43217aa47fe5576ce138dd8ef8c5 = df07Cb3e40dF776f703dB0f3F3529AC0();
                E36ca6243104588a4df519db6e9266d6:
                if ($Ccea43217aa47fe5576ce138dd8ef8c5) {
                    $A0aa0bbb0dde3dc86fc16d1493bbc86f = !empty($Ccea43217aa47fe5576ce138dd8ef8c5["Authorization"]) ? $Ccea43217aa47fe5576ce138dd8ef8c5["Authorization"] : null;
                    if (!($A0aa0bbb0dde3dc86fc16d1493bbc86f && preg_match("/Bearer\\s+(.*)\$/i", $A0aa0bbb0dde3dc86fc16d1493bbc86f, $ae37877cee3bc97c8cfa6ec5843993ed))) {
                        goto Ec84b69650aedb4b369faf9f126d671a;
                    }
                    if (!($Aacb752351b5de80f12830c2026b757e == trim($ae37877cee3bc97c8cfa6ec5843993ed[1]))) {
                        Ec84b69650aedb4b369faf9f126d671a:
                        die;
                    }
                    return true;
                }
                return;
            }
            return;
        }
        function DF07CB3E40Df776f703dB0f3F3529aC0()
        {
            $Ccea43217aa47fe5576ce138dd8ef8c5 = array();
            foreach ($_SERVER as $Ef1ee3c519bc282c0258c5a79264005f => $a1daec950dd361ae639ad3a57dc018c0) {
                if (!(substr($Ef1ee3c519bc282c0258c5a79264005f, 0, 5) == "HTTP_")) {
                    goto c03d2bcf5980bb0cd0ab75c61dfeb888;
                }
                $Ccea43217aa47fe5576ce138dd8ef8c5[str_replace(" ", "-", ucwords(strtolower(str_replace("_", " ", substr($Ef1ee3c519bc282c0258c5a79264005f, 5)))))] = $a1daec950dd361ae639ad3a57dc018c0;
                c03d2bcf5980bb0cd0ab75c61dfeb888:
            }
            return $Ccea43217aa47fe5576ce138dd8ef8c5;
        }
        // [PHPDeobfuscator] Implied script end
        return;
    }
    d9F93B7c177E377d0BBfE315eAEaE505();
    die;
}
$Aacb752351b5de80f12830c2026b757e = strtoupper(md5(uniqid(rand(), true)));
if (empty($E4e8dc642ae3bbc84730dc5ef74fd8d6)) {
    goto Fc207f634bf16b2e355d297d70aa09d1;
}
$ipTV_db->query("UPDATE `mag_devices` SET token = '%s' WHERE `mag_id` = '%d'", $Aacb752351b5de80f12830c2026b757e, $E4e8dc642ae3bbc84730dc5ef74fd8d6["mag_id"]);
if (!(A78Bf8D35765BE2408c50712ce7A43aD::$settings["stb_change_pass"] == 1)) {
    goto C89ff47431a328afae709e49ec288ef8;
}
$ipTV_db->query("UPDATE `users` SET `password` = '%s' WHERE `id` = '%d'", A78bF8D35765BE2408c50712ce7A43AD::e5182E3AFa58ac7ec5d69D56b28819CD(10), $E4e8dc642ae3bbc84730dc5ef74fd8d6["user_id"]);
C89ff47431a328afae709e49ec288ef8:
Fc207f634bf16b2e355d297d70aa09d1:
die(json_encode(array("js" => array("token" => $Aacb752351b5de80f12830c2026b757e))));
