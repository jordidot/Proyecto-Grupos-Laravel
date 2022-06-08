{!!Form::open(['url'=>'/fgroups','method'=>'POST'])!!}
    <input type="hidden" name="group_id" value="{{$group->id}}">
    
    <button type="submit">
        <i class="fas fa-heart"></i>
        {{__('web.like')}}
    </button>

    {!!Form::close()!!}