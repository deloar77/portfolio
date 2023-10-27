
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{asset("/")}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            
            <li class="nav-item">
              <a class="nav-link" href="{{asset("projects")}}">projects</a>
            </li>
            
            
          </ul>
        </div>
      </nav>
    <section id="experience" class="bg-light mt-5">
        <div class="container-lg">
            <div class="text-center">
                <h1>Experience</h1>
                <p class="lead text-muted">experience details here</p>
            </div>
          <div class="row my-5 align-items-center justify-content-center">
            <div class="col-5 col-lg-4 col-xl-4">
               @foreach ($datas as $item)
               <div class="card border-0 mt-5">
                <div class="card-body text-center py-5">
                        <h3>the project no.{{$item['id']}}</h3>
                       <h4 class="card-title"> the name is <a class="btn btn-primary btn-sm" href="{{url($item['title'])}}">{{$item['title']}}</a> </h4>

                       <p class="lead card-subtitle">{{$item['short_des']}}</p>
                      
                </div>
            </div>
                   
               @endforeach
            </div>
          </div>
        </div>
    </section>
    

    
    <script src="{{asset("js/bootstrap.bundle.js")}}"></script>
</body>
</html>