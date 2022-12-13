@props(['faq'])
<div class="col-xs-12 col-sm-12 col-md-12 about-1">
    <div class="panel-group accordion" id="accordion02" role="tablist" aria-multiselectable="true">

        @foreach($faq as $question)
        <x-question :question="$question"/>
        @endforeach
    </div>
</div>
