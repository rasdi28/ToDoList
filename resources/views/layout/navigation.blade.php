<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ngoding_Bareng.id</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item{{ request()->is('home') ? ' active' : '' }}">
            <a class="nav-link" href="/">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item{{ request()->is('contact') ? ' active' : '' }}">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          <li class="nav-item{{ request()->is('about') ? ' active' : '' }}">
            <a class="nav-link " href="/about">About</a>
          </li>
          <li class="nav-item{{ request()->is('posts') ? ' active' : '' }}">
            <a class="nav-link" href="/posts">Posts</a>
          </li>
          
      </div>
    </div>
  </nav>