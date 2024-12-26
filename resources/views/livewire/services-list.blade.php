<div class="row">
    @foreach($services as $service)
        <div class="col-12 col-lg-3 mb-3">
            <div class="card h-100" >
                <div class="card-body">
                    <h5 class="card-title">{{ $service->name }}</h5>
                    <ul class="list-group list-group-flush">
                        @foreach($service->options as $option)
                            <li class="list-group-item">
                                {{ $option->name }} - ₱{{ number_format($option->price, 2) }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    @endforeach
</div>
