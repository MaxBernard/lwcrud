<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire Example - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.0/tailwind.min.css" rel="stylesheet" integrity="sha512-wOgO+8E/LgrYRSPtvpNg8fY7vjzlqdsVZ34wYdGtpj/OyVdiw5ustbFnMuCb75X9YdHHsV5vY3eQq3wCE4s5+g==" crossorigin="anonymous" />
    @livewireStyles
</head>
<body>
    
<div class="antialiased">
  <div class="row mt-4 justify-content-center">
    <div class="mt-4 col-md-12">
      <div class="card">
        <div class="card-header bg-blue500">
          <h3>"Laravel Livewire Example - ItSolutionStuff.com"</h3>
        </div>
        <div class="card-body">
          @livewire('category-pagination')
        </div>
      </div>
    </div>
  </div>
</div>
    
</body>
  
@livewireScripts
  
</html>