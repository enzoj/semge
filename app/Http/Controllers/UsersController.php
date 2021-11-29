<?php

namespace App\Http\Controllers;

use App\User;
use App\Address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('address')->paginate(10);
        return view('pages.users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->phone_number = $request->phone;
        $user->profile_id = $request->profile;
        $user->password = Hash::make($request->password);
        $user->birth_date = $request->birth_date;

        DB::beginTransaction();
        try {
            if ($user->save() == true) {
                $address = new Address();
                $address->user_id = $user->id;
                $address->street = $request->street;
                $address->complement = $request->complement;
                $address->number = $request->number;
                $address->city = $request->city;
                $address->state = $request->state;
                $address->country = $request->country;
                $address->cep = $request->cep;

                $address->save();
                DB::commit();
            } else {
                DB::rollBack();
                return redirect('/users')->with('error', 'Erro ao cadastrar usuário');
            }
        } catch (\Throwable $th) {
            throw $th;
        }



        return redirect('/users')->with('success', 'Usuário criado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with('address')->where('users.id', $id)->first();
        // $userAdress = Address::where('user_id', $id);
        return view('pages.user', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        // dd($user);
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->cpf = $request->cpf;
        $user->phone_number = $request->phone;
        $user->profile_id = $request->profile;
        // dd($request);
        $user->password = Hash::make($request->password);
        $user->birth_date = $request->birth_date;

        DB::beginTransaction();
        try {
            if ($user->save() == true) {

                $address = Address::where('user_id', $user->id)->first();
                // dd($address);
                if ($address->exists() == false){
                    $address = new Address();
                }
                $address->user_id = $user->id;
                $address->street = $request->street;
                $address->complement = $request->complement;
                $address->number = $request->number;
                $address->city = $request->city;
                $address->state = $request->state;
                $address->country = $request->country;
                $address->cep = $request->cep;

                $address->save();
                DB::commit();
            } else {
                DB::rollBack();
                return redirect('/users')->with('error', 'Erro ao cadastrar usuário');
            }
        } catch (\Throwable $th) {
            throw $th;
        }



        return redirect('/users')->with('success', 'Usuário criado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
