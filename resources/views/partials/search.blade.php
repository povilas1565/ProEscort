<section class="section-search">
  <div class="container">
  {!!Form::open()!!}
    <div class="row">
        <div class="col-md-2">
            County
          {!! Form::select("city",['0'=>'Choose meeting county'],null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
            Time
          {!! Form::select("city",['0'=>' Choose City'],null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
            Online
            {!! Form::checkbox('online',1,null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
            Social escort
            {!! Form::checkbox('social',1,null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
            With video
            {!! Form::checkbox('video',1,null,['class'=>'form-control']) !!}
        </div>
        <div class="col-md-2">
            {!! Form::submit('Search for') !!}
        </div>
    </div>
    {!! Form::close() !!}
  </div>
</section>
