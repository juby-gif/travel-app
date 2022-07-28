<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookFormRequest;

class BookController extends Controller
{
    private static function getData(){
        return [
            ['id' => 1, 'name' => 'Sample name', 'brand' => 'Brand Name'],
            ['id' => 2, 'name' => 'Sample name 1', 'brand' => 'Brand Name 1'],
            ['id' => 3, 'name' => 'Sample name 2', 'brand' => 'Brand Name 2']
        ];
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('book.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BookFormRequest $request)
    {

        $data = $request -> validated();

        $book = new Book();

        $book -> name = $data['name'];
        $book -> email = $data['email'];
        $book -> phone = $data['phone'];
        $book -> address = $data['address'];
        $book -> location = $data['location'];
        $book -> guests = $data['guests'];
        $book -> arrivals = $data['arrivals'];
        $book -> leaving = $data['leaving'];

        $book -> save();
        echo $book;

        return redirect() -> route('book.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($book)
    {
        // $books = self::getData();
        // $index = array_search($book, array_column($books, 'id'));

        // if($index === false) {
        //     abort(404);
        // }

        // return view('book.show', [
        //     'book' => $books[$index]
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
