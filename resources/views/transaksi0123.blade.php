<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1461900123_Kegiatan3</title>
</head>
<<style>
/* segala coding CSS */
/*Downloaded from https://www.codeseek.co/alexerlandsson/pure-css-table-highlight-vertical-andamp-horizontal-mPWgpO */
html,
body {
  height: 100%;
}
body {
  margin: 0;
  background: linear-gradient(45deg, #49a09d, #5f2c82);
  font-family: sans-serif;
  font-weight: 100;
}
.container {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
}
table {
  width: 800px;
  border-collapse: collapse;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}
th,
td {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.2);
  color: #fff;
}
th {
  text-align: left;
}
thead th {
  background-color: #55608f;
}
tbody tr:hover {
  background-color: rgba(255, 255, 255, 0.3);
}
tbody td {
  position: relative;
}
tbody td:hover:before {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: -9999px;
  bottom: -9999px;
  background-color: rgba(255, 255, 255, 0.2);
  z-index: -1;
}
</style>>

<body>
<div class="container">
	<table>
		<thead>
			<tr>
				<th>Id Pelanggan</th>
				<th>Pelanggan</th>
				<th>Barang</th>
		
			</tr>
		</thead>
		<tbody>
        @forelse($trans as $tr)
			<tr>
				<td>{{ $tr->id}}</td>
                <td>{{ $tr->id_pelanggan}}</td>
                <td>{{ $tr->id_barang}}</td>
                <td> <a href="{{route('transaksi.edit',['id' => $tr->id])}}" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                        Edit
                      </a>
                      <form action="{{route('transaksi.hapus',['id' => $tr->id])}}" method="post">
                        @csrf
                        <button class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" aria-label="Delete">
                          Hapus
                        </button>
                      </form>
                </td>
			</tr>
        @empty
		@endforelse
        </tbody>
	</table>
</div>
    
</body>
</html>