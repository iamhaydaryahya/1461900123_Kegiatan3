<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>
    1461900123_Kegiatan3
  </title>
</head>
<body>    
    <h2>
      <div>Tambah Data</div>
    </h2>
    
    <div>
      <div>
          <form action=" {{route('transaksi.store')}} " method="POST">
              <div>
                <div>
                  <div>

                    @csrf

                    <div class="col-span-6 sm:col-span-6">
                    <label for="" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Barang</label>
                      <!--ganti variabel terima dari controller-->
                      <select id="id_barang" name="id_barang" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 ">
                      @foreach ($barang as $item)
                        <option value="{{$item->id}}">{{$item->nama}}</option>
                      @endforeach 
                      </select>
                    </div>

                    <div class="col-span-6 sm:col-span-6">
                      <label >Pelanggan</label>
                      <select id="id_pelanggan" name="id_pelanggan" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 ">
                      @foreach ($pelanggan as $pelanggan)
                        <option value="{{$pelanggan->id}}" >{{$pelanggan->nama}}</option>
                      @endforeach 
                      </select>
                    </div>

                    
                  </div>
                </div>
                <div>
                  <button type="submit">
                      <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                        </svg>
                        <div class="pl-2" >Simpan Data</div>
                  </button>
                </div>
              </div>
            </form>
      </div>
    </div>
</body>
</html>