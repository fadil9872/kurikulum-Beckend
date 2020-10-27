<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        if (!$films) {
            return $this->sendResponse('error', 'Not Found', NULL , 400);
        }
        return $this->sendResponse('success', 'Berhasil ', $films , 200);
    } 
    public function store(Request $request, Film $films)
    {
        $validator = Validator::make($request->all(), [
            'title'         =>  'required|string',
            'describtion'   =>  'required|string',
            'author'        =>  'required|string',
            'publisher'     =>  'required|string',
            'year'          =>  'required|integer'
        ]);
        if ($validator->fails()){
            return response($validator->errors());
        }
        $films->title       =   $request->title;
        $films->describtion =   $request->describtion;
        $films->author      =   $request->author;
        $films->publisher   =   $request->publisher;
        $films->year        =   $request->year;

        try {
            $films->save();
            $films = Film::all();
            return $this->sendResponse('success', 'Berhasil Ditambah', $films, 200);
        }catch (\Throwable $th) {
            return $this->sendResponse('error', 'Not Found', NULL, 500);
        }

    }
    public function show($id)
    {
        $film = Film::all();
        if (!$film) {
            return $this->sendResponse('error', 'Not Found', NULL, 400);
        }
        return $this->sendResponse('success', 'Berhasil', $film, 200);
    }
    public function destroy($id)
    {
        $film = Film::find($id);

        if ($film) {
            $film->delete();
            return $this->sendResponse('success', 'Berhasil Dihapus', NULL, 200);
        }
        return $this->sendResponse('error', 'Not Found', NULL, 500);
    }
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'title'         =>  'required|string',
            'describtion'   =>  'required|string',
            'author'        =>  'required|string',
            'publisher'     =>  'required|string',
            'year'          =>  'required|integer'
        ]);
        if ($validator->fails()){
            return response($validator->errors());
        }

        $film = Film::find($id);

        if (!$film) {
            return $this->sendResponse('error', 'Not Found', NULL, 400);
        }

        $film->title       =   $request->title;
        $film->describtion =   $request->describtion;
        $film->author      =   $request->author;
        $film->publisher   =   $request->publisher;
        $film->year        =   $request->year;

        try {
            $film->save();
            $film = Film::all();

            return $this->sendResponse('success', 'Behasil Dihabpus', $film, 200);
        } catch (\Throwable $th) {
            return $this->sendResponse('error', 'Gagal Diupdate', $film, 500);
        }
    }
}
