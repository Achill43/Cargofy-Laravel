<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <link href="<?=URL::asset('/public/css/app.css'); ?>" rel="stylesheet">
  <title>Vue SPA Demo</title>
</head>
<body>
<br><br>
<div class="container">
  <div id="app">
      <h2>Біржа вантажів</h2>
      <hr>
      <addWay v-bind:ways="ways" @newway="updateWays"></addWay>
      <br>
      <Ways v-bind:ways="ways"></Ways>
      <hr>
      <button type="button" class="btn btn-primary" @click="GetWays()">Оновити дані</button>
  </div>
</div>
  <script src="<?=URL::asset('/public/js/app.js'); ?>"></script>
</body>
</html>