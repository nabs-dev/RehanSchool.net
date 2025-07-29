<?php
include 'db.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message_content = $_POST['message'];
    
    $sql = "INSERT INTO contact_messages (name, email, subject, message) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $email, $subject, $message_content);
    
    if ($stmt->execute()) {
        $message = '<div style="background-color: #d4edda; color: #155724; padding: 10px; border-radius: 4px; margin-bottom: 20px;">Your message has been sent successfully. We will get back to you soon!</div>';
    } else {
        $message = '<div style="background-color: #f8d7da; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 20px;">Sorry, there was an error sending your message. Please try again later.</div>';
    }
    
    $stmt->close();
}

include 'header.php';
?>

<div class="container">
    <div class="content-card">
        <h2 class="section-title">Contact Us</h2>
        <?php echo $message; ?>
        <div class="section-content">
            <div style="display: flex; flex-wrap: wrap; gap: 30px;">
                <div style="flex: 1; min-width: 300px;">
                    <h3 style="color: #2c3e50; margin-bottom: 15px;">Contact Information</h3>
                    
                    <p style="margin-bottom: 10px;"><strong>Email:</strong> info@rehanschool.net</p>
                    <p style="margin-bottom: 10px;"><strong>Phone:</strong> +92 300 1234567</p>
                    <p style="margin-bottom: 20px;"><strong>Address:</strong> Karachi, Pakistan</p>
                    
                    <h3 style="color: #2c3e50; margin: 20px 0 15px;">Branches</h3>
                    <p>We have 4 branches across Pakistan and an online academy serving students worldwide.</p>
                </div>
                
                <div style="flex: 1; min-width: 300px;">
                    <h3 style="color: #2c3e50; margin-bottom: 15px;">Send Us a Message</h3>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div style="margin-bottom: 15px;">
                            <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="email" name="email" placeholder="Your Email" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <input type="text" name="subject" placeholder="Subject" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px;">
                        </div>
                        <div style="margin-bottom: 15px;">
                            <textarea name="message" placeholder="Your Message" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; min-height: 150px;"></textarea>
                        </div>
                        <button type="submit" style="background-color: #2c3e50; color: white; border: none; padding: 10px 20px; border-radius: 4px; cursor: pointer;">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
