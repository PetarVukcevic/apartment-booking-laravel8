<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="{{ $feature->label }}">
        <h4 class="panel-title">
            <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02"
               href="#{{ $feature->collapse }}" aria-expanded="true" aria-controls="{{ $feature->collapse }}">
                {{ $feature->title }} </a>
            <span class="icon"></span>
        </h4>
    </div>
    <div id="{{ $feature->collapse }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="{{ $feature->label }}">
        <div class="panel-body">
            {{ $feature->description }}
        </div>
    </div>
</div>
