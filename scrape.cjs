const https = require('https');

const searchKeywords = [
    'helm', 'rompi', 'sepatu safety', 'kacamata safety', 'respirator', 
    'sarung tangan', 'palu', 'pallet', 'stretch film', 'lakban', 'amplas',
    'map', 'kertas', 'spidol', 'pel lantai', 'ember', 'kantong sampah',
    'vacuum', 'sikat toilet', 'wet floor'
];

async function fetchSkaSafety() {
    const url = 'https://www.ska-safety.com/product';
    return new Promise((resolve, reject) => {
        https.get(url, (res) => {
            let data = '';
            res.on('data', chunk => data += chunk);
            res.on('end', () => resolve(data));
        }).on('error', reject);
    });
}

async function run() {
    const html = await fetchSkaSafety();
    const regex = /<img[^>]+src=["'](https:\/\/image\.ska-safety\.com\/[^"']+)["'][^>]*alt=["']([^"']+)["']/gi;
    
    let match;
    const results = [];
    while ((match = regex.exec(html)) !== null) {
        results.push({ url: match[1], alt: match[2] });
    }
    
    console.log(JSON.stringify(results.slice(0, 20), null, 2));
}

run();
