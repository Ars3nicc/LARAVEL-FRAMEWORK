<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <title>PRELIMS</title>
</head>
<body>
    <div class='page-title'>
        <div class='the-eagles'>
            <img class='eagle' src="./img/eagle.png" alt="">
            <div class='title'>
                <h5>The</h5>
                <h5>Eguls</h5>
            </div>
        </div>
        <div class='page-name'>HOTEL CALIFORNIA</div>

    </div>
    <nav>
        <ul>
            <li><a href=''>About</a></li>
            <li><a class='active' href=''>Home</a></li>
        </ul>
    </nav>
    <div class='lyrics'>
        " Welcome to the Hotel California.
        such a lovely place,
        such a lovely face. Plenty of room at the Hotel California
        Any time of year. "
        </div>
    <div class="form-container">

        <form method="POST" action="/">
            @csrf
            <label for='checkIn'>Check-In Date: </label>
            <input type="date" name='checkIn' required>
            <label for='checkOut'>Check-Out: </label>
            <input type="date" name='checkOut' required>
            <label>Number of Rooms: </label>
            <input type="number" name='rooms' placeholder='Enter number of rooms' required>

            <input type="submit" value="Submit">
        </form>
        <div class='receipt-container'>
            <div class='receipt-title'>User Receipt</div>
            @isset($roomRate)
            <table class='table'>
                <tr>
                    <td>Room Rate Per Day: </td>
                    <td>Php {{ number_format($roomRate, 2, '.', ',')  }}</td>
                </tr>
                <tr>
                    <td>Number of Days: </td>
                    <td>{{ $days }}</td>
                </tr>
                <tr>
                    <td>Number of Rooms: </td>
                    <td>{{ $rooms }}</td>
                </tr>
                <tr>
                    <td>Room Fee Allocated: </td>
                    <td>Php {{ number_format($fee, 2, '.', ',')}}</td>
                </tr>
                <tr>
                    <td>Discount: </td>
                    <td>Php {{ number_format($discount, 2, '.', ',') }}</td>
                </tr>
            </table>
            <table class='table'>
                <tr>
                    <td><div class='total-text'>Total Amount Due: </div></td>
                    <td>Php {{ number_format($total_amount, 2, '.', ',') }}</td>
                </tr>
            </table>
            @endisset
        </div>
    </div>
    <section>
        <div class='sect-title'>
            <h1>Available Rooms</h1>
        </div>
        <div class="container">
            <div class="image-container">
                <img src="./room-preview/1.png" alt="">
                <img src="./room-preview/2.jpg" alt="">
                <img src="./room-preview/3.jpg" alt="">
                <img src="./room-preview/4.webp" alt="">
                <img src="./room-preview/5.jpeg" alt="">
                <img src="./room-preview/6.jpg" alt="">
            </div>
        </div>
    </section>

</body>
<br>
<footer>
		<p>HOTEL CALIFORNIA</p>
		<p>Located at San Francisco</p>
		<div class="social">
			<a href="https://www.facebook.com/parizz.franz"><i class="fab fa-facebook-f"></i></a>
			<a href="https://www.instagram.com/lafranzz/?hl=en"><i class="fab fa-instagram"></i></a>
			<a href="https://twitter.com/franzmanriquePH"><i class="fab fa-twitter"></i></a>

		</div>
        <div class="custom-shape-divider-bottom-1662909873">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
	</footer>
</html>
