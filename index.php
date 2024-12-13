
<?php 
require_once 'config.php';
require_once 'functions.php';

$services = getActiveServices();
$featuredPackages = getFeaturedPackages();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emre - Sosyal Medya Hizmetleri</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'; ?>


    <main>
        <section class="hero">
            <div class="hero-background">
                <svg class="hero-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#4F46E5" fill-opacity="0.2" d="M0,96L48,112C96,128,192,160,288,160C384,160,480,128,576,112C672,96,768,96,864,112C960,128,1056,160,1152,160C1248,160,1344,128,1392,112L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </div>
            <div class="container hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        Sosyal Medya'da 
                        <span class="gradient-text">Büyümenin</span>
                        Yeni Yolu
                    </h1>
                    <p class="hero-description">
                        Güvenilir ve hızlı sosyal medya hizmetleriyle hesaplarınızı büyütün. 
                        7/24 canlı destek ve garantili hizmet.
                    </p>
                    <br>
                    <div class="hero-buttons">
                        <a href="#hizmetler" class="btn btn-primary btn-lg">Hizmetleri İncele</a>
                        <a href="#nasil-calisir" class="btn btn-outline btn-lg">Nasıl Çalışır?</a>
                    </div>
                    <div class="hero-trust">
                        <div class="trust-item">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trust-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                            <span>Güvenli Ödeme</span>
                        </div>
                        <div class="trust-item">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trust-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            <span>Hızlı Teslimat</span>
                        </div>
                        <div class="trust-item">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="trust-icon">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                            <span>7/24 Destek</span>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                        <circle cx="250" cy="250" r="200" fill="#4F46E5" opacity="0.1"/>
                        <path d="M250,50 A200,200 0 0 1 450,250" fill="none" stroke="#4F46E5" stroke-width="40" stroke-linecap="round"/>
                        <circle cx="450" cy="250" r="30" fill="#4F46E5"/>
                        <g class="social-icons">
                            <circle cx="180" cy="120" r="20" fill="#E1306C"/>
                            <circle cx="320" cy="120" r="20" fill="#1DA1F2"/>
                            <circle cx="180" cy="380" r="20" fill="#FF0000"/>
                            <circle cx="320" cy="380" r="20" fill="#4267B2"/>
                            <circle cx="100" cy="250" r="20" fill="#000000"/>
                            <circle cx="400" cy="250" r="20" fill="#1DB954"/>
                        </g>
                    </svg>
                </div>
            </div>
        </section>


        <section id="hizmetler" class="services">
            <div class="container">
                <h2 class="section-title">Sosyal Medya Hizmetlerimiz</h2>
                <div class="services-grid">
                    <?php foreach($services as $service): ?>
                        <a href="/servis/<?= $service['slug'] ?>.php" class="service-card" style="background-color: <?= $service['color'] ?>;">
                        <div class="service-icon">
                            <?php echo getSvgIcon($service['name']); ?>
                        </div>
                        <h3 class="service-title"><?= $service['name'] ?></h3>
                        <p class="service-description">Hizmetleri</p>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                        </div>
                        <h3>%100 Güvenli Ödeme</h3>
                        <p>SSL sertifikalı güvenli ödeme altyapısı</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16"></path><path d="M3 11h18"></path></svg>
                        </div>
                        <h3>Hızlı Teslimat</h3>
                        <p>Siparişleriniz anında işleme alınır</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                        </div>
                        <h3>7/24 Destek</h3>
                        <p>Canlı destek ile anında yardım alın</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
