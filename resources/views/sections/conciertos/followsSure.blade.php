{!!Form::open(['url'=>'/follows','method'=>'POST'])!!}
    <input type="hidden" name="concert_id" value="{{$concerto->id}}">
    
    <button type="submit">
        <i class="fas fa-heart"></i>
        {{__('web.not_like')}}
    </button>

    {!!Form::close()!!}