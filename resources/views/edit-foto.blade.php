<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Foto Profil</title>
  <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body style="padding:60px; font-family:'Inter',sans-serif;">

  @if (session('success'))
    <p style="color:green;">{{ session('success') }}</p>
  @endif

  <form action="/edit-foto" method="POST" enctype="multipart/form-data">
    @csrf
    <label>Pilih foto baru:</label><br>
    <input type="file" name="foto" accept="image/*"><br><br>
    <button type="submit">Upload</button>
  </form>

</body>
</html>