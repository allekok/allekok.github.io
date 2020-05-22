/* On window load */
/* Paint */
const targetEl = document.querySelector("#main");
const repos = [
	["ئاڵەکۆک", "https://allekok.ir/",
	 "شێعری شاعیرانی کورد",
	 "https://github.com/allekok/allekok-website"],
	["ڕادیۆ", "https://allekok.github.io/radio/",
	 "گۆرانیی کوردی",
	 "https://github.com/allekok/radio"],
	["تەوار - وەشانی ٢.٠", "https://allekok.ir/tewar/",
	 "گەڕان بۆ واتای وشە لە چەند فەرهەنگ‌دا",
	 "https://github.com/allekok/tewar-2"],
	["تەوار", "https://allekok.ir/tewar-legacy/",
	 "گەڕان بۆ واتای وشە لە چەند فەرهەنگی ئانلاین‌دا",
	 "https://github.com/allekok/tewar-legacy"],
	["ڕێبوار", "https://allekok.ir/rebwar/",
	 "گەڕان بۆ ڕێنووسی دروستی وشە",
	 "https://github.com/allekok/rebwar"],
	["چەپکەگوڵ", "https://allekok.github.io/chepke-gull/#.",
	 "گوڵنامەی کوردی",
	 "https://github.com/allekok/chepke-gull"],
	["خدر قادری", "https://allekok.github.io/xdr-qadri/#.",
	 "بەرهەمەکانی بەیت‌بێژ خدر قادری",
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
	 "بەرهەمەکانی محەممەد ماملێ",
	 "https://github.com/allekok/mamle"],
];
paint(repos, targetEl);
/* Functions */
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
