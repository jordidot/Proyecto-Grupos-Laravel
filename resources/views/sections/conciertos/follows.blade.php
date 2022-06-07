{!!Form::model($concerto, ['url'=>'/follows/'.$concerto->id,'method'=>'POST'])!!}
    @method('PUT')
    <i class="far fa-heart fa-2x" style="width:50px;height:50px;"></i><input type="submit" class="btn btn-outline-primary" value="{{__('web.like')}}">
{!!Form::close()!!}
    
