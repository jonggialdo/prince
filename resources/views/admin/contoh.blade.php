<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>bro</title>
  </head>
  <body>

    <div class="container">
      <div class="row" style="margin-top: 50px">
        <div class="col-lg-6 col-lg-offset-3">
          <form  action="/searchproduct" method="get" role="searchProductAdmin">
            {{ csrf_field() }}
            <div class="input-group">
              <input type="text" name="form-control">
              <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                  <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 col-lg-offset-3">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>name</th>
              <th>address</th>
            </tr>
          </thead>
          <tbody id="data">
            @foreach($datas as $data)
            <tr>
              <td>{{ $data->product_name }}</td>
              <td>{{ $data->price }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $datas->render()}}
      </div>

    </div>
  </body>
</html>
