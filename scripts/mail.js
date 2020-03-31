function mailphpcall(){
    var header="header";
    var body="body";


    jQuery.ajax({
        type: "POST",
        url: '/scripts/mail.php',
        dataType: 'json',
        data: {Mail: 'mail', arguments: [header,body]},

        success: function (obj, textstatus) {
            if( !('error' in obj) ) {
                console.log("Good Job");
            }
            else {
                console.log(obj.error);
            }
        }

    });
}