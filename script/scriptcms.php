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
            frontEndTitleData.forEach(function (data, index) {
                var cell = rowFrontEndTitle.insertCell();
                cell.textContent = data;

                // Add Edit and Delete buttons
                addEditDeleteButtons(cell, index, frontEndTitleData, frontEndDescData);
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
        backEndTitleData.forEach(function (data, index) {
            var cell = rowBackEndTitle.insertCell();
            cell.textContent = data;

            // Add Edit and Delete buttons
            addEditDeleteButtons(cell, index, backEndTitleData, backEndDescData);
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

        // Function to add Edit and Delete buttons
        function addEditDeleteButtons(cell, index, titleData, descData) {
            // Edit Button
            var editButton = document.createElement('button');
            editButton.textContent = 'Edit';
            editButton.classList.add('btn', 'btn-color-1');
            editButton.addEventListener('click', function () {
                // Implement your edit logic here, using index, titleData[index], descData[index]
                console.log('Edit clicked for:', titleData[index], descData[index]);
            });

            // Delete Button
            var deleteButton = document.createElement('button');
            deleteButton.textContent = 'Delete';
            deleteButton.classList.add('btn', 'btn-color-2');
            deleteButton.addEventListener('click', function () {
                // Implement your delete logic here, using index, titleData[index], descData[index]
                console.log('Delete clicked for:', titleData[index], descData[index]);
            });

            // Create a div for buttons and append Edit and Delete buttons
            var buttonContainer = document.createElement('div');
            buttonContainer.classList.add('button-container');
            buttonContainer.appendChild(editButton);
            buttonContainer.appendChild(deleteButton);

            // Append the button container to the cell
            cell.appendChild(buttonContainer);
        }
    </script>
