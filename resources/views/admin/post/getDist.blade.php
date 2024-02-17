<option value="">Select {{$name}}</option>
@forelse ($dataset as $item)
    <option value="{{$item->id}}">{{$item->bn_name}}</option>
@empty
    <option value="" disabled>No data found</option>
@endforelse