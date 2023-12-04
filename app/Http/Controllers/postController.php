<?php

namespace App\Http\Controllers;

use App\Models\postModel;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function getGambarArray()
    {
        return [
            ['id'=> '1', 'gambar' => 'eng.jpeg', 'title' => 'Bahasa Inggris', 'desc' => 'Bahasa Inggris adalah bahasa Jermanik yang pertama kali dituturkan di Inggris pada Abad Pertengahan Awal dan saat ini merupakan bahasa yang paling umum digunakan di seluruh dunia.Bahasa Inggris dituturkan sebagai bahasa pertama oleh mayoritas penduduk di berbagai negara, termasuk Britania Raya, Irlandia, Amerika Serikat, Kanada, Australia, Selandia Baru, dan sejumlah negara-negara Karibia; serta menjadi bahasa resmi di hampir 60 negara berdaulat.'],
            ['id'=> '2','gambar' => 'indo.jpeg', 'title' => 'Bahasa Indonesia', 'desc' => 'Bahasa Indonesia adalah bahasa nasional dan resmi di seluruh wilayah Indonesia. Ini merupakan bahasa komunikasi resmi, diajarkan di sekolah-sekolah, dan digunakan untuk penyiaran di media elektronik dan digital. Sebagai negara dengan tingkat multilingual (terutama trilingual) teratas di dunia, mayoritas orang Indonesia juga mampu bertutur dalam bahasa daerah atau bahasa suku mereka sendiri, dengan yang paling banyak dituturkan adalah bahasa Jawa dan Sunda yang juga memberikan pengaruh besar ke dalam elemen bahasa Indonesia itu sendiri.'],
            ['id'=> '3','gambar' => 'math.jpeg', 'title' => 'Matematika', 'desc' => 'Matematika (dari bahasa Yunani Kuno μάθημα (máthēma), berarti "pengetahuan, pemikiran, pengkajian, pembelajaran"), adalah bidang ilmu, yang mencakup studi tentang topik-topik seperti bilangan (aritmetika dan teori bilangan), rumus dan struktur terkait (aljabar), bangun dan ruang tempat mereka berada (geometri), dan besaran serta perubahannya (kalkulus dan analisis). Tidak ada kesepakatan umum tentang ruang lingkup yang tepat atau status epistemologisnya.'],
            ['id'=> '4','gambar' => 'pkn.jpeg', 'title' => 'PPKN', 'desc' => 'Pendidikan kewarganegaraan diajarkan di sekolah-sekolah, sebagai mata pelajaran akademik yang mirip dengan politik atau sosiologi. Ia dikenal dengan nama yang berbeda di berbagai negara - misalnya, citizenship education (atau singkatnya citizenship) di Inggris, civics di AS, dan \'pendidikan untuk kewarganegaraan demokratis\' di beberapa bagian Eropa. Nama yang berbeda untuk mata pelajaran ini tercermin dalam pendekatan yang berbeda terhadap pendidikan kewarganegaraan yang diadopsi di berbagai negara. Ini sering merupakan konsekuensi dari perkembangan sejarah dan politik yang unik di berbagai negara.'],
        ];
    }
    public function length(){
        $gambarArray = $this->getGambarArray();
        $bookCount = count($gambarArray);
        $posts = postModel::all();
        $postCount = count($posts); // Menghitung panjang data $posts
    return view('home', compact('gambarArray', 'bookCount','posts', 'postCount'));
    }
    // view dashboard
    public function index(){
        // $posts = postModel::all();
        $posts = postModel::paginate(7);
        return view('peminjam',['posts'=>$posts]);
    }

    // create data in dashboard
    public function create(){
        return view('crud.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required|in:Bahasa Indonesia,Bahasa Inggris,Matematika,PKNn',
            'tanggal' => 'required',
        ]);

        $post = new postModel;
        $post->nama_peminjam = $request->nama_peminjam;
        $post->judul_buku = $request->judul_buku;
        $post->tanggal = $request->tanggal;
        $post->save();

        return redirect("/peminjam");
    }



    // update data in dashboard
    public function edit($id){
        $post = postModel::find($id);
        return view('crud.update', ['post' => $post]);
    }

    public function update(Request $request,$id){

        $request->validate([
            'nama_peminjam' => 'required',
            'judul_buku' => 'required|in:Bahasa Indonesia,Bahasa Inggris,Matematika,PKNn',
            'tanggal' => 'required',
        ]);

        $post = postModel::find($id);
        $post -> nama_peminjam = $request->nama_peminjam;
        $post -> judul_buku = $request->judul_buku;
        $post -> tanggal = $request->tanggal;
        $post -> save();

        return redirect("/peminjam");
    }
    // delete data
    public function trash($id){
        $post = postModel::find($id);
        $post -> delete();

        return redirect("/peminjam");
    }
    // search engine
    public function search(Request $request){
    $query = $request->input('query');
    $posts = postModel::where('nama_peminjam', 'LIKE', '%' . $query . '%')->paginate(7);
    $posts->appends(['query' => $query]);
    return view('search', compact('posts', 'query'));
}




// VIEW BUKU-----------------------------------------------------------------------------------------------------------

public function book()
    {
        $gambarArray = $this->getGambarArray();


        return view('book', compact('gambarArray'));
    }
    public function view($id){

        $gambarArray = $this->getGambarArray();

        $selectedImage = null;
        foreach ($gambarArray as $image) {
            if ($image['id'] == $id) {
                $selectedImage = $image;
                break;
            }
        }


        // Kirim data gambar terpilih ke view
        return view('viewBook', ['gambar' => $selectedImage]);
    }

}
