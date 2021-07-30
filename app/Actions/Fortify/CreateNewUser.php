<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'First_Name' => ['required', 'string', 'max:15'],
            'Last_Name' => ['required', 'string', 'max:15'],
            'Username' => ['required', 'string', 'max:15'],
            'Email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'Mobile_Number' => ['required', 'string', 'max:11','min:11'],
            'Gender' => ['required', 'string'],
            'Date' => ['required'],
            'Image' => ['required'],

            'password' => $this->passwordRules(),
        ])->validate();

        $pic =rand(0,999999999999999).'.'.$input['Image']->extension();
        $input['Image']->move(public_path('/profile_pic'), $pic);

        return User::create([
            'name' => $input['First_Name'].' '.$input['Last_Name'],
            'username' => $input['Username'],
            'email' => $input['Email'],
            'phone' => $input['Mobile_Number'],
            'gender' => $input['Gender'],
            'DateOfBirth' => $input['Date'],
            'img' => $pic,
            'password' => Hash::make($input['password']),
            'fname' => $input['First_Name'],
            'lname' => $input['Last_Name'],

        ]);
    }
}
