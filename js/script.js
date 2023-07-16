
window.onload = function () {
    if (window.location.pathname.includes('appointment.php')) {
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        let ageSelect = document.getElementById('age-select');
        for (var i = 0; i <= 100; i++) {
            var option = document.createElement('option');
            option.value = i;
            option.textContent = i;
            ageSelect.appendChild(option);
        }

        const submitButton = document.getElementById("submit-button");
        const inputs = Array.from(document.getElementsByClassName("written"));

        inputs.forEach(input => {
            input.addEventListener("input", () => {
                const isFormValid = inputs.every(input => input.value.trim() !== "");
                submitButton.disabled = !isFormValid;
                submitButton.style.backgroundColor = isFormValid ? "#5BC0DE" : "";
                submitButton.style.color = isFormValid ? "#000" : "";
            });
        });
    } else if (window.location.pathname.includes('/patientProfile.php')) {
        //check
        const saveButton = document.getElementById('save-info-profile-changes');
        const messageOverlay = document.getElementById('message-overlay');
        const messageText = document.getElementById('message-text');

        saveButton.addEventListener('click', function () {
            // Show the message overlay
            messageOverlay.style.display = 'block';

            // Set the message text
            messageText.textContent = 'נשמר בהצלחה';

            // Hide the message overlay after a delay (e.g., 3 seconds)
            setTimeout(function () {
                messageOverlay.style.display = 'none';
            }, 2000);
        });
    } else if (window.location.pathname.includes('/list.php')) {

        // Get all delete buttons
        var deleteButtons = document.querySelectorAll('button[data-bs-target="#deleteModal"]');

        // Attach onclick event handler to each delete button
        deleteButtons.forEach(function (button) {
            button.onclick = function () {
                var deleteId = this.getAttribute("data-person-id");
                document.getElementById("delete_id").value = deleteId;
            };
        });
    }

}
