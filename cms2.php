
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
        <div class="logo">Apple Dinawanao</div>
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
            <form method="post" action="update_user_info.php">
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
            <form method="post" action="manage_users.php">
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
            <form method="post" action="edit_experiences.php">
                <div class="input-container">
                    <label for="experienceTitle">Experience Title</label>
                    <input type="text" id="experienceTitle" name="experienceTitle" required>
                </div>
                <div class="input-container">
                    <label for="experienceDescription">Experience Description</label>
                    <textarea id="experienceDescription" name="experienceDescription" rows="4" required></textarea>
                </div>
                <div class="button-group">
                    <button class="btn btn-color-1" type="submit">Save Changes</button>
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
            <form method="post" action="add_project.php" enctype="multipart/form-data">
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

    <script>
        // Function to show the details modal
        function showDetailsModal() {
            // Get the values from the portfolio
            const fullName = "Khadaffe Sulaiman";
            const username = "Kcpersonalacc";
            const bio = "Hello, I'm Khadaffe Sulaiman, a dedicated and enthusiastic junior programmer and developer with a passion for crafting digital solutions. My journey into the world of technology began with a fascination for turning lines of code into functional, elegant applications. As a programmer, I'm committed to continuous learning and honing my skills to stay ahead in the fast-paced world of software development.";

            // Create a modal container
            const modalContainer = document.createElement("div");
            modalContainer.className = "modal";

            // Create the modal content
            const modalContent = document.createElement("div");
            modalContent.className = "modal-content";

            // Add the details to the modal content
            modalContent.innerHTML = `
                <span class="close" onclick="closeDetailsModal()">&times;</span>
                <h2>${fullName}</h2>
                <p>Username: ${username}</p>
                <p>Bio: ${bio}</p>
                <button class="btn btn-color-2" onclick="closeDetailsModal()">Exit</button>
            `;

            // Append the modal content to the modal container
            modalContainer.appendChild(modalContent);

            // Append the modal container to the body
            document.body.appendChild(modalContainer);

            // Display the modal
            modalContainer.style.display = "flex";
        }

        // Function to close the details modal
        function closeDetailsModal() {
            const modalContainer = document.querySelector(".modal");
            if (modalContainer) {
                document.body.removeChild(modalContainer);
            }
        }

        // Add an event listener to the "View Details" button
        document.getElementById("viewDetailsButton").addEventListener("click", showDetailsModal);
    </script>
<script>
    function viewUsers() {
        // Create a div element for the popup
        var popup = document.createElement('div');
        popup.classList.add('modal'); // Use the 'modal' class for consistency

        // Create a table for displaying user details
        var table = document.createElement('table');
        table.classList.add('user-table'); // Add the 'user-table' class for styling
        table.style.backgroundColor = 'white'; // Set white background color

        // Create table header
        var headerRow = table.insertRow();
        var headers = ['Full Name', 'Username', 'Email'];

        headers.forEach(function (header) {
            var th = document.createElement('th');
            th.textContent = header;
            headerRow.appendChild(th);
        });

        // Sample user data
        var users = [
            ['Khadaffe Sulaiman', 'Kcpersonalacc', 'kcpersonalacc@gmail.com'],
            ['Apple Dinawanao', 'Apple132', 'appledinawanao13@gmail.com'],
            ['Alfraskhan Jose', 'JoseAL14', 'josealfraskhan@gmail.com']
        ];

        // Create table rows with user data
        users.forEach(function (userData) {
            var row = table.insertRow();
            userData.forEach(function (data) {
                var cell = row.insertCell();
                cell.textContent = data;
            });
        });

        // Add the table to the popup
        popup.appendChild(table);

        // Add a close button to the popup
        var closeButton = document.createElement('button');
        closeButton.textContent = 'Close';
        closeButton.classList.add('btn', 'btn-color-1');
        closeButton.addEventListener('click', function () {
            document.body.removeChild(popup);
        });

        // Append the close button to the popup
        popup.appendChild(closeButton);

        // Append the popup to the body
        document.body.appendChild(popup);

        // Display the modal
        popup.style.display = "flex";
    }
</script>

<script>
    function viewExperiences() {
        // Create a div element for the popup
        var popup = document.createElement('div');
        popup.classList.add('modal'); // Use the 'modal' class for consistency

        // Create a table for displaying experience details
        var table = document.createElement('table');
        table.classList.add('user-table'); // Add the 'user-table' class for styling
        table.style.backgroundColor = 'white'; // Set white background color

        // Front-End Development Table
        var headerFrontEnd = table.insertRow();
        headerFrontEnd.insertCell().textContent = 'Front-End Development';

        var rowFrontEndTitle = table.insertRow();
        var frontEndTitleData = ['JAVA', 'HTML', 'CSS', '.Net', 'Python', 'Material UI'];
        frontEndTitleData.forEach(function (data) {
            var cell = rowFrontEndTitle.insertCell();
            cell.textContent = data;
        });

        var rowFrontEndDesc = table.insertRow();
        var frontEndDescData = ['Experienced', 'Basic', 'Basic', 'Experienced', 'Basic', 'Intermediate'];
        frontEndDescData.forEach(function (data) {
            var cell = rowFrontEndDesc.insertCell();
            cell.textContent = data;
        });

        // Back-End Development Table
        var headerBackEnd = table.insertRow();
        headerBackEnd.insertCell().textContent = 'Back-End Development';

        var rowBackEndTitle = table.insertRow();
        var backEndTitleData = ['JAVA', 'Python', '.Net', 'HTML', 'CSS'];
        backEndTitleData.forEach(function (data) {
            var cell = rowBackEndTitle.insertCell();
            cell.textContent = data;
        });

        var rowBackEndDesc = table.insertRow();
        var backEndDescData = ['Experienced', 'Basic', 'Intermediate', 'Basic', 'Basic'];
        backEndDescData.forEach(function (data) {
            var cell = rowBackEndDesc.insertCell();
            cell.textContent = data;
        });

        // Add the table to the popup
        popup.appendChild(table);

        // Add a close button to the popup
        var closeButton = document.createElement('button');
        closeButton.textContent = 'Close';
        closeButton.classList.add('btn', 'btn-color-1');
        closeButton.addEventListener('click', function () {
            document.body.removeChild(popup);
        });

        // Append the close button to the popup
        popup.appendChild(closeButton);

        // Append the popup to the body
        document.body.appendChild(popup);

        // Display the modal
        popup.style.display = "flex";
    }
</script>

    
</body>
</html>

<?php
    // Check if the user is logged in (you may need to adjust this based on your actual login mechanism)
    if (isset($_SESSION['username'])) {
        echo '<li><a href="logout.php">Logout</a></li>';
    }
// Include the footer template
include 'templates/footer.php';
include 'connection/db.php';
?>
