@if (count($errors) > 0)
    <div class="alert alert-danger alert-dismissible">
        <div class="mt-2"><b>有错误发生：</b></div>
        <ul class="mt-2 mb-2">
            @foreach ($errors->all() as $error)
                <li><i class="glyphicon glyphicon-remove"> {{ $error }} </i></li>
            @endforeach
        </ul>
    </div>
@endif