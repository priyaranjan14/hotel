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
    <!-- Your existing HTML content, such as the header and swiper section -->

    <!-- Booking Inquiry Section -->
    <section class="container m-2 p-4 bg-white shadow text-center">
        <h3 class="text-center">Booking Inquiry</h3>
        <form>
            <div class="row mb-3 align-items-end">
                <div class="col-md-3">
                    <label for="checkInDate" class="form-label">Check-in Date</label>
                    <input type="date" class="form-control" id="checkInDate" required>
                </div>
                <div class="col-md-3">
                    <label for="checkOutDate" class="form-label">Check-out Date</label>
                    <input type="date" class="form-control" id="checkOutDate" required>
                </div>
                <div class="col-md-2">
                <label for="adults" class="form-label">Adults</label>                    
                    <select class="form-select" aria-label="Adults</label">
                        <option value="1">One</option>
                        <option value="2">Two</option>                        
                    </select>                    
                </div>
                <div class="col-md-2">
                    <label for="children" class="form-label">Children</label>
                    <select class="form-select" aria-label="Adults</label">
                        <option value="1">One</option>
                        <option value="2">Two</option>                        
                    </select>     
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </div>

        </form>
    </section>

    <!-- Your other HTML content, such as the footer -->

    <!-- Bootstrap JS and other script tags -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <!-- Add your other script tags here -->

</body>

</html>