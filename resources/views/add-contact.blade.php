<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"
        integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="/main.css" />
</head>

<body>
    <form class="m-4" action="/add-contact" method="POST" id="add-contact-form">
        @csrf
        <div class="form-group">
            <label for="name" class="mb-1 h3">Name</label>
            <input name="name" id="name" class="form-control form-control-title" type="text"
                value="{{ old('name') }}" autocomplete="off" />
            @error('name')
                <p class="m-0 small alert alert-danger shadow-sm"">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone_number" class="mb-1 h3">Phone Number</label>
            <input name="phone_number" id="phone_number" class="form-control form-control-title" type="number"
                value="{{ old('phone_number') }}" autocomplete="off" />
            @error('phone_number')
                <p class="m-0 small alert alert-danger shadow-sm">{{ $message }}</p>
            @enderror
        </div>

        <div class="d-flex justify-content-center">
            <a class="w-25 m-4 btn btn-lg btn-danger" href="/">Cancel</a>
            <button type="submit" class="w-25 m-4 btn btn-lg btn-success">Save</button>
        </div>
    </form>
</body>

</html>
