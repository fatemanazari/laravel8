<table border="1">
@foreach($data as $item)
<tr>
<td>{{$item->firstname}}</td>
<td>{{$item->lastname}}</td>
<td>{{$item->username}}</td>
<td>{{$item->roll}}</td>
</tr>
@endforeach
</table>