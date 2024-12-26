<?php
session_start();
require_once '../controllers/usersController.php';

if (!isset($_SESSION['sessionID'])) {
    flash('login', 'Please log in first');
    redirect('../views/login.php');
    exit;
}

$userName = $_SESSION['userName'];
$userRole = $_SESSION['userRole'];
$pageTitle = 'Profile';

$content = "
<main class='profile-container'>
    <h1>Welcome, " . htmlspecialchars($userName) . "</h1>
    <h2>Role: " . htmlspecialchars(ucfirst($userRole)) . "</h2>";

if ($userRole === 'admin') {
    $content .= "
    <section>
        <h3>Admin Actions</h3>
        <button onclick='location.href=\"../views/users/add.php\"'>Add User</button>
        <button onclick='location.href=\"../views/users/delete.php\"'>Manage Users</button>
        <button onclick='location.href=\"../views/services/add.php\"'>Add Service</button>
        <button onclick='location.href=\"../views/services/delete.php\"'>Manage Services</button>
    </section>";
}

if ($userRole === 'patient') {
    $content .= "
    <section>
        <h3>Patient Actions</h3>
        <button onclick='location.href=\"../views/listAppointments.php\"'>View Appointments</button>
        <button onclick='location.href=\"../views/updateProfile.php\"'>Update Profile</button>
    </section>";
}

if ($userRole === 'doctor') {
    $content .= "
    <section>
        <h3>Doctor Actions</h3>
        <button onclick='location.href=\"../views/listAppointments.php\"'>View Appointments</button>
    </section>";
}

$content .= "</main>";

include 'layoutProfile.php';
?>