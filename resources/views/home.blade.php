<!DOCTYPE html>
<html lang="az" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>servos.az - Anbar İdarəetmə Sistemi</title>
    <meta name="description" content="Peşəkar Anbar İdarəetmə Sistemi - Sifarişləri, çatdırılmaları, müştəriləri və maliyyəni asanlıqla idarə edin">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Alpine.js for interactions -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .gradient-bg-2 {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .gradient-bg-3 {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        .animate-fade-in {
            animation: fadeIn 1s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .feature-card {
            transition: all 0.3s ease;
        }
    </style>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#667eea',
                        secondary: '#764ba2',
                    }
                }
            }
        }
    </script>
</head>
<body class="antialiased bg-gray-50">

    <!-- Navigation -->
    <nav class="fixed w-full bg-white/90 backdrop-blur-md shadow-sm z-50" x-data="{ open: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <h1 class="text-2xl font-bold gradient-bg bg-clip-text text-transparent">
                            <i class="fas fa-warehouse mr-2"></i>servos.az
                        </h1>
                    </div>
                </div>

                <div class="hidden md:block">
                    <div class="flex items-center space-x-8">
                        <a href="#features" class="text-gray-700 hover:text-primary transition">Xüsusiyyətlər</a>
                        <a href="#benefits" class="text-gray-700 hover:text-primary transition">Üstünlüklər</a>
                        <a href="#contact" class="text-gray-700 hover:text-primary transition">Əlaqə</a>
                        <a href="#contact" class="gradient-bg text-white px-6 py-2 rounded-full hover:opacity-90 transition">
                            İndi Başla
                        </a>
                    </div>
                </div>

                <div class="md:hidden">
                    <button @click="open = !open" class="text-gray-700">
                        <i class="fas" :class="open ? 'fa-times' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div x-show="open" x-transition class="md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="#features" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Xüsusiyyətlər</a>
                <a href="#benefits" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Üstünlüklər</a>
                <a href="#contact" class="block px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-md">Əlaqə</a>
                <a href="#contact" class="block px-3 py-2 gradient-bg text-white rounded-md text-center">İndi Başla</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-20 gradient-bg overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-white animate-fade-in">
                    <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
                        Anbar İdarəetməsində
                        <span class="text-yellow-300">Yeni Dövr</span>
                    </h1>
                    <p class="text-xl mb-8 text-purple-100 leading-relaxed">
                        Çatdırılma və anbar əməliyyatlarınızı tam avtomatlaşdırın. Sifarişlərdən tutmuş maliyyəyə qədər hər şeyi bir platformada idarə edin.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <a href="#contact" class="bg-white text-primary px-8 py-4 rounded-full font-semibold hover:bg-gray-100 transition text-center shadow-lg">
                            <i class="fas fa-rocket mr-2"></i>Pulsuz Sınaq
                        </a>
                        <a href="#features" class="glass-effect text-white px-8 py-4 rounded-full font-semibold hover:bg-white/20 transition text-center">
                            <i class="fas fa-play-circle mr-2"></i>Daha Ətraflı
                        </a>
                    </div>

                    <div class="mt-12 grid grid-cols-3 gap-8">
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">500+</div>
                            <div class="text-sm text-purple-200">Aktiv İstifadəçi</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">10K+</div>
                            <div class="text-sm text-purple-200">Günlük Sifariş</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-yellow-300">99%</div>
                            <div class="text-sm text-purple-200">Məmnuniyyət</div>
                        </div>
                    </div>
                </div>

                <div class="relative animate-float hidden md:block">
                    <div class="relative z-10">
                        <div class="glass-effect rounded-2xl p-8 shadow-2xl">
                            <div class="bg-white rounded-xl p-6 mb-4">
                                <div class="flex items-center justify-between mb-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center">
                                            <i class="fas fa-check text-white"></i>
                                        </div>
                                        <div>
                                            <div class="font-semibold text-gray-800">Yeni Sifariş</div>
                                            <div class="text-sm text-gray-500">#ORD-12345</div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <div class="font-bold text-green-600">₼ 250</div>
                                        <div class="text-xs text-gray-500">Çatdırılır</div>
                                    </div>
                                </div>
                                <div class="flex items-center text-sm text-gray-600">
                                    <i class="fas fa-map-marker-alt mr-2 text-red-500"></i>
                                    <span>Bakı, Nəsimi r-nu</span>
                                </div>
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div class="bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl p-4 text-white">
                                    <i class="fas fa-box text-2xl mb-2"></i>
                                    <div class="text-2xl font-bold">1,234</div>
                                    <div class="text-sm opacity-90">Məhsul</div>
                                </div>
                                <div class="bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl p-4 text-white">
                                    <i class="fas fa-users text-2xl mb-2"></i>
                                    <div class="text-2xl font-bold">856</div>
                                    <div class="text-sm opacity-90">Müştəri</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Decorative elements -->
                    <div class="absolute top-0 -left-4 w-72 h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse"></div>
                    <div class="absolute -bottom-8 right-4 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-xl opacity-70 animate-pulse delay-1000"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Güclü Xüsusiyyətlər
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Çatdırılma biznesinizi növbəti səviyyəyə çatdıran müasir alətlər
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 gradient-bg rounded-2xl flex items-center justify-center mb-6 transform rotate-3">
                        <i class="fas fa-clipboard-list text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Sifariş İdarəetməsi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Tam avtomatlaşdırılmış sifariş sistemi. Açıq, bağlı, ödənilmiş statuslar, real-vaxt izləmə və Waze inteqrasiyası.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 gradient-bg-2 rounded-2xl flex items-center justify-center mb-6 transform -rotate-3">
                        <i class="fas fa-users text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Müştəri İdarəetməsi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Çoxsaylı ünvanlar, GPS koordinatları, borc izləmə, avtomatik xatırlatmalar və tam müştəri tarixi.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 gradient-bg-3 rounded-2xl flex items-center justify-center mb-6 transform rotate-3">
                        <i class="fas fa-truck text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Kuryer İdarəetməsi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Kuryer mobil tətbiqi, inventar idarəetməsi, marşrut optimallaşdırması və performans izləmə.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl flex items-center justify-center mb-6 transform -rotate-3">
                        <i class="fas fa-warehouse text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Anbar Sistemi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Çoxlu anbar dəstəyi, stok idarəetməsi, anbar əməliyyatları və real-vaxt inventar izləmə.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl flex items-center justify-center mb-6 transform rotate-3">
                        <i class="fas fa-money-bill-wave text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Maliyyə İdarəetməsi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Çoxlu hesablar, xərc/gəlir izləmə, hesablar arası köçürmələr və balans idarəetməsi.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-red-500 to-pink-600 rounded-2xl flex items-center justify-center mb-6 transform -rotate-3">
                        <i class="fas fa-chart-line text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Hesabatlar və Analitika</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Satış, xərc, gəlir hesabatları, Excel export, dashboard analitikası və performans göstəriciləri.
                    </p>
                </div>

                <!-- Feature 7 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 transform rotate-3">
                        <i class="fab fa-telegram text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Telegram İnteqrasiyası</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Kuryer, admin və müştəri botları. Avtomatik bildirişlər və real-vaxt yeniləmələr.
                    </p>
                </div>

                <!-- Feature 8 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-500 to-cyan-600 rounded-2xl flex items-center justify-center mb-6 transform -rotate-3">
                        <i class="fas fa-recycle text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">İcarə Sistemi</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Məhsul icarəsi (su kulerləri, qablar), müştəridə olan məhsulların izlənməsi və qaytarılma sistemi.
                    </p>
                </div>

                <!-- Feature 9 -->
                <div class="feature-card bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <div class="w-16 h-16 bg-gradient-to-br from-pink-500 to-rose-600 rounded-2xl flex items-center justify-center mb-6 transform rotate-3">
                        <i class="fas fa-map-marked-alt text-3xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Coğrafi Sistemlər</h3>
                    <p class="text-gray-600 leading-relaxed">
                        GPS koordinatları, məsafə hesablama, marşrut optimallaşdırması və Waze naviqasiya inteqrasiyası.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section id="benefits" class="py-20 bg-gradient-to-br from-gray-50 to-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Niyə WMS?
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Biznesinizi daha sürətli, daha səmərəli və daha qazanclı edin
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 mb-16">
                <div class="bg-white rounded-2xl p-8 shadow-lg transform hover:scale-105 transition">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-bolt text-2xl text-green-600"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">70% Vaxt Qənaəti</h3>
                            <p class="text-gray-600">
                                Əl ilə aparılan əməliyyatları avtomatlaşdırın və vaxtınızı daha dəyərli işlərə ayırın.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg transform hover:scale-105 transition">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-chart-line text-2xl text-blue-600"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">45% Gəlir Artımı</h3>
                            <p class="text-gray-600">
                                Daha çox sifariş, daha az xəta, daha yüksək müştəri məmnuniyyəti.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg transform hover:scale-105 transition">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-shield-alt text-2xl text-purple-600"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">100% Təhlükəsizlik</h3>
                            <p class="text-gray-600">
                                Rol əsaslı giriş, tam audit trail və məlumatlarınızın təhlükəsizliyi.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-2xl p-8 shadow-lg transform hover:scale-105 transition">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-red-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-mobile-alt text-2xl text-red-600"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Mobil Əlçatanlıq</h3>
                            <p class="text-gray-600">
                                İstənilən yerdən, istənilən vaxt, istənilən cihazdan sisteminizə daxil olun.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Banner -->
            <div class="gradient-bg rounded-3xl p-12 text-center text-white shadow-2xl">
                <h3 class="text-3xl md:text-4xl font-bold mb-4">
                    Biznesinizi böyütməyə hazırsınız?
                </h3>
                <p class="text-xl mb-8 text-purple-100">
                    14 gün pulsuz sınaq. Kredit kartı tələb olunmur.
                </p>
                <a href="#contact" class="inline-block bg-white text-primary px-10 py-4 rounded-full font-bold hover:bg-gray-100 transition shadow-lg transform hover:scale-105">
                    <i class="fas fa-rocket mr-2"></i>İndi Başlayın
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                    Bizimlə Əlaqə
                </h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                    Sualınız var? Bizə yazın, sizə kömək edək!
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12 max-w-5xl mx-auto">
                <!-- Contact Info -->
                <div class="space-y-8">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                                <i class="fab fa-whatsapp text-2xl text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">WhatsApp</h3>
                            <a href="https://wa.me/994502767466" target="_blank" class="text-primary hover:underline text-lg">
                                +994 50 276 74 66
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                                <i class="fas fa-envelope text-2xl text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">Email</h3>
                            <a href="mailto:eminxalilov94@gmail.com" class="text-primary hover:underline text-lg">
                                eminxalilov94@gmail.com
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 gradient-bg rounded-xl flex items-center justify-center">
                                <i class="fab fa-linkedin text-2xl text-white"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-900 mb-1">LinkedIn</h3>
                            <a href="https://www.linkedin.com/in/emin-xalilov/" target="_blank" class="text-primary hover:underline text-lg">
                                Emin Xalilov
                            </a>
                        </div>
                    </div>

                    <div class="mt-8 p-6 bg-gradient-to-br from-purple-50 to-blue-50 rounded-2xl">
                        <h3 class="font-bold text-gray-900 mb-2">
                            <i class="fas fa-info-circle mr-2 text-primary"></i>Qeyd
                        </h3>
                        <p class="text-gray-600">
                            İş saatları: Bazar ertəsi - Cümə, 09:00 - 18:00<br>
                            Cavab müddəti: 24 saat ərzində
                        </p>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Ad Soyad
                            </label>
                            <input type="text" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition"
                                placeholder="Adınızı daxil edin">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Email
                            </label>
                            <input type="email" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition"
                                placeholder="email@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Telefon
                            </label>
                            <input type="tel" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition"
                                placeholder="+994 XX XXX XX XX">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Mesajınız
                            </label>
                            <textarea rows="4" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-300 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none transition resize-none"
                                placeholder="Mesajınızı yazın..."></textarea>
                        </div>

                        <button type="submit"
                            class="w-full gradient-bg text-white py-4 rounded-xl font-semibold hover:opacity-90 transition shadow-lg transform hover:scale-[1.02]">
                            <i class="fas fa-paper-plane mr-2"></i>Göndər
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="md:col-span-2">
                    <h3 class="text-2xl font-bold text-white mb-4">
                        <i class="fas fa-warehouse mr-2 text-primary"></i>servos.az
                    </h3>
                    <p class="text-gray-400 mb-4">
                        Peşəkar Anbar və Çatdırılma İdarəetmə Sistemi. Azərbaycan bazarı üçün xüsusi hazırlanmış həll.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://wa.me/994502767466" target="_blank" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/emin-xalilov/" target="_blank" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="mailto:eminxalilov94@gmail.com" class="w-10 h-10 bg-gray-800 rounded-lg flex items-center justify-center hover:bg-primary transition">
                            <i class="fas fa-envelope"></i>
                        </a>
                    </div>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4">Keçidlər</h4>
                    <ul class="space-y-2">
                        <li><a href="#features" class="hover:text-primary transition">Xüsusiyyətlər</a></li>
                        <li><a href="#benefits" class="hover:text-primary transition">Üstünlüklər</a></li>
                        <li><a href="#contact" class="hover:text-primary transition">Əlaqə</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4">Xüsusiyyətlər</h4>
                    <ul class="space-y-2 text-sm">
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Sifariş İdarəetməsi</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Kuryer Sistemi</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Anbar İdarəsi</li>
                        <li><i class="fas fa-check text-green-500 mr-2"></i>Maliyyə Modulu</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center">
                <p class="text-gray-500">
                    &copy; {{ date('Y') }} servos.az - Anbar İdarəetmə Sistemi. Bütün hüquqlar qorunur.
                </p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button
        x-data="{ show: false }"
        @scroll.window="show = window.pageYOffset > 300"
        x-show="show"
        x-transition
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        class="fixed bottom-8 right-8 w-12 h-12 gradient-bg text-white rounded-full shadow-lg hover:opacity-90 transition z-40">
        <i class="fas fa-arrow-up"></i>
    </button>

</body>
</html>
