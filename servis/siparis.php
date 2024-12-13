<link rel="stylesheet" href="../style.css">

<?php
require_once '../config.php';

include '../header.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $stmt = $db->prepare("SELECT * FROM services2 WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        $service = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($service) {
        } else {
            echo 'Servis bulunamadı!';
        }
    } catch (PDOException $e) {
        echo "Veritabanı hatası: " . $e->getMessage();
    }
} else {
    echo 'Geçersiz ID parametresi.';
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sipariş Oluştur - SosyalGram</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-gradient {
            background: linear-gradient(135deg, #4c1d95 0%, #4338ca 100%);
        }
        .step-active {
            background: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-gradient min-h-screen">
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold text-white mb-8">SİPARİŞ OLUŞTUR</h1>

        <div class="flex flex-wrap gap-4 mb-8">
            <button class="flex items-center gap-2 px-6 py-3 rounded-full text-white step-active">
                <span>SİPARİŞ OLUŞTUR</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
            <button class="flex items-center gap-2 px-6 py-3 rounded-full text-white/70">
                <span>ÖDEME</span>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                </svg>
            </button>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-12 h-12 bg-pink-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                </div>
                <h2 class="text-lg font-semibold"><?php echo htmlspecialchars($service['name'], ENT_QUOTES, 'UTF-8'); ?></h2>
            </div>

            <div class="mb-8">
                <label class="block text-gray-700 font-medium mb-2">Kullanıcı Adı Giriniz</label>
                <p class="text-sm text-gray-500 mb-4">Lütfen kullanıcı adınızı doğru yazın ve hesap gizliliğinin herkese açık olduğundan emin olun!</p>
                <div class="flex items-center border rounded-lg p-3 bg-gray-50">
                    <div class="w-8 h-8 bg-gray-200 rounded-full flex-shrink-0"></div>
                    <input type="text" 
                           placeholder="kullanıcı adi" 
                           class="ml-3 flex-grow bg-transparent outline-none"
                           name="username">
                </div>
            </div>

            <div class="flex items-center justify-between">
            <h2 class="text-lg font-semibold"><?php echo htmlspecialchars($service['price'], ENT_QUOTES, 'UTF-8'); ?> TL</h2>
                <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 px-6 py-2 rounded-lg flex items-center gap-2 transition-colors">
                    <span>Satin Al</span>
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <?php require_once '../footer.php'; ?>

</body>
</html>