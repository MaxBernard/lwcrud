<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Crud Example - TechvBlogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
  </head>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="/">Livewire Crud Example - TechvBlogs</a>
      </div>
    </nav>

    {{-- <div class="container">
      <div class="row justify-content-center mt-3">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header text-center">
              <h2>Livewire Crud Example - TechvBlogs</h2>
              <a href="https://techvblogs.com?ref=LivewireCrudApp" target="_blank">Visit Site</a>
            </div>
          </div>
        </div>
      </div> --}}

        <div class="row justify-content-center mt-3">
            @livewire('category')
        </div>
  </div>
    
    @livewireScripts
  </body>
</html>