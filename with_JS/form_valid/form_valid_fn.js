 function validateForm() {
      let isValid = true;
      document.querySelectorAll('.error').forEach(error => error.textContent = '');

      const fname = document.getElementById('fname').value.trim();
      if (fname === '') {
        document.getElementById('fnameError').textContent = 'First name is required';
        isValid = false;
      }

      const lname = document.getElementById('lname').value.trim();
      if (lname === '') {
        document.getElementById('lnameError').textContent = 'Last name is required';
        isValid = false;
      }

      const username = document.getElementById('username').value.trim();
      if (username === '') {
        document.getElementById('usernameError').textContent = 'Username is required';
        isValid = false;
      }

      const password = document.getElementById('password').value;
      if (password.length < 8) {
        document.getElementById('passwordError').textContent = 'Password must be at least 8 characters';
        isValid = false;
      }

      const confirmPassword = document.getElementById('confirmPassword').value;
      if (confirmPassword !== password) {
        document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
        isValid = false;
      }

      const gender = document.getElementById('gender').value;
      if (gender === '') {
        document.getElementById('genderError').textContent = 'Gender is required';
        isValid = false;
      }

      const mobile = document.getElementById('mobile').value.trim();
      const mobilePattern = /^[0-9]{10}$/;
      if (!mobilePattern.test(mobile)) {
        document.getElementById('mobileError').textContent = 'Mobile must be 10 digits';
        isValid = false;
      }

      const email = document.getElementById('email').value.trim();
      const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
      if (!emailPattern.test(email)) {
        document.getElementById('emailError').textContent = 'Invalid email format';
        isValid = false;
      }

      if (isValid) {
        alert('Registration successful!');
      }

      return isValid;