const ext_char = 'ـ'
const ext_width = () => calc_width(ext_char)
const goal_width = () => document.querySelector('.tool-title').offsetWidth

window.onload = () => {
	const titles = document.querySelectorAll('.tool-title')
	titles.forEach(title => {
		const str = title.innerHTML
		title.innerHTML = ext(str.trim(), calc_width(str))
	})
}

function calc_width(str) {
	const parent = document.querySelector('.tool-link')
	const test = document.createElement('div')
	test.style.display = 'inline-block'
	test.style.fontWeight = 'inherit'
	test.innerHTML = str
	parent.appendChild(test)
	const w = test.offsetWidth
	parent.removeChild(test)
	return w
}
function ext(str, w) {
	let n = Math.floor((goal_width() - w) / ext_width())
	while(n) {
		for(let i = 1; i < str.length && n; i++) {
			if(str[i] == ' ')
				continue
			if(extp(str[i - 1]) && Math.round(Math.random())) {
				str = str.substring(0, i) +
					ext_char +
					str.substring(i)
				i++; n--;
			}
		}
	}
	return str
}
function extp(c) {
	return 'قتیئحپسفگهکلخجڤبنمێعشغڵچـ'.indexOf(c) !== -1
}
