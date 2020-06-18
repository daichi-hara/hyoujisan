<!DOCTYPE html>
<head>
  <title>hyoujisan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container">
    <div class="row">
        <table class="table text-center table-bordered">
            <tr>
                <th class="text-center">サーバname</th>
                <th class="text-center">port番号</th>
                <th class="text-center">script_filename</th>
            </tr>
            
            <tr>
                <td>{{ $request->server('SERVER_NAME') }}</td>
                <td>{{ $request->server('SERVER_PORT') }}</td>
                <td>{{ $request->server('SCRIPT_FILENAME') }}</td>
            </tr>
        </table>
    </div>
</div>