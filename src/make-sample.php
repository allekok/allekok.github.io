<?php
/* Configuration */
const repos = [
	["ئاڵەکۆک",
	 "https://allekok.ir/",
	 "شیعری شاعیرانی کورد",
	 "https://github.com/allekok/allekok-website"],
	["ڕادیۆ",
	 "https://allekok.github.io/radio/",
	 "گۆرانیی کوردی",
	 "https://github.com/allekok/radio"],
	["ڕۆژژمێری کوردی",
	 "https://allekok.ir/kurdish-calendar/site/",
	 "نیشاندانی ڕێکەوتی ئەمڕۆ + " .
	 "گۆڕینی ڕێکەوتەکانی کوردی، گریگۆری، ئێرانی و ئیسلامی بۆ یەکتر",
	 "https://github.com/allekok/kurdish-calendar"],
	["تەوار - وەشانی ٢",
	 "https://allekok.ir/tewar/",
	 "گەڕان بۆ واتای وشە لە چەند فەرهەنگ‌دا",
	 "https://github.com/allekok/tewar-2"],
	["تەوار",
	 "https://allekok.ir/tewar-legacy/",
	 "گەڕان بۆ واتای وشە لە چەند فەرهەنگی ئانلاین‌دا",
	 "https://github.com/allekok/tewar-legacy"],
	["ڕێبوار",
	 "https://allekok.ir/rebwar/",
	 "گەڕان بۆ ڕێنووسی دروستی وشە",
	 "https://github.com/allekok/rebwar"],
	["ستاندارد کردنی نووسراوە",
	 "https://allekok.github.io/normalize/",
	 "ستاندارد کردنی شێوەی نووسراوەی کوردی",
	 "https://github.com/allekok/normalize"],
	["گۆڕینی ئەلفووبێ",
	 "https://allekok.github.io/kurdish-transliterator/",
	 "گۆڕینی ئەلفووبێی نووسراوەی کوردی لە عەرەبی بۆ لاتین و فارسی",
	 "https://github.com/allekok/kurdish-transliterator"],
	["هاوسەروا",
	 "https://allekok.ir/haw-serwa/",
	 "دۆزینەوەی هاوسەروا",
	 "https://github.com/allekok/haw-serwa"],
	["گۆڕینی ژمارە بۆ وشە",
	 "https://allekok.github.io/num-to-str/",
	 "گۆڕینی ژمارە بۆ وشەی کوردی",
	 "https://github.com/allekok/num-to-str"],
	["گۆڕینی وشە بۆ ژمارە",
	 "https://allekok.github.io/str-to-num/",
	 "گۆڕینی وشەی کوردی بۆ ژمارە",
	 "https://github.com/allekok/str-to-num"],
	["تاقەگوڵ",
	 "https://allekok.github.io/taqe-gull/#.",
	 "گوڵنامەی کوردی",
	 "https://github.com/allekok/taqe-gull"],
	["خدر قادری",
	 "https://allekok.github.io/xdr-qadri/#.",
	 "بەرهەمەکانی بەیت‌بێژ خدر قادری",
	 "https://github.com/allekok/xile-derzi"],
	["تاهیر تۆفیق",
	 "https://allekok.github.io/tahir-tofiq/#.",
	 "بەرهەمەکانی تاهیر تۆفیق",
	 "https://github.com/allekok/tahir-tofiq"],
	["عەلی مەردان",
	 "https://allekok.github.io/eli-merdan/#.",
	 "بەرهەمەکانی عەلی مەردان",
	 "https://github.com/allekok/eli-merdan"],
	["ماملێ",
	 "https://allekok.github.io/mamle/#.",
	 "بەرهەمەکانی محەمەد ماملێ",
	 "https://github.com/allekok/mamle"],
	["زیرەک",
	 "https://allekok.github.io/zirek/#.",
	 "بەرهەمەکانی حەسەن زیرەک",
	 "https://github.com/allekok/zirek"],
	["وەشانی ساکاری ئاڵەکۆک",
	 "https://allekok.github.io/allekok-poems/",
	 "شیعرەکانی ئاڵەکۆک",
	 "https://github.com/allekok/allekok-poems"],
	["ڕەشنووسەکانم",
	 "https://allekok.github.io/drafts/",
	 "نووسراوەکانی من لەسەر بابەتی جۆراوجۆر",
	 "https://github.com/allekok/drafts"],
	["کەناڵی یوتیوبی ئاڵەکۆک",
	 "https://youtube.com/channel/UCmddsfgce634kv7Mve7jWhA",
	 "سەبارەت بە کامپیوتێر و نووسینی بەرنامە"],
	["کەناڵی تێلێگرامی ئاڵەکۆک",
	 "https://t.me/allekok_channel",
	 "سەبارەت بە کامپیوتێر و نووسینی بەرنامە"],
];

