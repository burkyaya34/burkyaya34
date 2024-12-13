<?php 
require_once '../config.php';

$page_slug = basename($_SERVER['PHP_SELF'], ".php"); 

$description = "Instagram'da kitlenizi ve etkileşiminizi yükseltmek için güvenilir, kaliteli ve profesyonel hizmetler sağlamaktayız.";

try {
    $stmt = $db->prepare("SELECT description FROM services WHERE slug = :slug LIMIT 1");
    $stmt->bindParam(':slug', $page_slug, PDO::PARAM_STR);
    
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch();
        $description = $row['description']; 
    }
} catch (PDOException $e) {
    echo "Sorgu hatası: " . $e->getMessage();
    exit;
}
?>

<style>
        :root {
            --primary: #e91e63;
            --secondary: #4c66ea;
            --text-color: #333;
            --light-bg: #f0f8ff;
        }

        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background-color: var(--light-bg);
        }

        .bayigram-top-bar {
            background: var(--secondary);
            color: white;
            padding: 8px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .bayigram-top-bar a {
            color: white;
            text-decoration: none;
            margin-left: 20px;
            font-size: 14px;
        }

        .bayigram-navbar {
            background: white;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .bayigram-logo {
            height: 40px;
        }

        .bayigram-nav-links a {
            text-decoration: none;
            color: var(--text-color);
            margin: 0 15px;
            font-weight: 500;
            font-size: 14px;
        }

        .bayigram-login-btn {
            background: #00e676;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: 600;
            font-size: 14px;
        }

        .bayigram-hero {
            background: #000000;

            color: white;
            padding: 40px 20px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .bayigram-hero h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .bayigram-hero p {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.1em;
        }

        .bayigram-services-grid {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .bayigram-service-card {
            background: white;
            border-radius: 8px;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .bayigram-service-info {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .bayigram-service-icon {
            width: 45px;
            height: 45px;
            background: #e91e63;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        .bayigram-service-info span {
            font-size: 15px;
            color: #333;
            font-weight: 500;
        }

        .bayigram-view-packages-btn {
            background: #e91e63;
            color: white;
            padding: 10px 25px;
            border-radius: 6px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            border: none;
            cursor: pointer;
        }

        .bayigram-view-packages-btn:hover {
            background: #d81b60;
        }

        .bayigram-snowflake {
    position: absolute;
    font-size: 24px;
    opacity: 0.8; /* Kar tanelerinin daha şeffaf görünmesini sağlamak */
    animation: fall 4s linear infinite, drift 6s ease-in-out infinite;
}

/* Kar tanelerinin düşme animasyonu */
@keyframes fall {
    0% {
        transform: translateY(0);  /* Başlangıç noktası */
    }
    100% {
        transform: translateY(100vh);  /* Ekranın altına kadar */
    }
}

/* Kar tanelerinin sağa sola kayma animasyonu */
@keyframes drift {
    0% {
        transform: translateX(0);
    }
    50% {
        transform: translateX(30px); /* Sağ kayma */
    }
    100% {
        transform: translateX(-30px); /* Sol kayma */
    }
}

/* Ekran üzerinde kar tanelerinin farklı hızlarda hareket etmesi için */
.bayigram-snowflake:nth-child(1) {
    animation-duration: 4s, 6s;
}
.bayigram-snowflake:nth-child(2) {
    animation-duration: 5s, 7s;
}
.bayigram-snowflake:nth-child(3) {
    animation-duration: 6s, 8s;
}
.bayigram-snowflake:nth-child(4) {
    animation-duration: 7s, 9s;
}
.bayigram-snowflake:nth-child(5) {
    animation-duration: 8s, 10s;
}
.bayigram-snowflake:nth-child(6) {
    animation-duration: 4s, 6s;
}
.bayigram-snowflake:nth-child(7) {
    animation-duration: 5s, 7s;
}
.bayigram-snowflake:nth-child(8) {
    animation-duration: 6s, 8s;
}
.bayigram-snowflake:nth-child(9) {
    animation-duration: 7s, 9s;
}
.bayigram-snowflake:nth-child(10) {
    animation-duration: 8s, 10s;
}
    </style>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= ucfirst($page_slug) ?> Hizmetleri - Bayigram</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">

    <style>
    </style>
</head>
<body>

<?php include '../header.php'; ?>

<div class="bayigram-hero">
    <div class="bayigram-snowflake" style="top: 5%; left: 10%;">❄</div>
    <div class="bayigram-snowflake" style="top: 10%; left: 25%;">❄</div>
    <div class="bayigram-snowflake" style="top: 15%; left: 35%;">❄</div>
    <div class="bayigram-snowflake" style="top: 10%; right: 5%;">❄</div>
    <div class="bayigram-snowflake" style="top: 30%; right: 20%;">❄</div>
    <div class="bayigram-snowflake" style="top: 40%; right: 35%;">❄</div>
    <div class="bayigram-snowflake" style="bottom: 10%; left: 15%;">❄</div>
    <div class="bayigram-snowflake" style="bottom: 20%; right: 30%;">❄</div>

    <h1><?= ucfirst($page_slug) ?> Hizmetleri</h1>
    <p><?php echo htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?></p> <!-- Güvenli şekilde yazdırıyoruz -->
</div>

<div class="bayigram-services-grid">
    <?php
    try {
        $stmt = $db->prepare("SELECT name FROM services2");
        $stmt->execute();
    
        $services = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo "Sorgu hatası: " . $e->getMessage();
        exit;
    }

    foreach ($services as $service) {
        echo '<div class="bayigram-service-card">
                <div class="bayigram-service-info">
                    <span>' . htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8') . '</span>
                </div>
                <button class="bayigram-view-packages-btn">Satin Al</button>
              </div>';
    }
    ?>
</div>

<br><br><br>

<?php include '../footer.php'; ?>

</body>
</html>
