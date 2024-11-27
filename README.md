<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grand Café</title>
   
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    
<link rel="stylesheet" href="style.css">
   
       
</head>
<body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Grand Café</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#products">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="hero">
        <h1>Welcome to Grand Café</h1>
        <p>The best coffee in town!</p>
    </div>

  
    <section id="products" class="container mt-5"></section>
        <h2 class="text-center">Our Products</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="ec178d83e5f597b162cda1e60cb64194.jpg" width="400px" height="400px" alt="Coffee" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Espresso</h5>
                        <p class="card-text">Rich and bold espresso coffee.</p>
                        <p class="card-text"><strong>$2.50</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="pexels-photo-312418.webp" width="400px" height="400px" alt="Cappuccino" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Cappuccino</h5>
                        <p class="card-text">Creamy and frothy cappuccino.</p>
                        <p class="card-text"><strong>$3.00</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="latte-small.jpg" alt="Latte" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Latte</h5>
                        <p class="card-text">Smooth and milky latte coffee.</p>
                        <p class="card-text"><strong>$3.50</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="container mt-5"></section>
        <h2 class="text-center">Contact Us</h2>
        <form action="contact.php" method="POST" class="row g-3">
            <form id="contactForm" action="contact.php" method="POST">
            <div class="col-md-6">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-12">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Send Message</button>
            </div>
        </form>
    </section>


    <footer class="mt-5">
        <p>&copy; 2024 Grand Café. All Rights Reserved.</p>
    </footer>

    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>


   
    
   

    <script src="app.js"></script>



</body>
</html>
