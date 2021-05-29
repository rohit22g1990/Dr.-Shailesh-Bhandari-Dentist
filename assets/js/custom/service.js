
var SERVICE = {
    initialize: function() {
      
        this.bindUIevent()
        
    },

    servicesModalButtons: [
        {'class': '.service-teeth-whitening', 'serviceKey': 'teethWhitening'},
        {'class': '.service-dental-implant', 'serviceKey': 'dentalImplants'},
        {'class': '.service-dceramic-crowns', 'serviceKey': 'ceramicCrowns'},
        {'class': '.service-teeth-extraction', 'serviceKey': 'teethExtraction'},
    ],

    bindUIevent: function() {
    
        var self = this;
        console.log(this.servicesModalButtons);

        this.servicesModalButtons.forEach(function(service){
            console.log(service);
            $(service.class).click(function(){
                self.getContents(service.serviceKey);
            });
        });

        // $('.service-teeth-whitening').click(function(){
        //     self.getContents('teethWhitening');
        // });

        // $('.service-dental-implant').click(function(){
        //     self.getContents('dentalImplants');
        // });

        // $('.service-dceramic-crowns').click(function(){
        //     self.getContents('ceramicCrowns');
        // });

        // $('.service-teeth-extraction').click(function(){
        //     self.getContents('ceramicCrowns');
        // });
        
        


    }, 

    getContents: function(service) {
        
        $.get("../../../controllers/servicesController.php",{'method': 'getServices', 'service': service}, function(data, status){
            console.log(JSON.parse(data));
            let response = JSON.parse(data);
            if(response['status'] == 'success') {
                var modalData = response['data'];
                console.log(modalData.mdoalBody);
                $("#modalHeading").html(modalData.modalHeader);
                $("#modalContents").html(modalData.modalBody);
                $("#serviceModalImage").attr("src", modalData.image);
            }
        });
    }

}

SERVICE.initialize();