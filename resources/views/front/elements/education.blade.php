<section class="education" id="education">
    <h1 class="heading"> my <span>education</span></h1>
    <div class="box-countainer">
        @foreach ($educations as $item)
            <div class="box">
                <i class="fas fa-graduation-cap"></i>
                <span>{{ $item->from }} - {{ $item->to }}</span>
                <h3>{{ $item->title }} </h3>
                <p>
                    {{ $item->description }} 
                </p>
            </div>
        @endforeach
    </div>
</section>
