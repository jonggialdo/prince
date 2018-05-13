<<<<<<< HEAD
    <form  action="/viewuser/{{$user->id}}" method="PATCH">
      <input type="text" name="" value="{{ $user->name }}">
        <input type="text" name="" value="{{ $user->email }}">
=======


    <form  action="/viewuser/{{$user->id}}" method="POST">
      <input type="text" name="name" value="{{ $user->name }}">
        <input type="text" name="email" value="{{ $user->email }}">
>>>>>>> 9e2a949b9d29bf41e1ba9c8eab26b1f352e30b56

        <button type="submit" name="submit" class="btn btn-success pull-right">
        Tambahkan Nasabah</button>
        {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
    </form>
// edit satuan