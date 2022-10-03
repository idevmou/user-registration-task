function checkPassword(form) {
    password1 = form.password1.value;
    password2 = form.password.value;

    // If password not entered
    if (password1 == '')
        alert ("Please enter Password");
          
    // If confirm password not entered
    else if (password == '')
        alert ("Please enter confirm password");
          
    // If Not same return False.    
    else if (password1 != password) {
        alert ("\nPassword did not match: Please try again...")
        return false;
    }

    // If same return True.
    else{
        alert("Password Match: Welcome to GeeksforGeeks!")
        return true;
    }
}