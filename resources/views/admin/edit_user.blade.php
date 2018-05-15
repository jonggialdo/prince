

    <form  action="/viewuser/{{$user->id}}" method="POST">
      <input type="text" name="name" value="{{ $user->name }}">
        <input type="text" name="email" value="{{ $user->email }}">

        <button type="submit" name="submit" class="btn btn-success pull-right">
        Tambahkan Nasabah</button>
        {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
    </form>
// edit satuan