<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{url('css/stylesFP.css')}}" rel="stylesheet">
    <title>Forum Page</title>
</head>

<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-absolute z-3 w-100">
      <div class="container-fluid">
        <img src="{{url('image/Logo.png')}}" alt="Line">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
          </li>
          <li class="nav-item">
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Language
            </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Indonesia</a></li>
            <li><a class="dropdown-item" href="#">English</a></li>
            <li><a class="dropdown-item" href="#">Mandarin</a></li>
          </ul>
          </li>
        </ul>
      </div>
      </div>
    </nav>
</header>

<body>

        <div class="container2">
            <h2>Create New Thread</h2>

            <form action="{{ route('threads.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" id="body" name="body" rows="5" required>{{ old('body') }}</textarea>
                    @error('body')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Create Thread</button>
            </form>

            <hr>

            <h2>Existing Threads</h2>

            @if ($threads->isEmpty())
                <p>No threads found.</p>
            @else
                <div class="list-group">
                    @foreach ($threads as $thread)
                        <div class="list-group-item">
                            <h5 class="mb-1">{{ $thread->title }}</h5>
                            <p class="mb-1">{{ $thread->body }}</p>
                            <small>Created at: {{ $thread->created_at->format('M d, Y') }}</small>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>