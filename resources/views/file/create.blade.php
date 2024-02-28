@extends('../layout')

@section('content')
  <form method="POST", action="" enctype="multipart/form-data">
      @csrf
      <input type="file" name="file">
      <input type="submit">
  </form>
@endsection