<?php

    namespace App\Models;
    use Illuminate\Support\Facades\DB;

    class ArtikelModel{
        public static function get_all(){
            $artikel = DB::table('artikel')->get();
            return $artikel;
        }

        public static function save($data){
            $new_artikel = DB::table('artikel')->insert($data);
            return $new_artikel;
        }

        public static function find_by_id($id){
            $artikel = DB::table('artikel')->where('id', $id)->first();
           // dd($artikel);
            return $artikel;
        }

        public static function update($id, $request){
            //dd($request);
            $artikels = DB::table('artikel')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request["judul"],
                        'isi' => $request["isi"],
                        'slug' => $request["slug"],
                        'tag' => $request["tag"],
                    ]);

                return $artikels;
        }
    }