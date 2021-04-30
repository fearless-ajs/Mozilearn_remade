<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class UserLogin extends Component
{
    public $email;
    public $password;

    protected $listeners = ['refresh' => 'render'];

    //This validates user inputs on real time basis
    public function updated($field)
    {
        try {
            $this->validateOnly($field, [
                'email'    => 'required|max:255|email',
                'password' => 'required|max:255',
            ]);
        } catch (ValidationException $e) {

            //Report Error through toastr.
        }
    }

    //For Authenticating User
    public function authenticateUser()
    {
        $this->validate([
            'email'    => 'required|max:255|email',
            'password' => 'required|max:255',
        ]);

        //Mozisha user validation endpoint
        $response = Http::post('http://127.0.0.1:5000/validate_user', [
            'email'    => $this->email,
            'password' => $this->password,
        ]);

        if ($response->successful())
        {
            $mozisha_user = $response['data'];
            /*
             * Check if the user already exists otherwise,
            */
            $mozilearn_user = User::where('email', $mozisha_user['email'])->first();
            if($mozilearn_user){
                $this->updateUserInformation($mozilearn_user);
            }else{
                $this->createNewUser($mozisha_user);
            }
            return;
        }

        $this->emit('alert', ['type' => 'error', 'message' => 'User not found, please register an account with mozisha.']);
        return;

    }

    public function updateUserInformation($mozisha_user){
        //Update user information and log user in
      User::where('email', $mozisha_user['email'])->update([
            'name'               => $mozisha_user['name'],
            'email'              => $mozisha_user['email'],
            'google_id'          => $mozisha_user['google_id'],
            'facebook_id'        => $mozisha_user['facebook_id'],
            'mozisha_id'         => $mozisha_user['id'],
            'profile_photo_path' => $mozisha_user['profile_photo_path'],
        ]);

        $user = User::where('email', $mozisha_user['email'])->first();
        //Log user user in
        Auth::login($user);
        $this->emit('alert', ['type' => 'success', 'message' => 'Logged in successfully']);
        return back();
    }

    //Register New users coming from mozisha to mozilearn
    private function createNewUser($mozisha_user)
    {
        $new_user = User::create([
            'name'               => $mozisha_user['name'],
            'email'              => $mozisha_user['email'],
            'google_id'          => $mozisha_user['google_id'],
            'facebook_id'        => $mozisha_user['facebook_id'],
            'mozisha_id'         => $mozisha_user['id'],
            'email_verified_at'  => now(),
            'profile_photo_path' => $mozisha_user['profile_photo_path'],
        ]);
        //Log user user in
        Auth::login($new_user);
        $this->emit('alert', ['type' => 'success', 'message' => 'Logged in successfully']);
    }

    public function render()
    {
        return view('livewire.general-livewire.user-login');
    }
}
