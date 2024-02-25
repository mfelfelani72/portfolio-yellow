<section class="portfolio" id="portfolio">
    <h1 class="heading">my <span>portfilio</span></h1>
    <div class="box-countainer">
        @foreach ($port_categories as $item )
        <div class="box">
            <a href="{{ route('show-blog',$item->id) }}">  <img src="{{ asset('administrator/images/' . $item->image) }}" 
                alt="{{$item->name}}"
                title="{{ $item->name }}"></a>
          
        </div>
        @endforeach
    </div>


</section>