\\\\\\
<?php

namespace App\Controllers;

use App\Libraries\OpenLibraryService;
use App\Models\BookHistoryModel;

class BookDetailsController extends BaseController
{
    public function detail($bookId)
    {
        $openLibrary = new OpenLibraryService();
        $book = $openLibrary->getBookDetails($bookId);

        if (!$book) {
            return view('errors/html/error_404');
        }

        $userId = session()->get('user_id');
        $historyModel = new BookHistoryModel();
        $historyModel->saveHistory($userId, $bookId);

        return view('bookdetailspage/BooksDetailPage', ['book' => $book]);
    }
}
