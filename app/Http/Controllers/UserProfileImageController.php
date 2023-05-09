<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserProfileImage;

class UserProfileImageController extends Controller
{
    public function index()
    {
        // Get the authenticated user's ID
        $userId = Auth::id();

        // Query the database to retrieve the user's profile image
        $userProfileImage = UserProfileImage::where('user_id', $userId)->first();

        return view('user_profile_images.index', ['userProfileImage' => $userProfileImage]);
    }
}
