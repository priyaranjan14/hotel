<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angel Hotel</title>
    <!-- Add your other CSS links here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container availibility-form bg-white shadow rounded">
        <h3 class="text-center">Booking Inquiry</h3>
        <div class="p-3">
            <form>
                <div class="row align-items-end">
                    <div class="col-lg-3">
                        <label for="checkInDate" class="text-align-center">Check In</label>
                        <input type="date" class="form-control" id="checkInDate" required>
                    </div>

                    <div class="col-lg-3">
                        <label for="checkOutDate" class="text-align-center">Check Out</label>
                        <input type="date" class="form-control" id="checkOutDate" required>
                    </div>
                    <div class="col-lg-2">
                        <label for="adults">Adults</label>
                        <input type="number" class="form-control" id="adults" required>
                    </div>

                    <div class="col-lg-2">
                        <label for="children">Children</label>
                        <input type="number" class="form-control" id="children">
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-success">Search</button>
                    </div>
                </div>
            </form>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- Add your other script tags here -->

</body>

</html>