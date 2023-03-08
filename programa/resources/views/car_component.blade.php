<div class="col-md-4">
    <div class="car-wrap rounded ftco-animate">
        <div class="img rounded d-flex align-items-end" style="background-image: url({{ asset($item->image) }});">
        </div>
        <div class="text">
            <h2 class="mb-0"><a href="{{ route('car.show', $item->id) }}">{{ $item->make}}</a></h2>
            <div class="d-flex mb-3">
                <span class="cat">{{ $item->model}}</span>
                <p class="price ml-auto">{{ $item->price}} EUR<span>/dieną</span></p>
            </div>
            <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Book now</a> <a href="{{ route('car.show', $item->id) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
        </div>
    </div>
</div>