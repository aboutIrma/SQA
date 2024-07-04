<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('styles.css') }}" rel="stylesheet">
  <link href="{{ asset('index.css') }}" rel="stylesheet">
  <title>Denger.in</title>
</head>
<body class="container full-height-grow">
  <header class="main-header">
    <a href="/" class="brand-logo">
      <img src="{{ asset('images/logo.png') }}">
      <div class="brand-logo-name">Denger.in</div>
    </a>
    <nav class="main-nav">
      <ul>
        <li><a href="/register">Join</a></li>
        <li><a href="/login">Sign In</a></li>
      </ul>
    </nav>
  </header>
  <section class="home-main-section">
    <div class="img-wrapper">
      <div class="lady-image"></div>
    </div>
    <div class="call-to-action">
      <h1 class="title">Feel The Music</h1>
      <span class="subtitle">Stream over 20 thousand songs with one click</span>
      <a href="/register" class="btn">Join Now</a>
    </div>
  </section>
  <div class="home-page-circle-1"></div>
  <div class="home-page-circle-2"></div>
  <div class="home-page-circle-3"></div>
</body>
</html>