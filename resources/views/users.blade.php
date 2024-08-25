<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Search</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: darkgray">
<div class="container mt-4">

    <div class="mb-4">
        <label for="search" class="form-label"><b>Search</b></label>
        <input type="text" id="search" placeholder="Search name/designation/department" class="form-control" style="background: lightgray">
    </div>

    <div class="row" id="user-table-body">
        @include('user_cards', ['users' => $users])
    </div>

</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search').on('keyup', function() {
            let search = $(this).val();
            $.ajax({
                url: '{{ route('search') }}',
                type: 'GET',
                data: { search: search },
                success: function(data) {
                    $('#user-table-body').html(data);
                }
            });
        });
    });
</script>
</body>
</html>
