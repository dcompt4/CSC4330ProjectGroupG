function check_credentials(email, password)
{
    return true;
}

if (check_credentials(email, password) == null)
    window.location.replace("login.php");