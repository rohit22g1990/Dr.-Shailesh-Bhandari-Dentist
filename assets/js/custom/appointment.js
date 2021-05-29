
var APPOINTMENT = {
    initialize: function() {
        this.bindUIevent(),
        this.getContents()
    },

    bindUIevent: function() {

        alert('bind');
    }, 

    getContents: function() {
        console.log("XSXSXSX");
        $.get("../../../controllers/appointmentController.php", function(data, status){
            console.log(data);
            console.log(status);
        });
    }

}

APPOINTMENT.initialize();