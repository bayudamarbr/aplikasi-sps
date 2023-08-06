<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use App\Models\pickup;

class PickupController extends Controller
{
    public function data_sampah()
        {
            $user = Auth::user();
           return view('pickup.data_sampah',[
            'title' => 'Pickup Sampah',
            'user' => $user
           ]);
        }

    public function sukses($id)
        {
            $user = Auth::user();
            // Lakukan logika lain yang diperlukan menggunakan $id
            return view('pickup.sukses', [
                'title' => 'Pickup Sampah',
                'user' => $user
            ]);
        }

    
        

        public function storePickup(Request $request)
        {
            
            $request->validate([
                'kategori_sampah' => 'string',
                'jenis_pickup' => 'string',
                'alamat' => 'required|min:5|max:255',
                'catatan' => 'string'
                ]);
            $pickup = new Pickup();
            $pickup->user_id = Auth::id();
            $pickup->kategori_sampah = $request->kategori_sampah;
            $pickup->jenis_pickup = $request->jenis_pickup;
            $pickup->alamat = $request->alamat;
            $pickup->catatan = $request->catatan;
            $pickup->save();
            
            return redirect()->route('pembayaran.form', ['id' => $pickup->id]);
            
        }

        public function storePayment(Request $request, $id)
        {
            $valuePembayaran = $request->input('pembayaran');
            $pickup = Pickup::findOrFail($id);
            $pickup->pembayaran = $valuePembayaran;
            $pickup->save();
        
            if ($valuePembayaran === 'Bayar Di Tempat') {
                $user = Auth::user();
                $id = $user->id;
                return Redirect()->route('transaksi.sukses', ['id' => $id]);
            } else {
                return redirect()->route('qris.form', ['id' => $pickup->id]);
            }
            
        }

        public function pembayaran($id)
        {
            
            $RecordId = $id;
            return view('pickup.pembayaran', [
                'title' => 'Pickup Sampah', 
                'RecordId' => $RecordId,
                'user' => Auth::user()
            ]);
        }

        public function qris($id)
        {
            $user = Auth::user();
            $RecordId = $id;
            return view('pickup.qris', [
                'title' => 'Pickup Sampah', 
                'RecordId' => $RecordId,
                'user' => $user
            ]);
        }

        public function upload(Request $request, $id)
        {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Validasi file gambar
            ]);


            $pickup = Pickup::findOrFail($id);
            $Image = $request->file('gambar');
            $ImageName = 'bukti_pembayaran_' . $pickup->id . '_' . time() . '.' . $Image->getClientOriginalExtension();


            // Simpan gambar ke folder yang ditentukan
            $Image->move(public_path('uploads'), $ImageName);

            // Simpan referensi gambarnya di database
            $data = [
                'bukti_pembayaran' => '/uploads/' . $ImageName,
                // tambahkan field lain yang diperlukan
            ];

            $pickup = Pickup::findOrFail($id);
            $pickup->bukti_pembayaran = $data;
            $pickup->save();


            // Simpan $data ke tabel database
            $user = Auth::user();
            $id = $user->id;
            return redirect()->route('transaksi.sukses',  ['id' => $pickup->id]);


            // ...
        }

        public function edit($id)
        {
            $pickup = Pickup::find($id);
        
            if (!$pickup) {
                // Handle jika pickup tidak ditemukan
                return redirect()->route('admin')->with('error', 'Pickup not found.');
            }
        
            // Kirim data pickup ke view edit
            return view('pickup.edit', compact('pickup'))->with('title', 'Edit Data');
        }

        public function update(Request $request, $id)
        {
            $pickup = Pickup::findOrFail($id);

            // Validasi input jika diperlukan
            $request->validate([
                'kategori_sampah' => 'required',
                'jenis_pickup' => 'required',
                'alamat' => 'required',
                'status' => 'required',
            ]);

            // Mengupdate informasi pickup
            $pickup->kategori_sampah = $request->kategori_sampah;
            $pickup->jenis_pickup = $request->jenis_pickup;
            $pickup->alamat = $request->alamat;
            $pickup->status = $request->status;
            $pickup->save();

            // Redirect ke halaman data pickup atau halaman detail pickup
            return redirect()->route('admin');
        }        

        public function destroy($id)
        {
            // Temukan data pickup berdasarkan ID
            $pickup = Pickup::findOrFail($id);

            // Hapus data pickup
            $pickup->delete();

            // Redirect atau kembalikan respon yang sesuai setelah penghapusan
            return redirect()->route('admin')->with('success', 'Pickup has been deleted successfully');
        }

        

        
        
        

        





        

        
}