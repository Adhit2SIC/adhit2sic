<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<script src="https://jquery.com"></script>
<body>
    <div style="padding: 20px;">
    <h3>Form Login Ajax</h3>
    <input type="text" id="username" placeholder="Username" value="john"><br><br>
    <input type="password" id="password" placeholder="Password" value="12345"><br><br>

    <!-- Tombol untuk memicu AJAX -->
    <button id="btnSubmit">Kirim Data via AJAX</button>

    <!-- Tempat untuk menampilkan hasil respon di halaman web -->
    <div id="hasilRespon" style="margin-top: 20px; color: green; font-weight: bold;"></div>
</div>

 
<script>
    $.ajax({
        url: 'auth/login',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}', // KHUSUS LARAVEL: Wajib tambah baris ini agar tidak error 419
            username: 'john',
            password: '12345'
        },
        success: function(response) {
            console.log('Data submitted successfully');
        },
        error: function(xhr, status, error) {
            console.log('Error occurred: ' + error);
        }
    });
</script>
</body>
</html>
