<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="{{ $feature->label }}">
        <h4 class="panel-title">
            <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02"
               href="#collapse02-{{ $feature->id }}" aria-expanded="true" aria-controls="collapse02-{{ $feature->id }}">
                {{ $feature->title }} </a>
            <span class="icon"></span>
        </h4>
    </div>
    <div id="collapse02-{{ $feature->id }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            {{ $feature->description }}
        </div>
    </div>
</div>
