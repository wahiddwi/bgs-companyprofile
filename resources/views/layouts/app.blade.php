<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Buana Gemilang Sukses | @yield('title') </title>

    @include('includes.style')

</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
        @include('includes.navbar')
        @include('includes.sidebar')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>@yield('title')</h1>
          </div>

          @yield('content')
        </section>
      </div>
      @include('includes.footer')
    </div>
  </div>

  @include('includes.scripts')
</body>
</html>
