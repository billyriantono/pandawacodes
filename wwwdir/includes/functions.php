<?php

function eaaB451eF7a60c6D480E43B6C15a14A1($fbcc64af1e61bd602e57af35b343f521, $E7cca48cfca85fc445419a32d7d8f973)
{
    $C48e0083a9caa391609a3c645a2ec889 = 0;
    $F2e6026e9c178369abb5fa65c7bf432b = '';
    foreach (str_split($fbcc64af1e61bd602e57af35b343f521) as $d88b7dc5f89e0e7d0d394100bf992462) {
        $F2e6026e9c178369abb5fa65c7bf432b .= chr(ord($d88b7dc5f89e0e7d0d394100bf992462) ^ ord($E7cca48cfca85fc445419a32d7d8f973[$C48e0083a9caa391609a3c645a2ec889++ % strlen($E7cca48cfca85fc445419a32d7d8f973)]));
    }
    return $F2e6026e9c178369abb5fa65c7bf432b;
}
function D6E530a9573198395bDB5822b82478E2()
{
    $D8dbdb2118a7a93a0eeb04fc548f2af4 = array();
    $D8dbdb2118a7a93a0eeb04fc548f2af4["cpu"] = intval(A072E3167C4fD73Eb67540546C961B7E());
    $D8dbdb2118a7a93a0eeb04fc548f2af4["cpu_cores"] = intval(shell_exec("cat /proc/cpuinfo | grep \"^processor\" | wc -l"));
    $D8dbdb2118a7a93a0eeb04fc548f2af4["cpu_avg"] = intval(sys_getloadavg()[0] * 100 / $D8dbdb2118a7a93a0eeb04fc548f2af4["cpu_cores"]);
    if (!($D8dbdb2118a7a93a0eeb04fc548f2af4["cpu_avg"] > 100)) {
        goto c7748cfcc6df7f2d5d8ece7b05fc850e;
    }
    $D8dbdb2118a7a93a0eeb04fc548f2af4["cpu_avg"] = 100;
    c7748cfcc6df7f2d5d8ece7b05fc850e:
    $b05334022f117f99e07e10e7120b3707 = (int) trim(shell_exec("free | grep -c available"));
    if ($b05334022f117f99e07e10e7120b3707 == 0) {
        $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem"] = intval(shell_exec("/usr/bin/free -tk | grep -i Mem: | awk '{print \$2}'"));
        $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem_free"] = intval(shell_exec("/usr/bin/free -tk | grep -i Mem: | awk '{print \$4+\$6+\$7}'"));
        goto df62c9fd5763305cab62d4cb7d58f4db;
    }
    $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem"] = intval(shell_exec("/usr/bin/free -tk | grep -i Mem: | awk '{print \$2}'"));
    $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem_free"] = intval(shell_exec("/usr/bin/free -tk | grep -i Mem: | awk '{print \$7}'"));
    df62c9fd5763305cab62d4cb7d58f4db:
    $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem_used"] = $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem"] - $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem_free"];
    $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem_used_percent"] = (int) $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem_used"] / $D8dbdb2118a7a93a0eeb04fc548f2af4["total_mem"] * 100;
    $D8dbdb2118a7a93a0eeb04fc548f2af4["total_disk_space"] = disk_total_space(IPTV_PANEL_DIR);
    $D8dbdb2118a7a93a0eeb04fc548f2af4["uptime"] = B46EFa30b8Cf4A7596D9d54730Adb795();
    $D8dbdb2118a7a93a0eeb04fc548f2af4["total_running_streams"] = shell_exec("ps ax | grep -v grep | grep ffmpeg | grep -c FFMPEG_PATH");
    $d0d324f3dbb8bbc5fff56e8a848beb7a = A78bf8D35765bE2408c50712CE7a43AD::$StreamingServers[SERVER_ID]["network_interface"];
    $D8dbdb2118a7a93a0eeb04fc548f2af4["bytes_sent"] = 0;
    $D8dbdb2118a7a93a0eeb04fc548f2af4["bytes_received"] = 0;
    if (!file_exists("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/tx_bytes")) {
        goto f4c04f8cdfcfe0fdb1d38bf694495245;
    }
    $b10021b298f7d4ce2f8e80315325fa1a = trim(file_get_contents("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/tx_bytes"));
    $C5b51b10f98c22fb985e90c23eade263 = trim(file_get_contents("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/rx_bytes"));
    sleep(1);
    $e54a6ff3afc52767cdd38f62ab4c38d1 = trim(file_get_contents("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/tx_bytes"));
    $d1a978924624c41845605404ded7e846 = trim(file_get_contents("/sys/class/net/{$d0d324f3dbb8bbc5fff56e8a848beb7a}/statistics/rx_bytes"));
    $c01d5077f34dc0ef046a6efa9e8e24f4 = round(($e54a6ff3afc52767cdd38f62ab4c38d1 - $b10021b298f7d4ce2f8e80315325fa1a) / 1024 * 0.0078125, 2);
    $B5490c2f61c894c091e04441954a0f09 = round(($d1a978924624c41845605404ded7e846 - $C5b51b10f98c22fb985e90c23eade263) / 1024 * 0.0078125, 2);
    $D8dbdb2118a7a93a0eeb04fc548f2af4["bytes_sent"] = $c01d5077f34dc0ef046a6efa9e8e24f4;
    $D8dbdb2118a7a93a0eeb04fc548f2af4["bytes_received"] = $B5490c2f61c894c091e04441954a0f09;
    f4c04f8cdfcfe0fdb1d38bf694495245:
    $D8dbdb2118a7a93a0eeb04fc548f2af4["cpu_load_average"] = sys_getloadavg()[0];
    return $D8dbdb2118a7a93a0eeb04fc548f2af4;
}
function e6A2B39B5861D06ca4034887864A5Fb5()
{
    $f93d929641c6b747360282c4db5c91dd = array("/iphone/i" => "iPhone", "/ipod/i" => "iPod", "/ipad/i" => "iPad", "/android/i" => "Android", "/blackberry/i" => "BlackBerry", "/webos/i" => "Mobile");
    foreach ($f93d929641c6b747360282c4db5c91dd as $Ce397562fcf2ed0fca47e4a48152c1ff => $f543392c71508ec7c2555f6fc8d3294d) {
        if (!preg_match($Ce397562fcf2ed0fca47e4a48152c1ff, $_SERVER["HTTP_USER_AGENT"])) {
        }
        return true;
    }
    return false;
}
function c39eD4eaD88eD7C28c7C17F4FBb37669($e651d3327c00dab0032bac22e53d91e5, $E7cca48cfca85fc445419a32d7d8f973, $a1daec950dd361ae639ad3a57dc018c0)
{
    $Af301a166badb15e0b00336d72fb9497 = array();
    B437c8Ac70D749dAD4936900DBa780F9($e651d3327c00dab0032bac22e53d91e5, $E7cca48cfca85fc445419a32d7d8f973, $a1daec950dd361ae639ad3a57dc018c0, $Af301a166badb15e0b00336d72fb9497);
    return $Af301a166badb15e0b00336d72fb9497;
}
function B437c8AC70D749Dad4936900dbA780f9($e651d3327c00dab0032bac22e53d91e5, $E7cca48cfca85fc445419a32d7d8f973, $a1daec950dd361ae639ad3a57dc018c0, &$Af301a166badb15e0b00336d72fb9497)
{
    if (is_array($e651d3327c00dab0032bac22e53d91e5)) {
        if (!(isset($e651d3327c00dab0032bac22e53d91e5[$E7cca48cfca85fc445419a32d7d8f973]) && $e651d3327c00dab0032bac22e53d91e5[$E7cca48cfca85fc445419a32d7d8f973] == $a1daec950dd361ae639ad3a57dc018c0)) {
            goto C8905f5605a877565e9fc933f8b06bdf;
        }
        $Af301a166badb15e0b00336d72fb9497[] = $e651d3327c00dab0032bac22e53d91e5;
        C8905f5605a877565e9fc933f8b06bdf:
        foreach ($e651d3327c00dab0032bac22e53d91e5 as $cf893362b341e42756ec3a6055a2bb5f) {
            b437c8Ac70d749dad4936900DBA780f9($cf893362b341e42756ec3a6055a2bb5f, $E7cca48cfca85fc445419a32d7d8f973, $a1daec950dd361ae639ad3a57dc018c0, $Af301a166badb15e0b00336d72fb9497);
        }
        // [PHPDeobfuscator] Implied return
        return;
    }
    return;
}
function BBd9e78AC32626E138e758e840305a7C($e5ececd623496efd3a17d36d4eb4b945, $Af218a53429705d6e319475a2185cd90 = 600)
{
    if (!file_exists($e5ececd623496efd3a17d36d4eb4b945)) {
        goto ebc039a7a89bdc10d5c3464749c6e209;
    }
    $Bc7d327b1510891329ca9859db27320f = trim(file_get_contents($e5ececd623496efd3a17d36d4eb4b945));
    if (!file_exists("/proc/" . $Bc7d327b1510891329ca9859db27320f)) {
        goto f8575d2ecabf2a9124d1acc4daad6e06;
    }
    if (!(time() - filemtime($e5ececd623496efd3a17d36d4eb4b945) < $Af218a53429705d6e319475a2185cd90)) {
        posix_kill($Bc7d327b1510891329ca9859db27320f, 9);
        f8575d2ecabf2a9124d1acc4daad6e06:
        ebc039a7a89bdc10d5c3464749c6e209:
        file_put_contents($e5ececd623496efd3a17d36d4eb4b945, getmypid());
        return false;
    }
    die("Running...");
}
function D9F93B7c177e377D0BbfE315eAeAE505()
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    if (!(a78BF8D35765Be2408c50712cE7A43ad::$settings["flood_limit"] == 0)) {
        $f4889efa84e1f2e30e5e9780973f68cb = Cd89785224751ccA8017139DAF9E891e::E1f75a50F74a8f4E2129BA474f45D670();
        if (!(empty($f4889efa84e1f2e30e5e9780973f68cb) || in_array($f4889efa84e1f2e30e5e9780973f68cb, Cd89785224751ccA8017139Daf9E891e::AB69E1103c96ee33fE21A6453d788925()))) {
            $d07f0d12ec3e6a615c9e2128f53c0021 = array_filter(array_unique(explode(",", A78Bf8d35765bE2408C50712Ce7A43aD::$settings["flood_ips_exclude"])));
            if (!in_array($f4889efa84e1f2e30e5e9780973f68cb, $d07f0d12ec3e6a615c9e2128f53c0021)) {
                $b63b894b2f9b5aabe135ef4a17f2aed8 = TMP_DIR . $f4889efa84e1f2e30e5e9780973f68cb . ".flood";
                if (file_exists($b63b894b2f9b5aabe135ef4a17f2aed8)) {
                    $Fa6f56ee50a6331b464fdee0f2d47c94 = json_decode(file_get_contents($b63b894b2f9b5aabe135ef4a17f2aed8), true);
                    $E2d3cbb540b5d181229a8dd8556edb4e = a78BF8D35765be2408C50712cE7A43ad::$settings["flood_seconds"];
                    $Fb18c9917ee3e7aa4417a4f60504a9b5 = A78BF8D35765bE2408C50712CE7A43Ad::$settings["flood_limit"];
                    if (time() - $Fa6f56ee50a6331b464fdee0f2d47c94["last_request"] <= $E2d3cbb540b5d181229a8dd8556edb4e) {
                        ++$Fa6f56ee50a6331b464fdee0f2d47c94["requests"];
                        if (!($Fa6f56ee50a6331b464fdee0f2d47c94["requests"] >= $Fb18c9917ee3e7aa4417a4f60504a9b5)) {
                            $Fa6f56ee50a6331b464fdee0f2d47c94["last_request"] = time();
                            file_put_contents($b63b894b2f9b5aabe135ef4a17f2aed8, json_encode($Fa6f56ee50a6331b464fdee0f2d47c94), LOCK_EX);
                            goto f091ce3b538bbffab5be74d0a4487d00;
                        }
                        $f566700a43ee8e1f0412fe10fbdf03df->query("INSERT INTO `blocked_ips` (`ip`,`notes`,`date`) VALUES('%s','%s','%d')", $f4889efa84e1f2e30e5e9780973f68cb, "FLOOD ATTACK", time());
                        A7785208D901bEa02B65446067CFd0B3::F320B6A3920944D8a18D7949c8abAcE4(array_keys(a78BF8D35765be2408c50712cE7A43ad::$StreamingServers), "sudo /sbin/iptables -A INPUT -s {$f4889efa84e1f2e30e5e9780973f68cb} -j DROP");
                        unlink($b63b894b2f9b5aabe135ef4a17f2aed8);
                        return;
                    }
                    $Fa6f56ee50a6331b464fdee0f2d47c94["requests"] = 0;
                    $Fa6f56ee50a6331b464fdee0f2d47c94["last_request"] = time();
                    file_put_contents($b63b894b2f9b5aabe135ef4a17f2aed8, json_encode($Fa6f56ee50a6331b464fdee0f2d47c94), LOCK_EX);
                    f091ce3b538bbffab5be74d0a4487d00:
                    goto D3bbdde88da38595dc683e7b767a18d7;
                }
                file_put_contents($b63b894b2f9b5aabe135ef4a17f2aed8, json_encode(array("requests" => 0, "last_request" => time())), LOCK_EX);
                D3bbdde88da38595dc683e7b767a18d7:
                // [PHPDeobfuscator] Implied return
                return;
            }
            return;
        }
        return;
    }
    return;
}
function b66dac37e77D0B4B60e2De1e5e4FA184($ba85d77d367dcebfcc2a3db9e83bb581, $ea6531b28219f4f71cfd02aec23a0f33 = false)
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT `type`,`movie_propeties`,`epg_id`,`channel_id` FROM `streams` WHERE `id` = '%d'", $ba85d77d367dcebfcc2a3db9e83bb581);
    if (!($f566700a43ee8e1f0412fe10fbdf03df->d1E5cE3B87BB868B9E6eFD39aA355a4F() > 0)) {
        d0da93c2b7fc23cc794b9a4d36f08f4c:
        return array();
    }
    $d76067cf9572f7a6691c85c12faf2a29 = $f566700a43ee8e1f0412fe10fbdf03df->f1eD191d78470660eDff4a007696BC1f();
    if ($d76067cf9572f7a6691c85c12faf2a29["type"] != 2) {
        if ($ea6531b28219f4f71cfd02aec23a0f33) {
            $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT * FROM `epg_data` WHERE `epg_id` = '%d' AND `channel_id` = '%s' AND `end` >= '%s'", $d76067cf9572f7a6691c85c12faf2a29["epg_id"], $d76067cf9572f7a6691c85c12faf2a29["channel_id"], date("Y-m-d H:i:00"));
            goto b2a5f34b506704a0b524a93cf2a84901;
        }
        $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT * FROM `epg_data` WHERE `epg_id` = '%d' AND `channel_id` = '%s'", $d76067cf9572f7a6691c85c12faf2a29["epg_id"], $d76067cf9572f7a6691c85c12faf2a29["channel_id"]);
        b2a5f34b506704a0b524a93cf2a84901:
        return $f566700a43ee8e1f0412fe10fbdf03df->C126fd559932F625CdF6098d86C63880();
    }
    return json_decode($d76067cf9572f7a6691c85c12faf2a29["movie_propeties"], true);
}
function a072E3167c4Fd73EB67540546C961B7e()
{
    $A00fdf3e17773cc697a9e9760a752e67 = intval(shell_exec("ps aux|awk 'NR > 0 { s +=\$3 }; END {print s}'"));
    $Beead58eb65f6a16b84a5d7f85a2dbd0 = intval(shell_exec("grep --count processor /proc/cpuinfo"));
    return intval($A00fdf3e17773cc697a9e9760a752e67 / $Beead58eb65f6a16b84a5d7f85a2dbd0);
}
function B9361CDF8F8f200F06F546758512060c($b25b89525a979cf56e2fd295b28327b8, $bad0c96fedbc6eccfe927016a4dc3cd6, $fca2439385f041f384419649ca2471d6, $d8ba920e2a1ba9839322c2bca0a7a741, $be29ac67a4314fc9435deb1462cae967, $a0bdfe2058b3579da2b71ebf929871e2, $Ba644b1066f7c673215de30d5ce5e62c, $B71eec623f2edcac610184525828cc2d, $f429d0e47085017e3f1e415952e44cba, $A6dde9bd7afc06231a1481ec56fd5768, $f34a0094f9db3be3b99dd1eb1e9a3b6d, $A60fc3238902ec8f309d806e5a28e0f7)
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    $bad0c96fedbc6eccfe927016a4dc3cd6 = base64_encode(strtoupper(urldecode($bad0c96fedbc6eccfe927016a4dc3cd6)));
    $cfc7b4c8f12f119c2180693d0fa61648 = false;
    if (!(!$A6dde9bd7afc06231a1481ec56fd5768 && (!empty($fca2439385f041f384419649ca2471d6) || !empty($d8ba920e2a1ba9839322c2bca0a7a741) || !empty($be29ac67a4314fc9435deb1462cae967) || !empty($a0bdfe2058b3579da2b71ebf929871e2) || !empty($Ba644b1066f7c673215de30d5ce5e62c) || !empty($B71eec623f2edcac610184525828cc2d)))) {
        goto aae3695cb588ac90fbed968e4f4cad0b;
    }
    $cfc7b4c8f12f119c2180693d0fa61648 = true;
    aae3695cb588ac90fbed968e4f4cad0b:
    if (!(!$A6dde9bd7afc06231a1481ec56fd5768 && !$cfc7b4c8f12f119c2180693d0fa61648 && $f34a0094f9db3be3b99dd1eb1e9a3b6d != "stb" && $A60fc3238902ec8f309d806e5a28e0f7 != "set_fav" && file_exists("TMP_DIRstalker_" . md5($bad0c96fedbc6eccfe927016a4dc3cd6)))) {
        $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT * FROM `mag_devices` t1\r\n                      INNER JOIN `users` t2 ON t2.id = t1.user_id\r\n                      WHERE t1.`mac` = '%s'\r\n                      LIMIT 1", $bad0c96fedbc6eccfe927016a4dc3cd6);
        if ($f566700a43ee8e1f0412fe10fbdf03df->D1E5cE3b87BB868B9e6EfD39Aa355a4F() > 0) {
            $E574ed349c1c464172b5a4221afe809e = $f566700a43ee8e1f0412fe10fbdf03df->f1ed191d78470660edFF4a007696Bc1f();
            $E574ed349c1c464172b5a4221afe809e["allowed_ips"] = json_decode($E574ed349c1c464172b5a4221afe809e["allowed_ips"], true);
            if (!($E574ed349c1c464172b5a4221afe809e["admin_enabled"] == 0 || $E574ed349c1c464172b5a4221afe809e["enabled"] == 0)) {
                if (!(!empty($E574ed349c1c464172b5a4221afe809e["exp_date"]) && time() > $E574ed349c1c464172b5a4221afe809e["exp_date"])) {
                    if (!(!empty($E574ed349c1c464172b5a4221afe809e["allowed_ips"]) && !in_array($f429d0e47085017e3f1e415952e44cba, array_map("gethostbyname", $E574ed349c1c464172b5a4221afe809e["allowed_ips"])))) {
                        if (!$cfc7b4c8f12f119c2180693d0fa61648) {
                            goto A10e1b903050ad34be0afdb2c57473f7;
                        }
                        $f566700a43ee8e1f0412fe10fbdf03df->query("UPDATE `mag_devices` SET `ver` = '%s' WHERE `mag_id` = '%d'", $fca2439385f041f384419649ca2471d6, $E574ed349c1c464172b5a4221afe809e["mag_id"]);
                        if (!(!empty(A78bf8D35765bE2408c50712cE7a43aD::$settings["allowed_stb_types"]) && !in_array(strtolower($d8ba920e2a1ba9839322c2bca0a7a741), a78BF8D35765BE2408C50712CE7A43Ad::$settings["allowed_stb_types"]))) {
                            if (!($E574ed349c1c464172b5a4221afe809e["lock_device"] == 1 && !empty($E574ed349c1c464172b5a4221afe809e["sn"]) && $E574ed349c1c464172b5a4221afe809e["sn"] !== $b25b89525a979cf56e2fd295b28327b8)) {
                                if (!($E574ed349c1c464172b5a4221afe809e["lock_device"] == 1 && !empty($E574ed349c1c464172b5a4221afe809e["device_id"]) && $E574ed349c1c464172b5a4221afe809e["device_id"] !== $a0bdfe2058b3579da2b71ebf929871e2)) {
                                    if (!($E574ed349c1c464172b5a4221afe809e["lock_device"] == 1 && !empty($E574ed349c1c464172b5a4221afe809e["device_id2"]) && $E574ed349c1c464172b5a4221afe809e["device_id2"] !== $Ba644b1066f7c673215de30d5ce5e62c)) {
                                        if (!($E574ed349c1c464172b5a4221afe809e["lock_device"] == 1 && !empty($E574ed349c1c464172b5a4221afe809e["hw_version"]) && $E574ed349c1c464172b5a4221afe809e["hw_version"] !== $B71eec623f2edcac610184525828cc2d)) {
                                            if (!(!empty(A78BF8D35765be2408C50712Ce7A43AD::$settings["stalker_lock_images"]) && !in_array($fca2439385f041f384419649ca2471d6, A78bF8D35765bE2408c50712CE7a43aD::$settings["stalker_lock_images"]))) {
                                                $ded15b7e9c47ec5a3dea3c69332153c8 = new Ea991Ba3ec74F0Fb90Acc94C2d2dE518(GEOIP2_FILENAME);
                                                $A75f2436a5614184bfe3442ddd050ec5 = $ded15b7e9c47ec5a3dea3c69332153c8->c6A76952b4cef18F3C98C0E6A9Dd1274($f429d0e47085017e3f1e415952e44cba)["registered_country"]["iso_code"];
                                                $ded15b7e9c47ec5a3dea3c69332153c8->close();
                                                if (empty($A75f2436a5614184bfe3442ddd050ec5)) {
                                                    goto eb684ba79560e6a58d57e89cf6a1afc3;
                                                }
                                                $ab59908f6050f752836a953eb8bb8e52 = !empty($E574ed349c1c464172b5a4221afe809e["forced_country"]) ? true : false;
                                                if (!($ab59908f6050f752836a953eb8bb8e52 && $E574ed349c1c464172b5a4221afe809e["forced_country"] != "ALL" && $A75f2436a5614184bfe3442ddd050ec5 != $E574ed349c1c464172b5a4221afe809e["forced_country"] || !$ab59908f6050f752836a953eb8bb8e52 && !in_array("ALL", a78bF8d35765Be2408C50712ce7a43Ad::$settings["allow_countries"]) && !in_array($A75f2436a5614184bfe3442ddd050ec5, a78bF8D35765bE2408C50712CE7a43aD::$settings["allow_countries"]))) {
                                                    eb684ba79560e6a58d57e89cf6a1afc3:
                                                    $f566700a43ee8e1f0412fe10fbdf03df->query("UPDATE `mag_devices` SET `ip` = '%s',`stb_type` = '%s',`sn` = '%s',`ver` = '%s',`image_version` = '%s',`device_id` = '%s',`device_id2` = '%s',`hw_version` = '%s' WHERE `mag_id` = '%d'", $f429d0e47085017e3f1e415952e44cba, htmlentities($d8ba920e2a1ba9839322c2bca0a7a741), htmlentities($b25b89525a979cf56e2fd295b28327b8), htmlentities($fca2439385f041f384419649ca2471d6), htmlentities($be29ac67a4314fc9435deb1462cae967), htmlentities($a0bdfe2058b3579da2b71ebf929871e2), htmlentities($Ba644b1066f7c673215de30d5ce5e62c), htmlentities($B71eec623f2edcac610184525828cc2d), $E574ed349c1c464172b5a4221afe809e["mag_id"]);
                                                    A10e1b903050ad34be0afdb2c57473f7:
                                                    $E574ed349c1c464172b5a4221afe809e["fav_channels"] = !empty($E574ed349c1c464172b5a4221afe809e["fav_channels"]) ? json_decode($E574ed349c1c464172b5a4221afe809e["fav_channels"], true) : array();
                                                    if (!empty($E574ed349c1c464172b5a4221afe809e["fav_channels"]["live"])) {
                                                        goto e12ced7271e7f860c033a5303f2d249b;
                                                    }
                                                    $E574ed349c1c464172b5a4221afe809e["fav_channels"]["live"] = array();
                                                    e12ced7271e7f860c033a5303f2d249b:
                                                    if (!empty($E574ed349c1c464172b5a4221afe809e["fav_channels"]["movie"])) {
                                                        goto a88af110f8dba0d30662b218aaaf37e7;
                                                    }
                                                    $E574ed349c1c464172b5a4221afe809e["fav_channels"]["movie"] = array();
                                                    a88af110f8dba0d30662b218aaaf37e7:
                                                    if (!empty($E574ed349c1c464172b5a4221afe809e["fav_channels"]["radio_streams"])) {
                                                        goto A6f07601ef8da79462d626b4a9b173bb;
                                                    }
                                                    $E574ed349c1c464172b5a4221afe809e["fav_channels"]["radio_streams"] = array();
                                                    A6f07601ef8da79462d626b4a9b173bb:
                                                    $E574ed349c1c464172b5a4221afe809e["get_profile_vars"] = $E574ed349c1c464172b5a4221afe809e;
                                                    unset($E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["use_embedded_settings"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["mag_id"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["user_id"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["ver"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["sn"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["device_id"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["device_id2"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["spdif_mode"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["mag_player"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["fav_channels"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["token"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["lock_device"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["member_id"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["username"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["exp_date"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["admin_enabled"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["enabled"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["admin_notes"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["reseller_notes"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["bouquet"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["max_connections"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["is_restreamer"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["allowed_ips"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["allowed_ua"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["is_trial"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["created_at"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["created_by"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["pair_id"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["is_mag"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["is_e2"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["force_server_id"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["is_isplock"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["as_number"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["isp_desc"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["forced_country"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["is_stalker"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["bypass_ua"], $E574ed349c1c464172b5a4221afe809e["get_profile_vars"]["expires"]);
                                                    $E574ed349c1c464172b5a4221afe809e["mag_player"] = trim($E574ed349c1c464172b5a4221afe809e["mag_player"]);
                                                    file_put_contents("TMP_DIRstalker_" . md5($bad0c96fedbc6eccfe927016a4dc3cd6), json_encode($E574ed349c1c464172b5a4221afe809e));
                                                    return $E574ed349c1c464172b5a4221afe809e;
                                                }
                                                return false;
                                            }
                                            return false;
                                        }
                                        return false;
                                    }
                                    return false;
                                }
                                return false;
                            }
                            return false;
                        }
                        return false;
                    }
                    return false;
                }
                return false;
            }
            return false;
        }
        file_put_contents("TMP_DIRstalker_" . md5($bad0c96fedbc6eccfe927016a4dc3cd6), json_encode(array()));
        return false;
    }
    $a4b23a5f1ec2a1b113ea488d60c770d8 = json_decode(file_get_contents("TMP_DIRstalker_" . md5($bad0c96fedbc6eccfe927016a4dc3cd6)), true);
    return empty($a4b23a5f1ec2a1b113ea488d60c770d8) ? false : $a4b23a5f1ec2a1b113ea488d60c770d8;
}
function b303f4b9bCFA8d2FfC2Ae41c5d2aA387($a28758c1ab974badfc544e11aaf19a57 = null)
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    if (is_string($a28758c1ab974badfc544e11aaf19a57)) {
        $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT t1.* FROM `stream_categories` t1 WHERE t1.category_type = '%s' GROUP BY t1.id ORDER BY t1.cat_order ASC", $a28758c1ab974badfc544e11aaf19a57);
        goto C951fe738f03d604f9e48ec14fc4a677;
    }
    $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT t1.* FROM `stream_categories` t1 ORDER BY t1.cat_order ASC");
    C951fe738f03d604f9e48ec14fc4a677:
    return $f566700a43ee8e1f0412fe10fbdf03df->D1e5CE3B87bb868B9e6efd39Aa355A4f() > 0 ? $f566700a43ee8e1f0412fe10fbdf03df->c126fd559932F625Cdf6098d86c63880(true, "id") : array();
}
function AfFb052CcA396818D81004fF99Db49AA()
{
    return substr(md5(A78bf8D35765BE2408c50712CE7a43AD::$settings["unique_id"]), 0, 15);
}
function Ea3020592126F8e67C0825492484aEF2($E38668abaa324e464e266fb7b7e784b1, $eb44bb017bb845b562c754c6978bad18, $bca72c242cf770f855c0eae8936335b7 = "ts", $dc26923f689872c2291d72d47eb689c9 = false)
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    if (!empty($eb44bb017bb845b562c754c6978bad18)) {
        if (!($bca72c242cf770f855c0eae8936335b7 == "mpegts")) {
            goto a39f5e1a3034de567870ab56475771c4;
        }
        $bca72c242cf770f855c0eae8936335b7 = "ts";
        a39f5e1a3034de567870ab56475771c4:
        if (!false) {
            goto b67614b1e687d089d4e699e0628797cd;
        }
        $bca72c242cf770f855c0eae8936335b7 = "m3u8";
        b67614b1e687d089d4e699e0628797cd:
        if (empty($bca72c242cf770f855c0eae8936335b7)) {
            $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT t1.output_ext FROM `access_output` t1 INNER JOIN `devices` t2 ON t2.default_output = t1.access_output_id AND `device_key` = '%s'", $eb44bb017bb845b562c754c6978bad18);
            goto A577969077bf746bcc8e4b27faf64737;
        }
        $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT t1.output_ext FROM `access_output` t1 WHERE `output_key` = '%s'", $bca72c242cf770f855c0eae8936335b7);
        A577969077bf746bcc8e4b27faf64737:
        if (!($f566700a43ee8e1f0412fe10fbdf03df->d1E5ce3b87BB868b9e6efD39aA355a4F() <= 0)) {
            $ef5e5003fbec0abe0a64a7638470e9fd = $f566700a43ee8e1f0412fe10fbdf03df->b98CE8b3899e362093173CC5eB4146b9();
            $a8df9f055e91a1e9240230b69af85555 = cD89785224751cCA8017139dAF9E891e::E5550592AA298dD1d5ee59cdcE063a12($E38668abaa324e464e266fb7b7e784b1, null, null, true, true, false);
            if (!empty($a8df9f055e91a1e9240230b69af85555)) {
                if (!(!empty($a8df9f055e91a1e9240230b69af85555["exp_date"]) && time() >= $a8df9f055e91a1e9240230b69af85555["exp_date"])) {
                    if (A78Bf8d35765Be2408C50712ce7A43Ad::$settings["use_mdomain_in_lists"] == 1) {
                        $B6e64514a7c403d6db2d2ba8fa6fc2cb = a78BF8D35765bE2408C50712ce7A43ad::$StreamingServers[SERVER_ID]["site_url"];
                        goto e801a11e77fe89d778a9a35da9b43e3e;
                    }
                    list($C67d267db947e49f6df4c2c8f1f3a7e8, $B9037608c0d62641e46acd9b3d50eee8) = explode(":", $_SERVER["HTTP_HOST"]);
                    $B6e64514a7c403d6db2d2ba8fa6fc2cb = a78bF8d35765BE2408c50712cE7a43Ad::$StreamingServers[SERVER_ID]["server_protocol"] . "://" . $C67d267db947e49f6df4c2c8f1f3a7e8 . ":" . a78Bf8D35765Be2408c50712ce7a43aD::$StreamingServers[SERVER_ID]["request_port"] . "/";
                    e801a11e77fe89d778a9a35da9b43e3e:
                    $f53d081795585cc3a4de84113ceb7f31 = array();
                    if (!($bca72c242cf770f855c0eae8936335b7 == "rtmp")) {
                        goto Dbec9e468b5525a0cc17bd7369823dfb;
                    }
                    $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT t1.id,t2.server_id FROM \r\n                         `streams` t1\r\n                          INNER JOIN `streams_sys` t2 ON t2.stream_id = t1.id\r\n                          WHERE t1.rtmp_output = 1");
                    $f53d081795585cc3a4de84113ceb7f31 = $f566700a43ee8e1f0412fe10fbdf03df->c126fd559932F625CdF6098D86C63880(true, "id", false, "server_id");
                    Dbec9e468b5525a0cc17bd7369823dfb:
                    if (!empty($ef5e5003fbec0abe0a64a7638470e9fd)) {
                        goto d5be913cbd8c06e0f23d033aadb27146;
                    }
                    $ef5e5003fbec0abe0a64a7638470e9fd = "ts";
                    d5be913cbd8c06e0f23d033aadb27146:
                    $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT t1.*,t2.*\r\n                              FROM `devices` t1\r\n                              LEFT JOIN `access_output` t2 ON t2.access_output_id = t1.default_output\r\n                              WHERE t1.device_key = '%s' LIMIT 1", $eb44bb017bb845b562c754c6978bad18);
                    if (!($f566700a43ee8e1f0412fe10fbdf03df->D1e5ce3b87BB868b9E6eFd39aa355A4f() > 0)) {
                        return false;
                    }
                    $ef2191c41d898dd4d2c297b9115d985d = $f566700a43ee8e1f0412fe10fbdf03df->F1ED191D78470660EDFF4A007696bC1F();
                    $d76067cf9572f7a6691c85c12faf2a29 = '';
                    if (empty($a8df9f055e91a1e9240230b69af85555["series_ids"])) {
                        goto F6539e58ef2903f80540f578456807f8;
                    }
                    $deff942ee62f1e5c2c16d11aee464729 = A78BF8d35765be2408c50712ce7a43aD::DcA7Aa6Db7C4ce371e41571a19bcE930();
                    foreach ($deff942ee62f1e5c2c16d11aee464729 as $acb1d10773fb0d1b6ac8cf2c16ecf1b5 => $A0766c7ec9b7cbc336d730454514b34f) {
                        if (in_array($acb1d10773fb0d1b6ac8cf2c16ecf1b5, $a8df9f055e91a1e9240230b69af85555["series_ids"])) {
                            foreach ($A0766c7ec9b7cbc336d730454514b34f["series_data"] as $c59070c3eab15fea2abe4546ccf476de => $E86ff017778d0dc804add84ab1be9052) {
                                $e831c6d2f20288c01902323cccc3733a = 0;
                                foreach ($E86ff017778d0dc804add84ab1be9052 as $ba85d77d367dcebfcc2a3db9e83bb581 => $a14a8f906639aa7f5509518ff935b8f0) {
                                    $movie_properties = A78bf8d35765Be2408c50712CE7a43aD::CAdeb9125b2E81B183688842C5Ac3ad7($ba85d77d367dcebfcc2a3db9e83bb581);
                                    $a14a8f906639aa7f5509518ff935b8f0["live"] = 0;
                                    if (a78bF8D35765Be2408c50712Ce7A43AD::$settings["series_custom_name"] == 0) {
                                        $a14a8f906639aa7f5509518ff935b8f0["stream_display_name"] = $A0766c7ec9b7cbc336d730454514b34f["title"] . " S" . sprintf("%02d", $c59070c3eab15fea2abe4546ccf476de) . " E" . sprintf("%02d", ++$e831c6d2f20288c01902323cccc3733a);
                                        goto b034a615d810ae5e6d5a7dbe75f54df7;
                                    }
                                    $a14a8f906639aa7f5509518ff935b8f0["stream_display_name"] = $A0766c7ec9b7cbc336d730454514b34f["title"] . " S" . sprintf("%02d", $c59070c3eab15fea2abe4546ccf476de) . " {$a14a8f906639aa7f5509518ff935b8f0["stream_display_name"]}";
                                    b034a615d810ae5e6d5a7dbe75f54df7:
                                    $a14a8f906639aa7f5509518ff935b8f0["movie_propeties"] = array("movie_image" => !empty($movie_properties["movie_image"]) ? $movie_properties["movie_image"] : $A0766c7ec9b7cbc336d730454514b34f["cover"]);
                                    $a14a8f906639aa7f5509518ff935b8f0["type_output"] = "series";
                                    $a14a8f906639aa7f5509518ff935b8f0["category_name"] = $A0766c7ec9b7cbc336d730454514b34f["category_name"];
                                    $a14a8f906639aa7f5509518ff935b8f0["id"] = $ba85d77d367dcebfcc2a3db9e83bb581;
                                    $a8df9f055e91a1e9240230b69af85555["channels"][$ba85d77d367dcebfcc2a3db9e83bb581] = $a14a8f906639aa7f5509518ff935b8f0;
                                }
                            }
                            goto F8813f34d02942f67ad3dca0b5faccc7;
                        }
                        F8813f34d02942f67ad3dca0b5faccc7:
                    }
                    F6539e58ef2903f80540f578456807f8:
                    if ($eb44bb017bb845b562c754c6978bad18 == "starlivev5") {
                        $Edee2355c9dc9d29534485158df8e981 = array();
                        $Edee2355c9dc9d29534485158df8e981["iptvstreams_list"] = array();
                        $Edee2355c9dc9d29534485158df8e981["iptvstreams_list"]["@version"] = 1;
                        $Edee2355c9dc9d29534485158df8e981["iptvstreams_list"]["group"] = array();
                        $Edee2355c9dc9d29534485158df8e981["iptvstreams_list"]["group"]["name"] = "IPTV";
                        $Edee2355c9dc9d29534485158df8e981["iptvstreams_list"]["group"]["channel"] = array();
                        foreach ($a8df9f055e91a1e9240230b69af85555["channels"] as $ffb1e0970b62b01f46c2e57f2cded6c2) {
                            $f3f2a9f7d64ad754f9f888f441df853a = !isset($ffb1e0970b62b01f46c2e57f2cded6c2["movie_propeties"]) ? A78Bf8d35765be2408C50712cE7a43ad::CaDeb9125b2E81B183688842c5AC3Ad7($channel["id"]) : $ffb1e0970b62b01f46c2e57f2cded6c2["movie_propeties"];
                            if (!empty($ffb1e0970b62b01f46c2e57f2cded6c2["stream_source"])) {
                                $e3539ad64f4d9fc6c2e465986c622369 = str_replace(" ", "%20", json_decode($ffb1e0970b62b01f46c2e57f2cded6c2["stream_source"], true)[0]);
                                $C57b49d586c542242fa9bb22afa04cf8 = !empty($f3f2a9f7d64ad754f9f888f441df853a["movie_image"]) ? $f3f2a9f7d64ad754f9f888f441df853a["movie_image"] : $ffb1e0970b62b01f46c2e57f2cded6c2["stream_icon"];
                                goto C52122cd0a02f17a5c718ef1ee1b3f67;
                            }
                            $e3539ad64f4d9fc6c2e465986c622369 = $B6e64514a7c403d6db2d2ba8fa6fc2cb . "{$ffb1e0970b62b01f46c2e57f2cded6c2["type_output"]}/{$a8df9f055e91a1e9240230b69af85555["username"]}/{$a8df9f055e91a1e9240230b69af85555["password"]}/";
                            if ($ffb1e0970b62b01f46c2e57f2cded6c2["live"] == 0) {
                                $e3539ad64f4d9fc6c2e465986c622369 .= $ffb1e0970b62b01f46c2e57f2cded6c2["id"] . "." . dc53Ae228df72D4C140Fda7FD5E7e0Be($ffb1e0970b62b01f46c2e57f2cded6c2["target_container"]);
                                if (empty($f3f2a9f7d64ad754f9f888f441df853a["movie_image"])) {
                                    goto Addd4567e92abacbf75e399baf55e1f3;
                                }
                                $C57b49d586c542242fa9bb22afa04cf8 = $f3f2a9f7d64ad754f9f888f441df853a["movie_image"];
                                Addd4567e92abacbf75e399baf55e1f3:
                                goto c8303b0756d822e343b9686f41e601e4;
                            }
                            $e3539ad64f4d9fc6c2e465986c622369 .= $ffb1e0970b62b01f46c2e57f2cded6c2["id"] . "." . $ef5e5003fbec0abe0a64a7638470e9fd;
                            $C57b49d586c542242fa9bb22afa04cf8 = $ffb1e0970b62b01f46c2e57f2cded6c2["stream_icon"];
                            c8303b0756d822e343b9686f41e601e4:
                            C52122cd0a02f17a5c718ef1ee1b3f67:
                            $channel = array();
                            $channel["name"] = $ffb1e0970b62b01f46c2e57f2cded6c2["stream_display_name"];
                            $C57b49d586c542242fa9bb22afa04cf8 = '';
                            $channel["icon"] = $C57b49d586c542242fa9bb22afa04cf8;
                            $channel["stream_url"] = $e3539ad64f4d9fc6c2e465986c622369;
                            $channel["stream_type"] = 0;
                            $Edee2355c9dc9d29534485158df8e981["iptvstreams_list"]["group"]["channel"][] = $channel;
                        }
                        $d76067cf9572f7a6691c85c12faf2a29 = json_encode((object) $Edee2355c9dc9d29534485158df8e981);
                        goto B69945d8e2cdea9f1ecb0fc45b1f96a3;
                    }
                    if (empty($ef2191c41d898dd4d2c297b9115d985d["device_header"])) {
                        goto e0f27ef2f804ec8b79518118404559db;
                    }
                    $d76067cf9572f7a6691c85c12faf2a29 = str_replace(array("{BOUQUET_NAME}", "{USERNAME}", "{PASSWORD}", "{SERVER_URL}", "{OUTPUT_KEY}"), array(a78Bf8d35765bE2408c50712cE7a43aD::$settings["bouquet_name"], $a8df9f055e91a1e9240230b69af85555["username"], $a8df9f055e91a1e9240230b69af85555["password"], $B6e64514a7c403d6db2d2ba8fa6fc2cb, $bca72c242cf770f855c0eae8936335b7), $ef2191c41d898dd4d2c297b9115d985d["device_header"]) . "\n";
                    e0f27ef2f804ec8b79518118404559db:
                    if (empty($ef2191c41d898dd4d2c297b9115d985d["device_conf"])) {
                        goto e2eaed023f67c5152ffa086db60fd218;
                    }
                    if (preg_match("/\\{URL\\#(.*?)\\}/", $ef2191c41d898dd4d2c297b9115d985d["device_conf"], $ae37877cee3bc97c8cfa6ec5843993ed)) {
                        $e5cb656483e7536471dc8d1c0bab1ed0 = str_split($ae37877cee3bc97c8cfa6ec5843993ed[1]);
                        $e67cb10c8a14e132feaa115160c239e9 = $ae37877cee3bc97c8cfa6ec5843993ed[0];
                        goto C12a8d2b7f6732a9db1ed111ecf8548a;
                    }
                    $e5cb656483e7536471dc8d1c0bab1ed0 = array();
                    $e67cb10c8a14e132feaa115160c239e9 = "{URL}";
                    C12a8d2b7f6732a9db1ed111ecf8548a:
                    foreach ($a8df9f055e91a1e9240230b69af85555["channels"] as $channel) {
                        $f3f2a9f7d64ad754f9f888f441df853a = !isset($channel["movie_propeties"]) ? A78Bf8D35765Be2408c50712ce7A43ad::CADEb9125B2E81b183688842c5AC3AD7($channel["id"]) : $channel["movie_propeties"];
                        if (!empty($channel["stream_source"])) {
                            $e3539ad64f4d9fc6c2e465986c622369 = str_replace(" ", "%20", json_decode($channel["stream_source"], true)[0]);
                            $C57b49d586c542242fa9bb22afa04cf8 = !empty($f3f2a9f7d64ad754f9f888f441df853a["movie_image"]) ? $f3f2a9f7d64ad754f9f888f441df853a["movie_image"] : $channel["stream_icon"];
                            goto dcc5925e20dbb9fe7a8978922e22fbb0;
                        }
                        if ($channel["live"] == 0) {
                            $e3539ad64f4d9fc6c2e465986c622369 = $B6e64514a7c403d6db2d2ba8fa6fc2cb . "{$channel["type_output"]}/{$a8df9f055e91a1e9240230b69af85555["username"]}/{$a8df9f055e91a1e9240230b69af85555["password"]}/{$channel["id"]}." . Dc53aE228dF72D4C140FDa7Fd5E7e0bE($channel["target_container"]);
                            if (empty($f3f2a9f7d64ad754f9f888f441df853a["movie_image"])) {
                                goto Dad2d00d1970077c3f0eae4d246626f5;
                            }
                            $C57b49d586c542242fa9bb22afa04cf8 = $f3f2a9f7d64ad754f9f888f441df853a["movie_image"];
                            Dad2d00d1970077c3f0eae4d246626f5:
                            goto a2fc779e36bed5687953a97912601ac0;
                        }
                        if ($bca72c242cf770f855c0eae8936335b7 != "rtmp" || !array_key_exists($channel["id"], $f53d081795585cc3a4de84113ceb7f31)) {
                            if (!file_exists("TMP_DIRnew_rewrite") || $ef5e5003fbec0abe0a64a7638470e9fd != "ts") {
                                $e3539ad64f4d9fc6c2e465986c622369 = $B6e64514a7c403d6db2d2ba8fa6fc2cb . "{$channel["type_output"]}/{$a8df9f055e91a1e9240230b69af85555["username"]}/{$a8df9f055e91a1e9240230b69af85555["password"]}/{$channel["id"]}.{$ef5e5003fbec0abe0a64a7638470e9fd}";
                                goto eb01a63ff8469a5088c7edfc7391de87;
                            }
                            $e3539ad64f4d9fc6c2e465986c622369 = $B6e64514a7c403d6db2d2ba8fa6fc2cb . "{$a8df9f055e91a1e9240230b69af85555["username"]}/{$a8df9f055e91a1e9240230b69af85555["password"]}/{$channel["id"]}";
                            eb01a63ff8469a5088c7edfc7391de87:
                            goto be057225076d5505b5d579abb5d2c939;
                        }
                        $e3215fa97db12812ee074d6c110dea4b = array_values(array_keys($f53d081795585cc3a4de84113ceb7f31[$channel["id"]]));
                        if (in_array($a8df9f055e91a1e9240230b69af85555["force_server_id"], $e3215fa97db12812ee074d6c110dea4b)) {
                            $e951d0b9610ba3624d06def5a541cb17 = $a8df9f055e91a1e9240230b69af85555["force_server_id"];
                            goto D5534d0f8c77b03d715fa5e23bbc60e3;
                        }
                        if (A78bf8D35765be2408c50712ce7a43ad::$settings["rtmp_random"] == 1) {
                            $e951d0b9610ba3624d06def5a541cb17 = $e3215fa97db12812ee074d6c110dea4b[array_rand($e3215fa97db12812ee074d6c110dea4b, 1)];
                            goto F8c695f5ee4f82952258ff819b620064;
                        }
                        $e951d0b9610ba3624d06def5a541cb17 = $e3215fa97db12812ee074d6c110dea4b[0];
                        F8c695f5ee4f82952258ff819b620064:
                        D5534d0f8c77b03d715fa5e23bbc60e3:
                        $e3539ad64f4d9fc6c2e465986c622369 = a78bF8d35765be2408C50712ce7A43Ad::$StreamingServers[$e951d0b9610ba3624d06def5a541cb17]["rtmp_server"] . "{$channel["id"]}?username={$a8df9f055e91a1e9240230b69af85555["username"]}&password={$a8df9f055e91a1e9240230b69af85555["password"]}";
                        be057225076d5505b5d579abb5d2c939:
                        $C57b49d586c542242fa9bb22afa04cf8 = $channel["stream_icon"];
                        a2fc779e36bed5687953a97912601ac0:
                        dcc5925e20dbb9fe7a8978922e22fbb0:
                        $aaf6a34b884488dd481a40d77442e482 = $channel["live"] == 1 ? 1 : 4097;
                        $a98ed0c1a9452fc6117e23a262acc7a9 = !empty($channel["custom_sid"]) ? $channel["custom_sid"] : ":0:1:0:0:0:0:0:0:0:";
                        $d76067cf9572f7a6691c85c12faf2a29 .= str_replace(array($e67cb10c8a14e132feaa115160c239e9, "{ESR_ID}", "{SID}", "{CHANNEL_NAME}", "{CHANNEL_ID}", "{CATEGORY}", "{CHANNEL_ICON}"), array(str_replace($e5cb656483e7536471dc8d1c0bab1ed0, array_map("urlencode", $e5cb656483e7536471dc8d1c0bab1ed0), $e3539ad64f4d9fc6c2e465986c622369), $aaf6a34b884488dd481a40d77442e482, $a98ed0c1a9452fc6117e23a262acc7a9, $channel["stream_display_name"], $channel["channel_id"], $channel["category_name"], $C57b49d586c542242fa9bb22afa04cf8), $ef2191c41d898dd4d2c297b9115d985d["device_conf"]) . "\r\n";
                    }
                    $d76067cf9572f7a6691c85c12faf2a29 .= $ef2191c41d898dd4d2c297b9115d985d["device_footer"];
                    $d76067cf9572f7a6691c85c12faf2a29 = trim($d76067cf9572f7a6691c85c12faf2a29);
                    e2eaed023f67c5152ffa086db60fd218:
                    B69945d8e2cdea9f1ecb0fc45b1f96a3:
                    if (!($dc26923f689872c2291d72d47eb689c9 === true)) {
                        return $d76067cf9572f7a6691c85c12faf2a29;
                    }
                    header("Content-Description: File Transfer");
                    header("Content-Type: application/octet-stream");
                    header("Expires: 0");
                    header("Cache-Control: must-revalidate");
                    header("Pragma: public");
                    header("Content-Disposition: attachment; filename=\"" . str_replace("{USERNAME}", $a8df9f055e91a1e9240230b69af85555["username"], $ef2191c41d898dd4d2c297b9115d985d["device_filename"]) . "\"");
                    header("Content-Length: " . strlen($d76067cf9572f7a6691c85c12faf2a29));
                    echo $d76067cf9572f7a6691c85c12faf2a29;
                    die;
                }
                return false;
            }
            return false;
        }
        return false;
    }
    return false;
}
function dc53ae228Df72d4C140FdA7FD5e7e0bE($F7c4b84b7a2fba7bcaf5f84d6e1fc2a0, $Ecfa3d1f4289bd1faf239b9e11f62c15 = false)
{
    $dc6dc3b07e01c13972dd7a2ce0e2dc9b = json_decode($F7c4b84b7a2fba7bcaf5f84d6e1fc2a0, true);
    if (is_array($dc6dc3b07e01c13972dd7a2ce0e2dc9b)) {
        $F7c4b84b7a2fba7bcaf5f84d6e1fc2a0 = array_map("strtolower", $dc6dc3b07e01c13972dd7a2ce0e2dc9b);
        Ca16165f5c2ab82407ed694cf92e1b6f:
        $a0f777034e80c9f10573d3a75b8b985e = $Ecfa3d1f4289bd1faf239b9e11f62c15 ? a78bF8d35765bE2408C50712Ce7A43aD::$settings["stalker_container_priority"] : a78bF8d35765be2408C50712cE7a43AD::$settings["gen_container_priority"];
        if (!is_array($a0f777034e80c9f10573d3a75b8b985e)) {
            goto E54e78b3d871058282dfec89c7621fb6;
        }
        foreach ($a0f777034e80c9f10573d3a75b8b985e as $E2e6656d8b1675f70c487f89e4f27a3b) {
            if (!in_array($E2e6656d8b1675f70c487f89e4f27a3b, $F7c4b84b7a2fba7bcaf5f84d6e1fc2a0)) {
            }
            return $E2e6656d8b1675f70c487f89e4f27a3b;
        }
        E54e78b3d871058282dfec89c7621fb6:
        return $F7c4b84b7a2fba7bcaf5f84d6e1fc2a0[0];
    }
    return $F7c4b84b7a2fba7bcaf5f84d6e1fc2a0;
}
function f0bb8dBEaB7fb0ECcCc0a73980dBF47A($ebe823668f9748302d3bd87782a71948, $e951d0b9610ba3624d06def5a541cb17 = null)
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    $a01910ab1eba20c93676f67da6eaa25a = '';
    if (empty($e951d0b9610ba3624d06def5a541cb17)) {
        goto dc769bc7eacf779a4505b5ac462aad61;
    }
    $a01910ab1eba20c93676f67da6eaa25a = "WHERE t1.server_id = '" . intval($e951d0b9610ba3624d06def5a541cb17) . "'";
    dc769bc7eacf779a4505b5ac462aad61:
    switch ($ebe823668f9748302d3bd87782a71948) {
        case "open":
            $b0f1eb357ed72245e03dfe6268912497 = "\r\n                SELECT t1.*,t2.*,t3.*,t5.bitrate\r\n                FROM `user_activity_now` t1\r\n                LEFT JOIN `users` t2 ON t2.id = t1.user_id\r\n                LEFT JOIN `streams` t3 ON t3.id = t1.stream_id\r\n                LEFT JOIN `streams_sys` t5 ON t5.stream_id = t1.stream_id AND t5.server_id = t1.server_id\r\n                {$a01910ab1eba20c93676f67da6eaa25a}\r\n                ORDER BY t1.activity_id ASC";
            goto Edb3c4254577cc645c6dbf87acf1147d;
        case "closed":
            $b0f1eb357ed72245e03dfe6268912497 = "\r\n                SELECT t1.*,t2.*,t3.*,t5.bitrate\r\n                FROM `user_activity` t1\r\n                LEFT JOIN `users` t2 ON t2.id = t1.user_id\r\n                LEFT JOIN `streams` t3 ON t3.id = t1.stream_id\r\n                LEFT JOIN `streams_sys` t5 ON t5.stream_id = t1.stream_id AND t5.server_id = t1.server_id\r\n                {$a01910ab1eba20c93676f67da6eaa25a}\r\n                ORDER BY t1.activity_id ASC";
            goto Edb3c4254577cc645c6dbf87acf1147d;
    }
    Edb3c4254577cc645c6dbf87acf1147d:
    $f566700a43ee8e1f0412fe10fbdf03df->query($b0f1eb357ed72245e03dfe6268912497);
    return $f566700a43ee8e1f0412fe10fbdf03df->C126fD559932F625CdF6098D86c63880(true, "user_id", false);
}
function ec2283305A3A0ABb64fab98987118fb7()
{
    if (!file_exists("TMP_DIRcrontab_refresh")) {
        $e5e98a959b8f162327993301f8322de2 = scandir(CRON_PATH);
        $C7a036331f31a9fa57fe3f8f68b5fc28 = array();
        foreach ($e5e98a959b8f162327993301f8322de2 as $Bdccf61a916022cc88d9f6f40f2e017d) {
            $b8426ef38804dd0b0fe9d5ed01afdf3e = CRON_PATH . $Bdccf61a916022cc88d9f6f40f2e017d;
            if (is_file($b8426ef38804dd0b0fe9d5ed01afdf3e)) {
                if (!(pathinfo($b8426ef38804dd0b0fe9d5ed01afdf3e, PATHINFO_EXTENSION) != "php")) {
                    if ($Bdccf61a916022cc88d9f6f40f2e017d != "epg.php") {
                        $Af218a53429705d6e319475a2185cd90 = "*/1 * * * *";
                        goto Db904413277b88b1c364bb547100ef5c;
                    }
                    $Af218a53429705d6e319475a2185cd90 = "0 1 * * *";
                    Db904413277b88b1c364bb547100ef5c:
                    $C7a036331f31a9fa57fe3f8f68b5fc28[] = "0 1 * * * PHP_BIN " . $b8426ef38804dd0b0fe9d5ed01afdf3e . " # Xtream-Codes IPTV Panel";
                    goto E51266b94c4da6e96f962ecb2aaab73e;
                }
                goto bd1f38014f47ae6ac7939ea778c93f0f;
            }
            E51266b94c4da6e96f962ecb2aaab73e:
            bd1f38014f47ae6ac7939ea778c93f0f:
        }
        $b201cbed374ba4e1d6c7c2705d56ca08 = trim(shell_exec("crontab -l"));
        if (!empty($b201cbed374ba4e1d6c7c2705d56ca08)) {
            $c021c29582e50e562166d105d561478a = explode("\n", $b201cbed374ba4e1d6c7c2705d56ca08);
            $c021c29582e50e562166d105d561478a = array_map("trim", $c021c29582e50e562166d105d561478a);
            if (!($c021c29582e50e562166d105d561478a == $C7a036331f31a9fa57fe3f8f68b5fc28)) {
                $A029b77634bf5f67a52c7d5b31aed706 = count($c021c29582e50e562166d105d561478a);
                $C48e0083a9caa391609a3c645a2ec889 = 0;
                Ecdbbe5a027e089bbfa832d3084ec6b7:
                if (!($C48e0083a9caa391609a3c645a2ec889 < $A029b77634bf5f67a52c7d5b31aed706)) {
                    foreach ($C7a036331f31a9fa57fe3f8f68b5fc28 as $C6866a0d5682188bf2fae0c2ec835d28) {
                        array_push($c021c29582e50e562166d105d561478a, $C6866a0d5682188bf2fae0c2ec835d28);
                    }
                    goto ccd34a9e8eba654d306c7f752c377adc;
                }
                if (!stripos($c021c29582e50e562166d105d561478a[$C48e0083a9caa391609a3c645a2ec889], CRON_PATH)) {
                    goto Bbf78c0a2e4176122f99b8c7501528ec;
                }
                unset($c021c29582e50e562166d105d561478a[$C48e0083a9caa391609a3c645a2ec889]);
                Bbf78c0a2e4176122f99b8c7501528ec:
                $C48e0083a9caa391609a3c645a2ec889++;
                goto Ecdbbe5a027e089bbfa832d3084ec6b7;
            }
            file_put_contents("TMP_DIRcrontab_refresh", 1);
            return true;
        }
        $c021c29582e50e562166d105d561478a = $C7a036331f31a9fa57fe3f8f68b5fc28;
        ccd34a9e8eba654d306c7f752c377adc:
        shell_exec("crontab -r");
        $E40c9ae95432e1c473499c726c93b87d = tempnam("/tmp", "crontab");
        $fb1d4f6290dabf126bb2eb152b0eb565 = fopen($E40c9ae95432e1c473499c726c93b87d, "w");
        fwrite($fb1d4f6290dabf126bb2eb152b0eb565, implode("\r\n", $c021c29582e50e562166d105d561478a) . "\r\n");
        fclose($fb1d4f6290dabf126bb2eb152b0eb565);
        shell_exec("crontab {$E40c9ae95432e1c473499c726c93b87d}");
        @unlink($E40c9ae95432e1c473499c726c93b87d);
        file_put_contents("TMP_DIRcrontab_refresh", 1);
        // [PHPDeobfuscator] Implied return
        return;
    }
    return false;
}
function Ce15043404Aa3e950Fc9c9dd8bc0325A($d408321c3d2f36c26d485366e0885d32, $D3b7378ea39c39f9d734834bc785a87e, $D3c32abd0d3bffc3578aff155e22d728)
{
    global $f566700a43ee8e1f0412fe10fbdf03df;
    $f566700a43ee8e1f0412fe10fbdf03df->query("SELECT * FROM `{$d408321c3d2f36c26d485366e0885d32}` WHERE `{$D3b7378ea39c39f9d734834bc785a87e}` = '%s'", $D3c32abd0d3bffc3578aff155e22d728);
    if (!($f566700a43ee8e1f0412fe10fbdf03df->D1e5Ce3B87bB868B9e6efD39aA355a4F() > 0)) {
        return false;
    }
    return true;
}
function B46efa30b8CF4A7596d9d54730ADB795()
{
    if (!(file_exists("/proc/uptime") and is_readable("/proc/uptime"))) {
        return '';
    }
    $dc6dc3b07e01c13972dd7a2ce0e2dc9b = explode(" ", file_get_contents("/proc/uptime"));
    return A569c892851b08f971E30637bbFB52A0(intval($dc6dc3b07e01c13972dd7a2ce0e2dc9b[0]));
}
function A569c892851b08f971E30637bbFb52a0($f5ad1804d1c7ab84ee4fb7c5bfa28a7c)
{
    $E65195c1b21c84440143004f1f8b3644 = 60;
    $D4c78a959ad4ae3f39c158d9ce0f5136 = 3600;
    $e4f7056e830147e819b1641529135723 = 86400;
    $da4ea135ff7dbc153c072cd4297e6e3e = (int) floor($f5ad1804d1c7ab84ee4fb7c5bfa28a7c / $e4f7056e830147e819b1641529135723);
    $e40a521faa1f7604fba36eb5e61cc1c5 = $f5ad1804d1c7ab84ee4fb7c5bfa28a7c % $e4f7056e830147e819b1641529135723;
    $fd8f2c4ad459c3f2b875636e5d3ac6a7 = (int) floor($e40a521faa1f7604fba36eb5e61cc1c5 / $D4c78a959ad4ae3f39c158d9ce0f5136);
    $A1e78a66b7ef9383b3d0160a7b21bfa6 = $e40a521faa1f7604fba36eb5e61cc1c5 % $D4c78a959ad4ae3f39c158d9ce0f5136;
    $Bc1d36e0762a7ca0e7cbaddd76686790 = (int) floor($A1e78a66b7ef9383b3d0160a7b21bfa6 / $E65195c1b21c84440143004f1f8b3644);
    $c87a2acfc5bd093a5a2514a83a1a926d = $A1e78a66b7ef9383b3d0160a7b21bfa6 % $E65195c1b21c84440143004f1f8b3644;
    $Ba3faa92a82fb2d1bb6bb866cb272fee = (int) ceil($c87a2acfc5bd093a5a2514a83a1a926d);
    $C459aadb04c1f82c97e7f5219221f61a = '';
    if (!($da4ea135ff7dbc153c072cd4297e6e3e != 0)) {
        goto ec16dd597633c950025d733cadd230ab;
    }
    $C459aadb04c1f82c97e7f5219221f61a .= "{$da4ea135ff7dbc153c072cd4297e6e3e}d ";
    ec16dd597633c950025d733cadd230ab:
    if (!($fd8f2c4ad459c3f2b875636e5d3ac6a7 != 0)) {
        goto c8149b5525fb0f539f068d1119fc9517;
    }
    $C459aadb04c1f82c97e7f5219221f61a .= "{$fd8f2c4ad459c3f2b875636e5d3ac6a7}h ";
    c8149b5525fb0f539f068d1119fc9517:
    if (!($Bc1d36e0762a7ca0e7cbaddd76686790 != 0)) {
        goto C7ae5b206c7a5a6b48632e1edf76dcdb;
    }
    $C459aadb04c1f82c97e7f5219221f61a .= "{$Bc1d36e0762a7ca0e7cbaddd76686790}m ";
    C7ae5b206c7a5a6b48632e1edf76dcdb:
    $C459aadb04c1f82c97e7f5219221f61a .= "{$Ba3faa92a82fb2d1bb6bb866cb272fee}s";
    return $C459aadb04c1f82c97e7f5219221f61a;
}
