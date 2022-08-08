<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Requests\BookFormRequest;
use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class BookController extends Controller
{
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

        // Sending out email
        Mail::to($book->email)->send(new DemoMail($book));

        return back() -> with('status','Your booking request has been submitted! Please check your inbox for a confirmation email.');
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
