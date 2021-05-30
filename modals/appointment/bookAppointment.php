<style>
    .col-sm-3 {
        border: 1px solid black;
        padding: 2%;
        margin: 3%;
    }
</style>
<script>
$(document).ready(function() {
    $('.hide').hide();
    
});
</script>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<script type="text/javascript" src="https://pagead2.googlesyndication.com/pagead/show_ads.js"></script>

<style>
  body { background: #f7f7f7; }
</style>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="width:100%;">
        <div class="modal-header">
            <h4 class="card-title mb-3 appointment-modal-title">Select Reason For Appointment</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="px-1 py-4">
                <!-- Coming Soon... -->
                <div class="appointment-1">
                    <div class="row">
                        <div class="col-sm-3 appointment-services" treatment="borken-teeth"> 
                            <div class="form-group">
                                <a href="#"> Broken Tooth </a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="checkup-and-cleanup">
                            <div class="form-group">
                                <a href="#">Checkup & Cleaning</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="dental-checkup">
                            <div class="form-group">
                                <a href="#">Dental Checkup</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="x-rays">
                            <div class="form-group">
                                <a href="#">X-Rays</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="general-consultation">
                            <div class="form-group">
                                <a href="#">General Consultation</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="jaw-joint-pain">
                            <div class="form-group">
                                <a href="#">Jaw Joint Pain</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="teeth-whitening">
                            <div class="form-group">
                                <a href="#">Teeth Whitening</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="veneers">
                            <div class="form-group">
                                <a href="#">Veneers</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="teeth-extraction">
                            <div class="form-group">
                                <a href="#">Teeth Extraction</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="laser-treatment">
                            <div class="form-group">
                                <a href="#">Laser Treatment</a>
                            </div>
                        </div>
                        <div class="col-sm-3 appointment-services" treatment="other">
                            <div class="form-group">
                                <a href="#">Other</a>
                            </div>
                        </div>
                    </div>
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
                        </div> 
                        <button class="btn btn-primary btn-block confirm-button appointment-1-next">
                            Next
                        </button>
                    </div>
                </div>
               
                <div class="appointment-2 container hide"> 
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
                        <button class="btn btn-primary btn-block confirm-button appointment-2-previous">
                            Previous
                        </button>
                    </div>
                    <div class="row">
                        <input type="text" class="form-control form_datetime2">
                    </div>
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
                        <button class="btn btn-primary btn-block confirm-button appointment-2-next">
                            Next
                        </button>
                    </div>
                </div>

                <div class="appointment-3 hide"> 
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
                        <button class="btn btn-primary btn-block confirm-button appointment-3-previous">
                            Previous
                        </button>
                    </div>
                    <h4 class="card-title mb-3">Personal Details</h4>
                    <hr />
                    <div class="row">
                        <span id="reason"></span>< br>
                        <span id="dateTime"></span>
                    </div>
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
                        <button class="btn btn-primary btn-block confirm-button appointment-3-next">
                            Next
                        </button>
                    </div>
                </div>



             </div>
        </div>
    </div>
</div>
<script src="assets/js/custom/appointment.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="js/bootstrap-datetimepicker.js"></script>

<script type="text/javascript">
    $('#datetimepicker').datetimepicker();
    $(".form_datetime").datetimepicker({
      formatViewType: 'date',
    });
    $(".form_datetime2").datetimepicker({
        // format: "d M Y - h:i",
        autoclose: true,
        todayBtn: true,
        inline: true,
        startDate: "2013-02-14 10:00",
        minuteStep: 30,
        hours12: true,
        minDate:false,
    });
</script>
<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script>
try {
  fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", { method: 'HEAD', mode: 'no-cors' })).then(function(response) {
    return true;
  }).catch(function(e) {
    var carbonScript = document.createElement("script");
    carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
    carbonScript.id = "_carbonads_js";
    document.getElementById("carbon-block").appendChild(carbonScript);
  });
} catch (error) {
  console.log(error);
}
</script>

