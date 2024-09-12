<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthWebController extends Controller
{
    public function login(Request $request)
    {
        // Validar los datos del formulario de inicio de sesión
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Obtener el valor del campo "remember"
        $remember = $request->has('remember');

        // Intentar iniciar sesión
        if (Auth::attempt($credentials, $remember)) {
            // Obtener la URL anterior a la que el usuario accedió
            $previousUrl = $request->session()->previousUrl();

            // Redirigir al usuario a la página anterior
            return redirect($previousUrl);
        }

        // Si falla el inicio de sesión, redirigir al formulario de login con un error
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas no son válidas.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        // Validar los datos del formulario de registro
        $validatedData = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email_register' => ['required', 'string', 'email', 'max:255', 'unique:users,email','unique:people,email'],
                //'email_register' => ['unique:people,email'],
                'password' => ['required', 'string', 'min:8'],
                'password2' => ['required', 'same:password'],
                'app' => ['required', 'string', 'max:255'],
                'apm' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'dni' => ['required', 'string', 'max:255', 'unique:people,number'],
            ],
            [
                'required' => 'El campo :attribute es obligatorio.',
                'string' => 'El campo :attribute debe ser una cadena de texto.',
                'max' => 'El campo :attribute no debe tener más de :max caracteres.',
                'email' => 'El campo :attribute debe ser una dirección de correo electrónico válida.',
                'unique' => 'El valor del campo :attribute ya está en uso.',
                'confirmed' => 'La confirmación de :attribute no coincide.',
                'min' => 'El campo :attribute debe tener al menos :min caracteres.',
                'same' => 'El campo :attribute debe coincidir con :other.',
                'numeric' => 'El campo :attribute debe ser un número.'
            ]
        );

        $person = Person::create([
            'document_type_id' => 1,
            'short_name' => $request->input('name'),
            'full_name' => $request->input('name') . ' ' . $request->input('app') . ' ' . $request->input('apm'),
            'number' => $request->input('dni'),
            'telephone' => $request->input('phone'),
            'email' => $request->input('email_register'),
            'names' => $request->input('name'),
            'father_lastname' => $request->input('app'),
            'mother_lastname' => $request->input('apm'),
            'gender' => 'M',
            'status' => true,
            'is_provider' => false,
            'is_client' => true
        ]);

        // Crear el nuevo usuario
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email_register'],
            'password' =>  Hash::make($request->get('password')),
            'person' => $person->id
        ]);

        // Iniciar sesión con el nuevo usuario
        Auth::login($user);

        // Obtener la URL anterior a la que el usuario accedió
        $previousUrl = $request->session()->previousUrl();
        //return to_route('users.index');
        // Redirigir al usuario a la página anterior
        return redirect($previousUrl);
    }
}
