@foreach ($components as $component)
    <div>
        <h3>{{ $component->name }}</h3>
        <div>{!! $component->preview_code !!}</div>
        <textarea readonly>{{ $component->copy_code }}</textarea>
    </div>
@endforeach
