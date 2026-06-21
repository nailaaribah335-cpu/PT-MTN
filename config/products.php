<?php

return [
    'categories' => [
        ['id' => 'all', 'name' => 'Semua Kategori', 'icon' => null],
        ['id' => 'safety', 'name' => 'Alat Pelindung Kerja (APD)', 'icon' => 'shield-alert'],
        ['id' => 'atk', 'name' => 'Alat Tulis Kantor', 'icon' => 'pen-tool'],
        ['id' => 'kebersihan', 'name' => 'Alat Kebersihan', 'icon' => 'spray-can'],
    ],

    'items' => [
        // ================= ALAT KEBERSIHAN =================
        [
            'id' => 'kantong-sampah',
            'category' => 'kebersihan',
            'name' => 'Plastik Sampah Hitam / Kantong Sampah Hitam',
            'desc' => 'Tersedia tipe Standar dan TEBAL. Ukuran lengkap dari kecil (40x50) hingga Super Jumbo (120x180).',
            'min_order' => '50 Pack',
            'features' => ['Bahan kuat anti bocor', 'Tipe standar untuk kantor/rumah', 'Tipe tebal untuk sampah berat/tajam'],
            'image' => 'PlastikHitam.jpeg',
            'is_best_seller' => true,
        ],

        // ================= SAFETY / APD =================
        [
            'id' => 'sarung-tangan-latex',
            'category' => 'safety',
            'name' => 'Shamrock Latex Examination Gloves',
            'desc' => 'Sarung tangan medis pemeriksaan sekali pakai (Disposable) berbahan 100% Lateks Karet Alam.',
            'min_order' => '10 Box',
            'features' => ['Powder Free (Tanpa bedak)', 'Non-Sterile', 'Ambidextrous (Bisa tangan kanan/kiri)'],
            'image' => 'SarungTangan.jpeg',
            'is_best_seller' => false,
        ],
        [
            'id' => 'sarung-tangan-nitrile',
            'category' => 'safety',
            'name' => 'Nitrile Examination Gloves Powder-Free',
            'desc' => 'Sarung tangan medis berbahan karet sintetis (Nitrile) warna biru royal, lebih tahan lama dibanding lateks.',
            'min_order' => '10 Box',
            'features' => ['Bahan Nitrile (Bukan lateks)', 'Warna Biru Royal', 'Grade medis non-sterile'],
            'image' => 'Sarung Tangan Nitrile.jpeg',
            'is_best_seller' => true,
        ],
        [
            'id' => 'kertas-amplas',
            'category' => 'safety',
            'name' => 'Amplas Air / Kertas Gosok Waterproof Sikkens',
            'desc' => 'Silicon Carbide grit 3000 CW untuk finishing poles akhir. Bisa digunakan basah maupun kering.',
            'min_order' => '1 Roll / 50 Lembar',
            'features' => ['Waterproof', 'Butiran halus & tajam', 'Kertas coklat fleksibel'],
            'image' => 'amplas.jpeg',
            'is_best_seller' => true,
        ],

        // ================= ATK / PACKING =================
        [
            'id' => 'lakban-opp',
            'category' => 'atk',
            'name' => 'Lakban / Isolasi Bening (OPP Tape)',
            'desc' => 'Lakban bening dengan lem acrylic kuat. Cocok untuk packing olshop, segel kardus, hingga keperluan kantor.',
            'min_order' => '1 Dus (72 Roll)',
            'features' => ['Hasil rekat invisible', 'Tersedia ukuran 12mm hingga 48mm', 'Lem ekstra kuat'],
            'image' => 'solatip.jpeg',
            'is_best_seller' => true,
        ],
        [
            'id' => 'tali-strapping',
            'category' => 'atk',
            'name' => 'Tali Strapping Band / Tali Packing',
            'desc' => 'Tali PP Polypropylene kuat, lentur, dan anti-karat untuk mengikat barang logistik/palet.',
            'min_order' => '1 Roll (5kg)',
            'features' => ['Permukaan emboss (kasar)', 'Lebar 12mm/15mm/19mm', 'Warna: Kuning, Biru, Merah'],
            'image' => 'TaliStraping.jpeg',
            'is_best_seller' => false,
        ],
        [
            'id' => 'stretch-film',
            'category' => 'atk',
            'name' => 'Plastik Wrapping / Stretch Film',
            'desc' => 'Plastik LLDPE elastis (bisa melar 200-300%) untuk membungkus palet, kabel, atau barang packing.',
            'min_order' => '1 Dus',
            'features' => ['Tersedia lebar 10cm/25cm/30cm/50cm', 'Transparan', 'Dilengkapi core pipa kardus'],
            'image' => 'PlastikWrapping.jpeg',
            'is_best_seller' => true,
        ],
    ]
];