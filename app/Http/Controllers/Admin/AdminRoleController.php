<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class AdminRoleController extends Controller
{
    public $quyens;

    public function __construct(Role $role)
    {
        $this->quyens = $role;
    }

    public function index() {
        return view('backend.nguoi-dung-va-quyen.quyen.index', [
            'quyens' => $this->quyens->latest()->paginate(5),
        ]);
    }
}
