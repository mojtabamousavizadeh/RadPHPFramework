function Select(ID) {


    //var startdate = document.getElementById("startdate").value;


    var datapost = {
        "ID": ID,
    };

    var dataString = JSON.stringify(datapost);


    $.ajax({
        url: 'index/selects_PoolItems',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("PoolItems").innerHTML = response;
             //alert(response);

        }
    });
    
    
    
    $.ajax({
        url: 'index/selects_Boating',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("Boatingitems").innerHTML = response;
             //alert(response);

        }
    });
    
    $.ajax({
        url: 'index/selects_SportSalon',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("SportSalonitems").innerHTML = response;
             //alert(response);

        }
    });
    
     $.ajax({
        url: 'index/selects_SportGround',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("SportGrounditems").innerHTML = response;

        }
    });
    
    
     $.ajax({
        url: 'index/selects_Canopy',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("Canopyitems").innerHTML = response;
             //alert(response);

        }
    });
    
    
    $.ajax({
        url: 'index/selects_ConferenceHall',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("ConferenceHallitems").innerHTML = response;
             //alert(response);

        }
    });
    
    
      $.ajax({
        url: 'index/selects_ShootingHall',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("ShootingHallitems").innerHTML = response;

        }
    });
    
    
       $.ajax({
        url: 'index/selects_TrampolineHall',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("TrampolineHallitems").innerHTML = response;

        }
    });
    
    
     $.ajax({
        url: 'index/selects_DiningRoom',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("DiningRoomitems").innerHTML = response;

        }
    });
    
    
         $.ajax({
        url: 'index/selects_Parking',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("Parkingitems").innerHTML = response;

        }
    });
    
    
         $.ajax({
        url: 'index/selects_DiningRoom',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("DiningRoomitems").innerHTML = response;

        }
    });
    
    
         $.ajax({
        url: 'index/selects_Bedroom',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("Bedrooms").innerHTML = response;

        }
    });
    
    
    
         $.ajax({
        url: 'index/selects_CampInfo',

        data: {myData: dataString},
        type: 'POST',
        success: function (response) {
            document.getElementById("CampDetailsItems").innerHTML = response;

        }
    });
    
    
}


// function OrganID(ID)
// {
// var datapost = {
//         "ID": ID,
//     };

//     var dataString = JSON.stringify(datapost);


//     $.ajax({
//         url: 'index/CampList',

//         data: {myData: dataString},
//         type: 'POST',
//         success: function (response) {
        
//   if (state == "ChangeLocation") {
//         window.location.assign(text);
//     }


//         }
//     });
    
// }