<table>
<form action="http://localhost:8888/laravelapp/public/rest" method="post">
  {{ csrf_field() }}
  <tr><th>messsage: </th><td><input type="text" name="message" value="{{old('message')}}"></td></tr>
  <tr><th>url: </th><td><input type="text" name="url" value="{{old('url')}}"></td></tr>
  <tr><th></th><td><input type="submit" value="send"></td></tr>
</form>
</table>
