<div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
        <h4 class="panel-title">
            <a class="accordion-toggle collapsed" role="button" data-toggle="collapse" data-parent="#accordion02"
               href="#{{ $question->collapse }}" aria-expanded="false" aria-controls="{{ $question->collapse }}"> {{ $question->title }} </a>
        </h4>
    </div>
    <div id="{{ $question->collapse }}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <div class="panel-body">
            {{ $question->description }}
        </div>
    </div>
</div>
