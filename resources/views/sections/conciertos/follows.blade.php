{!!Form::open(['url'=>'/follows/'.$concerto->id, 'method'=>'DELETE'])!!}
    <i class="far fa-heart fa-2x" style="width:50px;height:50px;"></i><input type="submit" class="btn btn-outline-primary" value="{{__('web.not_like')}}">
{!!Form::close()!!}
    
