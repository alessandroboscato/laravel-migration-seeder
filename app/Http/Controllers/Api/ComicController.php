<?php
// command line: php artisan make:controller Api/ComicController !!
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Comic;

class ComicController extends Controller
{
    public function getAll() {
      $comics = Comic::All();
      // rispondi con un json della collection/array che gli passo
      return response()->json($comics);
    }

    public function getById($id) {
      $comic = Comic::find($id);
      return response()->json($comic);
    }
}
