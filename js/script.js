function validateLogin() {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    if (!email || !password) {
      alert('All fields are required!');
      return false;
    }
    return true;
  }
  
  function deleteSubscription(subId) {
    if (confirm("Are you sure?")) {
      fetch(`../php/delete.php?id=${subId}`) 
        .then(response => {
          if (response.ok) location.reload();
          else alert("Delete failed!");
        });
    }
  }



  function validateRegister() {
    const email = document.querySelector('#registerForm [name="email"]').value;
    const password = document.querySelector('#registerForm [name="password"]').value;
    
    if (!email || !password) {
      alert("All fields are required!");
      return false;
    }
    return true;
  }

