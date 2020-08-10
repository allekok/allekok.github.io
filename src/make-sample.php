<?php
/* Constants */
const repos = [
	["ئاڵەکۆک", "https://allekok.ir/",
	 "شێعری شاعیرانی کورد",
	 "https://github.com/allekok/allekok-website"],
	["ڕادیۆ", "https://allekok.github.io/radio/",
	 "گۆرانیی کوردی",
	 "https://github.com/allekok/radio"],
	["تەوار - وەشانی ٢", "https://allekok.ir/tewar/",
	 "گەڕان بۆ واتای وشە لە چەند فەرهەنگ‌دا",
	 "https://github.com/allekok/tewar-2"],
	["تەوار", "https://allekok.ir/tewar-legacy/",
	 "گەڕان بۆ واتای وشە لە چەند فەرهەنگی ئانلاین‌دا",
	 "https://github.com/allekok/tewar-legacy"],
	["ڕێبوار", "https://allekok.ir/rebwar/",
	 "گەڕان بۆ ڕێنووسی دروستی وشە",
	 "https://github.com/allekok/rebwar"],
	["ڕۆژژمێری کوردی", "https://allekok.github.io/kurdish-calendar/",
	 "نیشاندانی ڕێکەوتی ئەمڕۆ + گۆڕینی ڕێکەوتەکانی کوردی، گریگۆری، ئێرانی و ئیسلامی بۆ یەکتر",
	 "https://github.com/allekok/kurdish-calendar"],
	["گۆڕینی ئەلفوبێ", "https://allekok.github.io/kurdish-transliterator/",
	 "گۆڕینی ئەلفوبێی نووسراوەی کوردی لە عەرەبی بۆ لاتین و فارسی",
	 "https://github.com/allekok/kurdish-transliterator"],
	["تاقەگوڵ", "https://allekok.github.io/taqe-gull/#.",
	 "گوڵنامەی کوردی",
	 "https://github.com/allekok/taqe-gull"],
	["خدر قادری", "https://allekok.github.io/xdr-qadri/#.",
	 "بەرهەمەکانی بەیت‌بێژ خدر قادری",
	 "https://github.com/allekok/xile-derzi"],
	["تاهیر تۆفیق", "https://allekok.github.io/tahir-tofiq/#.",
	 "بەرهەمەکانی تاهیر تۆفیق",
	 "https://github.com/allekok/tahir-tofiq"],
	["عەلی مەردان", "https://allekok.github.io/eli-merdan/#.",
	 "بەرهەمەکانی عەلی مەردان",
	 "https://github.com/allekok/eli-merdan"],
	["ماملێ", "https://allekok.github.io/mamle/#.",
	 "بەرهەمەکانی محەممەد ماملێ",
	 "https://github.com/allekok/mamle"],
	["زیرەک", "https://allekok.github.io/zirek/#.",
	 "بەرهەمەکانی حەسەن زیرەک",
	 "https://github.com/allekok/zirek"],
	["وەشانی ساکاری ئاڵەکۆک",
	 "https://allekok.github.io/allekok-poems/",
	 "شێعرەکانی ئاڵەکۆک",
	 "https://github.com/allekok/allekok-poems"],
	["کەناڵی یوتیوبی ئاڵەکۆک",
	 "https://www.youtube.com/channel/UCmddsfgce634kv7Mve7jWhA",
	 "فێرکاری کامپیوتێر و بەرنامەنووسی"],
];

const _files = [
	[
		'out'=>'../index.html',
		'in'=>'frontend/index.html',
	],
];

const _script = true;
const _script_needle = '{SCRIPT}';

const _style = true;
const _style_needle = '{STYLE}';
const _style_path = 'frontend/style/main.css';

const _service_worker = true;
const _service_worker_needle = '{SERVICE_WORKER}';
const _service_worker_path = '/service-worker.js';
const _service_worker_scope = '/';

const _font = true;
const _font_decl_needle = '{FONT_DECL}';
const _font_needle = '{FONT}';
const _font_path = 'src/frontend/style/DroidNaskh-Regular.woff2';
const _font_name = 'kurd';
const _font_decl = "@font-face
{
    font-family:'"._font_name."';
    font-display:swap;
    font-style:normal;
    font-weight:400;
    src:url('"._font_path."') format('woff2');
}";
const _font_decl_icon_needle = '{FONT_DECL_ICON}';
const _font_icon_needle = '{FONT_ICON}';
const _font_icon_path = 'src/frontend/style/Material-Icons.woff2';
const _font_icon_name = 'icon';
const _font_icon_decl = "@font-face
{
    font-family:'"._font_icon_name."';
    font-display:swap;
    font-style:normal;
    font-weight:400;
    src:url('"._font_icon_path."') format('woff2');
}";

/* Make */
$scripts = '';
$styles = '';
$sw = '';

if(_style)
{
	$styles = file_get_contents(_style_path);
	if(_font)
	{
		$font_decl = _font_decl;
		$font_name = "'"._font_name."'";
	}
	else
	{
		$font_decl = '';
		$font_name = '';
	}
	$styles = str_replace([_font_decl_needle, _font_needle,
			       _font_decl_icon_needle, _font_icon_needle],
			      [$font_decl, $font_name,
			       _font_icon_decl, _font_icon_name], $styles);
	$styles = '<style>'.$styles.'</style>';
}

if(_script)
{
	/* Paint */
	function paint ($repos) {
		$html = "<ul>";
		foreach($repos as $repo) {
			$html .= "<li>
			<div class='tool'>";
			
			if(isset($repo[3]))
				$html .= "<a class='tool-repo' href='{$repo[3]}'
                        ><i class='icon'>&lsaquo;&rsaquo;</i></a>";
			else
				$html .= "<a class='tool-repo'> </a>";
			
			$html .= "
			<a class='tool-link' href='{$repo[1]}'>
			<h2 class='tool-title'>
			{$repo[0]}
			</h2>
			</a>
			<p class='tool-desc'>
			{$repo[2]}
			</p>
			</div>
			</li>";
		}
		$html .= "</ul>";
		return $html;
	}
	$scripts = paint(repos);
}

if(_service_worker)
{
	$sw = "<script>
    if ('serviceWorker' in navigator)
	navigator.serviceWorker.register('"._service_worker_path.
	      "', {scope: '"._service_worker_scope."'}); </script>";
}

// Replace 
foreach(_files as $f)
{
	$text = file_get_contents($f['in']);
	
	$text = str_replace([_script_needle, _style_needle, _service_worker_needle],
			    [$scripts, $styles, $sw], $text);
	
	file_put_contents($f['out'], $text);
	
	echo "`{$f['out']}` Done.\n";
}
?>
