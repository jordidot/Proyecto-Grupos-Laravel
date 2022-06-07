<div align="center">
    @foreach($concerts as $concert)
    <p align="center">Te gusta el concierto?</p>
    {!!Form::model($concert, ['url'=>'/follows/'.$concert->id,'method'=>'POST'])!!}
    @method('PUT')
    <input align="center"type="submit" class="btn btn-outline-primary" value="{{__('web.like')}}">
    {!!Form::close()!!}
    @endforeach
</div>