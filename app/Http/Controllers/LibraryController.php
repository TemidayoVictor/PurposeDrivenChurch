<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Library;

use Illuminate\Support\Facades\File;

class LibraryController extends Controller
{
    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index() {
        return view('admin.library-add', [
            'selected' => 'library',
        ]);
    }

    public function addLibrary(Request $request) {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,webp|required',
        ]);

        $newImageName = time(). '.' . $request->image->extension();
        $request->image->move(public_path('libraryImages'), $newImageName);

        Library::create([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'image' => $newImageName,
        ]);

        return redirect()->back()->with('status', 'Book Added Successfully');

    }

    public function allBooks() {
        $books = Library::orderBy('id', 'desc')->paginate(20);
        $count = $books->count();
        return view('admin.library-all', [
            'selected' => 'library',
            'books' => $books,
            'count' => $count,
        ]);
    }

    public function editBook($id) {
        $book = Library::find($id);
        return view('admin.library-edit', [
            'selected' => 'library',
            'book' => $book,
        ]);
    }

    public function editBookPost(Request $request, $id) {
        $this->validate($request, [
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'initialImage',
            'image' => 'image|mimes:jpg,png,jpeg,webp',
        ]);

        if(empty($request->image)) {
            $newImageName = $request->initialImage;
        }

        else {
            File::delete(public_path('libraryImages/'.$request->initialImage));
            $newImageName = time(). '.' . $request->image->extension();
            $request->image->move(public_path('libraryImages'), $newImageName);
        }

        Library::where('id', $id)->
        update([
            'title' => $request->title,
            'author' => $request->author,
            'description' => $request->description,
            'image' => $newImageName,
        ]);

        return redirect()->back()->with('status', 'Book Updated Successfully');
    }

    public function deleteBook($id) {
        $book = Library::find($id);
        if($book) {
            $image = $book->image;
            $book->delete();
            File::delete(public_path('libraryImages/'.$image));
            return redirect()->back()->with('status', 'Book Deleted Successfully');
        }

        else {
            return redirect()->back();
        }
    }
}
