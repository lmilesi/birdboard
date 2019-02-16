<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <title>Projects</title>
  </head>
  <body>
    <h1>Birdboard</h1>
    <ul>
      @forelse ($projects as $project)
        <li>
          <a href="{{ $project->path() }}">{{ $project->title }}</a>
        </li>
      @empty
        <li>{{ __('There are no projects yet.') }}</li>
      @endforelse
    </ul>
  </body>
</html>
