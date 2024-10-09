<?php include('nav.php')?>
  <!-- Contact Form Section -->
  <section class="py-20">
    <div class="hidden">Hidden content</div>
    <div class="max-w-xl mx-auto text-center">
      <h2 class="text-3xl font-semibold text-gray-900">Contact Us</h2>
      <p class="mt-2 text-gray-600">We’d love to hear from you!</p>
        <form action="./send.php" method="POST" class="mt-4">
          <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700"></label>
            <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" placeholder = "Your Name" required>
            <p id="nameError" class="text-red-500 text-sm mt-1 hidden">Invalid name! Only letters and spaces are allowed.</p>
            <!-- <input type="text" id="name" name="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Your Name" required> -->
          </div>
          <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700"></label>
            <input type="email" id="email" name="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring focus:ring-blue-200" placeholder="Your Email">
            <p id="emailError" class="text-red-500 text-sm mt-1 hidden">Invalid email format!</p>
            <!-- <input type="email" id="email" name="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Your Email" required> -->
          </div>
          <button name="send" id="send" type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-blue-700 transition-transform transform disabled-button"disabled>
            Submit
          </button>
          <?php if (isset($_GET['messageSent']) && $_GET['messageSent'] == 'true'): ?>
            <div id="myModal" class="modal" style="display:block;">
              <div class="modal-content">
                <p>Message Sent! Redirecting to Contact Page...</p>
                  <span class="close"></span>
              </div>
            </div>
          <?php endif; ?>
          <script>
            // Close the modal when user clicks the 'X' button
            var closeBtn = document.getElementsByClassName("close")[0];
            closeBtn.onclick = function() {
            document.getElementById("myModal").style.display = "none";
            // Redirect to contact.html after closing the modal
            window.location.href = "contact.php";
            }
            // Close the modal if the user clicks outside the modal
            /* window.onclick = function(event) {
            var modal = document.getElementById("myModal");
            if (event.target == modal) {
            modal.style.display = "none";
            // Redirect to contact.html after closing the modal
            window.location.href = "contact.php";
            }
            } */
            // Automatically redirect after 3 seconds
            setTimeout(function() {
            window.location.href = "contact.php";
            }, 2000);
          </script>
        </form>
    </div>
  </section>
<script>
  // Select the form fields and the submit button
  const nameInput = document.getElementById('name');
  const emailInput = document.getElementById('email');
  const send = document.getElementById('send');
  const nameError = document.getElementById('nameError');
  const emailError = document.getElementById('emailError');

  // Regular expressions for validation
  const nameRegex = /^[A-Za-z\s]+$/;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // Flags to check if fields have been interacted with
  let isNameTouched = false;
  let isEmailTouched = false;

  // Function to validate form fields
  function validateFormFields() {
      const isNameValid = nameRegex.test(nameInput.value.trim());
      const isEmailValid = emailRegex.test(emailInput.value.trim());
      /* const isMessageFilled = messageInput.value.trim() !== ''; */

  // Show or hide error messages only if the fields have been touched
  if (isNameTouched) {
      nameError.classList.toggle('hidden', isNameValid);
  }

  if (isEmailTouched) {
          emailError.classList.toggle('hidden', isEmailValid);
  }

  // Enable the button if all fields are valid
  if (isNameValid && isEmailValid) {
          send.disabled = false;
          send.classList.remove('disabled-button');  // Remove the disabled style
  } else {
          send.disabled = true;
          send.classList.add('disabled-button');  // Add the disabled style
  }
  }
  nameInput.addEventListener('input', function(){
    isNameTouched = true;  // Mark name as touched once the user starts typing
    validateFormFields();
  });
  emailInput.addEventListener('input', function () {
    isEmailTouched = true;  // Mark email as touched once the user starts typing
    validateFormFields();
  });
  // Call the validation function once on page load to initialize the button state
  window.onload = validateFormFields;
</script>
<?php include('footer.php')?>
<?php include('closer.php')?>

