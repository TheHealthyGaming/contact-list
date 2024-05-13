<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/add-contact" method="POST" id="add-contact-form">
        @csrf
        <div class="form-group">
          <label for="name" class="text-muted mb-1"><small>Name</small></label>
          <input name="name" id="name" class="form-control" type="text" autocomplete="off" />
        </div>

        <div class="form-group">
          <label for="phone-number" class="text-muted mb-1"><small>Phone Number</small></label>
          <input name="phone-number" id="phone-number" class="form-control" type="text" autocomplete="off" />
        </div>

        <button type="submit" class="py-3 mt-4 btn btn-lg btn-success btn-block">Save</button>
      </form>
</body>
</html>