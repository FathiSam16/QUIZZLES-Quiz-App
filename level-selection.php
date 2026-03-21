<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Level - QUIZZLES</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Our Custom CSS -->
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
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="level-selection.html">Play Quiz</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Level Selection Section -->
    <section class="level-section">
        <div class="container">
            <div class="level-header">
                <h1>Choose Your Challenge</h1>
                <p>10 Questions • 60 Seconds Per Question</p>
            </div>
            
            <div class="row g-4">
                <!-- Easy Level Card -->
                <div class="col-lg-4">
                    <div class="level-card easy" onclick="selectLevel('easy')">
                        <div class="level-icon-large">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h3>Easy Level</h3>
                        <p>Perfect for beginners. Test basic knowledge with fun questions.</p>
                        
                        <div class="level-stats">
                            <span><i class="fas fa-check-circle"></i> 10 Questions</span>
                            <span><i class="fas fa-clock"></i> 60s</span>
                        </div>
                        
                        <button class="btn-level easy">
                            <i class="fas fa-play me-2"></i> Start Easy
                        </button>
                    </div>
                </div>
                
                <!-- Medium Level Card -->
                <div class="col-lg-4">
                    <div class="level-card medium" onclick="selectLevel('medium')">
                        <div class="level-icon-large">
                            <i class="fas fa-tree"></i>
                        </div>
                        <h3>Medium Level</h3>
                        <p>Challenge yourself with intermediate questions and topics.</p>
                        
                        <div class="level-stats">
                            <span><i class="fas fa-check-circle"></i> 10 Questions</span>
                            <span><i class="fas fa-clock"></i> 60s</span>
                        </div>
                        
                        <button class="btn-level medium">
                            <i class="fas fa-play me-2"></i> Start Medium
                        </button>
                    </div>
                </div>
                
                <!-- Hard Level Card -->
                <div class="col-lg-4">
                    <div class="level-card hard" onclick="selectLevel('hard')">
                        <div class="level-icon-large">
                            <i class="fas fa-fire"></i>
                        </div>
                        <h3>Hard Level</h3>
                        <p>For experts only. Test your limits with challenging questions.</p>
                        
                        <div class="level-stats">
                            <span><i class="fas fa-check-circle"></i> 10 Questions</span>
                            <span><i class="fas fa-clock"></i> 60s</span>
                        </div>
                        
                        <button class="btn-level hard">
                            <i class="fas fa-play me-2"></i> Start Hard
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Back to Home Button -->
            <div class="text-center mt-5">
                <a href="index.html" class="btn btn-outline-light btn-lg px-5">
                    <i class="fas fa-home me-2"></i> Back to Home
                </a>
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
    
    <!-- Level Selection Script -->
    <script>
        function selectLevel(level) {
            // Store selected level
            localStorage.setItem('quizLevel', level);
            
            // Add click animation
            const card = event.currentTarget;
            card.style.transform = 'scale(0.98)';
            
            // Redirect to quiz page
            setTimeout(() => {
                window.location.href = 'quiz.php';
            }, 300);
        }
    </script>
</body>
</html>