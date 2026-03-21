<?php
session_start();
$loggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZZLES - Colorful Quiz App</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Our Custom CSS (from css folder) -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <i class="fas fa-brain"></i> QUIZZLES
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
    <li class="nav-item"><a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" href="index.php">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="level-selection.php">Play Quiz</a></li>
    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
    <?php if ($loggedIn): ?>
        <li class="nav-item"><a class="nav-link" href="logout.php">Logout (<?php echo $_SESSION['username']; ?>)</a></li>
    <?php else: ?>
        <li class="nav-item"><a class="nav-link" href="register.php">Register</a></li>
        <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
    <?php endif; ?>
</ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section - Based on Your Wireframe -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1>Test Your Knowledge<br>with <span style="color: #ffd93d;">QUIZZLES</span></h1>
                        <p class="lead">Interactive Quiz Application</p>
                        <h2>Play and Level Up Your Mind!</h2>
                        
                        <!-- Play Now Button - Big and Colorful -->
                        <a href="level-selection.html" class="btn-play mt-4">
                            <i class="fas fa-play me-2"></i> Play Now
                        </a>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <!-- Colorful Illustration -->
                    <div class="quiz-illustration">
                        <div class="illustration-icon">
                            <i class="fas fa-question"></i>
                        </div>
                        
                        <!-- Level Preview -->
                        <div class="level-preview">
                            <div class="level-preview-item easy">
                                <i class="fas fa-seedling"></i> Easy
                            </div>
                            <div class="level-preview-item medium">
                                <i class="fas fa-tree"></i> Medium
                            </div>
                            <div class="level-preview-item hard">
                                <i class="fas fa-fire"></i> Hard
                            </div>
                        </div>
                        
                        <!-- Timer Badge -->
                        <div style="background: rgba(255,255,255,0.25); padding: 15px; border-radius: 60px; color: white; font-weight: 600;">
                            <i class="fas fa-clock me-2"></i> 10 Questions • 60 Seconds Each
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features-section">
        <div class="container">
            <h2 class="section-title">Why Choose QUIZZLES?</h2>
            <p class="section-subtitle">Experience a modern quiz platform designed to test your knowledge and help you learn new things.</p>
            
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3>3 Difficulty Levels</h3>
                        <p>Choose from Easy, Medium, or Hard levels to match your expertise.</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3>Timed Questions</h3>
                        <p>60 seconds per question to keep the excitement going!</p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="fas fa-trophy"></i>
                        </div>
                        <h3>Instant Results</h3>
                        <p>Get your score immediately and track your progress.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="contact-form">
                <h2>Get in Touch</h2>
                
                <form onsubmit="return false;">
                    <div class="form-group">
                        <label class="form-label">Your Name</label>
                        <input type="text" class="form-control" placeholder="Enter your full name">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter your email">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Your Message</label>
                        <textarea class="form-control" rows="5" placeholder="Type your message here..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-paper-plane me-2"></i> Send Message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>© 2024 QUIZZLES. All rights reserved. | ICT/2023/110 & ICT/2023/111 | Index: 6090 & 6091</p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>