<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Planners Booking Form</title>
    <link rel="stylesheet" href="booking.css">
     <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container"><!--container-->

        <form class="form-group"><!--form-->
            <h1 class="text-center">Dream Planners</h1>

            <div id="form"><!--form-->
                <h3 class="text-white">Booking Details</h3>

            <div id="input"><!--input-->
                <input type="text" id="input-group" placeholder="Name of function">
                <input type="date" id="input-group" placeholder="Date of Function">
                <br>
                <div style="color: white;">
                    Starting Time &nbsp;<input type="time" id="input-group-t" placeholder="Starting Time">
                    Finishing Time &nbsp;<input type="time" id="input-group-t" placeholder="Finishing Time">
                </div>
                
                <select  id="input-group" style="background: black;">
                    <option value="">Preffered Events</option>
                    <option value="">Wedding</option>
                    <option value="">Birthday</option>
                    <option value="">Formal Parties</option>
                    <option value="">College Events</option>
                </select>
                <select  id="input-group" style="background: rgb(33, 17, 17);">
                    <option value="">Set up Required</option>
                    <option value="">U-Shape</option>
                    <option value="">Theatre</option>
                    <option value="">Banquet</option>
                    <option value="">Board Room</option>
                    <option value="">Cabanet</option>
                </select>
                </div><!--input-->

                <div id="input2"><!--input2-->
                    <br>
                    <input type="number" id="input-group" placeholder="Children(2-11years)">
                    <input type="number" id="input-group" placeholder="infant(under 2years)">
                    <input type="number" id="input-group" placeholder="adults(18+ years)">
                    <br>
                    <input type="number" id="input-group" placeholder="Approximate Attending">
                </div><!--input2-->

                <div id="input3"><!--input3-->
                    <br>
                    <span id="input-group">Catering Service</span>
                    <br>
                    <input type="radio" id="input-group" name="r" style="margin-left: 50px;">
                    <label class="text-white" for="input-group">Required</label>
                    <input type="radio" id="input-group" name="r">
                    <label class="text-white" for="input-group">Not Required</label>
                </div><!--input3-->

                <div id="input4"><!--input4-->
                    <input type="text" id="input-group1" placeholder="Any Message">
                </div><!--input4-->

                <div id="input5"><!--input5-->
                    <h3 class="text-white">Personal Details</h3>
                </div><!--input5-->

                <div id="input6"><!--input6-->
                    <input type="text" id="input-group" placeholder="Full Name">
                    <input type="number" id="input-group" placeholder="Phone Number">
                    <input type="email" id="input-group1" placeholder="Email">
                    <textarea name="" id="input-group1" cols="10" rows="3" placeholder="Address"></textarea>

                    <br><br>
                </div><!--input6-->

                <div id="googleMap" style="width:100%; height:200px;"></div>

                <script>
                    function myMap() {
                        var mapProp= {
                        center:new google.maps.LatLng(51.508742,-0.120850),
                        zoom:5,
                    };
                    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnFV56fF8T6RO_ZuvqMnW_Qcb2nUSPe5Y&callback=myMap"></script>

                <div>
                    <input type="checkbox"> &nbsp <a href="termsandconditions" style="color: white;">Terms and Conditions</a>
                </div>

                <br>

                <button type="submit" class="btn1">Submit Form</button>
                <button type="reset" class="btn1">Clear Form</button>
            </div><!--form-->

        </form><!--form-->

    </div><!--container-->
</body>
</html>