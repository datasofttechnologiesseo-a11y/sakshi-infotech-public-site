<?php

/*
|--------------------------------------------------------------------------
| Sakshi Infonet, Central Business Information
|--------------------------------------------------------------------------
| All company details live here so every page, meta tag and schema block
| stays consistent. Update once, and the whole website reflects it.
*/

return [
    'name'        => 'Sakshi Infonet',
    'tagline'     => 'Security | IT Hardware | Communication | Networking Solutions',
    'short_desc'  => 'Sakshi Infonet is a trusted provider of CCTV security systems, computer hardware, communication and networking solutions in Faridabad and across Delhi NCR.',

    'phone'       => '+91 99104 16354',
    'phone_link'  => '+919910416354',
    'email'       => 'sakshiinfonet@gmail.com',
    'gst'         => '06ACRPL5539Q1ZO',

    'address'     => [
        'line'     => 'E-1262/2, Chacha Daftar Wali Gali, Dabua Colony, N.I.T Faridabad',
        'city'     => 'Faridabad',
        'state'    => 'Haryana',
        'country'  => 'India',
        'pincode'  => '121001',
        'full'     => 'E-1262/2, Chacha Daftar Wali Gali, Dabua Colony, N.I.T Faridabad, Faridabad, Haryana, India, 121001',
    ],

    // Google Maps embed query for the contact page
    'map_query'   => 'Dabua Colony, NIT Faridabad, Haryana 121001',

    'hours'       => 'Monday to Saturday: 9:00 AM – 7:00 PM',

    'social'      => [
        'facebook'  => 'https://www.facebook.com/',
        'instagram' => 'https://www.instagram.com/',
        'linkedin'  => 'https://www.linkedin.com/',
        'whatsapp'  => 'https://wa.me/919910416354',
    ],

    'logo'        => 'images/logo.png',

    'services'    => [
        [
            'slug'  => 'security-systems',
            'icon'  => 'shield',
            'title' => 'Security Systems',
            'image' => 'images/services/security-systems.jpg',
            'short' => 'CCTV cameras, biometric attendance and face recognition systems for homes, shops and offices.',
            'long'  => 'Protect what matters most with Sakshi Infonet\'s complete security systems. We supply and install the latest CCTV cameras, biometric machines and face recognition systems for homes, shops, offices and factories across Faridabad and Delhi NCR. From a single camera at your front gate to a full multi-camera setup with mobile viewing, our trained team plans, installs and maintains everything neatly and professionally. Watch your property live from your phone, record round the clock, and control who enters with smart biometric and access control, all at honest, affordable prices.',
            'items' => [
                'CCTV Camera Installation (Dome, Bullet, PTZ, IP)',
                'Biometric Attendance & Access Control',
                'Face Recognition Systems',
                'DVR / NVR Setup & Remote Mobile Viewing',
                'Video Door Phones & Smart Door Locks',
                'Annual Maintenance & On-site Support',
            ],
        ],
        [
            'slug'  => 'computer-hardware',
            'icon'  => 'desktop',
            'title' => 'Computer Hardware',
            'image' => 'images/services/computer-hardware.jpg',
            'short' => 'Complete IT hardware, printers, scanners and repair services to keep your business running.',
            'long'  => 'Keep your business running smoothly with reliable IT hardware from Sakshi Infonet. We supply, set up and repair desktops, laptops, printers, scanners and all kinds of computer peripherals. Whether you need a single new computer, an office full of workstations, or a quick repair and upgrade, our technicians give you genuine products, fair pricing and fast on-site support. From RAM and SSD upgrades to antivirus and software setup, we make sure your systems stay fast, safe and productive.',
            'items' => [
                'Desktops, Laptops & Workstations',
                'Printers, Scanners & Photocopiers',
                'Computer Repair & Upgrades',
                'RAM, SSD, HDD & Peripheral Upgrades',
                'Antivirus & Software Setup',
                'On-site IT Hardware Support (AMC)',
            ],
        ],
        [
            'slug'  => 'communication',
            'icon'  => 'phone',
            'title' => 'Communication',
            'image' => 'images/services/communication.jpg',
            'short' => 'Intercom, EPABX and telecom solutions for smooth communication in offices and buildings.',
            'long'  => 'Stay connected across your office or building with smart communication solutions from Sakshi Infonet. We install and maintain intercom systems, EPABX, telecom and public address setups that make internal and external communication simple and clear. Ideal for offices, apartments, factories and commercial complexes, our solutions include neat cabling, easy-to-use handsets and dependable after-sales support, so your teams and visitors can always reach the right person quickly.',
            'items' => [
                'Intercom & EPABX System Installation',
                'Telecom & PBX Solutions',
                'Audio & Video Conferencing Setup',
                'Public Address (PA) Systems',
                'Wiring, Cabling & Configuration',
                'Maintenance & Troubleshooting',
            ],
        ],
        [
            'slug'  => 'networking',
            'icon'  => 'network',
            'title' => 'Networking',
            'image' => 'images/services/networking.jpg',
            'short' => 'Reliable internet, intranet, LAN and Wi-Fi networking for offices, shops and buildings.',
            'long'  => 'Power your home or office with fast, secure and reliable networks built by Sakshi Infonet. We design and install LAN, intranet, Wi-Fi and broadband networks with proper structured cabling, routers, switches and firewalls. Whether you are setting up a new office, expanding your network, or fixing slow and unstable connections, our experts make sure every device stays connected safely. From internet leased lines to complete server and data-point configuration, we keep you online without interruptions.',
            'items' => [
                'LAN, WAN & Intranet Setup',
                'Wi-Fi & Router Installation',
                'Internet Leased Line & Broadband Setup',
                'Network Cabling & Structured Wiring',
                'Firewall & Network Security',
                'Server & Data Point Configuration',
            ],
        ],
    ],
];
