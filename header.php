<?php
// Start session if not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehan School - World's First AI School</title>
    <style>
        /* Reset and Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            line-height: 1.6;
            color: #333;
            background-color: #f5f5f5;
        }
        
        a {
            text-decoration: none;
            color: inherit;
        }
        
        ul {
            list-style: none;
        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header Styles */
        header {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }
        
        .header-title {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        
        .nav-menu {
            display: flex;
            justify-content: center;
            gap: 30px;
        }
        
        .nav-menu a {
            color: #fff;
            font-weight: 500;
            padding: 5px 0;
            transition: color 0.3s;
        }
        
        .nav-menu a:hover, .nav-menu a.active {
            color: #3498db;
        }
        
        /* Content Card Styles */
        .content-card {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 30px;
            margin: 20px 0;
        }
        
        .section-title {
            color: #2c3e50;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        
        .section-content {
            color: #333;
        }
        
        /* Features List */
        .features-list {
            list-style-type: disc;
            padding-left: 20px;
        }
        
        .features-list li {
            margin-bottom: 8px;
        }
        
        /* Footer Styles */
        footer {
            background-color: #2c3e50;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 30px;
        }
        
        /* Responsive Styles */
        @media (max-width: 768px) {
            .nav-menu {
                flex-direction: column;
                gap: 10px;
            }
            
            .content-card {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="header-title">Rehan School - World's First AI School</h1>
            <nav>
                <ul class="nav-menu">
                    <li><a href="index.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'class="active"' : ''; ?>>Home</a></li>
                    <li><a href="curriculum.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'curriculum.php') ? 'class="active"' : ''; ?>>Curriculum</a></li>
                    <li><a href="facilitators.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'facilitators.php') ? 'class="active"' : ''; ?>>Facilitators</a></li>
                    <li><a href="contact.php" <?php echo (basename($_SERVER['PHP_SELF']) == 'contact.php') ? 'class="active"' : ''; ?>>Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
