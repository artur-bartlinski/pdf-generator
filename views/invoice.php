<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Invoice</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="#" alt="Pdf generator logo" class="pull-right">
                    <h3>Invoice # {{ order }}</h3>
                    <h5>Amount due: <strong>£ {{ amount }}</strong></h5>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <p>Billed to {{ name }}</p>
                    
                    157 Never Road<br>
                    London<br>
                    NE7 3R0
                </div>
                <div class="col-md-6">
                    <p class="text-muted">
                        Some unimportant text, do not bother, it means nothing. 
                        Some unimportant text, do not bother, it means nothing. 
                        Some unimportant text, do not bother, it means nothing.
                        Some unimportant text, do not bother, it means nothing.
                        Some unimportant text, do not bother, it means nothing.
                        Some unimportant text, do not bother, it means nothing.
                        Some unimportant text, do not bother, it means nothing.
                        Some unimportant text, do not bother, it means nothing.
                        Some unimportant text, do not bother, it means nothing.
                    </p>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <p>Send your money to: 1234 5678 12-34-56.</p>
                </div>
            </div>
        </div>
    </body>
</html>