const https = require('https');
const fs = require('fs');

const products = {
    'helm-safety': 'helm proyek kuning safety',
    'rompi-safety': 'rompi proyek hijau jaring safety',
    'sepatu-safety': 'sepatu safety boot hitam',
    'kacamata-safety': 'kacamata safety bening',
    'masker-respirator': 'masker respirator 3m',
    'sarung-tangan-kerja': 'sarung tangan proyek bintik kuning',
    'hand-tools-set': 'palu perkakas tukang',
    'pallet-plastik': 'pallet plastik biru gudang',
    'stretch-film': 'stretch film plastik wrapping',
    'lakban-isolasi': 'lakban coklat daimaru',
    'kertas-amplas': 'kertas amplas lembaran',
    'buku-map-ordner': 'buku ordner bantex biru',
    'kertas-hvs': 'kertas hvs paperline a4',
    'alat-tulis': 'pulpen snowman spidol',
    'mop-pel-lantai': 'alat pel lantai dorong',
    'ember-pel': 'ember pel peras wringer bucket',
    'kantong-sampah': 'kantong sampah plastik hitam polybag',
    'vacuum-cleaner': 'mesin vacuum cleaner wet dry krisbow',
    'sikat-toilet': 'sikat kloset toilet',
    'wet-floor-sign': 'papan wet floor sign kuning'
};

async function fetchImage(query) {
    return new Promise((resolve, reject) => {
        const q = encodeURIComponent(query + ' product white background');
        const req = https.get(`https://html.duckduckgo.com/html/?q=${q}`, {
            headers: {
                'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
            }
        }, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => {
                const match = data.match(/<img class="raw" src="([^"]+)"/i) || data.match(/src="\/\/external-content\.duckduckgo\.com\/iu\/\?u=([^&]+)/i);
                if (match && match[1]) {
                    resolve(decodeURIComponent(match[1]));
                } else {
                    resolve(null);
                }
            });
        }).on('error', reject);
    });
}

async function run() {
    const results = {};
    for (const [id, query] of Object.entries(products)) {
        console.log(`Fetching ${query}...`);
        const url = await fetchImage(query);
        results[id] = url;
    }
    fs.writeFileSync('product_images.json', JSON.stringify(results, null, 2));
    console.log('Done.');
}

run();
