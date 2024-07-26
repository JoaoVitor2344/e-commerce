<a href="{{ $link  }}">
    <div class="card text-bg-dark b-none shadow-md card-component" style="border: none;">
        <img src="{{ $img }}" class="card-img"
             alt="">
        <div class="card-img-overlay flex-column justify-content-between text-dark fw-semibold">
            <h5 class="card-title">{{ $title }}</h5>
            <p class="card-text">{{ $text }}</p>
            <p class="card-text"><small>{{ $small }}</small></p>
        </div>
    </div>
</a>
