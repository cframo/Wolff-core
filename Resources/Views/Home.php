<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wolff-Core</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{%Route::resource('css/app.css')%}">
</head>
<body>
    <div class="flex-center position-ref full-height">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card text-center  justify-content-center border-0">
                    <div class="card-title">
                        <img class="" src="Resources/img/logo.png" width="100px">
                    </div>

                    <h1 class="display-2">
                        Welcome
                    </h1>
                    <hr>
                    <h3>
                        <small class="text-muted">
                            {% echo "Core is the brain of the Wolff" %}
                        </small>
                    </h3>
                    <h5>
                        <small class="text-muted">
                            {% echo "You can start by creating your own page like this one" %}
                        </small>
                    </h5>
                </div>
            </div>
            <div class="row justify-content-center">
                    <div class="card text-center bg-transparent border-0 ">
                        -
                        <div class="btn-group">
                            <a href="#" type="button" class="btn btn-light">DOCUMENTATION</a>
                            <a href="#" type="button" class="btn btn-light">GITHUB</a>
                            <a href="#" type="button" class="btn btn-light">CREATORS' PAGE</a>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-center">
                <h6>
                    <small class="text-muted">
                        {% echo "Wolff and Core are a WIP. They're NOT completely stable, new features will be added soon and the core structure may change over time." %}
                    </small>
                </h6>
            </div>
        </div>
    </div>
</body>
</html>