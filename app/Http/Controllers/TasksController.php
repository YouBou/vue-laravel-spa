<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class TasksController
 * @package App\Http\Controllers
 */
class TasksController extends Controller
{
    public function index()
    {
        return Task::all();
    }
}