const _files = [
	[
		"in" => "frontend/index.html",
		"out" => "../index.html",
	],
];

const _README = true;
const _README_path = "../README.md";

const _body = true;
const _body_needle = "{BODY}";

const _style = true;
const _style_needle = "{STYLE}";
const _style_path = "frontend/style/main.css";

const _service_worker = true;
const _service_worker_needle = "{SERVICE_WORKER}";
const _service_worker_path = "/service-worker.js";
const _service_worker_scope = "/";

const _font = true;
const _font_decl_needle = "{FONT_DECL}";
const _font_needle = "{FONT}";
const _font_path = "src/frontend/style/DroidNaskh-Regular.woff2";
const _font_name = "kurd";
const _font_decl = "
@font-face {
	font-family:'"._font_name."';
	font-display:swap;
	font-style:normal;
	font-weight:400;
	src:url('"._font_path."') format('woff2');
}";

/* Make */

$readme = "";
$style = "";
$body = "";
$sw = "";

if(_README) {
	$readme .= "<div dir=rtl>\n\n";
	$readme .= "# بەرنامەکانی ئاڵەکۆک";
	foreach(repos as $repo) {
		$title = $repo[0];
		$url = $repo[1];
		$desc = $repo[2];
		$source = isset($repo[3]) ? $repo[3] : null;

		$readme .= "\n\n- [$title]($url)  ";
		$readme .= "\n  $desc  \n";

		if($source)
			$readme .= "  [کۆد]($source)  ";
	}
	$readme .= "\n";
	file_put_contents(_README_path, $readme);
}

if(_style) {
	$style = file_get_contents(_style_path);
	if(_font) {
		$font_decl = _font_decl;
		$font_name = "'"._font_name."'";
	} else {
		$font_decl = "";
		$font_name = "";
	}
	$style = str_replace([_font_decl_needle, _font_needle],
			     [$font_decl, $font_name],
			     $style);
	$style = "<style>{$style}</style>";
}

if(_body) {
	function convert_to_html($repos) {
		$html = "<ul>";
		foreach($repos as $repo) {
			$title = $repo[0];
			$url = $repo[1];
			$desc = $repo[2];

			$html .= "<li>
			<div class='tool'>
			<a class='tool-link' href='{$url}'>
			<h2 class='tool-title'>
			{$title}
			</h2>
			</a>
			<p class='tool-desc'>
			{$desc}
			</p>
			</div>
			</li>";
		}
		$html .= "</ul>";
		return $html;
	}
	$body = convert_to_html(repos);
}

if(_service_worker) {
	$sw = "<script>
	if('serviceWorker' in navigator)
		navigator.serviceWorker.register('" .
	      _service_worker_path .
	      "', {scope: '" .
	      _service_worker_scope .
	      "'}); </script>";
}

/* Replace */
foreach(_files as $f) {
	$input = file_get_contents($f["in"]);
	$output = str_replace([_body_needle,
			       _style_needle,
			       _service_worker_needle],
			      [$body, $style, $sw],
			      $input);
	file_put_contents($f["out"], $output);
	echo "`{$f["out"]}` Done.\n";
}
?>
