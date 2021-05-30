
var APPOINTMENT = {
    initialize: function() {
        this.bindUIevent();
        this.appointmentService = null;
        this.appointmentDateTime = null;
    },
    
    bindUIevent: function() {
        self = this;
        $('.appointment-services').click(function() {
            $('.appointment-services').removeClass('selected-service');
            console.log($(this).attr('treatment'));
            self.appointmentService = $(this).attr('treatment');
            $(this).addClass('selected-service');
        });

        $('.appointment-1-next').click(function() {
            if (self.appointmentService == null) {
                alert("Please select service");
                return true;
            }
            $(".appointment-1").hide();
            $(".appointment-2").show();
            $(".appointment-modal-title").html("Select Date and Time for Appointment");
            console.log(self.appointmentService);
        });
        $('.appointment-2-next').click(function() {
            self.appointmentDateTime = $('.form_datetime2').val();
            console.log(self.appointmentDateTime);
            if (self.appointmentDateTime == null || self.appointmentDateTime == "") {
                alert('Please select date and time');
                return true;
            }
            $(".appointment-2").hide();
            $(".appointment-3").show();
            $("#reason").html(self.appointmentService);
            $("#dateTime").html(self.appointmentDateTime);
        });
        $('.appointment-2-previous').click(function() {
            $(".appointment-1").show();
            $(".appointment-2").hide();
            $(".appointment-modal-title").html("Select Reason For Appointment");
        });

        $('.appointment-3-previous').click(function() {
            $(".appointment-1").hide();
            $(".appointment-2").show();
            $(".appointment-3").hide();
            $(".appointment-modal-title").html("Select Date and Time for Appointment");
        });
    }, 


}

APPOINTMENT.initialize();