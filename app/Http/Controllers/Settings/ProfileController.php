<?php

namespace App\Http\Controllers\Settings;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Auth;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(): View
    {
        $user = auth()->user();

        return view('settings.profile.index', compact('user'));
    }

    public function update(Request $request): RedirectResponse
    {
        /** @var User $user */
        $user = Auth::user();
        $this->validate($request, [
            'name' => [
                'required',
                'min:2',
                'max:255',
                Rule::unique('users')->ignore($user),
            ],
        ]);
        $user->name = $request->get('name');
        $user->github_link = $request->get('githubLink');

        if ($user->save()) {
            flash()->success(__('account.name_updated'));
        } else {
            flash()->error(__('layout.flash.error'));
        }

        return redirect()->route('settings.profile.index', $user);
    }
}
