<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //new
    public function store(Request $request)
    {
        if ($request->user()->isAdmin()) {
            // Logic for creating a product (only accessible to admin)
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function update(Request $request, $id)
    {
        if ($request->user()->isAdmin()) {
            // Logic for updating a product (only accessible to admin)
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

    public function destroy(Request $request, $id)
    {
        if ($request->user()->isAdmin()) {
            // Logic for deleting a product (only accessible to admin)
        } else {
            abort(403, 'Unauthorized action.');
        }
    }

}
