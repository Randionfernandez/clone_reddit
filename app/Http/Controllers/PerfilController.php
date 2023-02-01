<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function index()
    {
        return Profile::all();
    }


}
