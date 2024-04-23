<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hangar Challenge</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/styles1.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="logo">
            <a href="/" target="_self" class="logo" title="Hangar Digital">
            <svg width="180" height="76" viewBox="0 0 180 76" fill="none" xmlns="http://www.w3.org/2000/svg"><g clip-path="url(#clip0_1_9)"><path d="M17.4494 19.9095L9.30336 23.4195V9.99634H0V59.1534H9.30336V33.0451L18.9463 28.8698C29.0639 28.8698 27.9759 35.5918 27.9759 38.3742V59.1499H37.2793V38.3742C37.2793 18.7522 21.597 19.9061 17.4529 19.9061L17.4494 19.9095Z" fill="white"></path><path d="M64.7597 19.8957H62.213L53.911 24.6496V19.8957H44.6076V59.1534H53.911V33.551L62.6184 28.0071H64.6557C72.2439 28.0071 72.1747 34.781 72.1747 36.2051V59.1534H81.478V36.2051C81.478 20.3184 70.0541 19.8957 64.7597 19.8957Z" fill="white"></path><path d="M148.407 19.8957C145.555 19.8957 135.541 21.1812 135.541 35.3389V59.1534H144.845V35.3389C144.845 32.7402 145.406 28.9218 149.786 28.9218H157.96V19.8957H148.41H148.407Z" fill="white"></path><path d="M102.905 47.681H110.566C117.94 47.681 123.913 41.704 123.913 34.334V28.1942H127.638V19.8991H102.898C95.5283 19.9026 89.5582 25.8761 89.5582 33.246V34.334C89.5582 38.9944 91.949 43.0969 95.5699 45.4842L91.1868 51.281V59.1568H112.947C114.877 59.1568 116.443 60.723 116.443 62.653V63.4672C116.443 65.3972 114.877 66.9633 112.947 66.9633H91.1868V75.0609H113.965C120.507 75.0609 125.812 69.7561 125.812 63.2143V63.1311C125.812 56.5893 120.507 51.2845 113.965 51.2845H99.953L102.898 47.6844H102.905V47.681ZM104.163 28.1942H114.61V33.6099C114.61 36.6001 112.184 39.0256 109.194 39.0256H104.159C101.169 39.0256 98.7438 36.6001 98.7438 33.6099C98.7438 30.6196 101.169 28.1942 104.159 28.1942H104.163Z" fill="white"></path><path d="M178.877 1.12265C178.877 1.12265 181.809 15.4571 178.195 28.1942L169.165 27.276C169.165 27.276 167.963 18.974 164.491 15.5056C161.023 12.0372 152.721 10.8314 152.721 10.8314L151.802 1.80178C164.539 -1.80869 178.874 1.11919 178.874 1.11919L178.877 1.12265Z" fill="#50F4E8"></path></g><defs><g id="clip0_1_9"><rect width="180" height="75.0575" fill="white"></rect></g></defs></svg>
            </a>
        </div>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Dia</th>
                    <th scope="col">Média</th>
                </tr>
            </thead>
            <tbody>
                <?php include './fetchs/fetch_data1.php'; ?>
            </tbody>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>