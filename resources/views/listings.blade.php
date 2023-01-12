<!-- Prvi primjer, listings.php -->
<!-- <h1><?php echo $heading; ?></h1>

<?php foreach($listings as $listing): ?>
    <h2><?php echo $listing['title']; ?></h2>
    <p>
        <?php echo $listing['description']; ?>
    </p>
<?php endforeach; ?> -->



<!-- sa Blade Template, listings.blade.php -->

{{-- @php
$test = 1;
@endphp

{{$test}} --}}

<h1> {{ $heading }} </h1>

{{-- Ako nema listings pokaži ovo ili drugi način sa unless --}}
@if(count($listings) == 0)
    <p>No listings found</p>
@endif

@foreach($listings as $listing)
    <h2>{{ $listing['title'] }}</h2>
    <p>
        {{ $listing['description'] }}
    </p>
@endforeach


{{-- @unless način 
    unless prvo radi ako je true pa tek onda else
--}}
{{-- 
@unless(count($listings) == 0)

    @foreach($listings as $listing)
        <h2>{{ $listing['title'] }}</h2>
        <p>
            {{ $listing['description'] }}
        </p>
    @endforeach
 
@else
    <p>No listings found</p>

@endunless --}}



