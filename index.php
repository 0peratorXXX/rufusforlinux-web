<!DOCTYPE html>
<?
$latest_version = "0.1.0";
$latest_date = "2026.09.13";
$deb_size = 1.1;
$src_size = 7.5;
$nb_screenshots = 5;
$screenshot_height = "600px";
$screenshot_duration = 10000;
$langs = array(
	'en_IE' => array('en', '🇮🇪/🇬🇧/🇺🇸 English (International)'),
	'sq_AL' => array('sq', '🇦🇱 Albanian (Shqip)'),
	'ar_SA' => array('ar_SA', '🇸🇦 Arabic (العربية)'),
	'hy_AM' => array('hy', '🇦🇲 Armenian (Հայերեն)'),
	'az_AZ' => array('az', '🇦🇿 Azerbaijani (Azərbaycan)'),
	'bn_BD' => array('bn', '🇧🇩 Bangla (বাংলা)'),
	'bs_BA' => array('bs', '🇧🇦 Bosnian (Bosánski)'),
	'bg_BG' => array('bg', '🇧🇬 Bulgarian (Български)'),
	'yue_HK' => array('yue', '🇭🇰 Cantonese [Hong Kong] (香港粵文)'),
	'ca_ES' => array('ca', '🏴󠁥󠁳󠁣󠁴󠁿 Catalan (Català)'),
	'zh_CN' => array('zh_CN', '🇨🇳 Chinese Simplified (简体中文)'),
	'zh_TW' => array('zh_TW', '🇹🇼 Chinese Traditional (正體中文)'),
	'hr_HR' => array('hr', '🇭🇷 Croatian (Hrvatski)'),
	'cs_CZ' => array('cs', '🇨🇿 Czech (Čeština)'),
	'da_DK' => array('da', '🇩🇰 Danish (Dansk)'),
	'nl_NL' => array('nl', '🇳🇱 Dutch (Nederlands)'),
	'et_EE' => array('et', '🇪🇪 Estonian (eesti keel)'),
	'fil_PH' => array('fil', '🇵🇭 Filipino (Wikang Filipino)'),
	'fi_FI' => array('fi', '🇫🇮 Finnish (Suomi)'),
	'fr_FR' => array('fr', '🇫🇷 French (Français)'),
	'gl_ES' => array('gl', '🏴󠁥󠁳󠁧󠁡󠁿 Galician (Galego)'),
	'de_DE' => array('de', '🇩🇪 German (Deutsch)'),
	'el_GR' => array('el', '🇬🇷 Greek (Ελληνικά)'),
	'he_IL' => array('he', '🇮🇱 Hebrew (עברית)'),
	'hi_IN' => array('hi', '🇮🇳 Hindi (हिंदी)'),
	'hu_HU' => array('hu', '🇭🇺 Hungarian (Magyar)'),
	'id_ID' => array('id', '🇮🇩 Indonesian (Bahasa Indonesia)'),
	'ga_IE' => array('ga', '🇮🇪 Irish (Gaeilge)'),
	'it_IT' => array('it', '🇮🇹 Italian (Italiano)'),
	'ja_JP' => array('ja', '🇯🇵 Japanese (日本語)'),
	'jv_ID' => array('jv', '🇮🇩 Javanese (Basa Jawa)'),
	'ko_KR' => array('ko', '🇰🇷 Korean (한국어)'),
	'ar_IQ' => array('ar_IQ', '🏴󠁩󠁲󠀱󠀶󠁿 Kurdish (کوردی)'),
	'lv_LV' => array('lv', '🇱🇻 Latvian (Latviešu)'),
	'lt_LT' => array('lt', '🇱🇹 Lithuanian (Lietuvių)'),
	'mk_MK' => array('mk', '🇲🇰 Macedonian (Македонски)'),
	'mr_IN' => array('mr', '🇮🇳 Marathi (मराठी)'),
	'ms_MY' => array('ms', '🇲🇾 Malay (Bahasa Malaysia)'),
	'mi_NZ' => array('mi', '🇳🇿 Maori (Māori)'),
	'nb_NO' => array('nb', '🇳🇴 Norwegian (Norsk)'),
	'or_IN' => array('or', '🇮🇳 Odia (ଓଡ଼ିଆ)'),
	'fa_IR' => array('fa', '🇮🇷 Persian (پارسی)'),
	'pl_PL' => array('pl', '🇵🇱 Polish (Polski)'),
	'pt_BR' => array('pt_BR', '🇧🇷 Portuguese [BR] (Português [BR])'),
	'pt_PT' => array('pt_PT', '🇵🇹 Portuguese [PT] (Português [PT])'),
	'ro_RO' => array('ro', '🇷🇴 Romanian (Română)'),
	'ru_RU' => array('ru', '🇷🇺 Russian (Русский)'),
	'sr_RS@latin' => array('sr_LT', '🇷🇸 Serbian [Latin] (Srpski)'),
	'sr_RS' => array('sr', '🇷🇸 Serbian [Cyrillic] (Српски)'),
	'si_LK' => array('si', '🇱🇰 Sinhala (සිංහල)'),
	'sk_SK' => array('sk', '🇸🇰 Slovak (Slovensky)'),
	'sl_SI' => array('sl', '🇸🇮 Slovenian (Slovenščina)'),
	'es_ES' => array('es', '🇪🇸 Spanish (Español)'),
	'sv_SE' => array('sv', '🇸🇪 Swedish (Svenska)'),
	'ta_IN' => array('ta', '🇮🇳 Tamil (தமிழ்)'),
	'te_IN' => array('te', '🇮🇳 Telugu (తెలుగు)'),
	'th_TH' => array('th', '🇹🇭 Thai (ไทย)'),
	'tr_TR' => array('tr', '🇹🇷 Turkish (Türkçe)'),
	'uk_UA' => array('uk', '🇺🇦 Ukrainian (Українська)'),
	'ur_PK' => array('ur', '🇵🇰 Urdu (اُردُو)'),
	'ug_CN' => array('ug', '🏴 Uyghur (ئۇيغۇر تىلى)'),
	'vi_VN' => array('vi', '🇻🇳 Vietnamese (Tiếng Việt)'),
	'cy_GB' => array('cy', '🏴󠁧󠁢󠁷󠁬󠁳󠁿 Welsh (Cymraeg)'),
);
$locale = "en_IE";
$short_locale = "en";
if (isset($_SERVER["HTTP_ACCEPT_LANGUAGE"]))
	$locale = locale_accept_from_http($_SERVER["HTTP_ACCEPT_LANGUAGE"]);
