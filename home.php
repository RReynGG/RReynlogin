
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kazmzade Anime | Watch Your Favorite Anime Anytime</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
        :root {
            --bg-dark: #0a0a0a;
            --neon-pink: #ff3d7f;
            --neon-blue: #00f0ff;
            --text-white: #ffffff;
            --card-bg: #1a1a1a;
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--bg-dark);
            color: var(--text-white);
            overflow-x: hidden;
            scroll-behavior: smooth;
        }

        /* --- Navbar --- */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 8%;
            background: rgba(10, 10, 10, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            border-bottom: 1px solid rgba(255, 61, 127, 0.2);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--neon-blue);
            text-shadow: 0 0 10px var(--neon-blue);
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            list-style: none;
        }

        .nav-links li { margin: 0 20px; }

        .nav-links a {
            text-decoration: none;
            color: var(--text-white);
            font-weight: 500;
            transition: var(--transition);
        }

        .nav-links a:hover {
            color: var(--neon-pink);
            text-shadow: 0 0 8px var(--neon-pink);
        }

        /* --- Hero Section --- */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(45deg, rgba(10,10,10,0.8), rgba(10,10,10,0.5)), 
                        url(Photos/jujutsu-kaisen-3840x2160-13900.jpg);
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .hero-content h1 {
            font-size: 4rem;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 5px;
            animation: fadeInDown 1s ease;
        }

        .hero-content span { color: var(--neon-pink); text-shadow: 0 0 15px var(--neon-pink); }

        .btn-cta {
            padding: 15px 40px;
            font-size: 1.2rem;
            background: transparent;
            color: var(--neon-blue);
            border: 2px solid var(--neon-blue);
            cursor: pointer;
            transition: var(--transition);
            border-radius: 50px;
            box-shadow: 0 0 10px rgba(0, 240, 255, 0.3);
            text-decoration: none;
            display: inline-block;
        }

        .btn-cta:hover {
            background: var(--neon-blue);
            color: var(--bg-dark);
            box-shadow: 0 0 30px var(--neon-blue);
            transform: translateY(-5px);
        }

        /* --- Anime Showcase Grid --- */
        section { padding: 80px 8%; }

        .section-title {
            font-size: 2.5rem;
            margin-bottom: 40px;
            border-left: 5px solid var(--neon-pink);
            padding-left: 20px;
        }

        .anime-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 30px;
        }

        .anime-card {
            background: var(--card-bg);
            border-radius: 15px;
            overflow: hidden;
            transition: var(--transition);
            position: relative;
            border: 1px solid transparent;
        }

        .anime-card:hover {
            transform: translateY(-10px);
            border: 1px solid var(--neon-blue);
            box-shadow: 0 0 20px rgba(0, 240, 255, 0.4);
        }

        .anime-card img {
            width: 100%;
            height: 320px;
            object-fit: cover;
        }

        .card-info { padding: 15px; }
        .card-info h3 { font-size: 1.1rem; margin-bottom: 5px; }
        .card-info p { color: #888; font-size: 0.9rem; }
        .rating { color: #ffbd03; margin-top: 5px; }

        /* --- Featured Section --- */
        .featured-flex {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .featured-item {
            flex: 1;
            min-width: 300px;
            height: 400px;
            border-radius: 20px;
            background-size: cover;
            position: relative;
            display: flex;
            align-items: flex-end;
            padding: 30px;
            transition: var(--transition);
        }

        .featured-item:hover { transform: scale(1.02); }

        .pulse-btn {
            background: var(--neon-pink);
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            color: white;
            animation: pulse 2s infinite;
        }

        /* --- Genres --- */
        .genre-container {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .genre-badge {
            padding: 10px 25px;
            border: 1px solid var(--neon-pink);
            border-radius: 30px;
            cursor: pointer;
            transition: var(--transition);
            color: var(--neon-pink);
        }

        .genre-badge:hover {
            background: var(--neon-pink);
            color: white;
            box-shadow: 0 0 15px var(--neon-pink);
        }

        /* --- Footer --- */
        footer {
            background: #050505;
            padding: 50px 8%;
            text-align: center;
            border-top: 1px solid #222;
        }

        .social-icons a {
            color: white;
            font-size: 1.5rem;
            margin: 0 15px;
            transition: var(--transition);
        }

        .social-icons a:hover { color: var(--neon-blue); }

        /* --- Animations --- */
        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 61, 127, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(255, 61, 127, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 61, 127, 0); }
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* --- Responsive --- */
        @media (max-width: 768px) {
            .nav-links { display: none; }
            .hero-content h1 { font-size: 2.5rem; }
            .section-title { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

    <nav id="navbar">
        <a href="#" class="logo">KAZMZADE</a>
        <ul class="nav-links">
            <li><a href="#home">Home</a></li>
            <li><a href="#anime">Anime List</a></li>
            <li><a href="#genres">Genres</a></li>
            <li><a href="#popular">Popular</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section class="hero" id="home">
        <div class="hero-content">
            <h1>Watch Your Favorite <br><span>Anime</span> Anytime</h1>
            <p style="margin-bottom: 30px; color: #ccc;">Streaming the highest quality sub & dub for the global Otaku community.</p>
            <a href="#anime" class="btn-cta">Start Watching</a>
        </div>
    </section>

    <section id="anime">
        <h2 class="section-title">Trending Now</h2>



        <div class="anime-grid">
                        <a href="watch.php?name=Jujutsu Kaisen&video=jjk_1.mp4" style="text-decoration: none; color: inherit;">
                <div class="anime-card">
                    <img src="Photos/jujutsu-kaisen-3840x2160-25551.jpg" alt="Jujutsu Kaisen">
                    <div class="card-info">
                        <h3>Jujutsu Kaisen</h3>
                        <p>Supernatural, Action</p>
                        <div class="rating"><i class="fas fa-star"></i> 8.9</div>
                    </div>
                </div>
            </a>
            <a href="watch.php?name=One Piece&video=one_piece_1.mp4" style="text-decoration: none; color: inherit;">
                <div class="anime-card">
                    <img src="Photos/one-piece-season-1-3840x2160-18913.jpg" alt="One Piece">
                    <div class="card-info">
                        <h3>One Piece</h3>
                        <p>Action, Adventure</p>
                        <div class="rating"><i class="fas fa-star"></i> 9.2</div>
                    </div>
                </div>
            </a>



            <a href="watch.php?name=Demon Slayer&video=demon_slayer_1.mp4" style="text-decoration: none; color: inherit;">
                <div class="anime-card">
                    <img src="Photos/demon-slayer-5120x2880-22988.jpg" alt="Demon Slayer">
                    <div class="card-info">
                        <h3>Demon Slayer</h3>
                        <p>Fantasy, Action</p>
                        <div class="rating"><i class="fas fa-star"></i> 8.7</div>
                    </div>
                </div>
            </a>

            <a href="watch.php?name=Solo Leveling&video=solo_leveling_1.mp4" style="text-decoration: none; color: inherit;">
                <div class="anime-card">
                    <img src="Photos/solo-leveling-arise-7680x4320-24734.jpg" alt="Solo Leveling">
                    <div class="card-info">
                        <h3>Solo Leveling</h3>
                        <p>Fantasy, Action</p>
                        <div class="rating"><i class="fas fa-star"></i> 8.5</div>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <section id="featured">
        <h2 class="section-title">Featured Highlights</h2>
        <div class="featured-flex">
            <div class="featured-item" style="background-image: linear-gradient(to top, rgba(0,0,0,0.9), transparent), url(Photos/attack-on-titan-4080x2604-10433.jpg);">
                <div>
                    <h3>Attack On Titan</h3>
                    <p style="margin-bottom: 15px;">The Final Season is here.</p>
                    <a href="#" class="pulse-btn">Watch Now</a>
                </div>
            </div>
            <div class="featured-item" style="background-image: linear-gradient(to top, rgba(0,0,0,0.9), transparent), url(Photos/naruto-shippuden-3840x2160-25564.jpg);">
                <div>
                    <h3>Naruto Shippuden</h3>
                    <p style="margin-bottom: 15px;">Relive the legendary journey.</p>
                    <a href="#" class="pulse-btn" style="background: var(--neon-blue);">Watch Now</a>
                </div>
            </div>
        </div>
    </section>

    <section id="genres">
        <h2 class="section-title">Popular Genres</h2>
        <div class="genre-container">
            <div class="genre-badge">Shonen</div>
            <div class="genre-badge">Seinen</div>
            <div class="genre-badge">Isekai</div>
            <div class="genre-badge">Romance</div>
            <div class="genre-badge">Horror</div>
            <div class="genre-badge">Sci-Fi</div>
        </div>
    </section>

    <footer>
        <h2 class="logo" style="margin-bottom: 20px;">KAZMZADE</h2>
        <div class="social-icons" style="margin-bottom: 20px;">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-discord"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
        <p>&copy; 2026 Kazmzade Anime. All Rights Reserved. Built for Otakus.</p>
    </footer>

    <script>
        // Change Navbar Background on Scroll
        window.addEventListener('scroll', () => {
            const nav = document.getElementById('navbar');
            if (window.scrollY > 50) {
                nav.style.padding = '15px 8%';
                nav.style.background = 'rgba(5, 5, 5, 0.98)';
            } else {
                nav.style.padding = '20px 8%';
                nav.style.background = 'rgba(10, 10, 10, 0.95)';
            }
        });

        // Intersection Observer for fade-in animations
        const observerOptions = { threshold: 0.1 };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(20px)';
            section.style.transition = 'all 0.8s ease-out';
            observer.observe(section);
        });
    </script>
</body>
</html>