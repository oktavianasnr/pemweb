<?php

// app/Http/Controllers/Api/MemberApiController.php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;

class MemberApiController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return response()->json($members);
    }

    public function show($id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json(['message' => 'Member not found'], 404);
        }

        return response()->json($member);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'email' => 'required|email',
        ]);

        $member = Member::create($request->all());

        return response()->json($member, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'kontak' => 'required',
            'email' => 'required|email',
        ]);

        $member = Member::find($id);

        if (!$member) {
            return response()->json(['message' => 'Member not found'], 404);
        }

        $member->update($request->all());

        return response()->json($member, 200);
    }

    public function destroy($id)
    {
        $member = Member::find($id);

        if (!$member) {
            return response()->json(['message' => 'Member not found'], 404);
        }

        $member->delete();

        return response()->json(['message' => 'Member deleted successfully'], 200);
    }
}

