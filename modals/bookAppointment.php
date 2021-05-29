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
    $('.appointment-1-next').click(function() {
        $(".appointment-1").hide(2000);
        $(".appointment-2").show(2000);
    });
});
</script>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content" style="width:100%;">
        <div class="container mt-5 mb-5 d-flex justify-content-center">
            <div class="px-1 py-4">
                <!-- Coming Soon... -->
                <div class="appointment-1">
                    <h4 class="card-title mb-3">Select Reason For Appointment</h4>
                    <hr />
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <a href="#"> Broken Tooth </a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <a href="#">Checkup & Cleaning</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <a href="#">Dental Checkup and X-Rays</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <a href="#">General Consultation</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <a href="#">Jaw Joint Pain</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <a href="#">Teeth Whitening</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <a href="#">Veneers</a>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-group">
                                <a href="#">Wisdom Teeth Extraction</a>
                            </div>
                        </div>
                        <div class="col-sm-3">
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


                
                <div class="appointment-2 hide"> 
                    <h4 class="card-title mb-3">Select Time For Appointment</h4>
                    <hr />
                    <div class="row">


                            <!--  $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
                    <div class="container-fluid px-0 px-sm-4 mx-auto">
                        <div class="row justify-content-center mx-0">
                            <div class="col-lg-10">
                                <div class="card border-0">
                                    <form autocomplete="off">
                                        <div class="card-header bg-dark">
                                            <div class="mx-0 mb-0 row justify-content-sm-center justify-content-start px-1"> 
                                            <div style="overflow:hidden;">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div id="datetimepicker12"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    $(function () {
                                                        $('#datetimepicker12').datetimepicker({
                                                            inline: true,
                                                            sideBySide: true
                                                        });
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                        
                                        



                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    
                    

                    </div>
                    <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> 
                        </div> 
                        <button class="btn btn-primary btn-block confirm-button">
                            Next
                        </button>
                    </div>
                </div>




            </div>
        </div>
    </div>
</div>


