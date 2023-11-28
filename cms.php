
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content Management</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mediaqueries.css">
</head>
<style>
         body {
            font-family: "Poppins", sans-serif;
            margin: 0;
        }

        .input-container {
            margin-bottom: 10px;
        }

        .input-container label {
            display: block;
            font-weight: 600;
        }

        .input-container input,
        .input-container textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .button-container {
            margin-top: 20px;
        }

        .button-container .btn {
            padding: 10px 20px;
            font-weight: 600;
            border: 1px solid #444;
            border-radius: 5px;
            background: #444;
            color: white;
            cursor: pointer;
        }

        /* Add margin for container */
        .container {
            margin: 20px;
        }

        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
            z-index: 1;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            cursor: pointer;
        }

        table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 10px;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ddd;
    }

    th {
        background-color: #444;
        color: white;
    }

    /* User table specific styles */
    .user-table {
        border: 2px solid #444;
    }
    </style>

<body>
    <nav id="desktop-nav">
        <div class="logo">Khadaffe Sulaiman</div>
        <div>
            <ul class="nav-links">
                <li><a href="#edit-details">Edit Details</a></li>
                <li><a href="#manage-users">Manage Users</a></li>
                <li><a href="#experiences">Experiences</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="logout.php"a>logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Container for content management forms -->
        <div class="content-management-form" id="edit-details">
            <h2>Edit Details</h2>
            <form method="post" action="connection/update_user_info.php">
                <div class="input-container">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-container">
                    <label for="bio">Bio</label>
                    <textarea id="bio" name="bio" rows="4" required></textarea>
                </div>
                <div class="button-group">
                    <button class="btn btn-color-1" type="submit">Save Changes</button>
                    <!-- Add a "View Details" button -->
                    <button class="btn btn-color-2" type="button" id="viewDetailsButton" onclick="viewDetails()">View Details</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add spacing -->
    <div style="margin-bottom: 150px;"></div>

    <div class="container">
        <div class="manage-users-form" id="manage-users">
            <h2>Manage Users</h2>
            <form method="post" action="connection/manage_users.php">
            <div class="input-container">
                    <label for="fullname">Full Name</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="input-container">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="button-group">
                    <button class="btn btn-color-1" type="submit">Save Changes</button>
                    <!-- Add a "View Users" button -->
                    <button class="btn btn-color-2" type="button" id="viewUsersButton" onclick="viewUsers()">View Users</button>
                </div>
            </form>
            <!-- Display user data here when the button is clicked -->
            <div id="userList">
                <!-- PHP or JavaScript code to display users will go here -->
            </div>
        </div>
    </div>

    <!-- Add spacing -->
    <div style="margin-bottom: 150px;"></div>

    <div class="container">
        <div class="experience-form" id="experiences">
            <h2>Edit Experiences</h2>
            <form method="post" action="connection/edit_experiences.php">
                <div class="input-container">
                    <label for="experienceTitle">Experience Title</label>
                    <input type="text" id="experienceTitle" name="experienceTitle" required>
                </div>
                <div class="input-container">
                    <label for="experienceDescription">Experience Description</label>
                    <textarea id="experienceDescription" name="experienceDescription" rows="4" required></textarea>
                </div>
                <div class="button-group">
                    <button class="btn btn-color-1" type="submit">Add Experience</button>
                    <button class="btn btn-color-2" type="button" id="viewExperiencesButton" onclick="viewExperiences()">View Experiences</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Add spacing -->
    <div style="margin-bottom: 150px;"></div>

    <div class="container">
        <div class="project-form" id="projects">
            <h2>Add Project</h2>
            <form method="post" action="connection/add_project.php" enctype="multipart/form-data">
                <div class="input-container">
                    <label for="projectName">Project Name</label>
                    <input type="text" id="projectName" name="projectName" required>
                </div>
                <div class = "input-container">
                    <label for="projectDescription">Project Description</label>
                    <textarea id="projectDescription" name="projectDescription" rows="4" required></textarea>
                </div>
                <div class="input-container">
                    <label for="projectImage">Project Image</label>
                    <input type="file" id="projectImage" name="projectImage" accept="image/*" required>
                </div>
                <div class="button-group">
                    <button class="btn btn-color-1" type="submit">Add Project</button>
                    <!-- Add a "View Projects" button -->
                    <button class="btn btn-color-2" type="button" id="viewProjectsButton">View Projects</button>
                </div>
            </form>
        </div>
    </div>

    <div style="margin-bottom: 150px;"></div>

<footer>
      <p>Copyright &#169; 2023 Content Management System. All Rights Reserved.</p>
    </footer>

<?php
    // Check if the user is logged in (you may need to adjust this based on your actual login mechanism)
    if (isset($_SESSION['username'])) {
        echo '<li><a href="logout.php">Logout</a></li>';
    }

include 'templates/footer.php';
include 'script/scriptcms.php';
include 'connection/db.php';
?>
