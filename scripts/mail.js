function mailphpcall(){
    var header="header";
    var body="body";


    $.ajax({
        type: "POST",
        url: '/scripts/mail.php',
        dataType: 'json',
        data: {Mail: 'mail', arguments: [header,body]},

        success: function (obj, textstatus) {
            if (data.code == "200"){
                alert("Success: " +data.msg);
            } else {
                alert("Bad request");
            }
        }

    });
}