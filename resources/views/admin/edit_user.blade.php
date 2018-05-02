

    <form  action="/viewuser/{{$user->id}}" method="PATCH">
      <input type="text" name="" value="{{ $user->name }}">
        <input type="text" name="" value="{{ $user->email }}">

        <button type="submit" name="submit" value="edit" class="btn btn-success pull-right">
        Tambahkan Nasabah</button>
        {{ csrf_field() }}
      <input type="hidden" name="_method" value="PUT">
    </form>
