<?php
// Start session for storing form data (optional)
session_start();

// Initialize error array
$errors = [];

// Check if form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Get and sanitize form data
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    // Validate name field
    if (empty($name)) {
        $errors[] = 'Name is required';
    } elseif (strlen($name) < 2) {
        $errors[] = 'Name must be at least 2 characters long';
    }
    
    // Validate email field
    if (empty($email)) {
        $errors[] = 'Email is required';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Invalid email format';
    }
    
    // Validate message field
    if (empty($message)) {
        $errors[] = 'Message is required';
    } elseif (strlen($message) < 10) {
        $errors[] = 'Message must be at least 10 characters long';
    }
    
    // If there are validation errors
    if (!empty($errors)) {
        // Store errors in session
        $_SESSION['errors'] = $errors;
        $_SESSION['form_data'] = [
            'name' => $name,
            'email' => $email,
            'message' => $message
        ];
        
        // Redirect back to form with errors
        header('Location: index.php#contact');
        exit();
    }
    
    // If validation passes, process the form
    // In a real application, you would:
    // - Send an email
    // - Save to database
    // - Send to CRM system
    // For this demo, we'll simulate success
    
    // Store form data in session for display on thank you page
    $_SESSION['submitted_data'] = [
        'name' => htmlspecialchars($name),
        'email' => htmlspecialchars($email),
        'message' => htmlspecialchars($message),
        'timestamp' => date('Y-m-d H:i:s')
    ];
    
    // Clear any previous errors
    unset($_SESSION['errors']);
    unset($_SESSION['form_data']);
    
    // Simulate processing time
    usleep(500000); // 0.5 second delay
    
    // Redirect to thank you page
    header('Location: thank-you.html');
    exit();
    
} else {
    // If accessed directly without POST, redirect to home page
    header('Location: index.php');
    exit();
}
?>