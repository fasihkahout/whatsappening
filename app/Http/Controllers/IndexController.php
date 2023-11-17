<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\SupportChat;
use Illuminate\Http\Request;
use Session;
use DB;

class IndexController extends Controller
{
    public function index()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();
            return view('home');
        } else {
            return view('/');
        }

    }

    public function pageclients()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();
            $activeUsers = User::where('status', 'Active')->where('block_status', 'Un-Block')->get();
            return view('page-clients', ['form' => $activeUsers]);
        } else {
            return view('/');
        }
    }

    public function updateblockstatus(Request $request, $id)
{
    $blockStatus = $request->input('block_status');

    // Assuming you have a 'users' table with a 'block_status' column
    $form = User::where('id', $id)->update(['block_status' => $blockStatus]);

   return redirect()->back()->with('success', 'Block status has been updated');
}

    public function inactiveusers()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();
            $inactiveUsers =  User::where('status', 'Active')->where('block_status', 'Block')->get();
            return view('inactiveusers', ['form' => $inactiveUsers]);
            return view('page-clients');
        } else {
            return view('/');
        }
    }

    public function userchat()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();

            return view('app-chat');
        } else {
            return view('/');
        }
    }

    public function supportchat()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();

            return view('app-chat');
        } else {
            return view('/');
        }
    }

    public function appsetting()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();

            return view('app-setting');
        } else {
            return view('/');
        }
    }

    public function generalsetting()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();

            return view('app-setting');
        } else {
            return view('/');
        }
    }

    public function pageprofile()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();

            return view('page-profile');
        } else {
            return view('/');
        }
    }

    public function app2setting()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();
            return view('app-setting');
        } else {
            return view('/');
        }
    }

    public function reportabuse()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();
            return view('report-abuse');
        } else {
            return view('/');
        }
    }

    public function userhelp()
    {
        if (Session()->get('admin_id') != '') {
            $data = Admin::all();
            return view('user-help');
        } else {
            return view('/');
        }
    }

    public function customuserhelp(Request $request)
    {
        $help = new SupportChat();
        $help->message = $request['message'];
        $help->save();
        return view('userhelp');
    }
}
