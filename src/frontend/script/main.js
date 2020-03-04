/* On window load */
/* Night */
const D = new Date;
const h = D.getHours();
if(!(h > 6 && h < 18))
    dark();
/* Paint */
const targetEl = document.querySelector("#main");
const repos = [
    ["ئاڵەکۆک", "https://allekok.com/",
     "شێعری شاعیرانی کورد",
     "https://github.com/allekok/www.allekok.com"],
    ["تەوار - وەشانی ٢.٠", "https://allekok.com/tewar/",
     "گەڕان بۆ واتای وشە لە چەند فەرهەنگ‌دا",
     "https://github.com/allekok/tewar-2"],
    ["تەوار", "https://allekok.com/tewar-legacy/",
     "گەڕان بۆ واتای وشە لە چەند فەرهەنگی ئانلاین‌دا",
     "https://github.com/allekok/tewar-legacy"],
    ["ڕێبوار", "https://allekok.com/rebwar/",
     "گەڕان بۆ ڕێنووسی دروستی وشە",
     "https://github.com/allekok/rebwar"],
    ["چەپکەگوڵ", "https://allekok.github.io/chepke-gull/#.",
     "گوڵنامەی کوردی",
     "https://github.com/allekok/chepke-gull"],
    ["خلەدەرزی", "https://allekok.github.io/xile-derzi/#.",
     "بەرهەمەکانی بەیت‌بێژ خلەدەرزی",
     "https://github.com/allekok/xile-derzi"],
    ["زیرەک", "https://allekok.github.io/zirek/#.",
     "بەرهەمەکانی حەسەن زیرەک",
     "https://github.com/allekok/zirek"],
    ["تاهیر تۆفیق", "https://allekok.github.io/tahir-tofiq/#.",
     "بەرهەمەکانی تاهیر تۆفیق",
     "https://github.com/allekok/tahir-tofiq"],
    ["عەلی مەردان", "https://allekok.github.io/eli-merdan/#.",
     "بەرهەمەکانی عەلی مەردان",
     "https://github.com/allekok/eli-merdan"],
    ["ماملێ", "https://allekok.github.io/mamle/#.",
     "بەرهەمەکانی محەممەدی ماملێ",
     "https://github.com/allekok/mamle"],
];
paint(repos, targetEl);
/* Functions */
function dark ()
{
    document.body.style.filter = "invert(1)";
    document.body.style.background = "#222";
}
function paint (repos, targetEl) {
    let html = "<ul>";
    for(const repo of repos) {
	html += `<li>
		    <div class="tool">
			<a class="tool-link" href="${repo[1]}">
			    <h2 class="tool-title">
				${repo[0]}
			    </h2>
			</a>
			<p class="tool-desc">
			    ${repo[2]}
			</p>
			<a class="tool-repo" href="${repo[3]}"
                        ><i class="icon">code</i></a>
		    </div>
		</li>`;
    }
    html += "</ul>";
    targetEl.innerHTML = html;
}
