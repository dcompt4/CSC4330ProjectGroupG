function setup()
{
    document.getElementById("user_name").innerText = user_name;
}

function create_account()
{
    var filled = true;
    document.getElementById("user_info").querySelectorAll("[required]").forEach((i) => {
        if (!filled)
            return;
        if (!i.value)
            filled = false;
    }); 

    if (!document.getElementById("tos").checked)
        filled = false;

    if (filled)
    {
        var info = ["email", "password", "name", "address", "birthdate", "phone", "card", "exp", "cvv"];

        var send = "";
        var form_data = document.getElementById("user_info").querySelectorAll("[required]");
        for (var i = 0; i < form_data.length;i++)
        {
            if (i == 0)
                send += info[i] + "=" + form_data[i].value;
            else
                send += "&" + info[i] + "=" + form_data[i].value;
        }
        
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "add_user.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send(send);

        window.location.replace("./login.php");
    }
    
}

function check_credentials(email, password)
{
    var name = null;
    for (var i = 0; i < user_data.length; i++)
        if (user_data[i].email == email && user_data[i].password == password)
            return user_data[i].name;  
    return name;
}
    