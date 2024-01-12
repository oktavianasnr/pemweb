<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    public function showForm()
    {
        return view('tampilanDataMember');
    }

    public function submitData(Request $request)
    {
        $member = Member::create([
            'name' => $request->input('name'),
            'alamat' => $request->input('alamat'),
            'kontak' => $request->input('kontak'),
            'email' => $request->input('email'),
        ]);

        return view('dashboard', compact('member'));
    }

    public function index()
    {
        $members = Member::all();
        return view('index', compact('members'));
    }

    public function edit($id)
    {
        $member = Member::find($id);
        return view('edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        $member->update([
            'name' => $request->input('name'),
            'alamat' => $request->input('alamat'),
            'kontak' => $request->input('kontak'),
            'email' => $request->input('email'),
        ]);

        return redirect()->route('index')->with('success', 'Data updated successfully');
    }

    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect()->route('index')->with('success', 'Data deleted successfully');
    }
}
