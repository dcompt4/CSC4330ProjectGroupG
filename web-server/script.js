var selectedDock = null;

function setup()
{
    document.getElementById("user_name").innerText = user.name;
    initializeBikes();
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
    for (var i = 0; i < user_data.length; i++)
        if (user_data[i].email == email && user_data[i].password == password)
            return user_data[i];  
    return null;
}

function initializeBikes()
{
    var docks = document.getElementById("docks").children;
    
    for (var i = 0; i < docks[0].children.length; i++)
    {
        var info = docks[0].children[i].children;
        var avalBikes = bike_data["bike-racks"][i]["available-bikes"];
        info[2].innerHTML = avalBikes + "/ 6";

        info[3].children[0].disabled = avalBikes < 1;
        info[3].children[1].disabled = avalBikes > 5;

        info[3].children[0].classList.remove("btn-dark");
        info[3].children[0].classList.add(info[3].children[0].disabled ? "btn-danger" : "btn-success");

        info[3].children[1].classList.remove("btn-dark");
        info[3].children[1].classList.add(info[3].children[1].disabled ? "btn-danger" : "btn-success");
    }

    for (var i = 0; i < docks[0].children.length; i++)
    {
        var info = docks[1].children[i].children;
        var avalBikes = bike_data["bike-racks"][5 + i]["available-bikes"];
        info[2].innerHTML = avalBikes + "/ 6";

        info[3].children[0].disabled = avalBikes < 1;
        info[3].children[1].disabled = avalBikes > 5;

        info[3].children[0].classList.remove("btn-dark");
        info[3].children[0].classList.add(info[3].children[0].disabled ? "btn-danger" : "btn-success");

        info[3].children[1].classList.remove("btn-dark");
        info[3].children[1].classList.add(info[3].children[1].disabled ? "btn-danger" : "btn-success");
    }
}

function checkOut(index)
{
    if (user['bike-data'].dock == -1)
    {
        var xhttp = new XMLHttpRequest();
        xhttp.open("POST", "edit_user.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("name=" + user.name + "&dock=" + index + "&time=" + new Date().getTime());

        window.location.replace("./login.php");
    }
}

function checkIn(index)
{
    if (user['bike-data'].dock > -1)
    {
        selectedDock = index;
        $('#damageModal').modal('show');
    }   
}

function damaged(yes)
{
    var xhttp = new XMLHttpRequest();
    xhttp.open("POST", "edit_user.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("name=" + user.name + "&dock=" + selectedDock + "&time=");

    window.location.replace("./receipt.php?old=" + user['bike-data'].dock + "&new=" + selectedDock + "&time=" + user['bike-data'].time + "&damaged=" + (yes ? "y" : "n"));
}

function receipt()
{
    var elapsed = Math.ceil((new Date().getTime() - oldTime) / 60000);
    document.getElementById('time').innerText = elapsed + " Minutes";

    var hours = Math.floor(elapsed / 60);
    var halfs = Math.ceil((elapsed % 60) / 30);
    document.getElementById('fee').innerText = "$9 * " + hours + " hours + $5 * " + halfs + " half hours = $" + (9 * hours + 5 * halfs);

    document.getElementById('oldDock').innerText = "Dock " + oldDock;
    document.getElementById('newDock').innerText = "Dock " + newDock;

    document.getElementById('fee2').innerText = oldDock == newDock ? "Same Dock Return: $0" : "Different Dock Return: $25";

    document.getElementById('damages').innerText = damaged == "y" ? "Yes" : "No";
    document.getElementById('fee3').innerText = damaged == "y" ? "$200" : "$0";

    document.getElementById('total').innerText = "$" + (9 * hours + 5 * halfs + (oldDock == newDock ? 0 : 1) * 25 + (damaged == "y" ? 200 : 0)); 
}