if (isSet($_GET["locale"]))
	$locale = $_GET["locale"];
$locale = preg_replace("/[^a-zA-Z_]/", "", substr($locale,0,5));
foreach($langs as $code => $lang) {
	if(substr($locale,0,strlen($lang[0])) == $lang[0]) {
		$locale = $code;
		$short_locale = $lang[0];
		break;
	}
}
$bcp47_locale = str_replace("_", "-", $locale);
if ($locale == "sr_LT") {
	setlocale(LC_MESSAGES, "sr@latin");
	$locale = "sr@latin";
} else {
	// Must append ".utf8" suffix here, else languages such as Azerbaijani won't work
	setlocale(LC_MESSAGES, $locale . ".utf8");
}
// Also set the LANGUAGE variable, which may be needed on some systems
putenv("LANGUAGE=" . $locale);
bindtextdomain("index", "./locale");
bind_textdomain_codeset("index", "UTF-8");
textdomain("index");

// Right-To-Left specific initialization
$dir = "ltr";
$app_name = "Rufus for Linux " . $latest_version;
$tr_version = _("Version");
$full_version = "<b>" . $tr_version . " " . $latest_version . "</b> (" . $latest_date . ")";
$comma = ",";
switch (substr($locale,0,2)) {
case "ar":
case "fa":
case "he":
case "ug":
case "ur":
	$dir = "rtl";
	$app_name = "<span dir=\"ltr\">" . $latest_version . " Rufus for Linux</span>";
	$full_version = "<span dir=\"ltr\">(" . $latest_date . ") <b>" . $latest_version . " " . $tr_version . "</b></span>";
	if(substr($locale,0,2) != "he")
		$comma = "،";
	break;
}
?>

