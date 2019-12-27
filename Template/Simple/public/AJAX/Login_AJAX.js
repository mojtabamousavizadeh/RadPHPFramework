function insert_Login()
{

    var Username = document.getElementById("Username").value;
    var Password = document.getElementById("Password").value;





    var datapost = {
        "Username": Username,
        "Password": Password,


    };


    var dataString = JSON.stringify(datapost);


    $.ajax({
        url: 'Login/Login',
        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            NextStep(response);

            // Chapkon(response);

        }
    });

}


function NextStep(Result) {
    var state = Result.substring(Result.indexOf('<') + 1, Result.indexOf('>'));
    var text = Result.substring(Result.indexOf('>') + 1, Result.length - 1);

    if (state == "Success") {
        Print(text, "");
        setTimeout(function(){
            Redirect("index");
        }, 3000);
    }
    if (state == "Faild") {
        Print("", text);
    }
    if (state == "ChangeLocation") {
        window.location.assign(text);
    }
}

function Redirect(url) {
    window.location = "http://localhost/bime/"+url;
}
