<?php
// Establish database connection

// Function to check if a user has a specific permission
function hasPermission($userId, $permissionName) {
    // Query the database to check if the user has the specified permission
    // You need to implement this query based on your database schema

    // Return true if the user has the permission, otherwise false
}

// Example usage
$userId = 1; // User ID of the logged-in user
$permissionName = 'create_post';

if (hasPermission($userId, $permissionName)) {
    echo 'User has permission to create a post.';
} else {
    echo 'User does not have permission to create a post.';
}
?>
