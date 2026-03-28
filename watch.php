<?php
// Gələn məlumatları alırıq
$animeName = isset($_GET['name']) ? $_GET['name'] : 'Anime';
$video = isset($_GET['video']) ? $_GET['video'] : '';
$currentSeason = isset($_GET['season']) ? (int)$_GET['season'] : 1;

// Video adından bölüm nömrəsini tapırıq
preg_match('/(\d+)/', $video, $matches);
$currentEpisode = isset($matches[0]) ? (int)$matches[0] : 1;

// Anime kodunu tapırıq (məsələn: jjk)
$animeCode = preg_replace('/_\d+\.mp4$/', '', $video);

// --- LİMİTLƏMƏ HİSSƏSİ ---
$directory = "Videos/S" . $currentSeason . "/";
$totalEpisodes = 0;

if (is_dir($directory)) {
    // Qovluqdakı .mp4 fayllarını sayırıq
    $files = glob($directory . "*.mp4");
    $totalEpisodes = count($files);
}
// -------------------------

// Növbəti və Əvvəlki bölüm adları
$prevVideo = $animeCode . "_" . ($currentEpisode - 1) . ".mp4";
$nextVideo = $animeCode . "_" . ($currentEpisode + 1) . ".mp4";

$videoPath = $directory . $video;
?>

<!DOCTYPE html>
<html lang="az">
<head>
    <meta charset="UTF-8">
    <title><?php echo $animeName; ?> - S<?php echo $currentSeason; ?> E<?php echo $currentEpisode; ?></title>
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <style>
        /* Pleyerin rəngini öz dizaynına (neon mavisi) uyğunlaşdıraq */
    :root {
        --plyr-color-main: #00f0ff;
    }
    .video-box { 
        width: 80%; 
        max-width: 800px; 
        margin: 30px auto; 
        border: none; /* Plyr özü çərçivə yaradır */
        border-radius: 8px;
        overflow: hidden;
    }
        body { background: #0a0a0a; color: white; font-family: 'Poppins', sans-serif; text-align: center; }
        .video-box { width: 80%; max-width: 800px; margin: 30px auto; border: 2px solid #00f0ff; }
        video { width: 100%; display: block; }
        .season-selector { margin: 20px 0; }
        .s-btn { padding: 8px 15px; margin: 0 5px; border: 1px solid #00f0ff; color: #00f0ff; text-decoration: none; border-radius: 5px; }
        .s-btn.active { background: #00f0ff; color: #000; }
        .controls { margin-top: 20px; display: flex; justify-content: center; gap: 20px; align-items: center; }
        .btn { padding: 10px 25px; border: 2px solid #ff3d7f; color: white; text-decoration: none; border-radius: 30px; transition: 0.3s; }
        .btn:hover { background: #ff3d7f; box-shadow: 0 0 15px #ff3d7f; }
        .disabled { opacity: 0.3; cursor: not-allowed; pointer-events: none; }
    </style>
</head>
<body>

    <h1><?php echo $animeName; ?></h1>
    
    <div class="season-selector">
        <a href="watch.php?name=<?php echo $animeName; ?>&season=1&video=<?php echo $animeCode; ?>_1.mp4" class="s-btn <?php echo ($currentSeason == 1) ? 'active' : ''; ?>">Sezon 1</a>
        <a href="watch.php?name=<?php echo $animeName; ?>&season=2&video=<?php echo $animeCode; ?>_1.mp4" class="s-btn <?php echo ($currentSeason == 2) ? 'active' : ''; ?>">Sezon 2</a>
        <a href="watch.php?name=<?php echo $animeName; ?>&season=3&video=<?php echo $animeCode; ?>_1.mp4" class="s-btn <?php echo ($currentSeason == 3) ? 'active' : ''; ?>">Sezon 3</a>
    </div>

    <h3>S<?php echo $currentSeason; ?> | Bölüm: <?php echo $currentEpisode; ?> / <?php echo $totalEpisodes; ?></h3>

<div class="video-box">
    <video id="player" playsinline controls data-poster="poster.jpg">
        <source src="<?php echo $videoPath; ?>" type="video/mp4">
    </video>
</div>

    <div class="controls">
        <?php if ($currentEpisode > 1): ?>
            <a href="watch.php?name=<?php echo $animeName; ?>&season=<?php echo $currentSeason; ?>&video=<?php echo $prevVideo; ?>" class="btn">← Əvvəlki</a>
        <?php else: ?>
            <span class="btn disabled">← Əvvəlki</span>
        <?php endif; ?>

        <?php if ($currentEpisode < $totalEpisodes): ?>
            <a href="watch.php?name=<?php echo $animeName; ?>&season=<?php echo $currentSeason; ?>&video=<?php echo $nextVideo; ?>" class="btn">Növbəti Bölüm →</a>
        <?php else: ?>
            <span class="btn disabled">Son Bölüm</span>
        <?php endif; ?>
    </div>

    <br><br>
    <a href="home.php" style="color: #00f0ff;">Ana Səhifəyə Dön</a>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

<script>
    // Pleyeri aktivləşdiririk
    const player = new Plyr('#player', {
        tooltips: { controls: true, seek: true },
        speed: { selected: 1, options: [0.5, 0.75, 1, 1.25, 1.5, 2] }
    });

    // Avtomatik növbəti bölmə keçid (Opsiya)
    const nextBtn = document.querySelector('.controls a:last-child');
    
    player.on('ended', () => {
        // Əgər "Növbəti Bölüm" düyməsi aktivdirsə (yəni sonuncu bölüm deyilsə)
        if (nextBtn && !nextBtn.classList.contains('disabled')) {
            window.location.href = nextBtn.href;
        }
    });
</script>

</body>
</html>