<html <?= "lang=\"$bcp47_locale\" dir=\"$dir\"";?>>
<head profile="http://www.w3.org/2005/10/profile">
<meta charset='utf-8'>
<meta name="description" content="Rufus for Linux: Create bootable USB drives and disk images the easy way">
<meta name="keywords" content="Application,BIOS,Boot,Bootable,Download,Drive,Ext4,exFAT,Fast,Flash,FAT32,Formatting,FreeDOS,GPT,GTK,ISO,Linux,MBR,Ntfs,Portable,Rufus,SYSLINUX,Uefi,USB,Utility">
<meta name="author" content="RufusForLinux contributors">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="application-name" content="Rufus for Linux">
<meta name="msapplication-square70x70logo" content="../pics/rufus-72.png">
<meta name="msapplication-square150x150logo" content="../pics/rufus-150.png">
<meta name="msapplication-wide310x150logo" content="../pics/rufus-150.png">
<meta name="msapplication-square310x310logo" content="../pics/rufus-256.png">
<meta name="msapplication-TileColor" content="#3f4555">
<title>Rufus for Linux - <?= _("Create bootable USB drives and disk images");?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script>
function setCookie(name, value, days) {
	var expires = "";
	if (days) {
		var date = new Date();
		date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
		expires = "; expires=" + date.toUTCString();
	}
	document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}
function getCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') c = c.substring(1, c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
	}
	return "";
}
document.addEventListener("DOMContentLoaded", function(event) {
	if (getCookie('display_cookie_notice') != 'no')
		document.getElementById('cookie-notice').style.display = 'block';
});
</script>
<style type="text/css">
	* {	--bs-body-line-height: 1.2;	scroll-behavior: smooth; }
	body { background-color: #3f4555; font-family: Helvetica, Arial, FreeSans, san-serif !important; color: white; }
	#right_column { float: <?= $dir=="rtl"?"left":"right";?>; margin: 0 auto; margin-top: 10px; margin-right: 10px; width: 250px; font-size: 0.8em; }
	#container { margin: 0 auto; width: 735px; overflow: auto; }
	#notice { border: 4px solid #ffa520; color: white; padding: 1em; width: 94%; margin-left: auto; margin-right: auto; }
	.menu { width: 100%; height: 100px; position: sticky; display: flex; justify-content: space-evenly; align-items: center; --font-size: 18px; font-weight: bold; }
	.menu ul { display: flex; justify-content: space-evenly; align-items: center; list-style: none; width: 100%; }
	.menu a { margin: 0 2px; text-decoration: none; color: grey; font-size: var(--font-size); transition: 1s all; }
	.menu a:hover { color: #c0baaa; transition: 1s all; }
	.menu ul li { margin: 0 5px; }
	.generic_section { width: 100%; align-items: center; }
	table.reference { color: #000030; background-color: white; border: 1px solid #c3c3c3; border-collapse: collapse; width: 100%; }
	table.reference th { background-color: #e5eecc;	border: 1px solid #c3c3c3; padding: 3px; vertical-align: top; }
	table.reference td { border: 1px solid #c3c3c3;	padding: 3px; vertical-align: top; }
	th.title { background-color: #80e090 }
	td.item { color: #444444; background-color: #e8e8e8; }
	td.item a { color: #0a58ca; }
	td.item a:hover { color: fuchsia; }
	td.item a:visited { color: purple; }
	li { line-height: 1.3em; }
	h1, h2, h3, h4 { font-weight: bold; }
	h1 { font-size: 3.8em; color: #c0baaa; margin-bottom: 3px; margin-top: 10px; }
	h1 .small { font-size: 0.4em; }
	h1 a { text-decoration: none; }
	h2 { padding: 12px; font-size: 1.5em; color: #c0baaa; line-height: 1.3em; border: 2px solid #706a6a; margin-top: 40px; margin-bottom: 20px; }
	h3 { text-align: center; color: #c0baaa; }
	h4 { font-size: 1.0em; margin-top: 24px; margin-bottom: 10px; }
	a { color: #c0baaa; }
	a:hover { transition: 1s all; }
	.cookie-notification { background: #fffbe4; border-color: #f8f6e6; overflow: hidden; }
	.tagline { font-size: 1.6em; margin-bottom: 30px; margin-top: 30px; font-style: italic; }
	.download { float: right; }
	pre { background: black; color: white; padding: 15px; margin-top: 15px; }
	code { display: inline-block; padding: 3px 3px 4px 1px; color: #ececec; font-family: monospace, monospace; line-height: 10px; font-size: 16px; vertical-align: middle; }
	hr { border: 0; width: 80%; border-bottom: 1px solid #aaa; }
	.kbd { display: inline-block; padding: 3px 5px; font-family: monospace, monospace; font-size: 11px; line-height: 10px; color: #555; vertical-align: middle; background-color: #fcfcfc; border: solid 1px #ccc; border-bottom-color: #bbb; border-radius: 3px; box-shadow: inset 0 -1px 0 #bbb; }
	.footer { font-size: 0.9em; text-align:center; padding-top: 30px; font-style: italic; }
	.treeView{ -moz-user-select: none; position: relative; }
	.treeView ul { margin: 0 0 0 -1.5em; padding: 0 0 0 1.5em; }
	.treeView li { margin: 0; padding: 0; list-style-position: inside; list-style-image: none; cursor: auto; }
	.treeView li li { padding-left: 1.5em; }
	@media screen and ( max-width: 1002px; ) { .hide_on_small_screens { display: none; } }
	.carousel-indicators { bottom: -45px; }
	.carousel-indicators li { width: 10px; height: 10px; border-radius: 100%; }
</style>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
<div id="right_column">
<label for="lang_select"><?=_("Change language:");?></label><select name="lang_select" id="lang_select" onchange="self.location='../'+this.options[this.selectedIndex].value">
<? foreach($langs as $code => $lang): ?>
<option dir="ltr" <? if($short_locale == $lang[0]) echo "selected=\"selected\" ";?>value="<?= $lang[0];?>">
<?= $lang[1]; ?>
</option>
<? endforeach; ?>
</select>
<div class="hide_on_small_screens">
<? if (substr($locale,0,2) == "en") echo "<a target=\"_blank\" href=\"https://github.com/0peratorXXX/rufusforlinux-web\">Want your language here?</a>";
	else if (substr($locale,0,2) != "fr") echo "<a target=\"_blank\" href=\"https://github.com/0peratorXXX/rufusforlinux-web\">" . _("Want to improve this translation?") . "</a>" ?>
</div>
</div>
<div id="container">
	<section class="generic_section" id="menu">
		<nav class="menu" id="Menu"><ul>
			<li><a href="#about"><?= _("About");?></a></li>
			<li><a href="#download"><?= _("Download");?></a></li>
			<li><a href="#changelog">Changelog</a></li>
			<li><a href="#usage"><?= _("Usage");?></a></li>
			<li><a href="#FAQ"><?= _("FAQ");?></a></li>
			<li><a href="#source"><?= _("Source Code");?></a></li>
		</ul></nav>	
	</section>
	<section class="generic_section" id="top_banner">
		<h1><img border="0" src="../pics/rufus-128.png" srcset="../pics/rufus-128.png 1x, ../pics/rufus-256.png 2x" alt="[rufus icon]"/>
		<a target="_blank" href="https://github.com/0peratorXXX/rufusforlinux">Rufus for Linux</a></h1>
		<div class="tagline"><center><?= _("Create bootable USB drives and disk images");?></center></div>
		<div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?=$screenshot_duration;?>">
			<div class="carousel-inner">
<? for ($i = 1; $i <= $nb_screenshots; $i++) {
	$screenshot_lang = (file_exists("pics/screenshot" . $i . "_" . $short_locale . ".png")) ? $short_locale : "en";
	printf("\t\t\t<div class=\"carousel-item%s\">\n", ($i == 1) ? " active" : "");
	printf("\t\t\t\t<img src=\"../pics/screenshot%d_" . $screenshot_lang . ".png\" class=\"d-block\" alt=\"Rufus screenshot %d\" style=\"height: %s; margin: auto;\">\n", $i, $i, $screenshot_height);
	printf("\t\t\t</div>\n");
} ?>
			</div>
			<div class="carousel-indicators">
<? for ($i = 0; $i < $nb_screenshots; $i++) {
	printf("\t\t\t\t<button type=\"button\" data-bs-target=\"#carousel\" data-bs-slide-to=\"%d\" aria-label=\"Slide %d\"%s></button>\n", $i, $i + 1, ($i == 0) ? " class=\"active\" aria-current=\"true\"" : "");
} ?>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
		<p>&nbsp;</p>
	</section>
	<section class="generic_section" id="about">
		<p><?= _("Rufus for Linux is a utility that helps format and create bootable USB flash drives and disk images, such as USB keys/pendrives, memory sticks, etc.");?></p>
		<p><?= _("It can be especially useful for cases where:");?></p>
		<ul>
			<li><?= _("you need to create USB installation media from bootable ISOs (Linux, UEFI, etc.)");?></li>
			<li><?= _("you need to work on a system that doesn't have an OS installed");?></li>
			<li><?= _("you need to create a disk image that you can boot in QEMU, KVM or Hyper-V");?></li>
			<li><?= _("you want to run a low-level utility");?></li>
		</ul>
		<p><?= _("Rufus for Linux is device-first: pick a real USB drive to format it through pkexec, or pick an image file to create a bootable image without any privileges.");?></p>
		<p><?= _("Despite its small size, Rufus for Linux provides everything you need!");?></p>
		<h4><?= _("Supported formats and options:");?></h4>
		<ul>
			<li><?= _("File systems: FAT32, ext2/ext3/ext4 (built-in), exFAT and NTFS (via the host mkfs tools)");?></li>
			<li><?= _("Partition schemes: MBR and GPT, with the 2048 sector alignment of Windows Rufus, or 2272 for old BIOS fixes");?></li>
			<li><?= _("Bootloader: SYSLINUX v6 BIOS bootloader, installed to the MBR and the FAT32 partition boot record");?></li>
			<li><?= _("Image containers: raw, fixed VHD (native) and VHDX (via qemu-img)");?></li>
			<li><?= _("Advanced format options: bad block scan, full format, extended label and icon files, casper persistence, dirty-cow scrub pass");?></li>
			<li><?= _("Verify written data, and compute SHA-1 or SHA-256 checksums");?></li>
		</ul>
		<p><?= _("A non exhaustive list of the ISO images Rufus for Linux is known to work with is also provided at the bottom of this page.");?> <a href="#ref1"><sup>(1)</sup></a></p>
		<p dir="ltr"><b><font color="#dd8800"><u>CALLING ON NEW TRANSLATORS!</u></font></b></p>
		<p dir="ltr">The Rufus for Linux application would like to request <b>your</b> help with its translations: the catalogs live in the <a target="_blank" href="https://github.com/0peratorXXX/rufusforlinux/tree/main/linux/po">linux/po</a> directory, and this webpage is translated with gettext as well.</p>
		<p dir="ltr">If you think you are up to the task, please have a look at the <a target="_blank" href="https://github.com/0peratorXXX/rufusforlinux#internationalisation">internationalisation section</a>.</p>
	</section>
	<section class="generic_section" id="download">
		<h2 style="border: 4px solid #a09a8a;"><span style="font-size: 133%"><?= _("Download");?></span></h2>
			<p><b><?= _("Latest release:") ;?></b></p>
			<table cellspacing="1" cellpadding="6" border="0">
				<tr>
					<th class="title" width=220><?= _("Link") ;?></th>
					<th class="title" width=100><?= _("Type") ;?></th>
					<th class="title" width=160><?= _("Platform") ;?></th>
					<th class="title" width=100><?= _("Size") ;?></th>
					<th class="title" width=120><?= _("Date") ;?></th>
				</tr>
				<tr>
					<td class="item"><?= "<a href=\"https://github.com/0peratorXXX/rufusforlinux/archive/refs/heads/main.tar.gz\">" . "<code>rufusforlinux-" . $latest_version . ".tar.gz</code></a>";?></td>
					<td class="item"><?= _("Source") ;?></td>
					<td class="item">Linux</td>
					<td class="item"><span dir="<?= $dir;?>"><?= "" . $src_size . " " . _("MB");?></span></td>
					<td class="item"><?= $latest_date;?></td>
				</tr>
				<tr>
					<td class="item"><?= "<a href=\"https://github.com/0peratorXXX/rufusforlinux#debian-package\">" . "<code>rufusforlinux-" . $latest_version . "_&lt;arch&gt;.deb</code></a>";?></td>
					<td class="item"><?= _("Debian package") ;?></td>
					<td class="item">Linux</td>
					<td class="item"><span dir="<?= $dir;?>"><?= "" . $deb_size . " " . _("MB");?></span></td>
					<td class="item"><?= $latest_date;?></td>
				</tr>
			</table>&nbsp;
			<p><span style="font-size: 110%"><a target="_blank" href="https://github.com/0peratorXXX/rufusforlinux/releases"><?= _("Other versions");?> (GitHub)</a></span></p>
			<p><?= _("Both artifacts are built from the repository, with <i>make dist</i> and <i>make deb</i> respectively.");?></p>
		<h4><?= _("System Requirements:");?></h4>
		<p><?= _("A C11 compiler, the GTK 3 or GTK 4 development headers, GNU Make and the gettext tools. On Debian/Ubuntu, this amounts to:");?></p>
		<pre dir="ltr">$ sudo apt install build-essential libgtk-4-dev gettext</pre>
		<p><?= _("Once built, the application is ready to use.");?> <?= _("Formatting a real device additionally requires pkexec (polkit), while image files need no privileges at all.");?></p>
		<h4><?= _("Supported Languages:");?></h4>
		<table dir="<?= $dir;?>" cellspacing="0" cellpadding="0" border="0"><tr>
			<td><i>Deutsch</i></td><td><?=$comma;?>&nbsp;</td>
			<td><i>English</i></td><td><?=$comma;?>&nbsp;</td>
			<td><i>Français</i></td>
		</tr></table>
		&nbsp;
		<p><?= _("The application interface currently ships in these languages. This webpage is translated separately, with gettext, and the language selector on the right lists every translation available.");?></p>
		<p><?= _("Rufus for Linux owes a lot to the translators who made it possible for the application, as well as this webpage, to be translated in various languages. If you can use Rufus for Linux in your own language, you should really thank them!");?></p>
	</section>
	<section class="generic_section" id="usage">
		<h2><?= _("Usage");?></h2>
		<p><?= _("Rufus for Linux is built from source. Clone the repository, then compile and install it:");?></p>
		<pre dir="ltr">$ git clone https://github.com/0peratorXXX/rufusforlinux
$ cd rufusforlinux/linux && make
$ sudo make install PREFIX=/usr/local</pre>
		<p><?= _("This installs the four binaries:");?></p>
		<ul>
			<li><code>rufus-gui</code> &ndash; <?= _("the GTK graphical front-end");?></li>
			<li><code>rufus-format</code> &ndash; <?= _("the formatting engine");?></li>
			<li><code>rufus-copy</code> &ndash; <?= _("the ISO and disk image writer");?></li>
			<li><code>rufus-devlist</code> &ndash; <?= _("the device discovery tool");?></li>
		</ul>
		<p><?= _("Run <i>man rufus-gui</i>, <i>man rufus-format</i>, <i>man rufus-copy</i> and <i>man rufus-devlist</i> for the full option reference.");?></p>
		<h4><?= _("Notes on privileges:");?></h4>
		<p><?= _("Selecting a real USB drive launches the formatting engine through pkexec, so you will be prompted for an administrator password. Mounted partitions are unmounted automatically, or you are warned before they are wiped.");?></p>
		<p><?= _("Creating an image file instead of formatting a device requires no privileges at all.");?></p>
		<h4><?= _("Notes on ISO Support:");?></h4>
		<p><? printf(_("Rufus for Linux allows the creation of a bootable USB drive or disk image from an <a target=\"_blank\" %s>ISO image</a> (.iso)."), "href=\"http://en.wikipedia.org/wiki/ISO_image\"");?></p>
		<p><? printf(_("Creating an ISO image from a physical disc or from a set of files is very easy to do however, through the use of a disc burning application such as the freely available <a target=\"_blank\" %s>xorriso</a>, or with <a target=\"_blank\" %s>dd</a>."), "href=\"https://www.xorriso.org/\"", "href=\"https://man7.org/linux/man-pages/man8/dd.8.html\"");?></p>
	</section>
	<section class="generic_section" id="FAQ">
		<h2><?= _("Frequently Asked Questions (FAQ)");?></h2>
		<p><? /* You are encouraged to add the translation for " (in English)." after "HERE</a></b>" as the FAQ is only available in English */ printf(_("A Rufus for Linux FAQ is available <b><a target=\"_blank\" %s>HERE</a></b>."), "href=\"https://github.com/0peratorXXX/rufusforlinux/blob/main/linux/README.md\"");?><br/></p>
		<p><? printf(_("To provide feedback, report a bug or request an enhancement, please use the GitHub <a target=\"_blank\" %s>issue tracker</a>."), "href=\"https://github.com/0peratorXXX/rufusforlinux/issues\"");?></p>
	</section>
	<section class="generic_section" id="license">
		<h2><?= _("License")?></h2>
		<p><? printf(_("<a target=\"_blank\" %s>GNU General Public License (GPL) version 3</a> or later."), "href=\"http://www.gnu.org/licenses/gpl.html\"");?><br /><?= _("You are free to distribute, modify or even sell the software, insofar as you respect the GPLv3 license.")?></p>
		<p><? printf(_("Rufus for Linux is produced in a 100%% transparent manner, from its <a target=\"_blank\" %s>public source</a>, using a <a target=\"_blank\" %s>GNU/Linux</a> environment (C11, GTK and GNU Make)."), "href=\"https://github.com/0peratorXXX/rufusforlinux\"", "href=\"https://www.gnu.org/\"");?></p>
		<p><? printf(_("Rufus for Linux is a native port of Rufus, which was created by <a target=\"_blank\" %s>Pete Batard</a>, and the third-party sources it bundles retain their own licensing."), "href=\"https://github.com/pbatard/rufus\"");?></p>
	</section>
	<section class="generic_section" id="changelog">
		<h2><?= /* You are encouraged to append the translation for "(in English)" after "Changelog" as it is only available in English */ _("Changelog");?></h2>
		<ul dir="<?= $dir;?>">
			<li><?= $full_version;?><ul dir="<?= $dir;?>">
				<li><span dir="ltr">Add a GTK graphical interface, which also compiles cleanly against GTK 3.</span></li>
				<li><span dir="ltr">Add the <code>rufus-format</code>, <code>rufus-copy</code> and <code>rufus-devlist</code> command line engines.</span></li>
				<li><span dir="ltr">Add FAT32 and ext2/ext3/ext4 formatting, with exFAT and NTFS delegated to the host <code>mkfs</code> tools.</span></li>
				<li><span dir="ltr">Add MBR and GPT partition schemes, using the 2048 sector alignment of Windows Rufus, or 2272 for the old BIOS fixes.</span></li>
				<li><span dir="ltr">Add SYSLINUX v6 BIOS bootloader installation (MBR and FAT32 partition boot record).</span></li>
				<li><span dir="ltr">Add casper persistence support (<code>persistence.conf</code> on ext file systems, loopback <code>casper-rw</code> file on FAT32).</span></li>
				<li><span dir="ltr">Add raw, fixed VHD and VHDX image containers, for use with QEMU, KVM or Hyper-V.</span></li>
				<li><span dir="ltr">Add the advanced format options: bad block scan, full format, extended label and icon files, and dirty-cow scrub pass.</span></li>
				<li><span dir="ltr">Add byte-for-byte verification of written data, plus SHA-1 and SHA-256 checksums.</span></li>
				<li><span dir="ltr">Add light and dark themes, progress reporting and cooperative cancellation.</span></li>
				<li><span dir="ltr">Add <i>make deb</i> and <i>make dist</i> packaging, man pages, a desktop entry and AppStream metainfo.</span></li>
				<li><span dir="ltr">Add French and German translations.</span></li>
			</ul></li>
			<br/>
			<li><b><a target="_blank" href="https://github.com/0peratorXXX/rufusforlinux/releases"><?= _("Other versions");?></a></b></li>
		</ul>
	</section>
	<section class="generic_section" id="source">
		<h2><?= _("Source Code");?></h2>
		<ul><li><?= /* Abbreviation for MegaByte */ "<a target=\"_blank\" href=\"https://github.com/0peratorXXX/rufusforlinux/archive/refs/heads/main.tar.gz\">" . $app_name . "</a> <span dir=\"" . $dir . "\">(" . $src_size . " " . _("MB") . ")";?></span></li>
		<li><? printf(_("Alternatively, you can clone the <a target=\"_blank\" %s>git</a> repository using:") . "\n", "href=\"http://git-scm.com\"");?>
		<pre dir="ltr">$ git clone https://github.com/0peratorXXX/rufusforlinux</pre></li>
		<li><? printf(_("The port itself lives in the <a target=\"_blank\" %s>linux</a> directory, next to the bundled upstream sources in <i>src/</i>."), "href=\"https://github.com/0peratorXXX/rufusforlinux/tree/main/linux\"");?></li>
		<li><? printf(_("For more information, see the <a target=\"_blank\" %s>GitHub project</a>."), "href=\"https://github.com/0peratorXXX/rufusforlinux\"");?></li></ul>
		<p><?= _("If you are a developer, you are very much encouraged to tinker with Rufus for Linux and submit patches.");?></p>
	</section>
	<section class="generic_section" id="donate">
		<h2><?= _("Donations");?></h2>
		<p><?= _("Since we're getting asked about this on regular basis, there is <b>no</b> donation button on this page.");?></p>
		<p><?= _("Rufus for Linux is free and open source software, developed and released in the open. If it saved you some time, the most useful way to give something back is to <a target=\"_blank\" href=\"https://github.com/0peratorXXX/rufusforlinux/issues\">report bugs</a>, improve the <a target=\"_blank\" href=\"https://github.com/0peratorXXX/rufusforlinux/tree/main/linux/po\">translations</a>, or contribute code.");?></p>
		<p><?= _("Please feel free to use Rufus for Linux without any guilt about not contributing to it financially &ndash; you should never have to!");?></p>
	</section>
	<section class="generic_section" id="ref1">
		<h2>(1) <?= _("Non exhaustive list of ISOs Rufus for Linux is known to work with");?></h2>
		<table dir="<?= $dir;?>" cellspacing="0" cellpadding="0" border="0"><tr>
			<td><a target="_blank" href="https://almalinux.org">AlmaLinux</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://archlinux.org">Arch&nbsp;Linux</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://archboot.com/">Archboot</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://www.centos.org">CentOS</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://clonezilla.org/clonezilla-live.php">Clonezilla</a></td><td><?=$comma;?>&nbsp;</td>
		</tr></table>
		<table dir="<?= $dir;?>" cellspacing="0" cellpadding="0" border="0"><tr>
			<td><a target="_blank" href="https://www.debian.org">Debian</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://elementary.io">Elementary OS</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://fedoraproject.org">Fedora</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://www.freedos.org">FreeDOS</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://www.gentoo.org">Gentoo</a></td><td><?=$comma;?>&nbsp;</td>
		</tr></table>
		<table dir="<?= $dir;?>" cellspacing="0" cellpadding="0" border="0"><tr>
			<td><a target="_blank" href="https://gparted.org">GParted</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://www.kali.org">Kali Linux</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://knoppix.net">Knoppix</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://linuxmint.com">Linux&nbsp;Mint</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://manjaro.org">Manjaro Linux</a></td><td><?=$comma;?>&nbsp;</td>
		</tr></table>
		<table dir="<?= $dir;?>" cellspacing="0" cellpadding="0" border="0"><tr>
			<td><a target="_blank" href="https://www.opensuse.org">openSUSE</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://pop.system76.com">Pop!_OS</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://www.raspberrypi.com/software/">Raspberry Pi OS</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://rockylinux.org">Rocky Linux</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="http://www.slackware.com">Slackware</a></td><td><?=$comma;?>&nbsp;</td>
		</tr></table>
		<table dir="<?= $dir;?>" cellspacing="0" cellpadding="0" border="0"><tr>
			<td><a target="_blank" href="https://www.supergrubdisk.org/category/download/supergrub2diskdownload/super-grub2-disk-stable">Super Grub2 Disk</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://tails.boum.org">Tails</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://trinityhome.org">Trinity Rescue Kit</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://ubuntu.com">Ubuntu</a></td><td><?=$comma;?>&nbsp;</td>
			<td><a target="_blank" href="https://github.com/pbatard/UEFI-Shell/releases">UEFI Shell</a></td><td><?=$comma;?>&nbsp;</td>
		</tr></table>
		<table dir="<?= $dir;?>" cellspacing="0" cellpadding="0" border="0"><tr>
			<td>&hellip;</td>
		</tr></table>
	</section>
	<div class="footer"><table align="center" dir="<?= $dir;?>" cellspacing="0" cellpadding="0" border="0"><tr>
		<td>Copyright&nbsp;</td><td>©&nbsp;</td><td>2026&nbsp;</td><td><a target="_blank" href="https://github.com/0peratorXXX/rufusforlinux">Rufus&nbsp;for&nbsp;Linux contributors</a></td></tr></table>
		<? /* Please insert your language and name here.
 If you want people to be able to e-mail you directly about this translation, you can insert your name with something like:
 <a href="mailto:you@example.com?Subject=Rufus%20Homepage%20translation">Your Name</a> */ $tr = _("English translation by Rufus for Linux contributors"); if (substr($tr,0,4) != "Engl") echo $tr . "<br/>";?>
		<?= _("USB icon by");?> PC Unleashed<br/>
		<?= _("Hosting by");?> <a target="_blank" href="https://pages.github.com/">GitHub</a>
			</div><? if ($short_locale == "ja") echo "&nbsp; <!-- Heck if I know why Japanese needs this in order to remove scrollbars when using bootstrap -->" ?> 
	</div>
</body>
</html>
