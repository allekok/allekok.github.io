const cache_ver = 'v2'

self.addEventListener('install', event =>
	event.waitUntil(caches.open(cache_ver).then(cache => 
		cache.addAll([
			'/src/frontend/style/DroidNaskh-Regular.woff2'
		]))))

self.addEventListener('activate', event => event.waitUntil(
	caches.keys().then(keyList => 
		Promise.all(keyList.map(key => {
			if(key == cache_ver)
				return caches.delete(key)
		})))))

self.addEventListener('fetch', event => event.respondWith(
	caches.match(event.request).then(resp => 
		resp || fetch(event.request).then(r => r))))
