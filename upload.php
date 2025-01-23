<?php
header('Content-Type: application/json');

// Handle file upload
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];

    // Allowed MIME types
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];

    // Check the file type
    if (!in_array($file['type'], $allowedTypes)) {
        echo json_encode(['error' => 'Invalid file type. Only JPG, PNG, and GIF are allowed.']);
        exit;
    }

    // Set the upload directory
    $uploadDir = __DIR__ . '/uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    // Generate a unique filename
    $filename = uniqid() . '_' . basename($file['name']);
    $filePath = $uploadDir . $filename;

    // Move the uploaded file
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        // Return the file location (URL)
        $fileUrl = 'uploads/' . $filename;
        echo json_encode(['location' => $fileUrl]);
    } else {
        echo json_encode(['error' => 'Failed to upload file.']);
    }
} else {
    echo json_encode(['error' => 'No file uploaded.']);
}
?>