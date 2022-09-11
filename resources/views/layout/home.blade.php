<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield("style")
        <style>
            .content{
                text-align: center;
                background-color: gainsboro;
                border-radius: 30px;
            }
            .body{
                background-color: whitesmoke;
            }
            .header{
                background-color: cornflowerblue;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" 
        crossorigin="anonymous">
        <title>Laravel</title>
    </head>
    <body class="body m-0 p-0 vh-100">
        <p class="display-5 p-3 header text-center">Jenis - Jenis Bunga</p>
        <section class="container pt-3">
            <div class="col mb-3 p-3 content">
                @yield("content")
            </div>
            <div class="col text-center">
                <a class="btn btn-primary m-3 link" href="/sakura">Bunga Sakura</a>
                <a class="btn btn-primary m-3 link" href="/melati">Bunga Melati</a>
                <a class="btn btn-primary m-3 link" href="/mawar">Bunga Mawar</a>
                <a class="btn btn-primary m-3 link" href="/anggrek">Bunga Anggrek</a>
            </div>
        </section>
    </body>
</html>