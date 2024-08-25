@foreach($users as $user)
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $user->name }}</h5>
                <p class="card-text">{{ $user->designation->name }}</p>
                <p class="card-text">{{ $user->department->name }}</p>
            </div>
        </div>
    </div>
@endforeach
