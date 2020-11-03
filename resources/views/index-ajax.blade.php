<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Index in Ajax</title>
  </head>
  <body>
      <div class="container">
        <div id="comics" class="row">
          <script id="entry-template" type="text/x-handlebars-template">
            <div class="col-4">
              <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="@{{cover}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">@{{title}}</h5>
                  <h5 class="card-title">@{{author}}</h5>
                  <p class="card-text">@{{text}}</p>
                  <a href="/comics/@{{id}}" class="btn btn-primary">Show more</a>
                </div>
              </div>
            </div>
          </script>
        </div>
      </div>



  <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
  </body>
</html>
