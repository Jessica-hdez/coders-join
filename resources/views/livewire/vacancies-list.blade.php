<div class="grid gap-8 mt-6 md:grid-cols-2 lg:grid-cols-4">
    @foreach($vacancies as $vacancy)
        @if ($vacancy->status === "Publicar")
            <x-postcard :vacancy="$vacancy" />
        @endif
    @endforeach
</div>
 
<link rel="stylesheet" href="{{asset('css/app.css')}}">